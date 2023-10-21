import{a as o,e as h}from"./index.4776f7d5.js";import{B as _}from"./RadioToggle.18d51233.js";import{C as p}from"./SettingsRow.8a127375.js";import{G as g,a as f}from"./Row.dfea53f7.js";import{n as i}from"./vueComponentNormalizer.58b0a173.js";import{C as $}from"./Blur.404d53ce.js";import{C as d}from"./Card.a455f6aa.js";import{C as v}from"./Tabs.5f143cbd.js";import{C as y}from"./ProBadge.d6147ee5.js";import{C as w}from"./Index.7823cadd.js";import{C as k}from"./DisplayInfo.286ba08f.js";import{C as x}from"./HtmlTagsEditor.c1435120.js";import{C as T}from"./SettingsSeparator.207fcb91.js";import"./isArrayLikeObject.5268a676.js";import"./default-i18n.0e73c33c.js";import"./Tooltip.060399ab.js";import"./_commonjsHelpers.10c44588.js";import"./index.4a5acef5.js";import"./client.d00863cc.js";import"./translations.3bc9d58c.js";import"./constants.9efee5f7.js";import"./portal-vue.esm.272b3133.js";import"./Slide.8aaa5049.js";import"./WpTable.8ff25002.js";import"./attachments.52d4e34c.js";import"./cleanForSlug.788b395f.js";import"./TruSeoScore.98a47fd6.js";import"./Information.d80e4486.js";import"./CheckSolid.6395ccc1.js";import"./Editor.5a52a16a.js";import"./UnfilteredHtml.b3886c4e.js";var L=function(){var e=this,s=e.$createElement,t=e._self._c||s;return t("div",{staticClass:"aioseo-preview-box"},[e.label?t("span",{staticClass:"label"},[e._v(" "+e._s(e.label)+": ")]):e._e(),e._l(this.getPreviewData(),function(r,a){return[1<e.previewLength&&a>0&&a<e.previewLength?t("span",{key:a+"sep",staticClass:"aioseo-breadcrumb-separator",domProps:{innerHTML:e._s(e.options.breadcrumbs.separator)}}):e._e(),a<e.previewLength-1?t("span",{key:a+"crumb",class:{"aioseo-breadcrumb":!r.match(/aioseo-breadcrumb/),link:r!==e.options.breadcrumbs.breadcrumbPrefix&&!r.match(/<a /)},domProps:{innerHTML:e._s(r)}}):e._e(),a===e.previewLength-1?t("span",{key:a+"crumbLast",class:{last:!0,link:e.options.breadcrumbs.linkCurrentItem&&e.useDefaultTemplate&&!r.match(/<a /),noLink:!e.options.breadcrumbs.linkCurrentItem&&e.useDefaultTemplate,"aioseo-breadcrumb":!r.match(/aioseo-breadcrumb/)},domProps:{innerHTML:e._s(r)}}):e._e()]})],2)},C=[];const S={props:{previewData:{type:Array,default:null},useDefaultTemplate:{type:Boolean,default:!0},label:String},computed:{...o(["options"]),previewLength(){return this.getPreviewData()?this.getPreviewData().length:0}},methods:{getPreviewData(){let e=this.previewData.filter(s=>!!s).map(s=>this.$tags.decodeHTMLEntities(s).replace(/#breadcrumb_separator/g,'<span class="aioseo-breadcrumb-separator">'+this.options.breadcrumbs.separator+"</span>").replace(/#breadcrumb_link/g,"Permalink"));return this.useDefaultTemplate&&!this.options.breadcrumbs.showCurrentItem&&(e=e.slice(0,e.length-1)),e}}},n={};var P=i(S,L,C,!1,B,null,null,null);function B(e){for(let s in n)this[s]=n[s]}const b=function(){return P.exports}();var H=function(){var e=this,s=e.$createElement,t=e._self._c||s;return t("div",{staticClass:"content"},e._l(e.postTypes,function(r){return t("core-settings-row",{key:r.name,staticClass:"aioseo-breadcrumbs-post-type",attrs:{name:r.label},scopedSlots:e._u([{key:"content",fn:function(){return[t("div",[t("preview",{attrs:{"preview-data":e.getPreview(r)}}),t("grid-row",[t("grid-column",[t("base-toggle",{staticClass:"current-item"}),e._v(" "+e._s(e.strings.useDefaultTemplate)+" ")],1)],1)],1)]},proxy:!0}],null,!0)})}),1)},D=[];const F={components:{CoreSettingsRow:p,GridColumn:g,GridRow:f,Preview:b},data(){return{strings:{useDefaultTemplate:this.$t.__("Use a default template",this.$td)}}},methods:{getPreview(e){const s=this.options.breadcrumbs;return[s.breadcrumbPrefix?s.breadcrumbPrefix:"",s.homepageLink?s.homepageLabel?s.homepageLabel:"Home":"",s.showBlogHome&&e.name==="post"?"Blog Home":"",["post","page","attachment"].includes(e.name)?"":e.label,this.getPostTypeTaxonomy(e).singular,this.postTypeIsHierarchical(e)?"Post Parent":"",this.getPostTypeTemplate(e)]},postTypeIsHierarchical(e){return 0<this.$aioseo.postData.postTypes.filter(s=>s.name===e.name&&s.hierarchical).length},postTypeHasArchive(e){return 0<this.$aioseo.postData.postTypes.filter(s=>s.name===e.name&&s.hasArchive).length},getPostTypeTemplate(e,s=!0){let t=this.$aioseo.breadcrumbs.defaultTemplate;return s?t=t.replace(new RegExp("#breadcrumb_label","g"),e.singular):t=t.replace(new RegExp("#breadcrumb_label","g"),"#breadcrumb_post_title_"+e.name),t},getPostTaxonomyOptions(e){return this.$aioseo.postData.taxonomies.filter(s=>e.taxonomies.includes(s.name)).map(s=>({value:s.name,label:s.label}))},getPostTypeTaxonomy(e){const s=this.$aioseo.postData.taxonomies.filter(t=>e.taxonomies.includes(t.name));return 0<s.length?s[0]:[]}},computed:{...o(["options"]),postTypes(){return this.$aioseo.postData.postTypes}}},c={};var I=i(F,H,D,!1,R,null,null,null);function R(e){for(let s in c)this[s]=c[s]}const A=function(){return I.exports}();var O=function(){var e=this,s=e.$createElement,t=e._self._c||s;return t("div",{staticClass:"aioseo-breadcrumbs"},[t("core-card",{attrs:{slug:"breadcrumbTemplates"},scopedSlots:e._u([{key:"header",fn:function(){return[t("span",[e._v(e._s(e.strings.breadcrumbTemplates))]),t("core-pro-badge")]},proxy:!0},{key:"tooltip",fn:function(){return[e._v(" "+e._s(e.strings.breadcrumbTemplatesTooltip)+" ")]},proxy:!0},{key:"tabs",fn:function(){return[t("div",{staticClass:"content"},[t("core-blur",[t("core-main-tabs",{attrs:{tabs:e.tabs,showSaveButton:!1,active:e.tab,internal:""}}),t("transition",{attrs:{name:"route-fade",mode:"out-in"}},[t(e.tab,{tag:"component",attrs:{active:e.tab}})],1)],1),t("cta",{attrs:{"cta-link":e.$links.getPricingUrl("breadcrumb-templates","breadcrumb-templates-upsell"),"button-text":e.strings.ctaButtonText,"learn-more-link":e.$links.getUpsellUrl("breadcrumb-templates",null,"home"),"feature-list":e.features,"align-top":""},scopedSlots:e._u([{key:"header-text",fn:function(){return[e._v(" "+e._s(e.strings.ctaHeader1)),t("br"),e._v(" "+e._s(e.strings.ctaHeader2)+" ")]},proxy:!0},{key:"description",fn:function(){return[e._v(" "+e._s(e.strings.ctaDescription)+" ")]},proxy:!0}])})],1)]},proxy:!0}])})],1)},E=[];const G={components:{ContentTypesLite:A,CoreBlur:$,CoreCard:d,CoreMainTabs:v,CoreProBadge:y,Cta:w},data(){return{strings:{breadcrumbTemplates:this.$t.__("Breadcrumb Templates",this.$td),breadcrumbTemplatesTooltip:this.$t.__("Override the default template for breadcrumbs on your site using our easy-to-use template editor.",this.$td),ctaButtonText:this.$t.__("Upgrade to Pro and Unlock Breadcrumb Templates",this.$td),ctaHeader1:this.$t.__("Breadcrumb Templates are only available",this.$td),ctaHeader2:this.$t.sprintf(this.$t.__("for licensed %1$s %2$s users.",this.$td),"AIOSEO","Pro"),ctaDescription:this.$t.__("Our template editor will allow you to easily customize how breadcrumbs are displayed on your site based on each post type or taxonomy.",this.$td)},features:[this.$t.__("Custom HTML templates",this.$td),this.$t.__("Content Types",this.$td),this.$t.__("Taxonomies",this.$td),this.$t.__("Archives",this.$td)],tab:"ContentTypesLite",tabs:[{slug:"ContentTypesLite",name:this.$t.__("Content Types",this.$td),access:"aioseo_general_settings",pro:!0},{slug:"Taxonomies",name:this.$t.__("Taxonomies",this.$td),access:"aioseo_general_settings",pro:!0},{slug:"Archives",name:this.$t.__("Archives",this.$td),access:"aioseo_general_settings",pro:!0},{slug:"Advanced",name:this.$t.__("Advanced",this.$td),access:"aioseo_general_settings",pro:!0}]}},computed:{...o(["options"])},methods:{}},l={};var M=i(G,O,E,!1,U,"4a46dc2d",null,null);function U(e){for(let s in l)this[s]=l[s]}const u=function(){return M.exports}();var N=function(){var e=this,s=e.$createElement,t=e._self._c||s;return t("div",{staticClass:"aioseo-breadcrumbs"},[t("core-card",{attrs:{slug:"enableBreadcrumbs","header-text":e.strings.enableBreadcrumbs},scopedSlots:e._u([{key:"tooltip",fn:function(){return[e._v(" "+e._s(e.strings.descriptionTooltip)+" ")]},proxy:!0}])},[t("div",{staticClass:"aioseo-settings-row aioseo-section-description"},[e._v(" "+e._s(e.strings.description)+" "),t("span",{domProps:{innerHTML:e._s(e.$links.getDocLink(e.$constants.GLOBAL_STRINGS.learnMore,"breadcrumbsDisplay",!0))}})]),t("core-settings-row",{attrs:{name:e.strings.enableBreadcrumbs},scopedSlots:e._u([{key:"content",fn:function(){return[t("base-toggle",{model:{value:e.options.breadcrumbs.enable,callback:function(r){e.$set(e.options.breadcrumbs,"enable",r)},expression:"options.breadcrumbs.enable"}})]},proxy:!0}])}),e.options.breadcrumbs.enable?t("core-display-info",{attrs:{label:e.strings.showBreadcrumbsOnYourWebsite,options:e.displayInfo}}):e._e()],1),e.options.breadcrumbs.enable?t("core-card",{attrs:{slug:"breadcrumbSettings","header-text":e.strings.breadcrumbSettings},scopedSlots:e._u([{key:"tooltip",fn:function(){return[e._v(" "+e._s(e.strings.breadcrumbTooltip)+" ")]},proxy:!0}],null,!1,3544047555)},[t("core-settings-row",{attrs:{name:e.$constants.GLOBAL_STRINGS.preview},scopedSlots:e._u([{key:"content",fn:function(){return[t("div",{staticClass:"previews-box main-preview"},[e._l(e.previews,function(r,a){return[t("preview",{key:a,attrs:{"preview-data":r.preview,label:r.label}})]})],2)]},proxy:!0}],null,!1,147102216)}),t("core-settings-row",{attrs:{name:e.strings.separator,align:""},scopedSlots:e._u([{key:"content",fn:function(){return[t("core-settings-separator",{attrs:{"options-separator":e.options.breadcrumbs.separator,"show-more-slug":"breadcrumbsShowMoreSeparators"},on:{change:function(r){return e.options.breadcrumbs.separator=r}}})]},proxy:!0}],null,!1,3895120608)}),t("core-settings-row",{attrs:{name:e.strings.homepageLink,align:""},scopedSlots:e._u([{key:"content",fn:function(){return[t("div",{staticClass:"homepage-link"},[t("base-radio-toggle",{attrs:{name:"homepageLink",options:[{label:e.$constants.GLOBAL_STRINGS.off,value:!1,activeClass:"dark"},{label:e.$constants.GLOBAL_STRINGS.on,value:!0}]},model:{value:e.options.breadcrumbs.homepageLink,callback:function(r){e.$set(e.options.breadcrumbs,"homepageLink",r)},expression:"options.breadcrumbs.homepageLink"}}),t("div",{staticClass:"homepage-link-label"},[e._v(" "+e._s(e.strings.homepageLabel)+" "),t("base-input",{attrs:{size:"medium"},model:{value:e.options.breadcrumbs.homepageLabel,callback:function(r){e.$set(e.options.breadcrumbs,"homepageLabel",r)},expression:"options.breadcrumbs.homepageLabel"}})],1)],1),t("div",{staticClass:"aioseo-description"},[e._v(" "+e._s(e.strings.homepageDescription)+" ")])]},proxy:!0}],null,!1,494866130)}),t("core-settings-row",{attrs:{name:e.strings.breadcrumbPrefix,align:""},scopedSlots:e._u([{key:"content",fn:function(){return[t("base-input",{attrs:{size:"medium"},model:{value:e.options.breadcrumbs.breadcrumbPrefix,callback:function(r){e.$set(e.options.breadcrumbs,"breadcrumbPrefix",r)},expression:"options.breadcrumbs.breadcrumbPrefix"}}),t("div",{staticClass:"aioseo-description"},[e._v(" "+e._s(e.strings.breadcrumbPrefixDescription)+" ")])]},proxy:!0}],null,!1,3154111139)}),0<e.$aioseo.data.staticBlogPage?t("core-settings-row",{attrs:{name:e.strings.showBlogHome},scopedSlots:e._u([{key:"content",fn:function(){return[t("base-radio-toggle",{attrs:{name:"showBlogHome",options:[{label:e.$constants.GLOBAL_STRINGS.off,value:!1,activeClass:"dark"},{label:e.$constants.GLOBAL_STRINGS.on,value:!0}]},model:{value:e.options.breadcrumbs.showBlogHome,callback:function(r){e.$set(e.options.breadcrumbs,"showBlogHome",r)},expression:"options.breadcrumbs.showBlogHome"}})]},proxy:!0}],null,!1,2858337911)}):e._e(),t("core-settings-row",{attrs:{name:e.strings.archiveFormat},scopedSlots:e._u([{key:"content",fn:function(){return[t("core-html-tags-editor",{attrs:{"line-numbers":!1,single:"",checkUnfilteredHtml:"","tags-context":"breadcrumbs-format-archive","minimum-line-numbers":3,showAllTagsLink:!1,"default-tags":["breadcrumb_archive_post_type_name"],tagsDescription:""},model:{value:e.options.breadcrumbs.archiveFormat,callback:function(r){e.$set(e.options.breadcrumbs,"archiveFormat",r)},expression:"options.breadcrumbs.archiveFormat"}}),t("div",{staticClass:"aioseo-description"},[e._v(" "+e._s(e.strings.archiveFormatDescription)+" ")])]},proxy:!0}],null,!1,4098193983)}),t("core-settings-row",{attrs:{name:e.strings.searchResultFormat},scopedSlots:e._u([{key:"content",fn:function(){return[t("core-html-tags-editor",{attrs:{"line-numbers":!1,single:"",checkUnfilteredHtml:"","tags-context":"breadcrumbs-format-search","minimum-line-numbers":3,showAllTagsLink:!1,"default-tags":["breadcrumb_search_string"],tagsDescription:""},model:{value:e.options.breadcrumbs.searchResultFormat,callback:function(r){e.$set(e.options.breadcrumbs,"searchResultFormat",r)},expression:"options.breadcrumbs.searchResultFormat"}}),t("div",{staticClass:"aioseo-description"},[e._v(" "+e._s(e.strings.searchResultFormatDescription)+" ")])]},proxy:!0}],null,!1,151217485)}),t("core-settings-row",{attrs:{name:e.strings.errorFormat404,align:""},scopedSlots:e._u([{key:"content",fn:function(){return[t("base-input",{attrs:{size:"medium"},model:{value:e.options.breadcrumbs.errorFormat404,callback:function(r){e.$set(e.options.breadcrumbs,"errorFormat404",r)},expression:"options.breadcrumbs.errorFormat404"}}),t("div",{staticClass:"aioseo-description"},[e._v(" "+e._s(e.strings.errorFormat404Description)+" ")])]},proxy:!0}],null,!1,3947316067)}),t("core-settings-row",{attrs:{name:e.strings.currentItem,align:""},scopedSlots:e._u([{key:"content",fn:function(){return[t("div",{staticClass:"aioseo-description first"},[t("base-toggle",{staticClass:"current-item",model:{value:e.options.breadcrumbs.showCurrentItem,callback:function(r){e.$set(e.options.breadcrumbs,"showCurrentItem",r)},expression:"options.breadcrumbs.showCurrentItem"}}),e._v(" "+e._s(e.strings.showCurrentItem)+" ")],1),e.options.breadcrumbs.showCurrentItem?t("div",{staticClass:"aioseo-description"},[t("base-toggle",{staticClass:"current-item",model:{value:e.options.breadcrumbs.linkCurrentItem,callback:function(r){e.$set(e.options.breadcrumbs,"linkCurrentItem",r)},expression:"options.breadcrumbs.linkCurrentItem"}}),e._v(" "+e._s(e.strings.linkCurrentItem)+" ")],1):e._e()]},proxy:!0}],null,!1,1588116914)})],1):e._e(),e.isUnlicensed?t("breadcrumbs-lite"):e._e(),e.options.breadcrumbs.enable&&!e.isUnlicensed?t("breadcrumbs"):e._e()],1)},z=[];const j={components:{BaseRadioToggle:_,Breadcrumbs:u,BreadcrumbsLite:u,CoreCard:d,CoreDisplayInfo:k,CoreHtmlTagsEditor:x,CoreSettingsRow:p,CoreSettingsSeparator:T,Preview:b},data(){return{displayInfo:{block:{copy:"",desc:this.$t.sprintf(this.$t.__('To add this block, edit a page or post and search for the "%1$s - Breadcrumbs" block. %2$s',this.$td),"AIOSEO",this.$links.getDocLink(this.$constants.GLOBAL_STRINGS.learnMore,"breadcrumbsDisplay",!0))},shortcode:{copy:"[aioseo_breadcrumbs]",desc:this.$t.sprintf(this.$t.__("Use the following shortcode to display the current breadcrumbs. %1$s",this.$td),this.$links.getDocLink(this.$constants.GLOBAL_STRINGS.learnMore,"breadcrumbsShortcode",!0))},widget:{copy:"",desc:this.$t.sprintf(this.$t.__('To add this widget, visit the %1$swidgets page%2$s and look for the "%3$s - Breadcrumbs" widget. %4$s',this.$td),`<a href="${this.$aioseo.urls.admin.widgets}" target="_blank">`,"</a>","AIOSEO",this.$links.getDocLink(this.$constants.GLOBAL_STRINGS.learnMore,"breadcrumbsDisplay",!0))},php:{copy:"<?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>",desc:this.$t.sprintf(this.$t.__("Use the following PHP code anywhere in your theme (in the loop) to display the breadcrumbs. %1$s",this.$td),this.$links.getDocLink(this.$constants.GLOBAL_STRINGS.learnMore,"breadcrumbsFunction",!0))}},strings:{description:this.$t.sprintf(this.$t.__("Breadcrumbs are an essential part of SEO. By default %1$s will automatically add breadcrumbs to the schema markup that we add to your site and you don't need to make any changes for that to work. Breadcrumbs can also be used as a secondary navigation system that tells users where they are on a website relative to the homepage.",this.$td),"AIOSEO"),descriptionTooltip:this.$t.__("The purpose of breadcrumb navigation is to help users navigate around your website. It also helps search engines understand the structure and hierarchy of links on a web page.",this.$td),enableBreadcrumbs:this.$t.__("Enable Breadcrumbs",this.$td),showBreadcrumbsOnYourWebsite:this.$t.__("Show Breadcrumbs on Your Website",this.$td),breadcrumbSettings:this.$t.__("Breadcrumb Settings",this.$td),breadcrumbTooltip:this.$t.sprintf(this.$t.__("These settings will affect all the breadcrumbs displayed by %1$s throughout your site.",this.$td),"AIOSEO"),separator:this.$t.__("Separator",this.$td),homepageLink:this.$t.__("Homepage Link",this.$td),homepageLabel:this.$t.__("Homepage label",this.$td),homepageDescription:this.$t.__("Label used for homepage link (first item) in breadcrumbs.",this.$td),breadcrumbPrefix:this.$t.__("Breadcrumb Prefix",this.$td),breadcrumbPrefixDescription:this.$t.__("Prefix for breadcrumb path.",this.$td),archiveFormat:this.$t.__("Archive Format",this.$td),archiveFormatDescription:this.$t.__("Format the label used for archives page.",this.$td),searchResultFormat:this.$t.__("Search Result Format",this.$td),searchResultFormatDescription:this.$t.__("Format the label used for the search results page.",this.$td),errorFormat404:this.$t.__("404 Error Format",this.$td),errorFormat404Description:this.$t.__("Format the label used for the 404 error page.",this.$td),currentItem:this.$t.__("Current Item",this.$td),showCurrentItem:this.$t.__("Show current item",this.$td),linkCurrentItem:this.$t.__("Link current item",this.$td),home:this.$t.__("Home",this.$td),category:this.$t.__("Category",this.$td),subcategory:this.$t.__("Subcategory",this.$td),articleTitle:this.$t.__("Article Title",this.$td),searchKeyword:this.$t.__("search key word goes here",this.$td),categoryName:this.$t.__("Category Name",this.$td),breadcrumbTemplates:this.$t.__("Breadcrumb Templates",this.$td),categoryHierarchy:this.$t.__("Category Hierarchy",this.$td),categoryHierarchyDescription:this.$t.__("Display complete category hierarchy even if not selected on each individual post.",this.$td),blog:this.$t.__("Blog",this.$td),blogCrumb:this.$t.__("Blog Page Title",this.$td),showBlogHome:this.$t.__("Show Blog Home",this.$td)}}},methods:{getRootPreview(){return[this.options.breadcrumbs.breadcrumbPrefix?this.options.breadcrumbs.breadcrumbPrefix:"",this.options.breadcrumbs.homepageLink?this.options.breadcrumbs.homepageLabel?this.options.breadcrumbs.homepageLabel:"Home":""].filter(e=>!!e).map(e=>this.$tags.decodeHTMLEntities(e))},getPostPreview(){return[...this.getRootPreview(),this.options.breadcrumbs.showBlogHome?"Blog Home":"",this.strings.category,this.strings.subcategory,this.strings.articleTitle].filter(e=>!!e).map(e=>this.$tags.decodeHTMLEntities(e))},getArchivePreview(){return[...this.getRootPreview(),this.getArchivesOfText].filter(e=>!!e).map(e=>this.$tags.decodeHTMLEntities(e))},getSearchPreview(){return[...this.getRootPreview(),this.getSearchForText].filter(e=>!!e).map(e=>this.$tags.decodeHTMLEntities(e))},get404Preview(){return[...this.getRootPreview(),this.options.breadcrumbs.errorFormat404].filter(e=>!!e).map(e=>this.$tags.decodeHTMLEntities(e))}},computed:{...o(["options"]),...h(["isUnlicensed"]),getSearchForText(){return this.options.breadcrumbs.searchResultFormat.replace(new RegExp("#breadcrumb_search_string","g"),`<strong>${this.strings.searchKeyword}</strong>`)},getArchivesOfText(){return this.options.breadcrumbs.archiveFormat.replace(new RegExp("#breadcrumb_archive_post_type_name","g"),`<strong>${this.strings.categoryName}</strong>`)},getPagedText(){return this.options.breadcrumbs.pagedFormat.replace(new RegExp("#breadcrumb_format_page_number","g"),"<strong>2</strong>")},previews(){return[{label:"Post",preview:this.getPostPreview()},{label:"Archive",preview:this.getArchivePreview()},{label:"Search",preview:this.getSearchPreview()},{label:"404",preview:this.get404Preview()}]}}},m={};var W=i(j,N,z,!1,Y,null,null,null);function Y(e){for(let s in m)this[s]=m[s]}const xe=function(){return W.exports}();export{xe as default};
