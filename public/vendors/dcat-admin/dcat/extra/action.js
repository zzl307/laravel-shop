!function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=6)}({6:function(e,t,n){e.exports=n(7)},7:function(module,exports){function _typeof(e){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function _defineProperties(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}function _createClass(e,t,n){return t&&_defineProperties(e.prototype,t),n&&_defineProperties(e,n),e}!function(Dcat){var Action=function(){function Action(e){_classCallCheck(this,Action),this.options=$.extend({selector:null,event:"click",method:"POST",key:null,url:null,data:{},confirm:null,calledClass:null,before:function(e,t){},html:function(e,t,n){e.html(t)},success:function(e,t){},error:function(e,t){}},e),this._bind()}return _createClass(Action,[{key:"_bind",value:function(){var e=this,t=e.options;$(t.selector).off(t.event).on(t.event,(function(n){var o=$(this).data(),r=$(this);if(!(r.attr("loading")>0)&&!1!==t.before(o,r,e)){var a=t.confirm;a?Dcat.confirm(a[0],a[1],i):i()}function i(){r.attr("loading",1),Object.assign(o,t.data),e._buildActionPromise(r,o).then(e._resolver()).catch(e._reject())}}))}},{key:"_resolver",value:function _resolver(){var _this=this,options=_this.options;return function(result){var response=result[0],target=result[1];if(!1!==options.success(target,response)){if("object"!==_typeof(response))return Dcat.error({type:"error",title:"Oops!"});var then=function then(_then){switch(_then.action){case"refresh":Dcat.reload();break;case"download":window.open(_then.value,"_blank");break;case"redirect":Dcat.reload(_then.value);break;case"location":window.location=_then.value;break;case"script":!function(){eval(_then.value)}()}};"string"==typeof response.html&&response.html&&options.html(target,response.html,response),"string"==typeof response.data.message&&response.data.type&&Dcat[response.data.type](response.data.message),response.data.then&&then(response.data.then)}}}},{key:"_reject",value:function(){var e=this.options;return function(t){var n=t[0],o=t[1];!1!==e.success(o,n)&&(n&&"object"===_typeof(n.responseJSON)&&Dcat.error(n.responseJSON.message),console.error(n))}}},{key:"_buildActionPromise",value:function(e,t){var n=this.options;return new Promise((function(o,r){Object.assign(t,{_token:Dcat.token,_action:n.calledClass,_key:n.key}),Dcat.NP.start(),$.ajax({method:n.method,url:n.url,data:t,success:function(t){e.attr("loading",0),Dcat.NP.done(),o([t,e])},error:function(t){e.attr("loading",0),Dcat.NP.done(),r([t,e])}})}))}}]),Action}();Dcat.Action=function(e){return new Action(e)}}(Dcat)}});
//# sourceMappingURL=action.js.map