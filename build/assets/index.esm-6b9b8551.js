import{I as B,Q as A,R as J,d as j,S as K,U as y,x as W,C as z,j as b,V as Q,s as _,E as G}from"./app-f8d7c719.js";function Y(e,t){let r;return function(...s){clearTimeout(r),r=setTimeout(()=>e.apply(this,s),t)}}function v(e,t){return document.dispatchEvent(new CustomEvent(`inertia:${e}`,t))}var Z=e=>v("before",{cancelable:!0,detail:{visit:e}}),ee=e=>v("error",{detail:{errors:e}}),te=e=>v("exception",{cancelable:!0,detail:{exception:e}}),D=e=>v("finish",{detail:{visit:e}}),re=e=>v("invalid",{cancelable:!0,detail:{response:e}}),k=e=>v("navigate",{detail:{page:e}}),se=e=>v("progress",{detail:{progress:e}}),ie=e=>v("start",{detail:{visit:e}}),oe=e=>v("success",{detail:{page:e}});function R(e){return e instanceof File||e instanceof Blob||e instanceof FileList&&e.length>0||e instanceof FormData&&Array.from(e.values()).some(t=>R(t))||typeof e=="object"&&e!==null&&Object.values(e).some(t=>R(t))}function M(e,t=new FormData,r=null){e=e||{};for(let s in e)Object.prototype.hasOwnProperty.call(e,s)&&X(t,U(r,s),e[s]);return t}function U(e,t){return e?e+"["+t+"]":t}function X(e,t,r){if(Array.isArray(r))return Array.from(r.keys()).forEach(s=>X(e,U(t,s.toString()),r[s]));if(r instanceof Date)return e.append(t,r.toISOString());if(r instanceof File)return e.append(t,r,r.name);if(r instanceof Blob)return e.append(t,r);if(typeof r=="boolean")return e.append(t,r?"1":"0");if(typeof r=="string")return e.append(t,r);if(typeof r=="number")return e.append(t,`${r}`);if(r==null)return e.append(t,"");M(r,e,t)}var ne={modal:null,listener:null,show(e){typeof e=="object"&&(e=`All Inertia requests must receive a valid Inertia response, however a plain JSON response was received.<hr>${JSON.stringify(e)}`);let t=document.createElement("html");t.innerHTML=e,t.querySelectorAll("a").forEach(s=>s.setAttribute("target","_top")),this.modal=document.createElement("div"),this.modal.style.position="fixed",this.modal.style.width="100vw",this.modal.style.height="100vh",this.modal.style.padding="50px",this.modal.style.boxSizing="border-box",this.modal.style.backgroundColor="rgba(0, 0, 0, .6)",this.modal.style.zIndex=2e5,this.modal.addEventListener("click",()=>this.hide());let r=document.createElement("iframe");if(r.style.backgroundColor="white",r.style.borderRadius="5px",r.style.width="100%",r.style.height="100%",this.modal.appendChild(r),document.body.prepend(this.modal),document.body.style.overflow="hidden",!r.contentWindow)throw new Error("iframe not yet ready.");r.contentWindow.document.open(),r.contentWindow.document.write(t.outerHTML),r.contentWindow.document.close(),this.listener=this.hideOnEscape.bind(this),document.addEventListener("keydown",this.listener)},hide(){this.modal.outerHTML="",this.modal=null,document.body.style.overflow="visible",document.removeEventListener("keydown",this.listener)},hideOnEscape(e){e.keyCode===27&&this.hide()}};function E(e){return new URL(e.toString(),window.location.toString())}function H(e,t,r,s="brackets"){let l=/^https?:\/\//.test(t.toString()),c=l||t.toString().startsWith("/"),u=!c&&!t.toString().startsWith("#")&&!t.toString().startsWith("?"),f=t.toString().includes("?")||e==="get"&&Object.keys(r).length,m=t.toString().includes("#"),p=new URL(t.toString(),"http://localhost");return e==="get"&&Object.keys(r).length&&(p.search=A.stringify(J(A.parse(p.search,{ignoreQueryPrefix:!0}),r),{encodeValuesOnly:!0,arrayFormat:s}),r={}),[[l?`${p.protocol}//${p.host}`:"",c?p.pathname:"",u?p.pathname.substring(1):"",f?p.search:"",m?p.hash:""].join(""),r]}function C(e){return e=new URL(e.href),e.hash="",e}var q=typeof window>"u",ae=class{constructor(){this.visitId=null}init({initialPage:e,resolveComponent:t,swapComponent:r}){this.page=e,this.resolveComponent=t,this.swapComponent=r,this.setNavigationType(),this.clearRememberedStateOnReload(),this.isBackForwardVisit()?this.handleBackForwardVisit(this.page):this.isLocationVisit()?this.handleLocationVisit(this.page):this.handleInitialPageVisit(this.page),this.setupEventListeners()}setNavigationType(){this.navigationType=window.performance&&window.performance.getEntriesByType("navigation").length>0?window.performance.getEntriesByType("navigation")[0].type:"navigate"}clearRememberedStateOnReload(){var e;this.navigationType==="reload"&&((e=window.history.state)!=null&&e.rememberedState)&&delete window.history.state.rememberedState}handleInitialPageVisit(e){this.page.url+=window.location.hash,this.setPage(e,{preserveState:!0}).then(()=>k(e))}setupEventListeners(){window.addEventListener("popstate",this.handlePopstateEvent.bind(this)),document.addEventListener("scroll",Y(this.handleScrollEvent.bind(this),100),!0)}scrollRegions(){return document.querySelectorAll("[scroll-region]")}handleScrollEvent(e){typeof e.target.hasAttribute=="function"&&e.target.hasAttribute("scroll-region")&&this.saveScrollPositions()}saveScrollPositions(){this.replaceState({...this.page,scrollRegions:Array.from(this.scrollRegions()).map(e=>({top:e.scrollTop,left:e.scrollLeft}))})}resetScrollPositions(){window.scrollTo(0,0),this.scrollRegions().forEach(e=>{typeof e.scrollTo=="function"?e.scrollTo(0,0):(e.scrollTop=0,e.scrollLeft=0)}),this.saveScrollPositions(),window.location.hash&&setTimeout(()=>{var e;return(e=document.getElementById(window.location.hash.slice(1)))==null?void 0:e.scrollIntoView()})}restoreScrollPositions(){this.page.scrollRegions&&this.scrollRegions().forEach((e,t)=>{let r=this.page.scrollRegions[t];if(r)typeof e.scrollTo=="function"?e.scrollTo(r.left,r.top):(e.scrollTop=r.top,e.scrollLeft=r.left);else return})}isBackForwardVisit(){return window.history.state&&this.navigationType==="back_forward"}handleBackForwardVisit(e){window.history.state.version=e.version,this.setPage(window.history.state,{preserveScroll:!0,preserveState:!0}).then(()=>{this.restoreScrollPositions(),k(e)})}locationVisit(e,t){try{let r={preserveScroll:t};window.sessionStorage.setItem("inertiaLocationVisit",JSON.stringify(r)),window.location.href=e.href,C(window.location).href===C(e).href&&window.location.reload()}catch{return!1}}isLocationVisit(){try{return window.sessionStorage.getItem("inertiaLocationVisit")!==null}catch{return!1}}handleLocationVisit(e){var r,s;let t=JSON.parse(window.sessionStorage.getItem("inertiaLocationVisit")||"");window.sessionStorage.removeItem("inertiaLocationVisit"),e.url+=window.location.hash,e.rememberedState=((r=window.history.state)==null?void 0:r.rememberedState)??{},e.scrollRegions=((s=window.history.state)==null?void 0:s.scrollRegions)??[],this.setPage(e,{preserveScroll:t.preserveScroll,preserveState:!0}).then(()=>{t.preserveScroll&&this.restoreScrollPositions(),k(e)})}isLocationVisitResponse(e){return!!(e&&e.status===409&&e.headers["x-inertia-location"])}isInertiaResponse(e){return!!(e!=null&&e.headers["x-inertia"])}createVisitId(){return this.visitId={},this.visitId}cancelVisit(e,{cancelled:t=!1,interrupted:r=!1}){e&&!e.completed&&!e.cancelled&&!e.interrupted&&(e.cancelToken.abort(),e.onCancel(),e.completed=!1,e.cancelled=t,e.interrupted=r,D(e),e.onFinish(e))}finishVisit(e){!e.cancelled&&!e.interrupted&&(e.completed=!0,e.cancelled=!1,e.interrupted=!1,D(e),e.onFinish(e))}resolvePreserveOption(e,t){return typeof e=="function"?e(t):e==="errors"?Object.keys(t.props.errors||{}).length>0:e}cancel(){this.activeVisit&&this.cancelVisit(this.activeVisit,{cancelled:!0})}visit(e,{method:t="get",data:r={},replace:s=!1,preserveScroll:l=!1,preserveState:c=!1,only:u=[],headers:f={},errorBag:m="",forceFormData:p=!1,onCancelToken:i=()=>{},onBefore:o=()=>{},onStart:a=()=>{},onProgress:g=()=>{},onFinish:L=()=>{},onCancel:d=()=>{},onSuccess:O=()=>{},onError:N=()=>{},queryStringArrayFormat:F="brackets"}={}){let w=typeof e=="string"?E(e):e;if((R(r)||p)&&!(r instanceof FormData)&&(r=M(r)),!(r instanceof FormData)){let[n,h]=H(t,w,r,F);w=E(n),r=h}let P={url:w,method:t,data:r,replace:s,preserveScroll:l,preserveState:c,only:u,headers:f,errorBag:m,forceFormData:p,queryStringArrayFormat:F,cancelled:!1,completed:!1,interrupted:!1};if(o(P)===!1||!Z(P))return;this.activeVisit&&this.cancelVisit(this.activeVisit,{interrupted:!0}),this.saveScrollPositions();let x=this.createVisitId();this.activeVisit={...P,onCancelToken:i,onBefore:o,onStart:a,onProgress:g,onFinish:L,onCancel:d,onSuccess:O,onError:N,queryStringArrayFormat:F,cancelToken:new AbortController},i({cancel:()=>{this.activeVisit&&this.cancelVisit(this.activeVisit,{cancelled:!0})}}),ie(P),a(P),B({method:t,url:C(w).href,data:t==="get"?{}:r,params:t==="get"?r:{},signal:this.activeVisit.cancelToken.signal,headers:{...f,Accept:"text/html, application/xhtml+xml","X-Requested-With":"XMLHttpRequest","X-Inertia":!0,...u.length?{"X-Inertia-Partial-Component":this.page.component,"X-Inertia-Partial-Data":u.join(",")}:{},...m&&m.length?{"X-Inertia-Error-Bag":m}:{},...this.page.version?{"X-Inertia-Version":this.page.version}:{}},onUploadProgress:n=>{r instanceof FormData&&(n.percentage=n.progress?Math.round(n.progress*100):0,se(n),g(n))}}).then(n=>{var $;if(!this.isInertiaResponse(n))return Promise.reject({response:n});let h=n.data;u.length&&h.component===this.page.component&&(h.props={...this.page.props,...h.props}),l=this.resolvePreserveOption(l,h),c=this.resolvePreserveOption(c,h),c&&(($=window.history.state)!=null&&$.rememberedState)&&h.component===this.page.component&&(h.rememberedState=window.history.state.rememberedState);let S=w,I=E(h.url);return S.hash&&!I.hash&&C(S).href===I.href&&(I.hash=S.hash,h.url=I.href),this.setPage(h,{visitId:x,replace:s,preserveScroll:l,preserveState:c})}).then(()=>{let n=this.page.props.errors||{};if(Object.keys(n).length>0){let h=m?n[m]?n[m]:{}:n;return ee(h),N(h)}return oe(this.page),O(this.page)}).catch(n=>{if(this.isInertiaResponse(n.response))return this.setPage(n.response.data,{visitId:x});if(this.isLocationVisitResponse(n.response)){let h=E(n.response.headers["x-inertia-location"]),S=w;S.hash&&!h.hash&&C(S).href===h.href&&(h.hash=S.hash),this.locationVisit(h,l===!0)}else if(n.response)re(n.response)&&ne.show(n.response.data);else return Promise.reject(n)}).then(()=>{this.activeVisit&&this.finishVisit(this.activeVisit)}).catch(n=>{if(!B.isCancel(n)){let h=te(n);if(this.activeVisit&&this.finishVisit(this.activeVisit),h)return Promise.reject(n)}})}setPage(e,{visitId:t=this.createVisitId(),replace:r=!1,preserveScroll:s=!1,preserveState:l=!1}={}){return Promise.resolve(this.resolveComponent(e.component)).then(c=>{t===this.visitId&&(e.scrollRegions=e.scrollRegions||[],e.rememberedState=e.rememberedState||{},r=r||E(e.url).href===window.location.href,r?this.replaceState(e):this.pushState(e),this.swapComponent({component:c,page:e,preserveState:l}).then(()=>{s||this.resetScrollPositions(),r||k(e)}))})}pushState(e){this.page=e,window.history.pushState(e,"",e.url)}replaceState(e){this.page=e,window.history.replaceState(e,"",e.url)}handlePopstateEvent(e){if(e.state!==null){let t=e.state,r=this.createVisitId();Promise.resolve(this.resolveComponent(t.component)).then(s=>{r===this.visitId&&(this.page=t,this.swapComponent({component:s,page:t,preserveState:!1}).then(()=>{this.restoreScrollPositions(),k(t)}))})}else{let t=E(this.page.url);t.hash=window.location.hash,this.replaceState({...this.page,url:t.href}),this.resetScrollPositions()}}get(e,t={},r={}){return this.visit(e,{...r,method:"get",data:t})}reload(e={}){return this.visit(window.location.href,{...e,preserveScroll:!0,preserveState:!0})}replace(e,t={}){return console.warn(`Inertia.replace() has been deprecated and will be removed in a future release. Please use Inertia.${t.method??"get"}() instead.`),this.visit(e,{preserveState:!0,...t,replace:!0})}post(e,t={},r={}){return this.visit(e,{preserveState:!0,...r,method:"post",data:t})}put(e,t={},r={}){return this.visit(e,{preserveState:!0,...r,method:"put",data:t})}patch(e,t={},r={}){return this.visit(e,{preserveState:!0,...r,method:"patch",data:t})}delete(e,t={}){return this.visit(e,{preserveState:!0,...t,method:"delete"})}remember(e,t="default"){var r;q||this.replaceState({...this.page,rememberedState:{...(r=this.page)==null?void 0:r.rememberedState,[t]:e}})}restore(e="default"){var t,r;if(!q)return(r=(t=window.history.state)==null?void 0:t.rememberedState)==null?void 0:r[e]}on(e,t){let r=s=>{let l=t(s);s.cancelable&&!s.defaultPrevented&&l===!1&&s.preventDefault()};return document.addEventListener(`inertia:${e}`,r),()=>document.removeEventListener(`inertia:${e}`,r)}};function le(e){let t=e.currentTarget.tagName.toLowerCase()==="a";return!(e.target&&(e==null?void 0:e.target).isContentEditable||e.defaultPrevented||t&&e.which>1||t&&e.altKey||t&&e.ctrlKey||t&&e.metaKey||t&&e.shiftKey)}var V=new ae;function pe(e,t){let r=typeof e=="string"?e:null,s=typeof e=="string"?t:e,l=r?V.restore(r):null,c=typeof s=="object"?y(s):y(s()),u=null,f=null,m=i=>i,p=W({...l?l.data:y(c),isDirty:!1,errors:l?l.errors:{},hasErrors:!1,processing:!1,progress:null,wasSuccessful:!1,recentlySuccessful:!1,data(){return Object.keys(c).reduce((i,o)=>(i[o]=this[o],i),{})},transform(i){return m=i,this},defaults(i,o){if(typeof s=="function")throw new Error("You cannot call `defaults()` when using a function to define your form data.");return typeof i>"u"?c=this.data():c=Object.assign({},y(c),typeof i=="string"?{[i]:o}:i),this},reset(...i){let o=typeof s=="object"?y(c):y(s()),a=y(o);return i.length===0?(c=a,Object.assign(this,o)):Object.keys(o).filter(g=>i.includes(g)).forEach(g=>{c[g]=a[g],this[g]=o[g]}),this},setError(i,o){return Object.assign(this.errors,typeof i=="string"?{[i]:o}:i),this.hasErrors=Object.keys(this.errors).length>0,this},clearErrors(...i){return this.errors=Object.keys(this.errors).reduce((o,a)=>({...o,...i.length>0&&!i.includes(a)?{[a]:this.errors[a]}:{}}),{}),this.hasErrors=Object.keys(this.errors).length>0,this},submit(i,o,a={}){let g=m(this.data()),L={...a,onCancelToken:d=>{if(u=d,a.onCancelToken)return a.onCancelToken(d)},onBefore:d=>{if(this.wasSuccessful=!1,this.recentlySuccessful=!1,clearTimeout(f),a.onBefore)return a.onBefore(d)},onStart:d=>{if(this.processing=!0,a.onStart)return a.onStart(d)},onProgress:d=>{if(this.progress=d,a.onProgress)return a.onProgress(d)},onSuccess:async d=>{this.processing=!1,this.progress=null,this.clearErrors(),this.wasSuccessful=!0,this.recentlySuccessful=!0,f=setTimeout(()=>this.recentlySuccessful=!1,2e3);let O=a.onSuccess?await a.onSuccess(d):null;return c=y(this.data()),this.isDirty=!1,O},onError:d=>{if(this.processing=!1,this.progress=null,this.clearErrors().setError(d),a.onError)return a.onError(d)},onCancel:()=>{if(this.processing=!1,this.progress=null,a.onCancel)return a.onCancel()},onFinish:d=>{if(this.processing=!1,this.progress=null,u=null,a.onFinish)return a.onFinish(d)}};i==="delete"?V.delete(o,{...L,data:g}):V[i](o,g,L)},get(i,o){this.submit("get",i,o)},post(i,o){this.submit("post",i,o)},put(i,o){this.submit("put",i,o)},patch(i,o){this.submit("patch",i,o)},delete(i,o){this.submit("delete",i,o)},cancel(){u&&u.cancel()},__rememberable:r===null,__remember(){return{data:this.data(),errors:this.errors}},__restore(i){Object.assign(this,i.data),this.setError(i.errors)}});return z(p,i=>{p.isDirty=!Q(p.data(),c),r&&V.remember(y(i.__remember()),r)},{immediate:!0,deep:!0}),p}j(null);var T=j(null);K(null);j(null);function ue(){return W({props:b(()=>{var e;return(e=T.value)==null?void 0:e.props}),url:b(()=>{var e;return(e=T.value)==null?void 0:e.url}),component:b(()=>{var e;return(e=T.value)==null?void 0:e.component}),version:b(()=>{var e;return(e=T.value)==null?void 0:e.version}),scrollRegions:b(()=>{var e;return(e=T.value)==null?void 0:e.scrollRegions}),rememberedState:b(()=>{var e;return(e=T.value)==null?void 0:e.rememberedState})})}var ce=_({props:{title:{type:String,required:!1}},data(){return{provider:this.$headManager.createProvider()}},beforeUnmount(){this.provider.disconnect()},methods:{isUnaryTag(e){return["area","base","br","col","embed","hr","img","input","keygen","link","meta","param","source","track","wbr"].indexOf(e.type)>-1},renderTagStart(e){e.props=e.props||{},e.props.inertia=e.props["head-key"]!==void 0?e.props["head-key"]:"";let t=Object.keys(e.props).reduce((r,s)=>{let l=e.props[s];return["key","head-key"].includes(s)?r:l===""?r+` ${s}`:r+` ${s}="${l}"`},"");return`<${e.type}${t}>`},renderTagChildren(e){return typeof e.children=="string"?e.children:e.children.reduce((t,r)=>t+this.renderTag(r),"")},isFunctionNode(e){return typeof e.type=="function"},isComponentNode(e){return typeof e.type=="object"},isCommentNode(e){return/(comment|cmt)/i.test(e.type.toString())},isFragmentNode(e){return/(fragment|fgt|symbol\(\))/i.test(e.type.toString())},isTextNode(e){return/(text|txt)/i.test(e.type.toString())},renderTag(e){if(this.isTextNode(e))return e.children;if(this.isFragmentNode(e)||this.isCommentNode(e))return"";let t=this.renderTagStart(e);return e.children&&(t+=this.renderTagChildren(e)),this.isUnaryTag(e)||(t+=`</${e.type}>`),t},addTitleElement(e){return this.title&&!e.find(t=>t.startsWith("<title"))&&e.push(`<title inertia>${this.title}</title>`),e},renderNodes(e){return this.addTitleElement(e.flatMap(t=>this.resolveNode(t)).map(t=>this.renderTag(t)).filter(t=>t))},resolveNode(e){return this.isFunctionNode(e)?this.resolveNode(e.type()):this.isComponentNode(e)?(console.warn("Using components in the <Head> component is not supported."),[]):this.isTextNode(e)&&e.children?e:this.isFragmentNode(e)&&e.children?e.children.flatMap(t=>this.resolveNode(t)):this.isCommentNode(e)?[]:e}},render(){this.provider.update(this.renderNodes(this.$slots.default?this.$slots.default():[]))}}),me=ce,he=_({name:"Link",props:{as:{type:String,default:"a"},data:{type:Object,default:()=>({})},href:{type:String,required:!0},method:{type:String,default:"get"},replace:{type:Boolean,default:!1},preserveScroll:{type:Boolean,default:!1},preserveState:{type:Boolean,default:null},only:{type:Array,default:()=>[]},headers:{type:Object,default:()=>({})},queryStringArrayFormat:{type:String,default:"brackets"}},setup(e,{slots:t,attrs:r}){return()=>{let s=e.as.toLowerCase(),l=e.method.toLowerCase(),[c,u]=H(l,e.href||"",e.data,e.queryStringArrayFormat);return s==="a"&&l!=="get"&&console.warn(`Creating POST/PUT/PATCH/DELETE <a> links is discouraged as it causes "Open Link in New Tab/Window" accessibility issues.

Please specify a more appropriate element using the "as" attribute. For example:

<Link href="${c}" method="${l}" as="button">...</Link>`),G(e.as,{...r,...s==="a"?{href:c}:{},onClick:f=>{le(f)&&(f.preventDefault(),V.visit(c,{data:u,method:l,replace:e.replace,preserveScroll:e.preserveScroll,preserveState:e.preserveState??l!=="get",only:e.only,headers:e.headers,onCancelToken:r.onCancelToken||(()=>({})),onBefore:r.onBefore||(()=>({})),onStart:r.onStart||(()=>({})),onProgress:r.onProgress||(()=>({})),onFinish:r.onFinish||(()=>({})),onCancel:r.onCancel||(()=>({})),onSuccess:r.onSuccess||(()=>({})),onError:r.onError||(()=>({}))}))}},t)}}}),ge=he;export{V as O,ue as Q,pe as T,me as Z,ge as i};