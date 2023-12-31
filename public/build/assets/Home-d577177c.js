import{_ as z}from"./MainLayout-aef6e088.js";import{S as m,a as L,A as J}from"./autoplay-57f78d79.js";import{o as y,e as T,a as t,b as r,w as h,u,q,s as K,c as H,t as Y,x as Q,d as A,y as X,z as Z}from"./app-8ec8fd77.js";import{_ as E}from"./_plugin-vue_export-helper-c27b6911.js";import{T as tt}from"./index.esm-97b1216e.js";(function(){if(typeof window!="object")return;if("IntersectionObserver"in window&&"IntersectionObserverEntry"in window&&"intersectionRatio"in window.IntersectionObserverEntry.prototype){"isIntersecting"in window.IntersectionObserverEntry.prototype||Object.defineProperty(window.IntersectionObserverEntry.prototype,"isIntersecting",{get:function(){return this.intersectionRatio>0}});return}function c(s){try{return s.defaultView&&s.defaultView.frameElement||null}catch{return null}}var n=function(s){for(var e=s,i=c(e);i;)e=i.ownerDocument,i=c(e);return e}(window.document),a=[],d=null,p=null;function f(s){this.time=s.time,this.target=s.target,this.rootBounds=k(s.rootBounds),this.boundingClientRect=k(s.boundingClientRect),this.intersectionRect=k(s.intersectionRect||O()),this.isIntersecting=!!s.intersectionRect;var e=this.boundingClientRect,i=e.width*e.height,o=this.intersectionRect,l=o.width*o.height;i?this.intersectionRatio=Number((l/i).toFixed(4)):this.intersectionRatio=this.isIntersecting?1:0}function _(s,e){var i=e||{};if(typeof s!="function")throw new Error("callback must be a function");if(i.root&&i.root.nodeType!=1&&i.root.nodeType!=9)throw new Error("root must be a Document or Element");this._checkForIntersections=w(this._checkForIntersections.bind(this),this.THROTTLE_TIMEOUT),this._callback=s,this._observationTargets=[],this._queuedEntries=[],this._rootMarginValues=this._parseRootMargin(i.rootMargin),this.thresholds=this._initThresholds(i.threshold),this.root=i.root||null,this.rootMargin=this._rootMarginValues.map(function(o){return o.value+o.unit}).join(" "),this._monitoringDocuments=[],this._monitoringUnsubscribes=[]}_.prototype.THROTTLE_TIMEOUT=100,_.prototype.POLL_INTERVAL=null,_.prototype.USE_MUTATION_OBSERVER=!0,_._setupCrossOriginUpdater=function(){return d||(d=function(s,e){!s||!e?p=O():p=M(s,e),a.forEach(function(i){i._checkForIntersections()})}),d},_._resetCrossOriginUpdater=function(){d=null,p=null},_.prototype.observe=function(s){var e=this._observationTargets.some(function(i){return i.element==s});if(!e){if(!(s&&s.nodeType==1))throw new Error("target must be an Element");this._registerInstance(),this._observationTargets.push({element:s,entry:null}),this._monitorIntersections(s.ownerDocument),this._checkForIntersections()}},_.prototype.unobserve=function(s){this._observationTargets=this._observationTargets.filter(function(e){return e.element!=s}),this._unmonitorIntersections(s.ownerDocument),this._observationTargets.length==0&&this._unregisterInstance()},_.prototype.disconnect=function(){this._observationTargets=[],this._unmonitorAllIntersections(),this._unregisterInstance()},_.prototype.takeRecords=function(){var s=this._queuedEntries.slice();return this._queuedEntries=[],s},_.prototype._initThresholds=function(s){var e=s||[0];return Array.isArray(e)||(e=[e]),e.sort().filter(function(i,o,l){if(typeof i!="number"||isNaN(i)||i<0||i>1)throw new Error("threshold must be a number between 0 and 1 inclusively");return i!==l[o-1]})},_.prototype._parseRootMargin=function(s){var e=s||"0px",i=e.split(/\s+/).map(function(o){var l=/^(-?\d*\.?\d+)(px|%)$/.exec(o);if(!l)throw new Error("rootMargin must be specified in pixels or percent");return{value:parseFloat(l[1]),unit:l[2]}});return i[1]=i[1]||i[0],i[2]=i[2]||i[0],i[3]=i[3]||i[1],i},_.prototype._monitorIntersections=function(s){var e=s.defaultView;if(e&&this._monitoringDocuments.indexOf(s)==-1){var i=this._checkForIntersections,o=null,l=null;this.POLL_INTERVAL?o=e.setInterval(i,this.POLL_INTERVAL):(C(e,"resize",i,!0),C(s,"scroll",i,!0),this.USE_MUTATION_OBSERVER&&"MutationObserver"in e&&(l=new e.MutationObserver(i),l.observe(s,{attributes:!0,childList:!0,characterData:!0,subtree:!0}))),this._monitoringDocuments.push(s),this._monitoringUnsubscribes.push(function(){var b=s.defaultView;b&&(o&&b.clearInterval(o),j(b,"resize",i,!0)),j(s,"scroll",i,!0),l&&l.disconnect()});var v=this.root&&(this.root.ownerDocument||this.root)||n;if(s!=v){var g=c(s);g&&this._monitorIntersections(g.ownerDocument)}}},_.prototype._unmonitorIntersections=function(s){var e=this._monitoringDocuments.indexOf(s);if(e!=-1){var i=this.root&&(this.root.ownerDocument||this.root)||n,o=this._observationTargets.some(function(g){var b=g.element.ownerDocument;if(b==s)return!0;for(;b&&b!=i;){var x=c(b);if(b=x&&x.ownerDocument,b==s)return!0}return!1});if(!o){var l=this._monitoringUnsubscribes[e];if(this._monitoringDocuments.splice(e,1),this._monitoringUnsubscribes.splice(e,1),l(),s!=i){var v=c(s);v&&this._unmonitorIntersections(v.ownerDocument)}}}},_.prototype._unmonitorAllIntersections=function(){var s=this._monitoringUnsubscribes.slice(0);this._monitoringDocuments.length=0,this._monitoringUnsubscribes.length=0;for(var e=0;e<s.length;e++)s[e]()},_.prototype._checkForIntersections=function(){if(!(!this.root&&d&&!p)){var s=this._rootIsInDom(),e=s?this._getRootRect():O();this._observationTargets.forEach(function(i){var o=i.element,l=I(o),v=this._rootContainsTarget(o),g=i.entry,b=s&&v&&this._computeTargetAndRootIntersection(o,l,e),x=null;this._rootContainsTarget(o)?(!d||this.root)&&(x=e):x=O();var S=i.entry=new f({time:$(),target:o,boundingClientRect:l,rootBounds:x,intersectionRect:b});g?s&&v?this._hasCrossedThreshold(g,S)&&this._queuedEntries.push(S):g&&g.isIntersecting&&this._queuedEntries.push(S):this._queuedEntries.push(S)},this),this._queuedEntries.length&&this._callback(this.takeRecords(),this)}},_.prototype._computeTargetAndRootIntersection=function(s,e,i){if(window.getComputedStyle(s).display!="none"){for(var o=e,l=R(s),v=!1;!v&&l;){var g=null,b=l.nodeType==1?window.getComputedStyle(l):{};if(b.display=="none")return null;if(l==this.root||l.nodeType==9)if(v=!0,l==this.root||l==n)d&&!this.root?!p||p.width==0&&p.height==0?(l=null,g=null,o=null):g=p:g=i;else{var x=R(l),S=x&&I(x),N=x&&this._computeTargetAndRootIntersection(x,S,i);S&&N?(l=x,g=M(S,N)):(l=null,o=null)}else{var V=l.ownerDocument;l!=V.body&&l!=V.documentElement&&b.overflow!="visible"&&(g=I(l))}if(g&&(o=W(g,o)),!o)break;l=l&&R(l)}return o}},_.prototype._getRootRect=function(){var s;if(this.root&&!F(this.root))s=I(this.root);else{var e=F(this.root)?this.root:n,i=e.documentElement,o=e.body;s={top:0,left:0,right:i.clientWidth||o.clientWidth,width:i.clientWidth||o.clientWidth,bottom:i.clientHeight||o.clientHeight,height:i.clientHeight||o.clientHeight}}return this._expandRectByRootMargin(s)},_.prototype._expandRectByRootMargin=function(s){var e=this._rootMarginValues.map(function(o,l){return o.unit=="px"?o.value:o.value*(l%2?s.width:s.height)/100}),i={top:s.top-e[0],right:s.right+e[1],bottom:s.bottom+e[2],left:s.left-e[3]};return i.width=i.right-i.left,i.height=i.bottom-i.top,i},_.prototype._hasCrossedThreshold=function(s,e){var i=s&&s.isIntersecting?s.intersectionRatio||0:-1,o=e.isIntersecting?e.intersectionRatio||0:-1;if(i!==o)for(var l=0;l<this.thresholds.length;l++){var v=this.thresholds[l];if(v==i||v==o||v<i!=v<o)return!0}},_.prototype._rootIsInDom=function(){return!this.root||U(n,this.root)},_.prototype._rootContainsTarget=function(s){var e=this.root&&(this.root.ownerDocument||this.root)||n;return U(e,s)&&(!this.root||e==s.ownerDocument)},_.prototype._registerInstance=function(){a.indexOf(this)<0&&a.push(this)},_.prototype._unregisterInstance=function(){var s=a.indexOf(this);s!=-1&&a.splice(s,1)};function $(){return window.performance&&performance.now&&performance.now()}function w(s,e){var i=null;return function(){i||(i=setTimeout(function(){s(),i=null},e))}}function C(s,e,i,o){typeof s.addEventListener=="function"?s.addEventListener(e,i,o||!1):typeof s.attachEvent=="function"&&s.attachEvent("on"+e,i)}function j(s,e,i,o){typeof s.removeEventListener=="function"?s.removeEventListener(e,i,o||!1):typeof s.detachEvent=="function"&&s.detachEvent("on"+e,i)}function W(s,e){var i=Math.max(s.top,e.top),o=Math.min(s.bottom,e.bottom),l=Math.max(s.left,e.left),v=Math.min(s.right,e.right),g=v-l,b=o-i;return g>=0&&b>=0&&{top:i,bottom:o,left:l,right:v,width:g,height:b}||null}function I(s){var e;try{e=s.getBoundingClientRect()}catch{}return e?(e.width&&e.height||(e={top:e.top,right:e.right,bottom:e.bottom,left:e.left,width:e.right-e.left,height:e.bottom-e.top}),e):O()}function O(){return{top:0,bottom:0,left:0,right:0,width:0,height:0}}function k(s){return!s||"x"in s?s:{top:s.top,y:s.top,bottom:s.bottom,left:s.left,x:s.left,right:s.right,width:s.width,height:s.height}}function M(s,e){var i=e.top-s.top,o=e.left-s.left;return{top:i,left:o,height:e.height,width:e.width,bottom:i+e.height,right:o+e.width}}function U(s,e){for(var i=e;i;){if(i==s)return!0;i=R(i)}return!1}function R(s){var e=s.parentNode;return s.nodeType==9&&s!=n?c(s):(e&&e.assignedSlot&&(e=e.assignedSlot.parentNode),e&&e.nodeType==11&&e.host?e.host:e)}function F(s){return s&&s.nodeType===9}window.IntersectionObserver=_,window.IntersectionObserverEntry=f})();const st={class:"banner"},et={class:"bannerSl swiper"},it={class:"swiper-wrapper"},nt=t("div",{class:"bannerSlbox flex-a"},[t("img",{src:"/assets/images/banner/1.jpg",alt:"",class:"bannerSlbox__img"})],-1),ot=t("div",{class:"bannerSlbox flex-a"},[t("img",{src:"/assets/images/banner/2.jpg",alt:"",class:"bannerSlbox__img"})],-1),at=t("div",{class:"bannerSlbox flex-a"},[t("img",{src:"/assets/images/banner/3.jpg",alt:"",class:"bannerSlbox__img"})],-1),rt=t("div",{class:"bannerSlbox flex-a"},[t("img",{src:"/assets/images/banner/4.jpg",alt:"",class:"bannerSlbox__img"})],-1),lt=t("div",{class:"bannerSlbox flex-a"},[t("img",{src:"/assets/images/banner/5.jpg",alt:"",class:"bannerSlbox__img"})],-1),ct=t("i",{class:"fa-sharp fa-solid fa-chevron-left"},null,-1),dt=[ct],ut=t("i",{class:"fa-sharp fa-solid fa-chevron-right"},null,-1),ht=[ut],_t={__name:"HomeBanner",props:{on:Boolean},setup(c){let n=null;const a=f=>{n=f},d=()=>{n.slideNext()},p=()=>{n.slidePrev()};return(f,_)=>(y(),T("section",st,[t("div",et,[t("div",it,[r(u(L),{ref:"{swiperRef}",navigation:!0,"slides-per-view":1,centeredSlides:!0,"space-between":30,loop:!0,speed:800,onSwiper:a},{default:h(()=>[r(u(m),{class:"swiper-slide"},{default:h(()=>[nt]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[ot]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[at]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[rt]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[lt]),_:1})]),_:1},512)]),t("div",{class:"swiper-button-prev bannerSlArr bannerSlArr2 flex-a r-50",onClick:p},dt),t("div",{class:"swiper-button-next bannerSlArr bannerSlArr1 flex-a r-50",onClick:d},ht)])]))}},mt={},pt={class:"h-story"},ft=t("h2",{class:"section-hdng section-hdng--h-story"},"حكايتنا",-1),gt=t("div",{class:"h-story-VideoBox"},[t("iframe",{src:"https://www.youtube.com/embed/nV4gU3gTjPk",title:"YouTube video player",frameborder:"0"}),t("div",{class:"litters2 a1"},[t("p",null,"ق")]),t("div",{class:"litters2 a2"},[t("p",null,"أ")]),t("div",{class:"litters2 a3"},[t("p",null,"ض")]),t("div",{class:"litters2 a4"},[t("p",null,"ج")]),t("div",{class:"litters2 a5"},[t("p",null,"د")]),t("div",{class:"litters2 a6"},[t("p",null,"ب")])],-1),vt=[ft,gt];function bt(c,n){return y(),T("section",pt,vt)}const wt=E(mt,[["render",bt]]),xt={class:"clients"},Ct={class:"container"},yt=t("h2",{class:"section-hdng section-hdng--clients"},"أبرز عملائنا الاستراتيجيين",-1),$t=t("p",{class:"clients__para"}," نمتاز في بيت عربي بشبكة واسعة من الشراكات مع نخبة من المؤسسات الحكومية والخاصة الفاعلة باختصاصات متعددة ثقافية تجارية اجتماعية ",-1),St={class:"clientsSl swiper"},At=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/1.jpeg",alt:"",class:"clients-slide__img"})],-1),Tt=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/2.png",alt:"",class:"clients-slide__img"})],-1),Ot=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/3.jpeg",alt:"",class:"clients-slide__img"})],-1),It=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/4.jpeg",alt:"",class:"clients-slide__img"})],-1),Rt=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/5.jpeg",alt:"",class:"clients-slide__img"})],-1),Bt=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/6.png",alt:"",class:"clients-slide__img"})],-1),Et=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/7.jpeg",alt:"",class:"clients-slide__img"})],-1),jt=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/8.png",alt:"",class:"clients-slide__img"})],-1),kt=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/9.png",alt:"",class:"clients-slide__img"})],-1),Dt=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/10.jpeg",alt:"",class:"clients-slide__img"})],-1),Lt=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/11.png",alt:"",class:"clients-slide__img"})],-1),Mt=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/12.jpeg",alt:"",class:"clients-slide__img"})],-1),Ut=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/13.png",alt:"",class:"clients-slide__img"})],-1),Ft=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/14.jpeg",alt:"",class:"clients-slide__img"})],-1),Nt=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/15.jpeg",alt:"",class:"clients-slide__img"})],-1),Vt=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/16.jpeg",alt:"",class:"clients-slide__img"})],-1),Pt=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/17.jpeg",alt:"",class:"clients-slide__img"})],-1),qt=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/18.jpeg",alt:"",class:"clients-slide__img"})],-1),Ht=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/19.jpeg",alt:"",class:"clients-slide__img"})],-1),Gt=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/20.jpeg",alt:"",class:"clients-slide__img"})],-1),Wt=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/21.jpeg",alt:"",class:"clients-slide__img"})],-1),zt=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/22.jpeg",alt:"",class:"clients-slide__img"})],-1),Jt=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/23.jpeg",alt:"",class:"clients-slide__img"})],-1),Kt=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/24.jpeg",alt:"",class:"clients-slide__img"})],-1),Yt=t("div",{class:"clients-slide flex-a"},[t("img",{src:"/assets/images/clients/25.png",alt:"",class:"clients-slide__img"})],-1),Qt=t("i",{class:"fa-sharp fa-solid fa-chevron-left"},null,-1),Xt=[Qt],Zt=t("i",{class:"fa-sharp fa-solid fa-chevron-right"},null,-1),ts=[Zt],ss={__name:"HomeClients",setup(c){let n=null;const a=f=>{n=f},d=()=>{n.slideNext()},p=()=>{n.slidePrev()};return(f,_)=>(y(),T("section",xt,[t("div",Ct,[yt,$t,t("div",St,[r(u(L),{style:{"padding-top":"15px"},ref:"{swiperRef}",modules:[u(J)],navigation:!0,"slides-per-view":7,centeredSlides:!0,"space-between":30,loop:!0,speed:800,autoplay:{delay:1e3,disableOnInteraction:!1},onSwiper:a},{default:h(()=>[r(u(m),{class:"swiper-slide"},{default:h(()=>[At]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[Tt]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[Ot]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[It]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[Rt]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[Bt]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[Et]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[jt]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[kt]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[Dt]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[Lt]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[Mt]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[Ut]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[Ft]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[Nt]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[Vt]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[Pt]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[qt]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[Ht]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[Gt]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[Wt]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[zt]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[Jt]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[Kt]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[Yt]),_:1})]),_:1},8,["modules"]),t("div",{class:"swiper-button-prev clientsSlArr clientsSlArr2 flex-a r-50",onClick:p},Xt),t("div",{class:"swiper-button-next clientsSlArr clientsSlArr1 flex-a r-50",onClick:d},ts)])])]))}},es={},is={class:"clubs-sec"},ns=t("div",{class:"container"},[t("h2",{class:"section-hdng section-hdng--clubs-sec"},"النوادي والدورات"),t("ul",{class:"clubs-secList",role:"tablist"},[t("li",{class:"orPagList__item",role:"presentation"},[t("div",{class:"clubs-secList__btn active","data-bs-toggle":"pill","data-bs-target":"#allorders",type:"button",role:"tab","aria-selected":"true"}," نوادي اللّغة العربيّة ")]),t("li",{class:"orPagList__item",role:"presentation"},[t("div",{class:"clubs-secList__btn","data-bs-toggle":"pill","data-bs-target":"#toshippingorders",type:"button",role:"tab","aria-selected":"false"}," نوادٍ إبداعية ")]),t("li",{class:"orPagList__item",role:"presentation"},[t("div",{class:"clubs-secList__btn","data-bs-toggle":"pill","data-bs-target":"#completeorders",type:"button",role:"tab","aria-selected":"false"}," النادي الصّيفي ")]),t("li",{class:"orPagList__item",role:"presentation"},[t("div",{class:"clubs-secList__btn","data-bs-toggle":"pill","data-bs-target":"#canceledorders",type:"button",role:"tab","aria-selected":"false"}," دورات تدريبيّة للكبار ")])]),t("div",{class:"tab-content clubsContent",id:"pills-tabContent"},[t("div",{class:"tab-pane fade show active",id:"allorders",role:"tabpanel",tabindex:"0"},[t("div",{class:"clubsContentTab"},[t("div",{class:"clubsContentTabBox1"},[t("img",{src:"/assets/images/clubs/1.png",alt:"",class:"clubsContentTabBox1__img"})]),t("div",{class:"clubsContentTabBox2"},[t("h3",{class:"clubsContentTabBox2__h3"},"نوادي اللّغة العربيّة"),t("p",{class:"clubsContentTabBox2__p"}," نقدّم منهجاً مبسّطاً بأسلوب تفاعليّ يتضمّن الكثير من الألعاب التّعليميّة والفنون والقصص والدّراما؛ لنوفّر للطّفل فرصة التّعبير عن نفسهِ وتعلّم مهارات إبداعيّة جديدة باللّغة العربيّة، لكلّ من النّاطقين باللّغة العربيّة وغير الناطقين بها. "),t("p",{class:"clubsContentTabBox2__p"}," من سنّ 4 سنوات فما فوق "),t("p",{class:"clubsContentTabBox2__p"}," في المركز أو عن بعد أو في البيوت "),t("a",{href:"contact-us.html",class:"clubsContentTabBox2-btn flex-a"}," التسجيل في النادي")])])]),t("div",{class:"tab-pane fade",id:"toshippingorders",role:"tabpanel",tabindex:"0"},[t("div",{class:"clubsContentTab"},[t("div",{class:"clubsContentTabBox1"},[t("img",{src:"/assets/images/clubs/2.png",alt:"",class:"clubsContentTabBox1__img"})]),t("div",{class:"clubsContentTabBox2"},[t("h3",{class:"clubsContentTabBox2__h3"},"نوادٍ إبداعية"),t("p",{class:"clubsContentTabBox2__p"}," وفيها كلّ ما يجمع الثّقافة العربيّة بفنونها وأصالتها بأسلوب إبداعيّ مرح مميّز يحاكي فكر الطّفل في مراحله المختلفة، وتشمل: الكتابة الإبداعيّة، الدّراما، سطور من القرآن، الكورال. "),t("a",{href:"contact-us.html",class:"clubsContentTabBox2-btn flex-a"}," التسجيل في النادي")])])]),t("div",{class:"tab-pane fade",id:"completeorders",role:"tabpanel",tabindex:"0"},[t("div",{class:"clubsContentTab"},[t("div",{class:"clubsContentTabBox1"},[t("img",{src:"/assets/images/clubs/3.png",alt:"",class:"clubsContentTabBox1__img"})]),t("div",{class:"clubsContentTabBox2"},[t("h3",{class:"clubsContentTabBox2__h3"},"النادي الصّيفي"),t("p",{class:"clubsContentTabBox2__p"}," يتضمن 4 نواد: "),t("p",{class:"clubsContentTabBox2__p"}," 1- نـادي الــقــراءة والــكــتــابــة الإبــداعــيــة: ( الحروف الأبجدية - تكوين الكلمات - ألعاب تفاعلية - كتابة إبداعية - محادثة ومفردات - قصص وخيال ) "),t("p",{class:"clubsContentTabBox2__p"}," 2- نـادي ســطــور مــن الــقــرآن: ( مخارج الحروف - تحليل الكلمات صوتياً - إدراك الفصاحة والبلاغة - قصص من القرآن و قصص الأنبياء ) "),t("p",{class:"clubsContentTabBox2__p"}," 3- نـادي الــــدرامـــــا : ( دعم لغة الجسد - لعب الأدوار - التعبير عن الذات - كسر الجمود والخجل والخوف - الارتجال ) "),t("p",{class:"clubsContentTabBox2__p"}," 4- نادي الفنون والمهارات الإبداعية : ( موسيقى - أشغال يدوية - أغانٍ عربية للأطفال - فن تزيين الطعام - سحر التفاعلات العلمية - مهارات الحياة العملية - صناعة دمى ) "),t("a",{href:"contact-us.html",class:"clubsContentTabBox2-btn flex-a"}," التسجيل في النادي")])])]),t("div",{class:"tab-pane fade",id:"canceledorders",role:"tabpanel",tabindex:"0"},[t("div",{class:"clubsContentTab"},[t("div",{class:"clubsContentTabBox1"},[t("img",{src:"/assets/images/clubs/4.png",alt:"",class:"clubsContentTabBox1__img"})]),t("div",{class:"clubsContentTabBox2"},[t("h3",{class:"clubsContentTabBox2__h3"},"دورات تدريبيّة للكبار"),t("p",{class:"clubsContentTabBox2__p"}," ورشات ودورات باللّغة العربيّة للموظّفين والعاملين والأمّهات والمعلّمات، مثل: القراءة أسلوب حياة، التّعليم الإبداعيّ للّغة العربيّة، الكتابة الإبداعيّة، منهجيّات سرد القصّة. "),t("a",{href:"contact-us.html",class:"clubsContentTabBox2-btn flex-a"}," التسجيل في النادي")])])])])],-1),os=[ns];function as(c,n){return y(),T("section",is,os)}const rs=E(es,[["render",as]]),ls={},cs={class:"hmevents"},ds=q('<div class="container"><h2 class="section-hdng section-hdng--hmevents">الفعاليّات والعروض</h2><div class="row hmeventsRow"><div class="col-xl-4 col-lg-4 col-md-6 col-sm-12"><div class="hmeventsCard"><div class="hmeventsCard-img-hold"><img src="/assets/images/events/1.jpeg" alt="" class="hmeventsCard-img"></div><div class="hmeventsCard__body"><a href="#" class="hmeventsCard__h2">الحكواتي</a><p class="hmeventsCard__p"> نقدّم في بيت عربي خدمات لوجستية لجميع الفعاليّات حيث لدينا فريق كامل من المتخصّصين في تحريك واستخدام دمى المسرح، كما لدينا مجموعة كاملة من الدّمى المتحركة التي تحرَّك باليد أو الخيطان، ولكلّ مجموعة قصّة خاصّة مع التّسجيل الصّوتي و المؤثّرات، حيث نعمل على تنظيم وترتيب كلّ ما يحتاجه المسرح من ديكور وألوان بالإضافة إلى جميع الإكسسوارات والإضاءة، ونلبّي جميع الاحتياجات الخاصّة، كما لدينا فريق مختصّ بالدّعاية والإعلان يعمل على تنظيم الحملة الدّعائيّة للبرامج، وفرق لتقديم جميع العروض الفنّيّة والشّعبيّة والرّقصات والفلكلور من بلدان مختلفة، وعروض السّيرك المتميّزة المناسبة للكبار والصّغار . </p></div></div></div><div class="col-xl-4 col-lg-4 col-md-6 col-sm-12"><div class="hmeventsCard"><div class="hmeventsCard-img-hold"><img src="/assets/images/events/2.jpeg" alt="" class="hmeventsCard-img"></div><div class="hmeventsCard__body"><a href="#" class="hmeventsCard__h2">مسرح دمى</a><p class="hmeventsCard__p"> نقدّم في بيت عربي خدمات لوجستية لجميع الفعاليّات حيث لدينا فريق كامل من المتخصّصين في تحريك واستخدام دمى المسرح، كما لدينا مجموعة كاملة من الدّمى المتحركة التي تحرَّك باليد أو الخيطان، ولكلّ مجموعة قصّة خاصّة مع التّسجيل الصّوتي و المؤثّرات، حيث نعمل على تنظيم وترتيب كلّ ما يحتاجه المسرح من ديكور وألوان بالإضافة إلى جميع الإكسسوارات والإضاءة، ونلبّي جميع دينا فريق مختصّ بالدّعا </p></div></div></div><div class="col-xl-4 col-lg-4 col-md-6 col-sm-12"><div class="hmeventsCard"><div class="hmeventsCard-img-hold"><img src="/assets/images/events/3.jpeg" alt="" class="hmeventsCard-img"></div><div class="hmeventsCard__body"><a href="#" class="hmeventsCard__h2">الحكواتي</a><p class="hmeventsCard__p"> نقدّم في بيت عربي خدمات لوجستية لجميع الفعاليّات حيث لدينا فريق كامل من المتخصّصين في تحريك واستخدام دمى المسرح، كما لدينا مجموعة كاملة من الدّمى المتحركة التي تحرَّك باليد أو الخيطان، ولكلّ مجموعة قصّة خاصّة مع التّسجيل الصّوتي و المؤثّرات، حيث نعمل على تنظيم وترتيب كلّ ما يحتاالفنّيّة والغار . </p></div></div></div><div class="col-xl-4 col-lg-4 col-md-6 col-sm-12"><div class="hmeventsCard"><div class="hmeventsCard-img-hold"><img src="/assets/images/events/4.jpeg" alt="" class="hmeventsCard-img"></div><div class="hmeventsCard__body"><a href="#" class="hmeventsCard__h2">مسرح دمى</a><p class="hmeventsCard__p"> نقدّم في بيت عربي خدمات لوجستية لجميع الفعاليّات حيث لدينا فريق كامل من المتخصّصين في تحريك واستخدام دمى المسرح، كما لدينا مجموعة كاملة من الدّمى المتحركة التي تحرَّك باليد أو الخيطان، ولكلّ مجموعة قصّة خاصّة مع التّسجيل الصّوتي و المؤثّرات، حيث نعمل على تنظيم وترتيب كلّ ما يحتاجه المسرح من ديكور وألوان بالإضافة إلى جميع الإكسسوارات والإضاءة، ونلبّي جميع دينا فريق مختصّ بالدّعا </p></div></div></div><div class="col-xl-4 col-lg-4 col-md-6 col-sm-12"><div class="hmeventsCard"><div class="hmeventsCard-img-hold"><img src="/assets/images/events/1.jpeg" alt="" class="hmeventsCard-img"></div><div class="hmeventsCard__body"><a href="#" class="hmeventsCard__h2">الحكواتي</a><p class="hmeventsCard__p"> نقدّم في بيت عربي خدمات لوجستية لجميع الفعاليّات حيث لدينا فريق كامل من المتخصّصين في تحريك واستخدام دمى المسرح، كما لدينا مجموعة كاملة من الدّمى المتحركة التي تحرَّك باليد أو الخيطان، ولكلّ مجموعة قصّة خاصّة مع التّسجيل الصّوتي و المؤثّرات، حيث نعمل على تنظيم وترتيب كلّ ما يحتاجه المسرح من ديكور وألوان بالإضافة إلى جميع الإكسسوارات والإضاءة، ونلبّي جميع الاحتياجات الخاصّة، كما لدينا فريق مختصّ بالدّعاية والإعلان يعمل على تنظيم الحملة الدّعائيّة للبرامج، وفرق لتقديم جميع العروض الفنّيّة والشّعبيّة والرّقصات والفلكلور من بلدان مختلفة، وعروض السّيرك المتميّزة المناسبة للكبار والصّغار . </p></div></div></div><div class="col-xl-4 col-lg-4 col-md-6 col-sm-12"><div class="hmeventsCard"><div class="hmeventsCard-img-hold"><img src="/assets/images/events/2.jpeg" alt="" class="hmeventsCard-img"></div><div class="hmeventsCard__body"><a href="#" class="hmeventsCard__h2">مسرح دمى</a><p class="hmeventsCard__p"> نقدّم في بيت عربي خدمات لوجستية لجميع الفعاليّات حيث لدينا فريق كامل من المتخصّصين في تحريك واستخدام دمى المسرح، كما لدينا مجموعة كاملة من الدّمى المتحركة التي تحرَّك باليد أو الخيطان، ولكلّ مجموعة قصّة خاصّة مع التّسجيل الصّوتي و المؤثّرات، حيث نعمل على تنظيم وترتيب كلّ ما يحتاجه المسرح من ديكور وألوان بالإضافة إلى جميع الإكسسوارات والإضاءة، ونلبّي جميع دينا فريق مختصّ بالدّعا </p></div></div></div></div></div>',1),us=[ds];function hs(c,n){return y(),T("section",cs,us)}const _s=E(ls,[["render",hs]]),ms={class:"parentOpinion"},ps={class:"container"},fs=t("h2",{class:"section-hdng section-hdng--parentOpinion"},"آراء الأهالي",-1),gs={class:"parentOpinionSl swiper"},vs=t("div",{class:"prnOpnSlide"},[t("i",{class:"fa-solid fa-quote-right prnOpnSlidequote"}),t("p",{class:"prnOpnSlide__para"}," إذا كنت تبحث عن الإثارة والتّشويق، إذا كنت تبحث عن المتعة والفائدة، إذا كنت تبحث عن التعلّم والإبداع والتخيل في اللغة العربية وأحرف الهجاء؛ وأكثر من هذا بكثير ما عليك سوى الذهاب إلى (بيت عربي) حيث ستجد كل ذلك وأكثر....شكراً من القلب لجهودكم الجبّارة في إحياء لغتنا الأُمّ في قلوب أطفالنا وعقولهم ")],-1),bs=t("p",{class:"prnOpnSlide-p"},"أم أماريس",-1),ws=t("div",{class:"prnOpnSlide"},[t("i",{class:"fa-solid fa-quote-right prnOpnSlidequote"}),t("p",{class:"prnOpnSlide__para"}," بيت عربي كان بمثابة بيت السعادة والمرح الثاني لأطفالي، لم يتعلموا فقط اللغة العربية وأبجديتها، ولكن تعلموا التعبير عن أنفسهم أيضاً، مما جعل ثقتهم بقدراتهم تزداد، كما أن بيت عربي احتضنهم وعلّمهم محبة لغتهم الأم، واستخدامها في حياتهم اليومية، والتحدث بها أولاً، ودائماً القراءة ثم القراءة، فأكثر أساليب بيت عربي أهميّة للوصول إلى قلب أطفالي هو تركيزهم على قراءة القصص والحوار الممتع والشيق. ")],-1),xs=t("p",{class:"prnOpnSlide-p"},"أم أماريس",-1),Cs=t("i",{class:"fa-sharp fa-solid fa-chevron-left"},null,-1),ys=[Cs],$s=t("i",{class:"fa-sharp fa-solid fa-chevron-right"},null,-1),Ss=[$s],As={__name:"HomeParentOpinion",setup(c){let n=null;const a=f=>{n=f},d=()=>{n.slideNext()},p=()=>{n.slidePrev()};return(f,_)=>(y(),T("section",ms,[t("div",ps,[fs,t("div",gs,[r(u(L),{style:{"padding-top":"15px"},ref:"{swiperRef}",navigation:!0,"slides-per-view":1,centeredSlides:!0,"space-between":30,loop:!0,speed:800,onSwiper:a},{default:h(()=>[r(u(m),{class:"swiper-slide"},{default:h(()=>[vs,bs]),_:1}),r(u(m),{class:"swiper-slide"},{default:h(()=>[ws,xs]),_:1})]),_:1},512),t("div",{class:"swiper-button-prev parentOpinionSlArr parentOpinionSlArr2 flex-a r-50",onClick:p},ys),t("div",{class:"swiper-button-next parentOpinionSlArr parentOpinionSlArr1 flex-a r-50",onClick:d},Ss)])])]))}};var G=K({name:"Vue3Autocounter",interval:null,props:{startAmount:{type:Number,default:0},endAmount:{type:Number,default:0,required:!0},duration:{type:Number,default:3,validator(c){return c>=1}},autoinit:{type:Boolean,default:!0},prefix:{type:String,default:""},suffix:{type:String,default:""},separator:{type:String,default:","},decimalSeparator:{type:String,default:"."},decimals:{type:Number,default:0,validator(c){return c>=0}}},data(){return{timestamp:0,startTimestamp:0,currentAmount:0,currentStartAmount:0,currentDuration:0,paused:!1,remaining:0,animationFrame:0}},mounted(){this.currentAmount=this.startAmount,this.currentStartAmount=this.startAmount,this.currentDuration=this.duration*1e3,this.remaining=this.duration*1e3,this.autoinit?this.start():this.paused=!0,this.$emit("mounted")},unmounted(){this.cancelAnimation()},watch:{startAmount(){this.reset()},endAmount(){this.reset()},duration(){this.reset()}},computed:{isCountingUp(){return this.endAmount>this.startAmount},displayedAmount(){return`${this.prefix}${this.formatedAmount}${this.suffix}`},formatedAmount(){const c=/(\d+)(\d{3})/;let n=this.currentAmount.toFixed(this.decimals);n+="";let a=n.split("."),d=a[0],p=a.length>1?this.decimalSeparator+a[1]:"",f=!isNaN(parseFloat(this.separator));if(this.separator&&!f)for(;c.test(d);)d=d.replace(c,"$1"+this.separator+"$2");return d+p}},methods:{start(){this.cancelAnimation(),this.currentStartAmount=this.startAmount,this.startTimestamp=null,this.currentDuration=this.duration*1e3,this.paused=!1,this.animationFrame=window.requestAnimationFrame(this.counting)},pause(){this.paused||(this.cancelAnimation(),this.paused=!0)},resume(){this.paused&&(this.startTimestamp=null,this.currentDuration=+this.remaining,this.currentStartAmount=+this.currentAmount,this.animationFrame=window.requestAnimationFrame(this.counting),this.paused=!1)},reset(){this.paused=!1,this.startTimestamp=null,this.cancelAnimation(),this.currentAmount=this.startAmount,this.autoinit?this.start():this.paused=!0},counting(c){this.timestamp=c,this.startTimestamp||(this.startTimestamp=c);let n=c-this.startTimestamp;this.remaining=this.currentDuration-n,this.isCountingUp?(this.currentAmount=this.currentStartAmount+(this.endAmount-this.currentStartAmount)*(n/this.currentDuration),this.currentAmount=this.currentAmount>this.endAmount?this.endAmount:this.currentAmount):(this.currentAmount=this.currentStartAmount-(this.currentStartAmount-this.endAmount)*(n/this.currentDuration),this.currentAmount=this.currentAmount<this.endAmount?this.endAmount:this.currentAmount),n<this.currentDuration?this.animationFrame=window.requestAnimationFrame(this.counting):setTimeout(()=>{this.$emit("finished")},1e3)},cancelAnimation(){this.animationFrame&&window.cancelAnimationFrame(this.animationFrame)}}});function Ts(c,n,a,d,p,f){return y(),H("span",null,Y(c.displayedAmount),1)}G.render=Ts;var Os=(()=>{const c=G;return c.install=n=>{n.component("Vue3Autocounter",c)},c})();const B=Os;var P={expireTimes:"1d",path:"; path=/",domain:"",secure:!1,sameSite:"; SameSite=Lax"},Is=function(){function c(){this.current_default_config=P}return c.prototype.config=function(n){for(var a in this.current_default_config)this.current_default_config[a]=n[a]?n[a]:P[a]},c.prototype.get=function(n){var a=decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*"+encodeURIComponent(n).replace(/[\-\.\+\*]/g,"\\$&")+"\\s*\\=\\s*([^;]*).*$)|^.*$"),"$1"))||null;if(a&&a.substring(0,1)==="{"&&a.substring(a.length-1,a.length)==="}")try{a=JSON.parse(a)}catch{return a}return a},c.prototype.set=function(n,a,d,p,f,_,$){if(n){if(/^(?:expires|max-age|path|domain|secure|SameSite)$/i.test(n))throw new Error('Cookie name illegality. Cannot be set to ["expires","max-age","path","domain","secure","SameSite"]	 current key name: '+n)}else throw new Error("Cookie name is not found in the first argument.");a&&a.constructor===Object&&(a=JSON.stringify(a));var w="";if(d==null&&(d=this.current_default_config.expireTimes?this.current_default_config.expireTimes:""),d&&d!=0)switch(d.constructor){case Number:d===1/0||d===-1?w="; expires=Fri, 31 Dec 9999 23:59:59 GMT":w="; max-age="+d;break;case String:if(/^(?:\d+(y|m|d|h|min|s))$/i.test(d)){var C=d.replace(/^(\d+)(?:y|m|d|h|min|s)$/i,"$1");switch(d.replace(/^(?:\d+)(y|m|d|h|min|s)$/i,"$1").toLowerCase()){case"m":w="; max-age="+ +C*2592e3;break;case"d":w="; max-age="+ +C*86400;break;case"h":w="; max-age="+ +C*3600;break;case"min":w="; max-age="+ +C*60;break;case"s":w="; max-age="+C;break;case"y":w="; max-age="+ +C*31104e3;break}}else w="; expires="+d;break;case Date:w="; expires="+d.toUTCString();break}return document.cookie=encodeURIComponent(n)+"="+encodeURIComponent(a)+w+(f?"; domain="+f:this.current_default_config.domain?this.current_default_config.domain:"")+(p?"; path="+p:this.current_default_config.path?this.current_default_config.path:"; path=/")+(_==null?this.current_default_config.secure?"; Secure":"":_?"; Secure":"")+($==null?this.current_default_config.sameSite?"; SameSute="+this.current_default_config.sameSite:"":$?"; SameSite="+$:""),this},c.prototype.remove=function(n,a,d){return!n||!this.isKey(n)?!1:(document.cookie=encodeURIComponent(n)+"=; expires=Thu, 01 Jan 1970 00:00:00 GMT"+(d?"; domain="+d:this.current_default_config.domain?this.current_default_config.domain:"")+(a?"; path="+a:this.current_default_config.path?this.current_default_config.path:"; path=/")+"; SameSite=Lax",!0)},c.prototype.isKey=function(n){return new RegExp("(?:^|;\\s*)"+encodeURIComponent(n).replace(/[\-\.\+\*]/g,"\\$&")+"\\s*\\=").test(document.cookie)},c.prototype.keys=function(){if(!document.cookie)return[];for(var n=document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g,"").split(/\s*(?:\=[^;]*)?;\s*/),a=0;a<n.length;a++)n[a]=decodeURIComponent(n[a]);return n},c}(),D=null;function Rs(){D==null&&(D=new Is);var c=Q(D);return{cookies:c}}const Bs={class:"hmsuccess"},Es={class:"container"},js=t("h2",{class:"section-hdng section-hdng--hmsuccess"}," ما أنجزناه بالأرقام ",-1),ks=t("p",{class:"hmsuccess__para"}," تأسَّسَ مركز بيت عربي في حزيران في أبوظبي عام 2015، ونأمل أن نصل لقلب كل بيت في العالم. ",-1),Ds={class:"row hmsuccessRow"},Ls={class:"col-xl-3 col-lg-3 col-md-6 col-sm-12"},Ms={class:"numBox numBox1"},Us={class:"num__h3"},Fs=t("span",null,"+",-1),Ns={class:"num"},Vs=t("p",{class:"numBox__p"}," متطوع ومتطوعة ",-1),Ps={class:"col-xl-3 col-lg-3 col-md-6 col-sm-12"},qs={class:"numBox numBox2"},Hs={class:"num__h3"},Gs=t("span",null,"+",-1),Ws={class:"num"},zs=t("p",{class:"numBox__p"}," منسق ومدرب ",-1),Js={class:"col-xl-3 col-lg-3 col-md-6 col-sm-12"},Ks={class:"numBox numBox3"},Ys={class:"num__h3"},Qs=t("span",null,"+",-1),Xs={class:"num"},Zs=t("p",{class:"numBox__p"}," فعالية وعرض ",-1),te={class:"col-xl-3 col-lg-3 col-md-6 col-sm-12"},se={class:"numBox numBox4"},ee={class:"num__h3"},ie=t("span",null,"+",-1),ne={class:"num"},oe=t("p",{class:"numBox__p"}," طفل وطفلة ",-1),ae={__name:"HomeSuccess",setup(c){const{cookies:n}=Rs(),a=A(0),d=A(null),p=A(null),f=A(null),_=A(null),$=A(!0),w=()=>{a.value=window.scrollY||window.pageYOffset,a.value>1e3&&$.value==!0&&(d.value.start(),p.value.start(),f.value.start(),_.value.start(),$.value=!1)};return X(()=>{n.get("lnag")||n.set("lnag","en"),localStorage.getItem("lang")||localStorage.setItem("lang","en"),window.addEventListener("scroll",w)}),Z(()=>{window.removeEventListener("scroll",w)}),(C,j)=>(y(),T("section",Bs,[t("div",Es,[js,ks,t("div",Ds,[t("div",Ls,[t("div",Ms,[t("h2",Us,[Fs,t("span",Ns,[r(u(B),{ref_key:"counter1",ref:d,startAmount:0,endAmount:200,duration:3,autoinit:!1},null,512)])]),Vs])]),t("div",Ps,[t("div",qs,[t("h2",Hs,[Gs,t("span",Ws,[r(u(B),{ref_key:"counter2",ref:p,startAmount:0,endAmount:55,duration:3,autoinit:!1},null,512)])]),zs])]),t("div",Js,[t("div",Ks,[t("h2",Ys,[Qs,t("span",Xs,[r(u(B),{ref_key:"counter3",ref:f,startAmount:0,endAmount:160,duration:3,autoinit:!1},null,512)])]),Zs])]),t("div",te,[t("div",se,[t("h2",ee,[ie,t("span",ne,[r(u(B),{ref_key:"counter4",ref:_,startAmount:0,endAmount:2e3,duration:3,autoinit:!1},null,512)])]),oe])])])])]))}},re={},le={class:"testing"},ce=q('<img src="/assets/images/bg-cloud1.png" alt="" class="testing_bg1"><img src="/assets/images/bg-cloud1.png" alt="" class="testing_bg2"><div class="container"><h2 class="testing__h2">فلنبدأ رحلة التعلم</h2><p class="testing__para"> يوفر بيت عربي اختبار مجاني لتحديد مستوى طفلك باللّغة العربية لدعمه واتباع خطة دراسية كاملة حسب المستوى </p><a href="#" target="_blank" class="testing__btn flex-a">تحديد مستوى لطفلك</a></div>',3),de=[ce];function ue(c,n){return y(),T("section",le,de)}const he=E(re,[["render",ue]]),ve={__name:"Home",props:{meta:String,slider:Object,contact_us:Object,abouts:Object,services:Object,clients:Object,types_members:Object,members:Object,types_project:Object,projects:Object,questions:Object,projects_count:Object,clients_count:Object,locale:{type:String}},setup(c){return A(0),A(!0),tt({from:"",email:"",phone:"",message:""}),(n,a)=>(y(),H(z,{isHome:!0},{default:h(()=>[r(_t),r(wt),r(rs),r(As),r(he),r(_s),r(ss),r(ae)]),_:1}))}};export{ve as default};
