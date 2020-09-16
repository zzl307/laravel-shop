<?php
namespace App\Services;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use App\Jobs\CloseOrder;
use App\Models\ProductSku;
use App\Models\UserAddress;
use Illuminate\Support\Facades\DB;
use App\Exceptions\InvalidRequestException;

class OrderService
{
    public function store(User $user, UserAddress $address, $remark, $items)
    {
        $order = DB::transaction(function () use ($user, $address, $remark, $items) {
            $address->update(['last_used_at' => Carbon::now()]);
            $order = new Order([
                'address' => [
                    'address'       => $address->full_address,
                    'zip'           => $address->zip,
                    'contact_name'  => $address->contact_name,
                    'contact_phone' => $address->contact_phone,
                ],
                'remark' => $remark,
                'total_amount' => 0,
            ]);
            $order->user()->associate($user);
            $order->save();

            $totalAmount = 0;
            foreach ($items as $data) {
                $sku = ProductSku::find($data['sku_id']);
                $item = $order->items()->make([
                    'amount' => $data['amount'],
                    'price' => $sku->price,
                ]);
                $item->product()->associate($sku->product->id);
                $item->productSku()->associate($sku);
                $item->save();
                $totalAmount += $sku->price * $data['amount'];
                if ($sku->decreaseStock($data['amount']) <= 0) {
                    throw new InvalidRequestException('该商品库存不足');
                }
            }
            $order->update(['total_amount' => $totalAmount]);

            $skuIds = collect($items)->pluck('sku_id')->all();
            app(CartService::class)->remove($skuIds);

            return $order;
        });

        dispatch(new CloseOrder($order, config('app.order_tll')));

        return $order;
    }
}

?>
