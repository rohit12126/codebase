(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-common"],{"0198":function(t,n,e){"use strict";e.d(n,"a",(function(){return o}));var r=e("d904");class o{constructor(){this._configuratorInstance=null,this._viewerInstance=null,this._plannerInstance=null,this._currentInstance=null}get hasPlanner(){return!!this._plannerInstance}async getConfigurator(t,n){var e,o;if(this._plannerInstance){const t=await this._plannerInstance.getApi();return await t.switchToConfigurator()}if(this._configuratorInstance){if(null===(e=this._currentInstance)||void 0===e||e.pause(),!t)throw new Error("Can not resume with configurator, please provide a proper HTMLElement");return this._configuratorInstance.resume(t),this._configuratorInstance}return this._configuratorInstance=await r["a"].getConfigurator(n),this._configuratorInstance.boot(),null===(o=this._currentInstance)||void 0===o||o.pause(),this._currentInstance=this._configuratorInstance,this._configuratorInstance}async getGlbViewer(t,n){var e,o;if(this._plannerInstance){const t=await this._plannerInstance.getApi();return await t.switchToViewer()}if(this._viewerInstance){if(null===(e=this._currentInstance)||void 0===e||e.pause(),!t)throw new Error("Can not resume with viewer, please provide a proper HTMLElement");return this._viewerInstance.resume(t),this._viewerInstance}return this._viewerInstance=await r["a"].getGlbViewer(n),null===(o=this._currentInstance)||void 0===o||o.pause(),this._viewerInstance.boot(),this._currentInstance=this._viewerInstance,this._viewerInstance}async getPlanner(t,n){var e,o;if(this._plannerInstance){if(null===(e=this._currentInstance)||void 0===e||e.pause(),!t)throw new Error("Can not resume with viewer, please provide a proper HTMLElement");return this._plannerInstance.resume(t),this._plannerInstance}return n||(n={}),void 0===n.edit&&(n.edit=!0),this._plannerInstance=await r["a"].getPlanner(n),null===(o=this._currentInstance)||void 0===o||o.pause(),this._plannerInstance.boot(),this._currentInstance=this._plannerInstance,this._plannerInstance}async getRapiAccess(){return await r["a"].getRapiAccess()}setGlobalInitData(t){t||(t={}),r["a"].setGlobalInitData(t)}}},"09e1":function(t,n,e){"use strict";let r,o={};const i=(t,n)=>{n=n.replace(/\[(\w+)\]/g,".$1"),n=n.replace(/^\./,"");const e=n.split(".");for(let r=0,o=e.length;r<o;++r){const n=e[r];if(!(n in t))return;t=t[n]}return t},a={install(t,n){n.translationSource&&(r=new Promise(t=>{n.translationSource.getTranslations().then(n=>{o=n,t(o)})})),t.mixin({data(){return{localizations:{t:t=>t}}},computed:{t(){return this.$translations.then(t=>{this.localizations.t=n=>i(t,n)}),this.localizations}}}),t.prototype.$translations=r}};n["a"]=a},"124d":function(t,n,e){"use strict";e.d(n,"b",(function(){return r})),e.d(n,"c",(function(){return o})),e.d(n,"a",(function(){return i})),e.d(n,"e",(function(){return c})),e.d(n,"d",(function(){return u}));const r={SDK:"extended",CALLBACKS:"callbacks",UI:"ui",ANALYTICS:"analytics"},o=".",i=(r.SDK,r.CALLBACKS,{REQUEST_BOOT:"requestBoot",SETUP:"setup",WEBSITE_READY:"websiteReady"}),a=["constructor","callbacks"],s=t=>"_"!==t[0]&&!a.includes(t),c=(t,n,e=!1)=>{if(!t)return[];const i=Object.getOwnPropertyNames(t),a=e?r.CALLBACKS+o:"";return i.filter(s).map(t=>n+o+a+t)},u=async(t,n)=>{if("string"!==typeof t)throw new Error('Configurator ID is not a string type: "'+typeof t+'"');const e=n.customApiUrl?n.customApiUrl:"https://api.roomle.com/v2",r=n.overrideTenant||9,o=e+"/configurators/"+t,i="roomle_portal_v2",a="03-"+window.btoa((new Date).toISOString()+";anonymous;"+i),s=()=>{const t={apiKey:i,currentTenant:r,locale:"en",language:"en",device:1,token:a,platform:"web"};return new Headers(t)},c=new Request(o,{method:"GET",headers:s(),mode:"cors",cache:"default"}),u=await fetch(c),{configurator:l}=await u.json();return l}},"2b0d":function(t,n,e){"use strict";e.d(n,"a",(function(){return o}));var r=e("c135");class o{constructor(t,n){this._locale=t,n&&(this._overrideTranslation=n[this._locale])}async getTranslations(){try{const t=await fetch("./translations/"+this._locale+".json"),n=await t.json();return this._overrideTranslation&&Object(r["f"])(n,this._overrideTranslation),n}catch(t){return console.error("Did not find language "+this._locale+", fallback to english"),this._getFallbackTranslations()}}async _getFallbackTranslations(){try{const t=await fetch("./translations/en.json"),n=await t.json();return this._overrideTranslation&&Object(r["f"])(n,this._overrideTranslation),n}catch(t){return console.error(t),{}}}}},"478b":function(t,n,e){"use strict";e.d(n,"a",(function(){return s}));const r=t=>{"string"===typeof t&&4===t.length&&(t=[...t].map(t=>t+t).join("").replace("##","#"));const n=/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(t);return n?{r:parseInt(n[1],16),g:parseInt(n[2],16),b:parseInt(n[3],16)}:null},o=({r:t,g:n,b:e})=>{const r=[t,n,e].map(t=>(t/=255,t<=.03928?t/12.92:Math.pow((t+.055)/1.055,2.4)));return.2126*r[0]+.7152*r[1]+.0722*r[2]},i=(t,n)=>{const e=o(t),r=o(n),i=Math.max(e,r),a=Math.min(e,r);return(i+.05)/(a+.05)},a=(t,n,e,o)=>{const a=r(t);if(!a)return console.warn("skin["+o+"-color] seems to be not a hex string either provide a value for skin[color-on-"+o+"] or use a hex value, e.g.: #000000"),null;const s='can not calculate contrast for default color with "',c=r(n);if(!c)return console.warn(s+n+'"'),null;const u=r(e);if(!u)return console.warn(s+e+'"'),null;const l=i(a,c),d=i(a,u);return l>d?n:e},s=(t,n,e)=>{var o,i,s,c,u,l,d;if(null===(o=t.skin)||void 0===o?void 0:o["primary-color"]){const n=r(t.skin["primary-color"]);if(n){const{r:e,g:r,b:o}=n;t.skin["primary-color-in-rgb"]=e+","+r+","+o}}if((null===(i=t.skin)||void 0===i?void 0:i["primary-color"])&&!(null===(s=t.skin)||void 0===s?void 0:s["cta-color"])&&(t.skin["cta-color"]=t.skin["primary-color"]),(null===(c=t.skin)||void 0===c?void 0:c["primary-color"])&&!(null===(u=t.skin)||void 0===u?void 0:u["color-on-primary"])){const r=a(t.skin["primary-color"],n,e,"primary");r&&(t.skin["color-on-primary"]=r)}if((null===(l=t.skin)||void 0===l?void 0:l["cta-color"])&&!(null===(d=t.skin)||void 0===d?void 0:d["color-on-cta"])){const r=a(t.skin["cta-color"],n,e,"cta");r&&(t.skin["color-on-cta"]=r)}t.skin||(t.skin={})}},"5a02":function(t,n,e){t.exports={breakPointDesktop:"1024px",blackText:"#121212",whiteText:"#fff"}},"5b7d":function(t,n,e){"use strict";e.d(n,"c",(function(){return r})),e.d(n,"a",(function(){return o})),e.d(n,"d",(function(){return i})),e.d(n,"b",(function(){return a}));const r=()=>(/iPad|iPhone|iPod/i.test(navigator.platform)||"MacIntel"===navigator.platform&&navigator.maxTouchPoints>1)&&!window.MSStream,o=()=>{if(a())return null;if(r())try{const t=document.createElement("a");return t.relList.supports("ar")}catch(t){return console.error(t),!1}return null},i=()=>{if(a())return null;try{const t=window.navigator.standalone,n=window.navigator.userAgent.toLowerCase(),e=/safari/.test(n);if(r())return!t&&!e}catch(t){return console.error(t),null}return null},a=()=>/(android)/i.test(navigator.userAgent)},8513:function(t,n,e){"use strict";e.d(n,"c",(function(){return c})),e.d(n,"a",(function(){return I})),e.d(n,"b",(function(){return g}));var r=e("c135"),o=e("124d");const i=["language","browserLanguage","userLanguage","systemLanguage"],a=(t=null)=>{const n=window.navigator;if(t)return t.substr(0,2);if(Array.isArray(n.languages)&&n.languages.length>0)return n.languages[0].substr(0,2);for(let e=0,r=i.length;e<r;e++){const t=n[i[e]];if(t)return t.substr(0,2)}return"en"},s="(idle)",c=(t=!0)=>{const n=new URLSearchParams(window.location.search),e={};return n.forEach((t,n)=>m(e,n,t)),l(e),t?(e.id||(e.id="usm:frame"),void 0===e.isItem&&(e.isItem=Object(r["p"])(e.id)),e):e},u=t=>(l(t),(null===t||void 0===t?void 0:t.customApiUrl)&&(t.customApiUrl=decodeURIComponent(t.customApiUrl)),void 0===t.emails&&(t.emails=!1),t.shareUrl&&(t.deeplink=t.shareUrl.replace(h,I)),t),l=t=>{if(!t)return;const n=Object.keys(t);for(const e of n){const n=t[e];if(!Array.isArray(n)&&"object"===typeof n&&null!==n)return l(n);if(Array.isArray(n)){for(const t of n)l(t);return}"true"!==n&&"false"!==n||(t[e]="true"===n)}},d=async t=>{const n=await t.sendMessage(o["a"].REQUEST_BOOT);return n.id&&void 0===n.isItem&&(n.isItem=Object(r["p"])(n.id)),u(n)},f=async(t,n)=>{const{id:e,tenant:r,settings:o={}}=await t.getConfiguratorSettings(n),i=o;return i.configuratorId=e,!i.overrideTenant&&r&&(i.overrideTenant=r),u(i)},p=()=>{const t={};t.locale||(t.locale=a()),t.id===s&&delete t.id;const n=Object(r["j"])();return n&&Object(r["n"])(n)&&(t.configuratorId="demoConfigurator"),t.customApiUrl="https://www.roomle.com/api/v2",t.emails=!1,t},h="<CONF_ID>",I="#CONFIGURATIONID#",g=async(t,n,e)=>{u(e);const o=p();let i=null;t&&(i=await d(t)),n.setGlobalInitData(Object(r["g"])(Object(r["g"])(o,i),e));const a=await n.getRapiAccess(),s=e.configuratorId||(null===i||void 0===i?void 0:i.configuratorId)||o.configuratorId;if(!s)throw new Error("Please provide a correct configuratorId, you get the correct ID from your Roomle Contact Person");const c=await f(a,s),l=Object(r["g"])(Object(r["g"])(Object(r["g"])(o,c),i),e);return n.setGlobalInitData(l),l},m=(t,n,e)=>{if("object"!==typeof t)return;const r=n.split("."),o=r.pop();let i=t;for(const a of r)i[a]||(i[a]={}),i=i[a];i[o]=e}},"8a65":function(t,n,e){"use strict";var r,o;e.d(n,"b",(function(){return r})),e.d(n,"a",(function(){return o})),function(t){t[t["CONFIGURATOR"]=3]="CONFIGURATOR"}(r||(r={})),function(t){t[t["CONVERSION"]=11]="CONVERSION",t[t["SHARE_AR"]=301]="SHARE_AR"}(o||(o={}))},b7f9:function(t,n,e){"use strict";var r;e.d(n,"a",(function(){return r})),function(t){t["AR"]="ar",t["PARTLIST"]="partlist",t["MULTISELECT"]="multiselect",t["DIMENSIONS"]="dimensions",t["FULLSCREEN"]="fullscreen",t["RESETCAMERA"]="resetcamera",t["RENDERIMAGE"]="renderimage",t["ADDONS"]="addons",t["REQUESTPRODUCT"]="requestproduct",t["REQUESTPLAN"]="requestplan",t["SAVEDRAFT"]="savedraft",t["STARTCONFIGURE"]="startconfigure",t["PAUSECONFIGURE"]="pauseconfigure",t["VARIANTS"]="variants",t["EXPORT_3D"]="export3d"}(r||(r={}))},bc4e:function(t,n,e){"use strict";e.d(n,"h",(function(){return s})),e.d(n,"f",(function(){return u})),e.d(n,"e",(function(){return l})),e.d(n,"i",(function(){return d})),e.d(n,"d",(function(){return f})),e.d(n,"k",(function(){return p})),e.d(n,"j",(function(){return h})),e.d(n,"a",(function(){return I})),e.d(n,"b",(function(){return g})),e.d(n,"l",(function(){return A})),e.d(n,"n",(function(){return O})),e.d(n,"c",(function(){return b})),e.d(n,"m",(function(){return T})),e.d(n,"g",(function(){return y}));var r,o=e("5a02"),i=e("c135"),a=e("5b7d");(function(t){t[t["VERTICAL"]=0]="VERTICAL",t[t["HORIZONTAL"]=1]="HORIZONTAL"})(r||(r={}));const s=(t,n=0)=>{if(!t)return!1;const{scrollWidth:e,offsetWidth:r,scrollLeft:o}=t;return o+r>=e-n},c=(t,n)=>{if(!t)return!1;const e=n===r.HORIZONTAL?"offsetWidth":"offsetHeight",o=n===r.HORIZONTAL?"scrollWidth":"scrollHeight";return t[e]<t[o]},u=t=>c(t,r.VERTICAL),l=t=>c(t,r.HORIZONTAL),d=(t,n=0)=>{const e=t.children,r=e.length;if(!r)return null;const o=t.getBoundingClientRect(),i=o.left+o.width;let a=e[r-1];for(let s=0;s<r;s++){const t=e[s],r=t.getBoundingClientRect();if(r.left+n>i)return a;a=t}return a},f=t=>parseFloat(t.replace(/(?![\.])\D/g,"")),p=(t,n)=>parseFloat(t.replace("rem",""))*n,h=t=>parseFloat(t.replace("%",""))/100,I=t=>parseFloat(t.replace("ms","")),g=()=>window.innerWidth>=parseInt(o["breakPointDesktop"].replace("px",""),10),m={CONTAINER:"rml-loading",ANIMATION_CONTAINER:"spinner div",OPACITY:"rml-loading--opacity-0",HIDE:"rml-loading--hide",ANIMATION_1:"double-bounce1",ANIMATION_2:"double-bounce2",GLTF_LOADER:"gltf-loader",CIRCLE_PROGRESS:"progress-ring__circle"},w=500,v={TRANSITION:"opacity ease-in-out "+w+"ms"},A=async()=>{const t=document.querySelector("."+m.CONTAINER);if(t){if(t.style.transition=v.TRANSITION,await Object(i["A"])(0),!t)return;if(t.classList.add(m.OPACITY),await Object(i["A"])(w),!t)return;t.classList.add(m.HIDE);const n=t.querySelectorAll("."+m.ANIMATION_CONTAINER);n[0].classList.remove(m.ANIMATION_1),n[1].classList.remove(m.ANIMATION_2)}},O=async()=>{const t=document.querySelector("."+m.CONTAINER);if(t){t.style.transition=v.TRANSITION,await Object(i["A"])(0),t.classList.remove(m.HIDE),t.classList.remove(m.OPACITY);const n=t.querySelectorAll("."+m.ANIMATION_CONTAINER);n[0].classList.add(m.ANIMATION_1),n[1].classList.add(m.ANIMATION_2)}},b=t=>{const n=document.createElement("input"),e="hidden-input-for-clipboard";if(n.id=e,n.value=t,document.body.appendChild(n),Object(a["c"])()){const t=n.contentEditable,e=n.readOnly;n.contentEditable="true",n.readOnly=!1;const r=document.createRange();r.selectNodeContents(n);const o=window.getSelection();null===o||void 0===o||o.removeAllRanges(),null===o||void 0===o||o.addRange(r),n.setSelectionRange(0,999999),n.contentEditable=t,n.readOnly=e}else n.select();try{document.execCommand("copy")}catch(r){console.error("document.execCommand('copy') failed \""+r+'"')}document.body.removeChild(n)},T=t=>{const n=document.querySelector("."+m.CONTAINER+" ."+m.GLTF_LOADER),e=document.querySelector("."+m.CIRCLE_PROGRESS),r=e.r.baseVal.value,o=2*r*Math.PI;n.classList.contains(m.HIDE)&&(e.style.strokeDasharray=`${o} ${o}`,e.style.strokeDashoffset=""+o,n.classList.remove(m.HIDE));const i=o-t*o;e.style.strokeDashoffset=Math.round(i).toString()},y=()=>{const t=document.querySelector("."+m.CONTAINER+" ."+m.GLTF_LOADER);t.classList.add(m.HIDE)}},c135:function(t,n,e){"use strict";e.d(n,"x",(function(){return i})),e.d(n,"t",(function(){return a})),e.d(n,"p",(function(){return s})),e.d(n,"o",(function(){return c})),e.d(n,"k",(function(){return u})),e.d(n,"b",(function(){return l})),e.d(n,"z",(function(){return d})),e.d(n,"w",(function(){return f})),e.d(n,"e",(function(){return p})),e.d(n,"y",(function(){return h})),e.d(n,"A",(function(){return I})),e.d(n,"g",(function(){return g})),e.d(n,"f",(function(){return m})),e.d(n,"a",(function(){return w})),e.d(n,"j",(function(){return v})),e.d(n,"n",(function(){return A})),e.d(n,"v",(function(){return O})),e.d(n,"i",(function(){return b})),e.d(n,"l",(function(){return T})),e.d(n,"m",(function(){return y})),e.d(n,"h",(function(){return _})),e.d(n,"r",(function(){return R})),e.d(n,"c",(function(){return N})),e.d(n,"s",(function(){return S})),e.d(n,"u",(function(){return C})),e.d(n,"d",(function(){return L})),e.d(n,"q",(function(){return k}));var r=e("d7f7"),o=e("8513");const i=(t,n=16)=>{let e,r=!1,o=0,i=null;return function(...a){e||(e=Date.now()),!r||e+n-Date.now()<0?(t.apply(this,[...arguments]),e=Date.now(),r=!0):o++,i||(i=setInterval(()=>{o&&t.apply(this,[...arguments]),o=0,clearInterval(i),i=null},n))}},a=(t,n)=>{if(-1===n)return t;const e=Math.pow(10,n);return Math.round(t*e)/e},s=t=>t.split(":").length-1===1,c=t=>t.split(":").length-1<=0,u=(t,n=32,e=32)=>"https://res.cloudinary.com/roomle/image/fetch/w_auto:"+e+",w_"+n+",h_"+n+",f_auto,dpr_auto/"+encodeURIComponent(t),l=(t,n)=>{if(!n||document.head.querySelector("#"+t))return;const e=document.createElement("meta");e.setAttribute("id",t),n.forEach(t=>{e.setAttribute(t.key,t.value)}),document.head.appendChild(e)},d=(t=null)=>t?(parseInt(t,10)^16*Math.random()>>parseInt(t,10)/4).toString(16):(1e7.toString()+-1e3+-4e3+-8e3+-1e11).replace(/[018]/g,d),f=t=>t.replace(/[\w]([A-Z])/g,t=>t[0]+"-"+t[1]).toLowerCase(),p=t=>JSON.parse(JSON.stringify(t)),h=(t,n=!0)=>void 0===t?n:t,I=t=>new Promise(n=>setTimeout(n,t)),g=(t,n)=>{const e=JSON.parse(JSON.stringify(t));return m(e,n)},m=(t,n)=>{for(const r in n)try{n[r].constructor===Object?t[r]=m(t[r],n[r]):t[r]=n[r]}catch(e){t[r]=n[r]}return t},w=["127.0.0.1","localhost","0.0.0.0"],v=()=>{const t=Object(r["a"])();let n=window.location.href;if(t){if(!document.referrer)return null;n=document.referrer}const{hostname:e}=new URL(n);return e},A=t=>!!w.includes(t)||(!!t.endsWith("roomle.com")||!(!t.endsWith("gitlab.io")&&!t.endsWith("gitlab.com"))),O=(...t)=>{console.info("Script Info:",...t)},b=t=>{var n,e,r,o;return(null===(e=null===(n=t.assets)||void 0===n?void 0:n.glTF)||void 0===e?void 0:e.url)?t.assets.glTF.url:(null===(o=null===(r=t.assets)||void 0===r?void 0:r.glb)||void 0===o?void 0:o.url)?t.assets.glb.url:null},T=t=>{var n,e;return(null===(e=null===(n=t.assets)||void 0===n?void 0:n.usdz)||void 0===e?void 0:e.url)?t.assets.usdz.url:null},y=t=>null!==b(t)&&null!==T(t),_=(t,n)=>{if("number"!==typeof n)return null;const e=t?t+" ":"";return e+n.toLocaleString(void 0,{minimumFractionDigits:2,maximumFractionDigits:2})},E=4,R=(t,n=E)=>{if(t%1===0)return t;const e=n!==E?Math.pow(10,n):1e4;return Math.round((t+Number.EPSILON)*e)/e},N=t=>!(!t.packages||!t.packages.length)&&!!t.packages.find(t=>"tenant_free"!==t.package),S=(t,n)=>{const e=window.setInterval(()=>{t(),clearInterval(e)},n);return e},C=window.requestIdleCallback?window.requestIdleCallback:t=>t(),L=t=>{let n=t;const e=n.includes("?")?"&":"?",r="id=",i=r+o["a"],a=n.includes(r);return a?n=n.replace(new RegExp(r+"[a-zA-Z0-9:_-]+"),i):n+=e+i,n},k=()=>"http://localhost/"===location.href},d7f7:function(t,n,e){"use strict";e.d(n,"a",(function(){return r})),e.d(n,"c",(function(){return o})),e.d(n,"b",(function(){return i}));const r=()=>{try{return window.self!==window.top}catch(t){return!0}},o=()=>!window.location.href.includes("api=false"),i=()=>{try{return!!window.parent.document}catch(t){return!1}}}}]);
//# sourceMappingURL=chunk-common-legacy.b79b9f05.js.map