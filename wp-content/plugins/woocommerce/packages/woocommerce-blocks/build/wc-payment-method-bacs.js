!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=7)}([function(e,t){e.exports=window.wp.element},function(e,t){e.exports=window.wp.htmlEntities},function(e,t){e.exports=window.wp.i18n},function(e,t){e.exports=window.wc.wcSettings},function(e,t){e.exports=window.wc.wcBlocksRegistry},,,function(e,t,n){"use strict";n.r(t);var r,o=n(0),c=n(4),i=n(2),u=n(3),l=n(1);const a=Object(u.getPaymentMethodData)("bacs",{}),s=Object(i.__)("Direct bank transfer","woocommerce"),d=Object(l.decodeEntities)((null==a?void 0:a.title)||"")||s,f=()=>Object(l.decodeEntities)(a.description||""),p={name:"bacs",label:Object(o.createElement)((e=>{const{PaymentMethodLabel:t}=e.components;return Object(o.createElement)(t,{text:d})}),null),content:Object(o.createElement)(f,null),edit:Object(o.createElement)(f,null),canMakePayment:()=>!0,ariaLabel:d,supports:{features:null!==(r=null==a?void 0:a.supports)&&void 0!==r?r:[]}};Object(c.registerPaymentMethod)(p)}]);