(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-0c957810"],{"3f3f":function(e,s,t){"use strict";s["a"]={id:"close-usage",viewBox:"0 0 32 32",url:t.p+"svgs/icons.993d4e35.svg#close",toString:function(){return this.url}}},"3f89":function(e,s,t){"use strict";t.r(s);var i=function(){var e=this,s=e.$createElement,t=e._self._c||s;return t("PopUp",{attrs:{onClose:e.onClose,isLightTheme:!0,size:"medium",alignTo:"scene",isDesktop:e.$store.state.uiState.isDesktop}},[t("template",{slot:"content"},[t("div",{staticClass:"element-disabled"},[t("h2",[e._v(e._s(e.t.t("element-disabled.heading")))]),t("p",[e._v(e._s(e.t.t("element-disabled.desc"))+".")]),t("p",[t("span",{staticClass:"ok",on:{click:e.onClose}},[e._v(e._s(e.t.t("element-disabled.ok")))])])])])],2)},n=[],o=t("2b0e"),c=t("4e4c"),l=o["a"].extend({components:{PopUp:c["a"]},props:{onClose:Function}}),a=l,r=(t("62d05"),t("2877")),u=Object(r["a"])(a,i,n,!1,null,"6247c79c",null);s["default"]=u.exports},"4e4c":function(e,s,t){"use strict";var i=function(){var e=this,s=e.$createElement,t=e._self._c||s;return t("div",{staticClass:"h100",class:{light:e.isLightTheme,big:e.isBig,medium:e.isMedium,small:e.isSmall,"align-to-scene":e.isAlignToScene}},[t("div",{staticClass:"shadow",on:{click:e.close}}),t("div",{staticClass:"popup"},[t("div",{staticClass:"popup-container",class:{"no-scrollbar":!e.isDesktop}},[e.onClose?t("div",{staticClass:"popup-close",on:{click:e.close}},[t("SvgIcon",{attrs:{icon:e.icons.SvgClose}})],1):e._e(),e._t("content")],2)])])},n=[],o=t("2b0e"),c=t("3f3f"),l=t("bee6"),a=o["a"].extend({components:{SvgIcon:l["a"]},props:{onClose:Function,isDesktop:{type:Boolean,default:!1},isLightTheme:{type:Boolean,default:!1},size:{type:String,validator(e){const s=["big","medium","small"];return-1!==s.indexOf(e)}},alignTo:{type:String,validator(e){const s=["scene"];return-1!==s.indexOf(e)}}},computed:{icons(){return{SvgClose:c["a"]}},isBig(){return!this.size||"big"===this.size},isMedium(){return"medium"===this.size},isSmall(){return"small"===this.size},isAlignToScene(){return"scene"===this.alignTo}},methods:{close(){this.onClose()}}}),r=a,u=(t("dcff"),t("2877")),d=Object(u["a"])(r,i,n,!1,null,"1fa3d5c3",null);s["a"]=d.exports},"62d05":function(e,s,t){"use strict";t("cdbc")},bee6:function(e,s,t){"use strict";var i=function(){var e=this,s=e.$createElement,t=e._self._c||s;return t("svg",[t("use",{attrs:{"xlink:href":e.icon.url}})])},n=[],o=t("2b0e"),c=o["a"].extend({props:{icon:Object}}),l=c,a=t("2877"),r=Object(a["a"])(l,i,n,!1,null,"651ddf6c",null);s["a"]=r.exports},cdbc:function(e,s,t){},d1bf:function(e,s,t){},dcff:function(e,s,t){"use strict";t("d1bf")}}]);
//# sourceMappingURL=chunk-0c957810-legacy.61da2e5b.js.map