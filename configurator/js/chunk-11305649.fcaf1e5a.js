(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-11305649"],{"1d4d":function(s,e,t){"use strict";t("bbb5")},"21a2":function(s,e,t){"use strict";t.r(e);var n=function(){var s=this,e=s.$createElement,t=s._self._c||e;return t("PopUp",{attrs:{onClose:s.onClose,isLightTheme:!0,size:"medium",alignTo:"scene",isDesktop:s.$store.state.uiState.isDesktop}},[t("template",{slot:"content"},[t("div",{staticClass:"no-docking"},[t("h2",[s._v(s._s(s.t.t("no-docking.heading")))]),t("p",[s._v(s._s(s.t.t("no-docking.desc"))+".")]),t("p",[t("span",{staticClass:"ok",on:{click:s.onClose}},[s._v(s._s(s.t.t("no-docking.ok")))])]),t("p",{staticClass:"question"},[s._v(" "+s._s(s.t.t("feedback.question"))+"? "),t("span",{staticClass:"feedback"},[t("span",{staticClass:"yes",on:{click:s.onClose}},[s._v(s._s(s.t.t("feedback.yes")))]),t("span",{staticClass:"no",on:{click:s.onClose}},[s._v(s._s(s.t.t("feedback.no")))])])])])])],2)},i=[],o=t("2b0e"),c=t("4e4c"),a=o["a"].extend({components:{PopUp:c["a"]},props:{onClose:Function}}),l=a,r=(t("1d4d"),t("2877")),u=Object(r["a"])(l,n,i,!1,null,"a3867cf4",null);e["default"]=u.exports},"3f3f":function(s,e,t){"use strict";e["a"]={id:"close-usage",viewBox:"0 0 32 32",url:t.p+"svgs/icons.993d4e35.svg#close",toString:function(){return this.url}}},"4e4c":function(s,e,t){"use strict";var n=function(){var s=this,e=s.$createElement,t=s._self._c||e;return t("div",{staticClass:"h100",class:{light:s.isLightTheme,big:s.isBig,medium:s.isMedium,small:s.isSmall,"align-to-scene":s.isAlignToScene}},[t("div",{staticClass:"shadow",on:{click:s.close}}),t("div",{staticClass:"popup"},[t("div",{staticClass:"popup-container",class:{"no-scrollbar":!s.isDesktop}},[s.onClose?t("div",{staticClass:"popup-close",on:{click:s.close}},[t("SvgIcon",{attrs:{icon:s.icons.SvgClose}})],1):s._e(),s._t("content")],2)])])},i=[],o=t("2b0e"),c=t("3f3f"),a=t("bee6"),l=o["a"].extend({components:{SvgIcon:a["a"]},props:{onClose:Function,isDesktop:{type:Boolean,default:!1},isLightTheme:{type:Boolean,default:!1},size:{type:String,validator(s){const e=["big","medium","small"];return-1!==e.indexOf(s)}},alignTo:{type:String,validator(s){const e=["scene"];return-1!==e.indexOf(s)}}},computed:{icons(){return{SvgClose:c["a"]}},isBig(){return!this.size||"big"===this.size},isMedium(){return"medium"===this.size},isSmall(){return"small"===this.size},isAlignToScene(){return"scene"===this.alignTo}},methods:{close(){this.onClose()}}}),r=l,u=(t("dcff"),t("2877")),d=Object(u["a"])(r,n,i,!1,null,"1fa3d5c3",null);e["a"]=d.exports},bbb5:function(s,e,t){},bee6:function(s,e,t){"use strict";var n=function(){var s=this,e=s.$createElement,t=s._self._c||e;return t("svg",[t("use",{attrs:{"xlink:href":s.icon.url}})])},i=[],o=t("2b0e"),c=o["a"].extend({props:{icon:Object}}),a=c,l=t("2877"),r=Object(l["a"])(a,n,i,!1,null,"651ddf6c",null);e["a"]=r.exports},d1bf:function(s,e,t){},dcff:function(s,e,t){"use strict";t("d1bf")}}]);
//# sourceMappingURL=chunk-11305649.fcaf1e5a.js.map