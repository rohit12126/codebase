(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-3b09de03"],{"1aff":function(t,e,n){},6020:function(t,e,n){"use strict";n("e9da")},"798b":function(t,e,n){"use strict";var o=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"next-action-container"},[t.showButton?n("div",{staticClass:"next-action-shadow"},[n("div",{staticClass:"next-action",on:{click:t.onClick}},[n("SvgIcon",{attrs:{icon:t.icons.SvgArrowRight}}),n("span",[t._v(t._s(t.text))])],1)]):t._e()])},s=[],i=n("2b0e"),r=n("bee6"),c=n("a378"),a=i["a"].extend({components:{SvgIcon:r["a"]},props:{onClick:Function,showButton:Boolean,text:String},computed:{icons(){return{SvgArrowRight:c["a"]}}}}),u=a,h=(n("a348"),n("2877")),l=Object(h["a"])(u,o,s,!1,null,"4b8363b0",null);e["a"]=l.exports},a348:function(t,e,n){"use strict";n("1aff")},a378:function(t,e,n){"use strict";e["a"]={id:"arrow-right-usage",viewBox:"0 0 17 12",url:n.p+"svgs/icons.993d4e35.svg#arrow-right",toString:function(){return this.url}}},e3b9:function(t,e,n){"use strict";n.r(e);var o=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("NextAction",{attrs:{onClick:t.setNextGroup,showButton:t.showButton,text:t.t.t("continue-to")+" "+(t.nextGroup?t.nextGroup.label:"")}})},s=[],i=n("2b0e"),r=n("3c8b"),c=n("bee6"),a=n("798b"),u=n("a378"),h=i["a"].extend({components:{SvgIcon:c["a"],NextAction:a["a"]},computed:{icons(){return{SvgArrowRight:u["a"]}},nextGroup(){const t=this.$store.state.coreData.groups,e=this.$store.state.uiState.selectedGroup;if(this.$store.state.uiState.showVariants&&t.length>0)return t[0];const n=t.indexOf(e)+1;return n<=0||n>=t.length?null:t[n]},showButton(){return!!this.nextGroup}},methods:{setNextGroup(){if(this.nextGroup){const t=this.nextGroup.key;this.$sdkConnector.configuratorApi.then(e=>e.setActiveGroupInView(t))}this.$store.dispatch(r["b"].SELECT_GROUP,this.nextGroup),this.$store.commit(r["d"].SET_SHOW_VARIANTS,!1)}}}),l=h,p=(n("6020"),n("2877")),d=Object(p["a"])(l,o,s,!1,null,"4ae1d428",null);e["default"]=d.exports},e9da:function(t,e,n){}}]);
//# sourceMappingURL=chunk-3b09de03-legacy.5108a8b8.js.map