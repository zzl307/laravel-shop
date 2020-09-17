<?php

return [
    'alipay' => [
        'app_id'         => '2021000116692648',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAlDHpXrY66LWp9F9qbO+PpB01dm/cdAECLZ4Ghzj6cNWhzu+EryhVEhmc4C1y8Bo4Z6AItU/N/kx4FVd7olhtxWSOcrb21vBfk1HgDhWnm+wkPwke5Q68zkbnMXHmQBBdtiAQ64tQOd2/c89+oy/XbChDm1ZQ4r4m8qdDAV8uGJUQIDEbWicZylOs1Gzxu7lMeoZtxMAtJrkU1zyY0b8yt8uJI/WPl++YN4syvdoV2SV/48oastkvskowAkeH853BMMx5D/Wu0tR0cGzMRcbN9WY3/Fd3r760DyuHq2cnIm54x5xcCSchhkrq0gYqXVuiDf+S/QxDS9n0wWVmWceGOwIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEAsn0uLjgIa0kfcL4cc+wEXlxT5oKKrV2hLiipSu1NyoXVrhbTwUH+5HS7tcUieopca8WWgA4oG24hQ3g0CExaoMTE9rBN3MPv0A2aJ2caSuZUH/nFoSNS3TWYwYbhROiKOq+xwmSVsoLu7rX7BM9wU3rgDfmM4a7YJQI0/SxFh0tnCDWdEY7G5x8e5z80BWwBHabj5VRFnfVDCC2JT+96xPkBpxLTnMXQPcxV272SDTwwouADyI4OWroLTlBXoutlqm+Zij+h3vSaUmBvKAgJUzDNHiNRUCp8+vm+mg3G2S99bdi4nWklMW7lTNYuG91XsfFyOcp/EF2NMIa/lkt6LQIDAQABAoIBAAOpwAXgzoNtJ8EHlcvnPxu0p2Ams7PlJQaufPL1tc//OShufYAM269SmfucBR4gss7fajxMjhQqCXK6B89XydBc2XH6ok5ykvxhGxXN7uM0oOtbE+w/rlat3+mw2/SvFQ8pReuoZs4YE9FAWNt7amG8NtbylSqYjQUNa4r6mp6xK6uMDRWoYYX7bEdSokUgOe2z4m/2E+Zl2c/Vw2GVGdgAnhA1/8qxDvbLBpcdnejMCnyKYnvrdzdm/lxw5BoqRuq16EY8EuPqd4GHuuyr9kqOEdqwr/M+y0WF9faxGYWANeUdYlnxS4myBVMlmWiflc5Jvv8l3W815LsTH0E1+KECgYEA5TA/8oGwHMHObKFMH9xQzaUu3++ZOmREaMLPl3oXZJXaMmT/1n3516pliaFTmpqCCls+lLfTP/Eh55GyTPiZ3Cc6noXuJSmTrA2nh1GbebdPNd2oZJKstU35n3dIgOQ0x6iAR5NfB5j+5tY5NnxNJRCgUDk9MVlAcFqsJ2O8D6UCgYEAx16USPnMKu7jxn9Bw7Hcws5YZK3gYDbiG/8GKMa3RJskgdMY43vmHMSCg35S7mx0n5pCpH3NDXA3TeiJYdPt+gCrwI6gElA+NaT8lAOOESDbO12wSXIq4tVOoxqS+/4qmVlfZS0g3UOh25mmMBw7zEEXybUD9iWivRpm/60XuekCgYEA4ZqdWBpRQf2FNWmRhctZvxTbD5TLQK9yp60cq/+DB4B7SSAitwFK7wDM8q3bnlR5rbgj4kERsd+rgEfrO9l7mzsCeQldYzeKJdNLFek/IpFPZ7bKDDZVzCL1lgPVWwtI6UD1BYAMC26PfKtjpj61scasCExP8EPrKq4WyK9kcAECgYEAu7P6HDLC3HEJlirduedNF0O6yR9DLpK9kuop3F4q0bbXSjt7JUHTRqZk0nQulDccHd/YepHOaqaKCxmxrp8fYM8c5S/i2RsfVtY8zwYBzXKHtX7hqGSKqAF4BevREtsbNEGGpPU2CdvRGbWxV35ddlKamNeKIUcRzsR60KEgw3ECgYEAnX0oHyPyyvH97nwpXMrAjuBShLEflap4JWLx4WT/IaDtTHbZlS+CgCWIdv2LgfRXm8TprZXC4kPO5OWcrUCbuQwvwNmWwUYWkafeWRO71peeGIN+DoXsVaOa1emnVJkARN82W1Wr0ElmZCXqNS0dsZ2TCyTbiCkBTXGZ0t5xaPA=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
?>
