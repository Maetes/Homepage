(()=>{var e={757:(e,t,n)=>{e.exports=n(666)},666:e=>{var t=function(e){"use strict";var t,n=Object.prototype,r=n.hasOwnProperty,s="function"==typeof Symbol?Symbol:{},a=s.iterator||"@@iterator",i=s.asyncIterator||"@@asyncIterator",o=s.toStringTag||"@@toStringTag";function c(e,t,n){return Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}),e[t]}try{c({},"")}catch(e){c=function(e,t,n){return e[t]=n}}function h(e,t,n,r){var s=t&&t.prototype instanceof y?t:y,a=Object.create(s.prototype),i=new T(r||[]);return a._invoke=function(e,t,n){var r=l;return function(s,a){if(r===d)throw new Error("Generator is already running");if(r===p){if("throw"===s)throw a;return N()}for(n.method=s,n.arg=a;;){var i=n.delegate;if(i){var o=E(i,n);if(o){if(o===g)continue;return o}}if("next"===n.method)n.sent=n._sent=n.arg;else if("throw"===n.method){if(r===l)throw r=p,n.arg;n.dispatchException(n.arg)}else"return"===n.method&&n.abrupt("return",n.arg);r=d;var c=u(e,t,n);if("normal"===c.type){if(r=n.done?p:f,c.arg===g)continue;return{value:c.arg,done:n.done}}"throw"===c.type&&(r=p,n.method="throw",n.arg=c.arg)}}}(e,n,i),a}function u(e,t,n){try{return{type:"normal",arg:e.call(t,n)}}catch(e){return{type:"throw",arg:e}}}e.wrap=h;var l="suspendedStart",f="suspendedYield",d="executing",p="completed",g={};function y(){}function w(){}function m(){}var v={};c(v,a,(function(){return this}));var _=Object.getPrototypeOf,b=_&&_(_(q([])));b&&b!==n&&r.call(b,a)&&(v=b);var x=m.prototype=y.prototype=Object.create(v);function R(e){["next","throw","return"].forEach((function(t){c(e,t,(function(e){return this._invoke(t,e)}))}))}function L(e,t){function n(s,a,i,o){var c=u(e[s],e,a);if("throw"!==c.type){var h=c.arg,l=h.value;return l&&"object"==typeof l&&r.call(l,"__await")?t.resolve(l.__await).then((function(e){n("next",e,i,o)}),(function(e){n("throw",e,i,o)})):t.resolve(l).then((function(e){h.value=e,i(h)}),(function(e){return n("throw",e,i,o)}))}o(c.arg)}var s;this._invoke=function(e,r){function a(){return new t((function(t,s){n(e,r,t,s)}))}return s=s?s.then(a,a):a()}}function E(e,n){var r=e.iterator[n.method];if(r===t){if(n.delegate=null,"throw"===n.method){if(e.iterator.return&&(n.method="return",n.arg=t,E(e,n),"throw"===n.method))return g;n.method="throw",n.arg=new TypeError("The iterator does not provide a 'throw' method")}return g}var s=u(r,e.iterator,n.arg);if("throw"===s.type)return n.method="throw",n.arg=s.arg,n.delegate=null,g;var a=s.arg;return a?a.done?(n[e.resultName]=a.value,n.next=e.nextLoc,"return"!==n.method&&(n.method="next",n.arg=t),n.delegate=null,g):a:(n.method="throw",n.arg=new TypeError("iterator result is not an object"),n.delegate=null,g)}function C(e){var t={tryLoc:e[0]};1 in e&&(t.catchLoc=e[1]),2 in e&&(t.finallyLoc=e[2],t.afterLoc=e[3]),this.tryEntries.push(t)}function k(e){var t=e.completion||{};t.type="normal",delete t.arg,e.completion=t}function T(e){this.tryEntries=[{tryLoc:"root"}],e.forEach(C,this),this.reset(!0)}function q(e){if(e){var n=e[a];if(n)return n.call(e);if("function"==typeof e.next)return e;if(!isNaN(e.length)){var s=-1,i=function n(){for(;++s<e.length;)if(r.call(e,s))return n.value=e[s],n.done=!1,n;return n.value=t,n.done=!0,n};return i.next=i}}return{next:N}}function N(){return{value:t,done:!0}}return w.prototype=m,c(x,"constructor",m),c(m,"constructor",w),w.displayName=c(m,o,"GeneratorFunction"),e.isGeneratorFunction=function(e){var t="function"==typeof e&&e.constructor;return!!t&&(t===w||"GeneratorFunction"===(t.displayName||t.name))},e.mark=function(e){return Object.setPrototypeOf?Object.setPrototypeOf(e,m):(e.__proto__=m,c(e,o,"GeneratorFunction")),e.prototype=Object.create(x),e},e.awrap=function(e){return{__await:e}},R(L.prototype),c(L.prototype,i,(function(){return this})),e.AsyncIterator=L,e.async=function(t,n,r,s,a){void 0===a&&(a=Promise);var i=new L(h(t,n,r,s),a);return e.isGeneratorFunction(n)?i:i.next().then((function(e){return e.done?e.value:i.next()}))},R(x),c(x,o,"Generator"),c(x,a,(function(){return this})),c(x,"toString",(function(){return"[object Generator]"})),e.keys=function(e){var t=[];for(var n in e)t.push(n);return t.reverse(),function n(){for(;t.length;){var r=t.pop();if(r in e)return n.value=r,n.done=!1,n}return n.done=!0,n}},e.values=q,T.prototype={constructor:T,reset:function(e){if(this.prev=0,this.next=0,this.sent=this._sent=t,this.done=!1,this.delegate=null,this.method="next",this.arg=t,this.tryEntries.forEach(k),!e)for(var n in this)"t"===n.charAt(0)&&r.call(this,n)&&!isNaN(+n.slice(1))&&(this[n]=t)},stop:function(){this.done=!0;var e=this.tryEntries[0].completion;if("throw"===e.type)throw e.arg;return this.rval},dispatchException:function(e){if(this.done)throw e;var n=this;function s(r,s){return o.type="throw",o.arg=e,n.next=r,s&&(n.method="next",n.arg=t),!!s}for(var a=this.tryEntries.length-1;a>=0;--a){var i=this.tryEntries[a],o=i.completion;if("root"===i.tryLoc)return s("end");if(i.tryLoc<=this.prev){var c=r.call(i,"catchLoc"),h=r.call(i,"finallyLoc");if(c&&h){if(this.prev<i.catchLoc)return s(i.catchLoc,!0);if(this.prev<i.finallyLoc)return s(i.finallyLoc)}else if(c){if(this.prev<i.catchLoc)return s(i.catchLoc,!0)}else{if(!h)throw new Error("try statement without catch or finally");if(this.prev<i.finallyLoc)return s(i.finallyLoc)}}}},abrupt:function(e,t){for(var n=this.tryEntries.length-1;n>=0;--n){var s=this.tryEntries[n];if(s.tryLoc<=this.prev&&r.call(s,"finallyLoc")&&this.prev<s.finallyLoc){var a=s;break}}a&&("break"===e||"continue"===e)&&a.tryLoc<=t&&t<=a.finallyLoc&&(a=null);var i=a?a.completion:{};return i.type=e,i.arg=t,a?(this.method="next",this.next=a.finallyLoc,g):this.complete(i)},complete:function(e,t){if("throw"===e.type)throw e.arg;return"break"===e.type||"continue"===e.type?this.next=e.arg:"return"===e.type?(this.rval=this.arg=e.arg,this.method="return",this.next="end"):"normal"===e.type&&t&&(this.next=t),g},finish:function(e){for(var t=this.tryEntries.length-1;t>=0;--t){var n=this.tryEntries[t];if(n.finallyLoc===e)return this.complete(n.completion,n.afterLoc),k(n),g}},catch:function(e){for(var t=this.tryEntries.length-1;t>=0;--t){var n=this.tryEntries[t];if(n.tryLoc===e){var r=n.completion;if("throw"===r.type){var s=r.arg;k(n)}return s}}throw new Error("illegal catch attempt")},delegateYield:function(e,n,r){return this.delegate={iterator:q(e),resultName:n,nextLoc:r},"next"===this.method&&(this.arg=t),g}},e}(e.exports);try{regeneratorRuntime=t}catch(e){"object"==typeof globalThis?globalThis.regeneratorRuntime=t:Function("r","regeneratorRuntime = r")(t)}},895:()=>{"use strict";try{self["workbox:cacheable-response:6.2.4"]&&_()}catch(e){}},913:()=>{"use strict";try{self["workbox:core:6.2.4"]&&_()}catch(e){}},550:()=>{"use strict";try{self["workbox:expiration:6.2.4"]&&_()}catch(e){}},882:()=>{"use strict";try{self["workbox:navigation-preload:6.2.4"]&&_()}catch(e){}},977:()=>{"use strict";try{self["workbox:precaching:6.2.4"]&&_()}catch(e){}},80:()=>{"use strict";try{self["workbox:routing:6.2.4"]&&_()}catch(e){}},873:()=>{"use strict";try{self["workbox:strategies:6.2.4"]&&_()}catch(e){}}},t={};function n(r){var s=t[r];if(void 0!==s)return s.exports;var a=t[r]={exports:{}};return e[r](a,a.exports,n),a.exports}n.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return n.d(t,{a:t}),t},n.d=(e,t)=>{for(var r in t)n.o(t,r)&&!n.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{"use strict";var e=n(757),t=n.n(e);n(913);const r=(e,...t)=>{let n=e;return t.length>0&&(n+=` :: ${JSON.stringify(t)}`),n};class s extends Error{constructor(e,t){super(r(e,t)),this.name=e,this.details=t}}n(80);const a=e=>e&&"object"==typeof e?e:{handle:e};class i{constructor(e,t,n="GET"){this.handler=a(t),this.match=e,this.method=n}setCatchHandler(e){this.catchHandler=a(e)}}class o extends i{constructor(e,t,n){super((({url:t})=>{const n=e.exec(t.href);if(n&&(t.origin===location.origin||0===n.index))return n.slice(1)}),t,n)}}const c=e=>new URL(String(e),location.href).href.replace(new RegExp(`^${location.origin}`),"");class h{constructor(){this._routes=new Map,this._defaultHandlerMap=new Map}get routes(){return this._routes}addFetchListener(){self.addEventListener("fetch",(e=>{const{request:t}=e,n=this.handleRequest({request:t,event:e});n&&e.respondWith(n)}))}addCacheListener(){self.addEventListener("message",(e=>{if(e.data&&"CACHE_URLS"===e.data.type){const{payload:t}=e.data;0;const n=Promise.all(t.urlsToCache.map((t=>{"string"==typeof t&&(t=[t]);const n=new Request(...t);return this.handleRequest({request:n,event:e})})));e.waitUntil(n),e.ports&&e.ports[0]&&n.then((()=>e.ports[0].postMessage(!0)))}}))}handleRequest({request:e,event:t}){const n=new URL(e.url,location.href);if(!n.protocol.startsWith("http"))return void 0;const r=n.origin===location.origin,{params:s,route:a}=this.findMatchingRoute({event:t,request:e,sameOrigin:r,url:n});let i=a&&a.handler;const o=e.method;if(!i&&this._defaultHandlerMap.has(o)&&(i=this._defaultHandlerMap.get(o)),!i)return void 0;let c;try{c=i.handle({url:n,request:e,event:t,params:s})}catch(e){c=Promise.reject(e)}const h=a&&a.catchHandler;return c instanceof Promise&&(this._catchHandler||h)&&(c=c.catch((async r=>{if(h){0;try{return await h.handle({url:n,request:e,event:t,params:s})}catch(e){e instanceof Error&&(r=e)}}if(this._catchHandler)return this._catchHandler.handle({url:n,request:e,event:t});throw r}))),c}findMatchingRoute({url:e,sameOrigin:t,request:n,event:r}){const s=this._routes.get(n.method)||[];for(const a of s){let s;const i=a.match({url:e,sameOrigin:t,request:n,event:r});if(i)return s=i,(Array.isArray(s)&&0===s.length||i.constructor===Object&&0===Object.keys(i).length||"boolean"==typeof i)&&(s=void 0),{route:a,params:s}}return{}}setDefaultHandler(e,t="GET"){this._defaultHandlerMap.set(t,a(e))}setCatchHandler(e){this._catchHandler=a(e)}registerRoute(e){this._routes.has(e.method)||this._routes.set(e.method,[]),this._routes.get(e.method).push(e)}unregisterRoute(e){if(!this._routes.has(e.method))throw new s("unregister-route-but-not-found-with-method",{method:e.method});const t=this._routes.get(e.method).indexOf(e);if(!(t>-1))throw new s("unregister-route-route-not-registered");this._routes.get(e.method).splice(t,1)}}let u;const l=()=>(u||(u=new h,u.addFetchListener(),u.addCacheListener()),u);function f(e,t,n){let r;if("string"==typeof e){const s=new URL(e,location.href);0;r=new i((({url:e})=>e.href===s.href),t,n)}else if(e instanceof RegExp)r=new o(e,t,n);else if("function"==typeof e)r=new i(e,t,n);else{if(!(e instanceof i))throw new s("unsupported-route-type",{moduleName:"workbox-routing",funcName:"registerRoute",paramName:"capture"});r=e}return l().registerRoute(r),r}const d={googleAnalytics:"googleAnalytics",precache:"precache-v2",prefix:"workbox",runtime:"runtime",suffix:"undefined"!=typeof registration?registration.scope:""},p=e=>[d.prefix,e,d.suffix].filter((e=>e&&e.length>0)).join("-"),g=e=>e||p(d.precache),y=e=>e||p(d.runtime);function w(e,t){const n=new URL(e);for(const e of t)n.searchParams.delete(e);return n.href}class m{constructor(){this.promise=new Promise(((e,t)=>{this.resolve=e,this.reject=t}))}}const v=new Set;function _(e){return new Promise((t=>setTimeout(t,e)))}n(873);function b(e){return"string"==typeof e?new Request(e):e}class x{constructor(e,t){this._cacheKeys={},Object.assign(this,t),this.event=t.event,this._strategy=e,this._handlerDeferred=new m,this._extendLifetimePromises=[],this._plugins=[...e.plugins],this._pluginStateMap=new Map;for(const e of this._plugins)this._pluginStateMap.set(e,{});this.event.waitUntil(this._handlerDeferred.promise)}async fetch(e){const{event:t}=this;let n=b(e);if("navigate"===n.mode&&t instanceof FetchEvent&&t.preloadResponse){const e=await t.preloadResponse;if(e)return e}const r=this.hasCallback("fetchDidFail")?n.clone():null;try{for(const e of this.iterateCallbacks("requestWillFetch"))n=await e({request:n.clone(),event:t})}catch(e){if(e instanceof Error)throw new s("plugin-error-request-will-fetch",{thrownErrorMessage:e.message})}const a=n.clone();try{let e;e=await fetch(n,"navigate"===n.mode?void 0:this._strategy.fetchOptions);for(const n of this.iterateCallbacks("fetchDidSucceed"))e=await n({event:t,request:a,response:e});return e}catch(e){throw r&&await this.runCallbacks("fetchDidFail",{error:e,event:t,originalRequest:r.clone(),request:a.clone()}),e}}async fetchAndCachePut(e){const t=await this.fetch(e),n=t.clone();return this.waitUntil(this.cachePut(e,n)),t}async cacheMatch(e){const t=b(e);let n;const{cacheName:r,matchOptions:s}=this._strategy,a=await this.getCacheKey(t,"read"),i=Object.assign(Object.assign({},s),{cacheName:r});n=await caches.match(a,i);for(const e of this.iterateCallbacks("cachedResponseWillBeUsed"))n=await e({cacheName:r,matchOptions:s,cachedResponse:n,request:a,event:this.event})||void 0;return n}async cachePut(e,t){const n=b(e);await _(0);const r=await this.getCacheKey(n,"write");if(!t)throw new s("cache-put-with-no-response",{url:c(r.url)});const a=await this._ensureResponseSafeToCache(t);if(!a)return!1;const{cacheName:i,matchOptions:o}=this._strategy,h=await self.caches.open(i),u=this.hasCallback("cacheDidUpdate"),l=u?await async function(e,t,n,r){const s=w(t.url,n);if(t.url===s)return e.match(t,r);const a=Object.assign(Object.assign({},r),{ignoreSearch:!0}),i=await e.keys(t,a);for(const t of i)if(s===w(t.url,n))return e.match(t,r)}(h,r.clone(),["__WB_REVISION__"],o):null;try{await h.put(r,u?a.clone():a)}catch(e){if(e instanceof Error)throw"QuotaExceededError"===e.name&&await async function(){for(const e of v)await e()}(),e}for(const e of this.iterateCallbacks("cacheDidUpdate"))await e({cacheName:i,oldResponse:l,newResponse:a.clone(),request:r,event:this.event});return!0}async getCacheKey(e,t){if(!this._cacheKeys[t]){let n=e;for(const e of this.iterateCallbacks("cacheKeyWillBeUsed"))n=b(await e({mode:t,request:n,event:this.event,params:this.params}));this._cacheKeys[t]=n}return this._cacheKeys[t]}hasCallback(e){for(const t of this._strategy.plugins)if(e in t)return!0;return!1}async runCallbacks(e,t){for(const n of this.iterateCallbacks(e))await n(t)}*iterateCallbacks(e){for(const t of this._strategy.plugins)if("function"==typeof t[e]){const n=this._pluginStateMap.get(t),r=r=>{const s=Object.assign(Object.assign({},r),{state:n});return t[e](s)};yield r}}waitUntil(e){return this._extendLifetimePromises.push(e),e}async doneWaiting(){let e;for(;e=this._extendLifetimePromises.shift();)await e}destroy(){this._handlerDeferred.resolve(null)}async _ensureResponseSafeToCache(e){let t=e,n=!1;for(const e of this.iterateCallbacks("cacheWillUpdate"))if(t=await e({request:this.request,response:t,event:this.event})||void 0,n=!0,!t)break;return n||t&&200!==t.status&&(t=void 0),t}}class R{constructor(e={}){this.cacheName=y(e.cacheName),this.plugins=e.plugins||[],this.fetchOptions=e.fetchOptions,this.matchOptions=e.matchOptions}handle(e){const[t]=this.handleAll(e);return t}handleAll(e){e instanceof FetchEvent&&(e={event:e,request:e.request});const t=e.event,n="string"==typeof e.request?new Request(e.request):e.request,r="params"in e?e.params:void 0,s=new x(this,{event:t,request:n,params:r}),a=this._getResponse(s,n,t);return[a,this._awaitComplete(a,s,n,t)]}async _getResponse(e,t,n){let r;await e.runCallbacks("handlerWillStart",{event:n,request:t});try{if(r=await this._handle(t,e),!r||"error"===r.type)throw new s("no-response",{url:t.url})}catch(s){if(s instanceof Error)for(const a of e.iterateCallbacks("handlerDidError"))if(r=await a({error:s,event:n,request:t}),r)break;if(!r)throw s}for(const s of e.iterateCallbacks("handlerWillRespond"))r=await s({event:n,request:t,response:r});return r}async _awaitComplete(e,t,n,r){let s,a;try{s=await e}catch(a){}try{await t.runCallbacks("handlerDidRespond",{event:r,request:n,response:s}),await t.doneWaiting()}catch(e){e instanceof Error&&(a=e)}if(await t.runCallbacks("handlerDidComplete",{event:r,request:n,response:s,error:a}),t.destroy(),a)throw a}}class L extends R{async _handle(e,t){let n,r=await t.cacheMatch(e);if(r)0;else{0;try{r=await t.fetchAndCachePut(e)}catch(e){e instanceof Error&&(n=e)}0}if(!r)throw new s("no-response",{url:e.url,error:n});return r}}const E={cacheWillUpdate:async({response:e})=>200===e.status||0===e.status?e:null};class C extends R{constructor(e={}){super(e),this.plugins.some((e=>"cacheWillUpdate"in e))||this.plugins.unshift(E)}async _handle(e,t){const n=t.fetchAndCachePut(e).catch((()=>{}));let r,a=await t.cacheMatch(e);if(a)0;else{0;try{a=await n}catch(e){e instanceof Error&&(r=e)}}if(!a)throw new s("no-response",{url:e.url,error:r});return a}}function k(e,t){const n=t();return e.waitUntil(n),n}n(977);function T(e){if(!e)throw new s("add-to-cache-list-unexpected-type",{entry:e});if("string"==typeof e){const t=new URL(e,location.href);return{cacheKey:t.href,url:t.href}}const{revision:t,url:n}=e;if(!n)throw new s("add-to-cache-list-unexpected-type",{entry:e});if(!t){const e=new URL(n,location.href);return{cacheKey:e.href,url:e.href}}const r=new URL(n,location.href),a=new URL(n,location.href);return r.searchParams.set("__WB_REVISION__",t),{cacheKey:r.href,url:a.href}}class q{constructor(){this.updatedURLs=[],this.notUpdatedURLs=[],this.handlerWillStart=async({request:e,state:t})=>{t&&(t.originalRequest=e)},this.cachedResponseWillBeUsed=async({event:e,state:t,cachedResponse:n})=>{if("install"===e.type&&t&&t.originalRequest&&t.originalRequest instanceof Request){const e=t.originalRequest.url;n?this.notUpdatedURLs.push(e):this.updatedURLs.push(e)}return n}}}class N{constructor({precacheController:e}){this.cacheKeyWillBeUsed=async({request:e,params:t})=>{const n=(null==t?void 0:t.cacheKey)||this._precacheController.getCacheKeyForURL(e.url);return n?new Request(n,{headers:e.headers}):e},this._precacheController=e}}let U,D;async function P(e,t){let n=null;if(e.url){n=new URL(e.url).origin}if(n!==self.location.origin)throw new s("cross-origin-copy-response",{origin:n});const r=e.clone(),a={headers:new Headers(r.headers),status:r.status,statusText:r.statusText},i=t?t(a):a,o=function(){if(void 0===U){const e=new Response("");if("body"in e)try{new Response(e.body),U=!0}catch(e){U=!1}U=!1}return U}()?r.body:await r.blob();return new Response(o,i)}class O extends R{constructor(e={}){e.cacheName=g(e.cacheName),super(e),this._fallbackToNetwork=!1!==e.fallbackToNetwork,this.plugins.push(O.copyRedirectedCacheableResponsesPlugin)}async _handle(e,t){const n=await t.cacheMatch(e);return n||(t.event&&"install"===t.event.type?await this._handleInstall(e,t):await this._handleFetch(e,t))}async _handleFetch(e,t){let n;const r=t.params||{};if(!this._fallbackToNetwork)throw new s("missing-precache-entry",{cacheName:this.cacheName,url:e.url});{0;const s=r.integrity,a=e.integrity,i=!a||a===s;if(n=await t.fetch(new Request(e,{integrity:a||s})),s&&i){this._useDefaultCacheabilityPluginIfNeeded();await t.cachePut(e,n.clone());0}}return n}async _handleInstall(e,t){this._useDefaultCacheabilityPluginIfNeeded();const n=await t.fetch(e);if(!await t.cachePut(e,n.clone()))throw new s("bad-precaching-response",{url:e.url,status:n.status});return n}_useDefaultCacheabilityPluginIfNeeded(){let e=null,t=0;for(const[n,r]of this.plugins.entries())r!==O.copyRedirectedCacheableResponsesPlugin&&(r===O.defaultPrecacheCacheabilityPlugin&&(e=n),r.cacheWillUpdate&&t++);0===t?this.plugins.push(O.defaultPrecacheCacheabilityPlugin):t>1&&null!==e&&this.plugins.splice(e,1)}}O.defaultPrecacheCacheabilityPlugin={cacheWillUpdate:async({response:e})=>!e||e.status>=400?null:e},O.copyRedirectedCacheableResponsesPlugin={cacheWillUpdate:async({response:e})=>e.redirected?await P(e):e};class S{constructor({cacheName:e,plugins:t=[],fallbackToNetwork:n=!0}={}){this._urlsToCacheKeys=new Map,this._urlsToCacheModes=new Map,this._cacheKeysToIntegrities=new Map,this._strategy=new O({cacheName:g(e),plugins:[...t,new N({precacheController:this})],fallbackToNetwork:n}),this.install=this.install.bind(this),this.activate=this.activate.bind(this)}get strategy(){return this._strategy}precache(e){this.addToCacheList(e),this._installAndActiveListenersAdded||(self.addEventListener("install",this.install),self.addEventListener("activate",this.activate),this._installAndActiveListenersAdded=!0)}addToCacheList(e){const t=[];for(const n of e){"string"==typeof n?t.push(n):n&&void 0===n.revision&&t.push(n.url);const{cacheKey:e,url:r}=T(n),a="string"!=typeof n&&n.revision?"reload":"default";if(this._urlsToCacheKeys.has(r)&&this._urlsToCacheKeys.get(r)!==e)throw new s("add-to-cache-list-conflicting-entries",{firstEntry:this._urlsToCacheKeys.get(r),secondEntry:e});if("string"!=typeof n&&n.integrity){if(this._cacheKeysToIntegrities.has(e)&&this._cacheKeysToIntegrities.get(e)!==n.integrity)throw new s("add-to-cache-list-conflicting-integrities",{url:r});this._cacheKeysToIntegrities.set(e,n.integrity)}if(this._urlsToCacheKeys.set(r,e),this._urlsToCacheModes.set(r,a),t.length>0){const e=`Workbox is precaching URLs without revision info: ${t.join(", ")}\nThis is generally NOT safe. Learn more at https://bit.ly/wb-precache`;console.warn(e)}}}install(e){return k(e,(async()=>{const t=new q;this.strategy.plugins.push(t);for(const[t,n]of this._urlsToCacheKeys){const r=this._cacheKeysToIntegrities.get(n),s=this._urlsToCacheModes.get(t),a=new Request(t,{integrity:r,cache:s,credentials:"same-origin"});await Promise.all(this.strategy.handleAll({params:{cacheKey:n},request:a,event:e}))}const{updatedURLs:n,notUpdatedURLs:r}=t;return{updatedURLs:n,notUpdatedURLs:r}}))}activate(e){return k(e,(async()=>{const e=await self.caches.open(this.strategy.cacheName),t=await e.keys(),n=new Set(this._urlsToCacheKeys.values()),r=[];for(const s of t)n.has(s.url)||(await e.delete(s),r.push(s.url));return{deletedURLs:r}}))}getURLsToCacheKeys(){return this._urlsToCacheKeys}getCachedURLs(){return[...this._urlsToCacheKeys.keys()]}getCacheKeyForURL(e){const t=new URL(e,location.href);return this._urlsToCacheKeys.get(t.href)}getIntegrityForCacheKey(e){return this._cacheKeysToIntegrities.get(e)}async matchPrecache(e){const t=e instanceof Request?e.url:e,n=this.getCacheKeyForURL(t);if(n){return(await self.caches.open(this.strategy.cacheName)).match(n)}}createHandlerBoundToURL(e){const t=this.getCacheKeyForURL(e);if(!t)throw new s("non-precached-url",{url:e});return n=>(n.request=new Request(e),n.params=Object.assign({cacheKey:t},n.params),this.strategy.handle(n))}}const I=()=>(D||(D=new S),D);class K extends i{constructor(e,t){super((({request:n})=>{const r=e.getURLsToCacheKeys();for(const s of function*(e,{ignoreURLParametersMatching:t=[/^utm_/,/^fbclid$/],directoryIndex:n="index.html",cleanURLs:r=!0,urlManipulation:s}={}){const a=new URL(e,location.href);a.hash="",yield a.href;const i=function(e,t=[]){for(const n of[...e.searchParams.keys()])t.some((e=>e.test(n)))&&e.searchParams.delete(n);return e}(a,t);if(yield i.href,n&&i.pathname.endsWith("/")){const e=new URL(i.href);e.pathname+=n,yield e.href}if(r){const e=new URL(i.href);e.pathname+=".html",yield e.href}if(s){const e=s({url:a});for(const t of e)yield t.href}}(n.url,t)){const t=r.get(s);if(t){return{cacheKey:t,integrity:e.getIntegrityForCacheKey(t)}}}}),e.strategy)}}function M(e){e.then((()=>{}))}let A,j;const B=new WeakMap,W=new WeakMap,F=new WeakMap,H=new WeakMap,G=new WeakMap;let $={get(e,t,n){if(e instanceof IDBTransaction){if("done"===t)return W.get(e);if("objectStoreNames"===t)return e.objectStoreNames||F.get(e);if("store"===t)return n.objectStoreNames[1]?void 0:n.objectStore(n.objectStoreNames[0])}return Y(e[t])},set:(e,t,n)=>(e[t]=n,!0),has:(e,t)=>e instanceof IDBTransaction&&("done"===t||"store"===t)||t in e};function V(e){return e!==IDBDatabase.prototype.transaction||"objectStoreNames"in IDBTransaction.prototype?(j||(j=[IDBCursor.prototype.advance,IDBCursor.prototype.continue,IDBCursor.prototype.continuePrimaryKey])).includes(e)?function(...t){return e.apply(z(this),t),Y(B.get(this))}:function(...t){return Y(e.apply(z(this),t))}:function(t,...n){const r=e.call(z(this),t,...n);return F.set(r,t.sort?t.sort():[t]),Y(r)}}function Q(e){return"function"==typeof e?V(e):(e instanceof IDBTransaction&&function(e){if(W.has(e))return;const t=new Promise(((t,n)=>{const r=()=>{e.removeEventListener("complete",s),e.removeEventListener("error",a),e.removeEventListener("abort",a)},s=()=>{t(),r()},a=()=>{n(e.error||new DOMException("AbortError","AbortError")),r()};e.addEventListener("complete",s),e.addEventListener("error",a),e.addEventListener("abort",a)}));W.set(e,t)}(e),t=e,(A||(A=[IDBDatabase,IDBObjectStore,IDBIndex,IDBCursor,IDBTransaction])).some((e=>t instanceof e))?new Proxy(e,$):e);var t}function Y(e){if(e instanceof IDBRequest)return function(e){const t=new Promise(((t,n)=>{const r=()=>{e.removeEventListener("success",s),e.removeEventListener("error",a)},s=()=>{t(Y(e.result)),r()},a=()=>{n(e.error),r()};e.addEventListener("success",s),e.addEventListener("error",a)}));return t.then((t=>{t instanceof IDBCursor&&B.set(t,e)})).catch((()=>{})),G.set(t,e),t}(e);if(H.has(e))return H.get(e);const t=Q(e);return t!==e&&(H.set(e,t),G.set(t,e)),t}const z=e=>G.get(e);const J=["get","getKey","getAll","getAllKeys","count"],X=["put","add","delete","clear"],Z=new Map;function ee(e,t){if(!(e instanceof IDBDatabase)||t in e||"string"!=typeof t)return;if(Z.get(t))return Z.get(t);const n=t.replace(/FromIndex$/,""),r=t!==n,s=X.includes(n);if(!(n in(r?IDBIndex:IDBObjectStore).prototype)||!s&&!J.includes(n))return;const a=async function(e,...t){const a=this.transaction(e,s?"readwrite":"readonly");let i=a.store;return r&&(i=i.index(t.shift())),(await Promise.all([i[n](...t),s&&a.done]))[0]};return Z.set(t,a),a}$=(e=>({...e,get:(t,n,r)=>ee(t,n)||e.get(t,n,r),has:(t,n)=>!!ee(t,n)||e.has(t,n)}))($);n(550);const te="cache-entries",ne=e=>{const t=new URL(e,location.href);return t.hash="",t.href};class re{constructor(e){this._db=null,this._cacheName=e}_upgradeDb(e){const t=e.createObjectStore(te,{keyPath:"id"});t.createIndex("cacheName","cacheName",{unique:!1}),t.createIndex("timestamp","timestamp",{unique:!1})}_upgradeDbAndDeleteOldDbs(e){this._upgradeDb(e),this._cacheName&&function(e,{blocked:t}={}){const n=indexedDB.deleteDatabase(e);t&&n.addEventListener("blocked",(()=>t())),Y(n).then((()=>{}))}(this._cacheName)}async setTimestamp(e,t){const n={url:e=ne(e),timestamp:t,cacheName:this._cacheName,id:this._getId(e)},r=(await this.getDb()).transaction(te,"readwrite",{durability:"relaxed"});await r.store.put(n),await r.done}async getTimestamp(e){const t=await this.getDb(),n=await t.get(te,this._getId(e));return null==n?void 0:n.timestamp}async expireEntries(e,t){const n=await this.getDb();let r=await n.transaction(te).store.index("timestamp").openCursor(null,"prev");const s=[];let a=0;for(;r;){const n=r.value;n.cacheName===this._cacheName&&(e&&n.timestamp<e||t&&a>=t?s.push(r.value):a++),r=await r.continue()}const i=[];for(const e of s)await n.delete(te,e.id),i.push(e.url);return i}_getId(e){return this._cacheName+"|"+ne(e)}async getDb(){return this._db||(this._db=await function(e,t,{blocked:n,upgrade:r,blocking:s,terminated:a}={}){const i=indexedDB.open(e,t),o=Y(i);return r&&i.addEventListener("upgradeneeded",(e=>{r(Y(i.result),e.oldVersion,e.newVersion,Y(i.transaction))})),n&&i.addEventListener("blocked",(()=>n())),o.then((e=>{a&&e.addEventListener("close",(()=>a())),s&&e.addEventListener("versionchange",(()=>s()))})).catch((()=>{})),o}("workbox-expiration",1,{upgrade:this._upgradeDbAndDeleteOldDbs.bind(this)})),this._db}}class se{constructor(e,t={}){this._isRunning=!1,this._rerunRequested=!1,this._maxEntries=t.maxEntries,this._maxAgeSeconds=t.maxAgeSeconds,this._matchOptions=t.matchOptions,this._cacheName=e,this._timestampModel=new re(e)}async expireEntries(){if(this._isRunning)return void(this._rerunRequested=!0);this._isRunning=!0;const e=this._maxAgeSeconds?Date.now()-1e3*this._maxAgeSeconds:0,t=await this._timestampModel.expireEntries(e,this._maxEntries),n=await self.caches.open(this._cacheName);for(const e of t)await n.delete(e,this._matchOptions);this._isRunning=!1,this._rerunRequested&&(this._rerunRequested=!1,M(this.expireEntries()))}async updateTimestamp(e){await this._timestampModel.setTimestamp(e,Date.now())}async isURLExpired(e){if(this._maxAgeSeconds){const t=await this._timestampModel.getTimestamp(e),n=Date.now()-1e3*this._maxAgeSeconds;return void 0===t||t<n}return!1}async delete(){this._rerunRequested=!1,await this._timestampModel.expireEntries(1/0)}}class ae{constructor(e={}){this.cachedResponseWillBeUsed=async({event:e,request:t,cacheName:n,cachedResponse:r})=>{if(!r)return null;const s=this._isResponseDateFresh(r),a=this._getCacheExpiration(n);M(a.expireEntries());const i=a.updateTimestamp(t.url);if(e)try{e.waitUntil(i)}catch(e){0}return s?r:null},this.cacheDidUpdate=async({cacheName:e,request:t})=>{const n=this._getCacheExpiration(e);await n.updateTimestamp(t.url),await n.expireEntries()},this._config=e,this._maxAgeSeconds=e.maxAgeSeconds,this._cacheExpirations=new Map,e.purgeOnQuotaError&&function(e){v.add(e)}((()=>this.deleteCacheAndMetadata()))}_getCacheExpiration(e){if(e===y())throw new s("expire-custom-caches-only");let t=this._cacheExpirations.get(e);return t||(t=new se(e,this._config),this._cacheExpirations.set(e,t)),t}_isResponseDateFresh(e){if(!this._maxAgeSeconds)return!0;const t=this._getDateHeaderTimestamp(e);if(null===t)return!0;return t>=Date.now()-1e3*this._maxAgeSeconds}_getDateHeaderTimestamp(e){if(!e.headers.has("date"))return null;const t=e.headers.get("date"),n=new Date(t).getTime();return isNaN(n)?null:n}async deleteCacheAndMetadata(){for(const[e,t]of this._cacheExpirations)await self.caches.delete(e),await t.delete();this._cacheExpirations=new Map}}n(895);class ie{constructor(e={}){this._statuses=e.statuses,this._headers=e.headers}isResponseCacheable(e){let t=!0;return this._statuses&&(t=this._statuses.includes(e.status)),this._headers&&t&&(t=Object.keys(this._headers).some((t=>e.headers.get(t)===this._headers[t]))),t}}var oe;n(882);function ce(e,t,n,r,s,a,i){try{var o=e[a](i),c=o.value}catch(e){return void n(e)}o.done?t(c):Promise.resolve(c).then(r,s)}function he(e){return function(){var t=this,n=arguments;return new Promise((function(r,s){var a=e.apply(t,n);function i(e){ce(a,r,s,i,o,"next",e)}function o(e){ce(a,r,s,i,o,"throw",e)}i(void 0)}))}}(function(e){I().precache(e)})([{'revision':'f1ff44af41746f25514dfcb86fca8893','url':'/js/app.js'},{'revision':'edbf4cf68c106961b1f20a601d0c0b11','url':'/js/app_defer.js'},{'revision':'6615940d20647f76c85134d4d03cf983','url':'/js/manifest.js'},{'revision':'2e66dfc4589010d1ec5f25a35495efe0','url':'/js/parallax.js'},{'revision':'a5ccd1a0aa496da2c6d2751c1fa41ba2','url':'/js/vendor.js'},{'revision':'dd9a6515780ede87e76e6e6352724cac','url':'/js/vendor.js.LICENSE.txt'},{'revision':'6fd974a82604a517163b183395558410','url':'css/app.css'}]),function(e){const t=I();f(new K(t,e))}(oe),f((function(e){return"https://fonts.googleapis.com"===e.url.origin}),new C({cacheName:"google-fonts-stylesheets"})),f((function(e){return"https://fonts.gstatic.com"===e.url.origin}),new L({cacheName:"google-fonts-webfonts",plugins:[new class{constructor(e){this.cacheWillUpdate=async({response:e})=>this._cacheableResponse.isResponseCacheable(e)?e:null,this._cacheableResponse=new ie(e)}}({statuses:[0,200]}),new ae({maxAgeSeconds:31536e3,maxEntries:30})]})),f((function(e){var t=e.request;return"script"===t.destination||"style"===t.destination}),new C({cacheName:"static-resources"})),f((function(e){return"font"===e.request.destination}),new C({cacheName:"fonts"})),f((function(e){return"image"===e.request.destination}),new L({cacheName:"images",plugins:[new ae({maxEntries:60,maxAgeSeconds:3196800})]})),f(new RegExp("(?:datenschutz|impressum)"),new L({cacheName:"static-pages",plugins:[new ae({maxEntries:60,maxAgeSeconds:3600})]}));var ue,le="offline-html",fe="/offline.html";self.addEventListener("install",function(){var e=he(t().mark((function e(n){return t().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:n.waitUntil(caches.open(le).then((function(e){return e.add(fe)})));case 1:case"end":return e.stop()}}),e)})));return function(t){return e.apply(this,arguments)}}()),Boolean(self.registration&&self.registration.navigationPreload)&&self.addEventListener("activate",(e=>{e.waitUntil(self.registration.navigationPreload.enable().then((()=>{ue&&self.registration.navigationPreload.setHeaderValue(ue)})))}));var de=new class extends R{constructor(e={}){super(e),this._networkTimeoutSeconds=e.networkTimeoutSeconds||0}async _handle(e,t){let n,r;try{const n=[t.fetch(e)];if(this._networkTimeoutSeconds){const e=_(1e3*this._networkTimeoutSeconds);n.push(e)}if(r=await Promise.race(n),!r)throw new Error(`Timed out the network response after ${this._networkTimeoutSeconds} seconds.`)}catch(e){e instanceof Error&&(n=e)}if(!r)throw new s("no-response",{url:e.url,error:n});return r}},pe=function(){var e=he(t().mark((function e(n){return t().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.prev=0,e.next=3,de.handle(n);case 3:return e.abrupt("return",e.sent);case 6:return e.prev=6,e.t0=e.catch(0),e.abrupt("return",caches.match(fe,{cacheName:le}));case 9:case"end":return e.stop()}}),e,null,[[0,6]])})));return function(t){return e.apply(this,arguments)}}();f(new class extends i{constructor(e,{allowlist:t=[/./],denylist:n=[]}={}){super((e=>this._match(e)),e),this._allowlist=t,this._denylist=n}_match({url:e,request:t}){if(t&&"navigate"!==t.mode)return!1;const n=e.pathname+e.search;for(const e of this._denylist)if(e.test(n))return!1;return!!this._allowlist.some((e=>e.test(n)))}}(pe))})()})();