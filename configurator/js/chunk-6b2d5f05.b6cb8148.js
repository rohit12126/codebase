(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-6b2d5f05"],{8402:function(t,n,e){"use strict";e("c032")},c032:function(t,n,e){},c6ed:function(t,n,e){"use strict";e.r(n);var i=function(){var t=this,n=t.$createElement,e=t._self._c||n;return e("SelectionButton",{staticClass:"start-button",attrs:{onClick:t.startConfiguring}},[e("SvgIcon",{staticClass:"start-icon",attrs:{icon:t.currentIcon}})],1)},s=[],c=e("2b0e"),o=e("bee6"),a={id:"edit-usage",viewBox:"0 0 32 32",url:e.p+"svgs/icons.993d4e35.svg#edit",toString:function(){return this.url}},r=e("09dd"),u=e("f7fb"),d=e("b7f9"),l=e("77ef"),g=c["a"].extend({components:{SelectionButton:l["a"],SvgIcon:o["a"]},computed:{icons(){return{SvgEdit:a,SvgMagnifier:r["a"]}},currentIcon(){return"static"===this.$store.state.plannerUiState.selection?this.icons.SvgMagnifier:this.icons.SvgEdit}},methods:{startConfiguring(){this.$embeddingCallbacks.onButtonClicked(d["a"].STARTCONFIGURE),this.$sdkConnector.hasPlanner?this.$sdkConnector.loadSelectedPlanObject():Object(u["a"])(this.$store,this.$embeddingCallbacks)}}}),f=g,b=(e("8402"),e("2877")),h=Object(b["a"])(f,i,s,!1,null,"cda430c6",null);n["default"]=h.exports}}]);
//# sourceMappingURL=chunk-6b2d5f05.b6cb8148.js.map