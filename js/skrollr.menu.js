!function(t,e){"use strict";var n=500,a="sqrt",o=1,r="data-menu-top",i="data-menu-offset",u="data-menu-duration",c="data-menu-ignore",l=e.skrollr,s=e.history,f=!!s.pushState,h=function(e){return!(e===t||!e)&&("A"===e.tagName.toUpperCase()?e:h(e.parentNode))},p=function(t){if(1===t.which||0===t.button){var e=h(t.target);e&&m(e)&&t.preventDefault()}},m=function(n,a){var o;if(y){if(n.hostname!==e.location.hostname)return!1;if(n.pathname!==t.location.pathname)return!1;o=n.hash}else o=n.getAttribute("href");if(!/^#/.test(o))return!1;if(!a&&null!==n.getAttribute(c))return!1;var l,h;if(h=T?T(n):n.getAttribute(r),null!==h)l=/p$/.test(h)?h.slice(0,-1)/100*t.documentElement.clientHeight:+h*k;else{var p=t.getElementById(o.substr(1));if(!p)return!1;l=v.relativeToAbsolute(p,"top","top");var m=p.getAttribute(i);null!==m&&(l+=+m)}f&&N&&!a&&s.pushState({top:l},"",o);var d=parseInt(n.getAttribute(u),10),q=A(v.getScrollTop(),l);return isNaN(d)||(q=d),E&&E(o,l),S&&!a?v.animateTo(l,{duration:q,easing:b}):g(function(){v.setScrollTop(l)}),!0},d=function(){if(e.location.hash&&t.querySelector){var n=t.querySelector('a[href="'+e.location.hash+'"]');n||(n=t.createElement("a"),n.href=e.location.hash),m(n,!0)}},g=function(t){e.setTimeout(t,1)};l.menu={},l.menu.init=function(r,i){v=r,i=i||{},b=i.easing||a,S=i.animate!==!1,A=i.duration||n,T=i.handleLink,k=i.scale||o,y=i.complexLinks===!0,E=i.change,N=i.updateUrl!==!1,"number"==typeof A&&(A=function(t){return function(){return t}}(A)),l.addEvent(t,"click",p),f&&l.addEvent(e,"popstate",function(t){var e=t.state||{},n=e.top||0;g(function(){v.setScrollTop(n)})},!1),d()},l.menu.click=function(t){m(t)};var v,b,A,S,T,k,y,E,N;g(function(){e.location.hash&&e.scrollTo(0,0)})}(document,window);