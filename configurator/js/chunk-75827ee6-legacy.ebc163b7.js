(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-75827ee6"],{2636:function(t,e,s){},"2ef9":function(t,e,s){"use strict";s("4b5c")},"4b5c":function(t,e,s){},6048:function(t,e,s){"use strict";s("d652")},"9e41":function(t,e,s){"use strict";s("2636")},c1fe:function(t,e,s){"use strict";s("fcf1")},d652:function(t,e,s){},dccf:function(t,e,s){"use strict";s.r(e);var n=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("ScrollHint",{staticClass:"parameter-groups-container",class:{hidden:t.isExpanded||t.$store.state.uiState.isFullscreen},scopedSlots:t._u([{key:"left-indicator",fn:function(e){return[e.hint.left?s("ParameterGroupArrowButton",{attrs:{"on-click":e.scrollLeft,direction:"left"}}):t._e()]}},{key:"right-indicator",fn:function(e){return[e.hint.right?s("ParameterGroupArrowButton",{attrs:{"on-click":e.scrollRight,direction:"right"}}):t._e()]}}])},[s("ul",{staticClass:"parameter-groups-preview"},[s("ParameterGroupButton",{attrs:{showText:!0,text:t.t.t("params.variants"),icon:t.icons.SvgVariants,isVisible:t.showVariants,onClick:t.openVariants,adjustIcon:!0,isSelected:t.$store.state.uiState.showVariants}}),s("ParameterGroupButton",{attrs:{showText:t.showBackButtonText,isVisible:t.showBackButton,text:t.t.t("params.cancel-selection"),icon:t.icons.SvgClose,onClick:t.cancelSelection,isSelected:!1}}),t._l(t.groups,(function(e){return s("OptionsParameterValue",{key:e.key,attrs:{selected:t.selectedGroup&&t.selectedGroup.key===e.key&&!t.$store.state.uiState.showVariants,label:e.label,value:e.key,onSelect:t.setGroup}})}))],2)])},o=[],i=s("2b0e"),r=s("7df0"),c=s("3c8b"),a=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"wrap"},[s("div",{ref:"scrollContainer",staticClass:"scroll-container no-scrollbar",on:{"&scroll":function(e){return t.toggleHints(e)}}},[s("div",{staticClass:"indicator left"},[t._t("left-indicator",null,{hint:t.hint,scrollLeft:t.scrollLeft})],2),t._t("default"),s("div",{staticClass:"indicator right"},[t._t("right-indicator",null,{hint:t.hint,scrollRight:t.scrollRight})],2)],2)])},l=[],u=s("af13");function h(t){if("undefined"!==typeof ResizeObserver)return new ResizeObserver(e=>e.map(t))}var d=i["a"].extend({components:{OverflowIndicator:u["a"]},data(){return{hint:{top:!1,right:!1,bottom:!1,left:!1}}},mounted(){const t=h(this.toggleHints);t&&(t.observe(this.$refs.scrollContainer),this.$once("hook:destroyed",()=>t.disconnect()))},updated(){this.toggleHints()},methods:{scrollRight(){const t=this.$refs.scrollContainer;t.scrollBy({left:t.clientWidth,behavior:"smooth"})},scrollLeft(){const t=this.$refs.scrollContainer;t.scrollBy({left:-t.clientWidth,behavior:"smooth"})},toggleHints(){const t=30,e=this.$refs.scrollContainer,s=e.clientWidth<e.scrollWidth,n=e.clientHeight<e.scrollHeight,o=e.offsetWidth+e.scrollLeft,i=e.offsetHeight+e.scrollTop,r=e.scrollTop<=t,c=o+t>=e.scrollWidth,a=i+t>=e.scrollHeight,l=e.scrollLeft<=t;this.hint.top=n&&!r,this.hint.right=s&&!c,this.hint.bottom=n&&!a,this.hint.left=s&&!l}}}),f=d,p=(s("6048"),s("2877")),g=Object(p["a"])(f,a,l,!1,null,"4bd3da10",null),v=g.exports,b=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"arrow-button",class:[t.direction],on:{click:t.onClick}})},m=[],k=i["a"].extend({name:"ArrowButton.vue",props:{onClick:Function,direction:String}}),S=k,w=(s("9e41"),Object(p["a"])(S,b,m,!1,null,"f343218c",null)),C=w.exports,B=function(){var t=this,e=t.$createElement,s=t._self._c||e;return t.isVisible?s("li",{class:{"is-selected":t.isSelected},on:{click:function(e){return t.onClick()}}},[s("div",{staticClass:"parameter-group-back-button"},[s("SvgIcon",{staticClass:"svg-icon",class:{adjusted:t.adjustIcon},attrs:{icon:t.icon}}),t.showText?s("div",{staticClass:"label"},[t._v(" "+t._s(t.text)+" ")]):t._e()],1)]):t._e()},_=[],x=s("bee6"),$=i["a"].extend({components:{SvgIcon:x["a"]},props:{showText:Boolean,text:String,isVisible:Boolean,onClick:Function,icon:Object,adjustIcon:Boolean,isSelected:Boolean}}),V=$,y=(s("2ef9"),Object(p["a"])(V,B,_,!1,null,"26275f56",null)),O=y.exports,E=s("3f3f"),G={id:"variants-usage",viewBox:"0 0 42 42",url:s.p+"svgs/icons.993d4e35.svg#variants",toString:function(){return this.url}},T=i["a"].extend({components:{OptionsParameterValue:r["a"],ScrollHint:v,ParameterGroupArrowButton:C,ParameterGroupButton:O},props:{isExpanded:Boolean,selectedGroup:Object,groups:Array},computed:{icons(){return{SvgClose:E["a"],SvgVariants:G}},showBackButton(){return!!this.$store.state.uiState.currentSelection},showBackButtonText(){return!this.groups.length},showVariants(){return!this.showBackButton&&!!this.$store.state.uiState.currentVariants}},methods:{async setGroup(t){const e=this.groups.find(e=>e.key===t);e&&(this.$store.dispatch(c["b"].SELECT_GROUP,e),this.$sdkConnector.configuratorApi.then(t=>t.setActiveGroupInView(e.key)))},cancelSelection(){this.$sdkConnector.configuratorApi.then(t=>t.cancelSelection())},openVariants(){this.$store.dispatch(c["b"].RESET_COLLECTION_VIEW),this.$store.commit(c["d"].SET_SHOW_VARIANTS,!0)}}}),H=T,j=(s("c1fe"),Object(p["a"])(H,n,o,!1,null,"f2cbb4e8",null));e["default"]=j.exports},fcf1:function(t,e,s){}}]);
//# sourceMappingURL=chunk-75827ee6-legacy.ebc163b7.js.map