import{n as a,V as l}from"./js/vueComponentNormalizer.58b0a173.js";import{N as F,b as V,j,h as D}from"./js/index.4a5acef5.js";import{a as c,g as N,s as u}from"./js/index.4776f7d5.js";import{T as W}from"./js/WpTable.8ff25002.js";import{S as Z}from"./js/Exclamation.c0680526.js";import{a as B}from"./js/Image.03ee6721.js";import{S as x}from"./js/Standalone.8b8c1fe5.js";import{C as K}from"./js/GoogleSearchPreview.153cd296.js";import{S as G}from"./js/External.1af3387c.js";import{s as H}from"./js/attachments.52d4e34c.js";import{l as q}from"./js/loadTruSeo.34fb446e.js";import{e as J}from"./js/elemLoaded.b1f6e29c.js";import{t as w}from"./js/constants.9efee5f7.js";import{d as Y}from"./js/cleanForSlug.788b395f.js";import"./js/client.d00863cc.js";import"./js/_commonjsHelpers.10c44588.js";import"./js/translations.3bc9d58c.js";import"./js/default-i18n.0e73c33c.js";import"./js/portal-vue.esm.272b3133.js";import"./js/isArrayLikeObject.5268a676.js";function Q(e){return F(w(e).toLowerCase())}function X(e,t,s,n){var i=-1,r=e==null?0:e.length;for(n&&r&&(s=e[++i]);++i<r;)s=t(s,e[i],i,e);return s}var ee=/[^\x00-\x2f\x3a-\x40\x5b-\x60\x7b-\x7f]+/g;function te(e){return e.match(ee)||[]}var se=/[a-z][A-Z]|[A-Z]{2}[a-z]|[0-9][a-zA-Z]|[a-zA-Z][0-9]|[^a-zA-Z0-9 ]/;function ne(e){return se.test(e)}var S="\\ud800-\\udfff",ie="\\u0300-\\u036f",re="\\ufe20-\\ufe2f",oe="\\u20d0-\\u20ff",ae=ie+re+oe,k="\\u2700-\\u27bf",C="a-z\\xdf-\\xf6\\xf8-\\xff",ce="\\xac\\xb1\\xd7\\xf7",le="\\x00-\\x2f\\x3a-\\x40\\x5b-\\x60\\x7b-\\xbf",ue="\\u2000-\\u206f",pe=" \\t\\x0b\\f\\xa0\\ufeff\\n\\r\\u2028\\u2029\\u1680\\u180e\\u2000\\u2001\\u2002\\u2003\\u2004\\u2005\\u2006\\u2007\\u2008\\u2009\\u200a\\u202f\\u205f\\u3000",E="A-Z\\xc0-\\xd6\\xd8-\\xde",de="\\ufe0e\\ufe0f",A=ce+le+ue+pe,R="['\u2019]",p="["+A+"]",_e="["+ae+"]",M="\\d+",he="["+k+"]",T="["+C+"]",O="[^"+S+A+M+k+C+E+"]",fe="\\ud83c[\\udffb-\\udfff]",me="(?:"+_e+"|"+fe+")",ve="[^"+S+"]",I="(?:\\ud83c[\\udde6-\\uddff]){2}",L="[\\ud800-\\udbff][\\udc00-\\udfff]",o="["+E+"]",ge="\\u200d",d="(?:"+T+"|"+O+")",$e="(?:"+o+"|"+O+")",_="(?:"+R+"(?:d|ll|m|re|s|t|ve))?",h="(?:"+R+"(?:D|LL|M|RE|S|T|VE))?",U=me+"?",z="["+de+"]?",be="(?:"+ge+"(?:"+[ve,I,L].join("|")+")"+z+U+")*",ye="\\d*(?:1st|2nd|3rd|(?![123])\\dth)(?=\\b|[A-Z_])",Pe="\\d*(?:1ST|2ND|3RD|(?![123])\\dTH)(?=\\b|[a-z_])",xe=z+U+be,we="(?:"+[he,I,L].join("|")+")"+xe,Se=RegExp([o+"?"+T+"+"+_+"(?="+[p,o,"$"].join("|")+")",$e+"+"+h+"(?="+[p,o+d,"$"].join("|")+")",o+"?"+d+"+"+_,o+"+"+h,Pe,ye,M,we].join("|"),"g");function ke(e){return e.match(Se)||[]}function Ce(e,t,s){return e=w(e),t=s?void 0:t,t===void 0?ne(e)?ke(e):te(e):e.match(t)||[]}var Ee="['\u2019]",Ae=RegExp(Ee,"g");function Re(e){return function(t){return X(Ce(Y(t).replace(Ae,"")),e,"")}}var Me=Re(function(e,t,s){return t=t.toLowerCase(),e+(s?Q(t):t)});const f=Me;var Te=function(){var e=this,t=e.$createElement,s=e._self._c||t;return e.currentPost.id?s("div",{staticClass:"seo-overview"},[s("ul",{staticClass:"pre-publish-checklist"},e._l(e.tips,function(n,i){return s("li",{key:i},[s("span",{staticClass:"icon"},[s(n.icon,{tag:"component",class:n.type})],1),s("span",[e._v(e._s(n.label)+": "),s("span",{staticClass:"result",class:n.value.endsWith("/100")?n.type:null},[e._v(e._s(n.value))])]),e.dynamicOptions.searchAppearance.postTypes[e.currentPost.postType]&&e.dynamicOptions.searchAppearance.postTypes[e.currentPost.postType].advanced.showMetaBox?s("span",{staticClass:"edit",on:{click:function(r){return e.openSidebar(n.name)}}},[s("svg-pencil")],1):e._e()])}),0),e.$allowed("aioseo_page_analysis")?s("div",{staticClass:"snippet-preview"},[s("p",{staticClass:"title"},[e._v(e._s(e.strings.snippetPreview)+":")]),s("core-google-search-preview",{class:{ismobile:e.currentPost.generalMobilePrev},attrs:{title:e.currentPost.title||e.currentPost.tags.title||"#post_title #separator_sa #site_title",separator:e.options.searchAppearance.global.separator,description:e.currentPost.description||e.currentPost.tags.description||"#post_content"},scopedSlots:e._u([{key:"domain",fn:function(){return[s("a",{attrs:{href:e.liveTags.permalink,target:"_blank"}},[e._v(" "+e._s(e.liveTags.permalink)+" ")])]},proxy:!0}],null,!1,4038479585)})],1):e._e(),e.$allowed("aioseo_page_analysis")&&e.currentPost.canonicalUrl?s("div",{staticClass:"canonical-url"},[s("p",{staticClass:"title"},[e._v(" "+e._s(e.strings.canonicalUrl)+": "),s("span",{staticClass:"edit",on:{click:function(n){return e.openSidebar("canonical")}}},[s("svg-pencil")],1)]),s("a",{attrs:{href:e.currentPost.canonicalUrl,target:"_blank",rel:"noopener noreferrer"}},[s("span",[e._v(e._s(e.currentPost.canonicalUrl))]),s("svg-external")],1)]):e._e()]):e._e()},Oe=[];const Ie={components:{CoreGoogleSearchPreview:K,SvgCircleCheck:V,SvgCircleClose:j,SvgCircleExclamation:Z,SvgExternal:G,SvgPencil:D},mixins:[x,W,B],data(){return{socialImageKey:0,strings:{snippetPreview:this.$t.__("Snippet Preview",this.$td),canonicalUrl:this.$t.__("Canonical URL",this.$td)}}},computed:{...c(["currentPost"]),...c("live-tags",["liveTags"]),tips(){let e=[{label:this.$t.__("Visibility",this.$td),name:"visibility",access:"aioseo_page_advanced_settings"},{label:this.$t.__("SEO Analysis",this.$td),name:"seoAnalysis",access:"aioseo_page_analysis"},{label:this.$t.__("Readability",this.$td),name:"readabilityAnalysis",access:"aioseo_page_analysis"},{label:this.$t.__("Focus Keyphrase",this.$td),name:"focusKeyphrase",access:"aioseo_page_analysis"},{label:this.$t.__("Social",this.$td),name:"social",access:"aioseo_page_social_settings"}].filter(t=>this.$allowed(t.access)&&(t.access!=="aioseo_page_analysis"||this.options.advanced.truSeo));return!this.options.social.facebook.general.enable&&!this.options.social.twitter.general.enable&&(e=e.filter(t=>t.name!=="social")),e.forEach((t,s)=>{e[s]={...t,...this.getData(t.name)}}),e},canImprove(){return this.tips.some(e=>e.type==="error")}},methods:{getIcon(e){switch(e){case"error":return"svg-circle-close";case"warning":return"svg-circle-exclamation";case"success":default:return"svg-circle-check"}},getData(e){const t={};if(e==="visibility"&&(t.value=this.$t.__("Good!",this.$td),t.type="success",(this.currentPost.default?this.dynamicOptions.searchAppearance.postTypes[this.currentPost.postType]&&!this.dynamicOptions.searchAppearance.postTypes[this.currentPost.postType].advanced.robotsMeta.default&&this.dynamicOptions.searchAppearance.postTypes[this.currentPost.postType].advanced.robotsMeta.noindex:this.currentPost.noindex)&&(t.value=this.$t.__("Blocked!",this.$td),t.type="error")),e==="seoAnalysis"){t.value=this.$t.__("N/A",this.$td),t.type="error";const s=this.currentPost.seo_score;Number.isInteger(s)&&(t.value=s+"/100",t.type=80<s?"success":50<s?"warning":"error")}if(e==="readabilityAnalysis"){t.value=this.$t.__("Good!",this.$td),t.type="success";const s=this.currentPost.page_analysis.analysis.readability.errors;s&&0<s&&(t.value=this.$t.sprintf(this.$t._n("%1$s error found!","%1$s errors found!",s,this.$td),s),t.type="error")}if(e==="focusKeyphrase"){t.value=this.$t.__("No focus keyphrase!",this.$td),t.type="error";const s=this.currentPost.keyphrases.focus;s&&s.keyphrase&&(t.value=s.score+"/100",t.type=80<s.score?"success":50<s.score?"warning":"error")}if(e==="social"){t.value=this.$t.__("Good!",this.$td),t.type="success",this.socialImageKey;const s=this.parseTags(this.currentPost.og_title||this.currentPost.title||this.currentPost.tags.title).trim(),n=this.parseTags(this.currentPost.og_description||this.currentPost.description||this.currentPost.tags.description).trim(),i=this.socialImage;(!s||!n||!i)&&(t.value=this.$t.__("Missing social markup!",this.$td),t.type="error")}return{...t,icon:this.getIcon(t.type)}},openSidebar(e){const{closePublishSidebar:t,openGeneralSidebar:s}=window.wp.data.dispatch("core/edit-post");switch(t(),s("aioseo-post-settings-sidebar/aioseo-post-settings-sidebar"),e){case"canonical":case"visibility":this.$bus.$emit("open-post-settings",{tab:"advanced"});break;case"seoAnalysis":this.$bus.$emit("open-post-settings",{tab:"general",card:"basicseo"});break;case"readabilityAnalysis":this.$bus.$emit("open-post-settings",{tab:"general",card:"readability"});break;case"focusKeyphrase":this.$bus.$emit("open-post-settings",{tab:"general",card:"focus"});break;case"social":this.$bus.$emit("open-post-settings",{tab:"social"});break}}},async mounted(){await this.setImageUrl().then(()=>{this.socialImage=this.imageUrl}),this.$bus.$on("updateSocialImagePreview",e=>{this.socialImage=e.image,this.socialImageKey++}),this.$nextTick(()=>{const e=document.querySelector(".aioseo-pre-publish .editor-post-publish-panel__link");e&&(e.innerHTML=this.canImprove?this.$t.__("Your post needs improvement!",this.$td):this.$t.__("You're good to go!",this.$td))})}},m={};var Le=a(Ie,Te,Oe,!1,Ue,null,null,null);function Ue(e){for(let t in m)this[t]=m[t]}const v=function(){return Le.exports}();var ze=function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("svg",{staticClass:"aioseo-facebook-rounded",attrs:{width:"32",height:"32",fill:"none",xmlns:"http://www.w3.org/2000/svg"}},[s("circle",{attrs:{cx:"16",cy:"16",r:"16",fill:"currentColor"}}),s("path",{attrs:{d:"M24 16c0-4.4-3.6-8-8-8s-8 3.6-8 8c0 4 2.9 7.3 6.7 7.9v-5.6h-2V16h2v-1.8c0-2 1.2-3.1 3-3.1.9 0 1.8.2 1.8.2v2h-1c-1 0-1.3.6-1.3 1.2V16h2.2l-.4 2.3h-1.9V24c4-.6 6.9-4 6.9-8z",fill:"#fff"}})])},Fe=[];const Ve={},g={};var je=a(Ve,ze,Fe,!1,De,null,null,null);function De(e){for(let t in g)this[t]=g[t]}const Ne=function(){return je.exports}();var We=function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("svg",{staticClass:"aioseo-linkedin-rounded",attrs:{width:"32",height:"32",fill:"none",xmlns:"http://www.w3.org/2000/svg"}},[s("circle",{attrs:{cx:"16",cy:"16",r:"16",fill:"currentColor"}}),s("path",{attrs:{d:"M11.6 24H8.2V13.3h3.4V24zM9.9 11.8C8.8 11.8 8 11 8 9.9 8 8.8 8.9 8 9.9 8c1.1 0 1.9.8 1.9 1.9 0 1.1-.8 1.9-1.9 1.9zM24 24h-3.4v-5.8c0-1.7-.7-2.2-1.7-2.2s-2 .8-2 2.3V24h-3.4V13.3h3.2v1.5c.3-.7 1.5-1.8 3.2-1.8 1.9 0 3.9 1.1 3.9 4.4V24h.2z",fill:"#fff"}})])},Ze=[];const Be={},$={};var Ke=a(Be,We,Ze,!1,Ge,null,null,null);function Ge(e){for(let t in $)this[t]=$[t]}const He=function(){return Ke.exports}();var qe=function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("svg",{staticClass:"aioseo-pinterest-rounded",attrs:{width:"32",height:"32",fill:"none",xmlns:"http://www.w3.org/2000/svg"}},[s("circle",{attrs:{cx:"16",cy:"16",r:"16",fill:"currentColor"}}),s("path",{attrs:{d:"M16.056 6.583c-5.312 0-9.658 4.346-9.658 9.658a9.581 9.581 0 005.795 8.813c0-.724 0-1.448.12-2.173.242-.845 1.207-5.312 1.207-5.312s-.362-.604-.362-1.57c0-1.448.846-2.535 1.811-2.535.845 0 1.328.604 1.328 1.45 0 .844-.603 2.172-.845 3.38-.241.965.483 1.81 1.57 1.81 1.81 0 3.018-2.293 3.018-5.19 0-2.174-1.449-3.743-3.984-3.743-2.898 0-4.709 2.173-4.709 4.587 0 .845.242 1.449.604 1.932.12.241.242.241.12.483 0 .12-.12.603-.24.724-.121.242-.242.362-.483.242-1.329-.604-1.932-2.053-1.932-3.743 0-2.777 2.294-6.036 6.881-6.036 3.743 0 6.157 2.656 6.157 5.553 0 3.743-2.052 6.64-5.19 6.64-1.087 0-2.053-.603-2.415-1.207 0 0-.604 2.173-.725 2.656a10.702 10.702 0 01-.966 2.052c.846.242 1.811.363 2.777.363 5.312 0 9.658-4.347 9.658-9.659.121-4.829-4.225-9.175-9.537-9.175z",fill:"#fff"}})])},Je=[];const Ye={},b={};var Qe=a(Ye,qe,Je,!1,Xe,null,null,null);function Xe(e){for(let t in b)this[t]=b[t]}const et=function(){return Qe.exports}();var tt=function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("svg",{staticClass:"aioseo-twitter-rounded",attrs:{width:"32",height:"32",fill:"none",xmlns:"http://www.w3.org/2000/svg"}},[s("circle",{attrs:{cx:"16",cy:"16",r:"16",fill:"currentColor"}}),s("path",{attrs:{d:"M24 11c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-2.1 0-3.7 2-3.2 4-2.7-.1-5.1-1.4-6.8-3.4-.9 1.5-.4 3.4 1 4.4-.5 0-1-.2-1.5-.4 0 1.5 1.1 2.9 2.6 3.3-.5.1-1 .2-1.5.1.4 1.3 1.6 2.3 3.1 2.3-1.2.9-3 1.4-4.7 1.2 1.5.9 3.2 1.5 5 1.5 6.1 0 9.5-5.1 9.3-9.8.7-.4 1.3-1 1.7-1.7z",fill:"#fff"}})])},st=[];const nt={},y={};var it=a(nt,tt,st,!1,rt,null,null,null);function rt(e){for(let t in y)this[t]=y[t]}const ot=function(){return it.exports}();var at=function(){var e=this,t=e.$createElement,s=e._self._c||t;return e.liveTags.permalink?s("div",{staticClass:"aioseo-post-publish"},[s("h2",{staticClass:"title"},[e._v(e._s(e.strings.title))]),s("p",{staticClass:"description"},[e._v(e._s(e.strings.description))]),s("div",{staticClass:"links"},e._l(e.socialNetworks,function(n,i){return s("a",{key:i,staticClass:"link",attrs:{target:"_blank",href:n.link}},[s(n.icon,{tag:"component"})],1)}),0)]):e._e()},ct=[];const lt={components:{SvgFacebookRounded:Ne,SvgLinkedinRounded:He,SvgPinterestRounded:et,SvgTwitterRounded:ot},mixins:[x],data(){return{strings:{title:this.$t.__("Get out the word!",this.$td),description:this.$t.__("Share your content on your favorite social media platforms to drive engagement and increase your SEO.",this.$td)}}},computed:{...c("live-tags",["liveTags"]),socialNetworks(){return[{icon:"svg-twitter-rounded",link:"https://twitter.com/share?url="},{icon:"svg-facebook-rounded",link:"https://www.facebook.com/sharer/sharer.php?u="},{icon:"svg-pinterest-rounded",link:"https://pinterest.com/pin/create/button/?url="},{icon:"svg-linkedin-rounded",link:"https://www.linkedin.com/shareArticle?url="}].map(e=>({...e,link:e.link+this.liveTags.permalink}))}}},P={};var ut=a(lt,at,ct,!1,pt,null,null,null);function pt(e){for(let t in P)this[t]=P[t]}const dt=function(){return ut.exports}();(function(e){if(!N()||!H()||!e.editPost.PluginDocumentSettingPanel)return;const t=e.editPost.PluginDocumentSettingPanel,s=e.editPost.PluginPrePublishPanel,n=e.editPost.PluginPostPublishPanel,i=e.plugins.registerPlugin,r=window.aioseo.user;!r.capabilities.aioseo_page_analysis&&!r.capabilities.aioseo_page_general_settings&&!r.capabilities.aioseo_page_advanced_settings||i("aioseo-publish-panel",{render:()=>e.element.createElement(e.element.Fragment,{},e.element.createElement(t,{title:"AIOSEO",className:"aioseo-document-setting aioseo-seo-overview",icon:e.element.Fragment},e.element.createElement("div",{},e.element.createElement("div",{id:"aioseo-document-setting"}))),e.element.createElement(s,{title:["AIOSEO",":",e.element.createElement("span",{key:"scoreDescription",className:"editor-post-publish-panel__link"})],className:"aioseo-pre-publish aioseo-seo-overview",initialOpen:!0,icon:e.element.Fragment},e.element.createElement("div",{},e.element.createElement("div",{id:"aioseo-pre-publish"}))),e.element.createElement(n,{title:"AIOSEO",initialOpen:!0,icon:e.element.Fragment},e.element.createElement("div",{},e.element.createElement("div",{id:"aioseo-post-publish"}))))})})(window.wp);window.aioseo.currentPost&&window.aioseo.currentPost.context==="post"&&[{id:"aioseo-pre-publish",component:v},{id:"aioseo-document-setting",component:v},{id:"aioseo-post-publish",component:dt}].forEach(t=>{document.getElementById(t.id)?new l({store:u,render:s=>s(t.component)}).$mount("#"+t.id):(J("#"+t.id,f(t.id)),document.addEventListener("animationstart",function(s){f(t.id)===s.animationName&&new l({store:u,render:n=>n(t.component)}).$mount("#"+t.id)},{passive:!0}))});window.addEventListener("load",()=>{q(!1)});
