"use strict";function fecss_ScreenJS(){var e=this;e.screen={w:0,h:0,type:"xs",orientation:"portrait"},e.__resizefunctions={xs:{default:[],portrait:[],landscape:[]},sm:{default:[],portrait:[],landscape:[]},md:{default:[],portrait:[],landscape:[]},"md-h":{default:[],portrait:[],landscape:[]},lg:{default:[],portrait:[],landscape:[]},xl:{default:[],portrait:[],landscape:[]},device:{default:[],portrait:[],landscape:[]},xxl:{default:[],portrait:[],landscape:[]}},e.isXS=function(){return e.screen.w<768},e.isSM=function(){return e.screen.w>767&&e.screen.w<1025},e.isMD=function(){return e.screen.w>1024&&e.screen.w<1200},e.isMDH=function(){return e.screen.w>1024&&e.screen.w<1281&&e.screen.h>909},e.isLG=function(){return e.screen.w>1199&&e.screen.w<1400},e.isXL=function(){return e.screen.w>1399&&e.screen.w<1681},e.isXXL=function(){return e.screen.w>1680},e.device=function(){return e.screen.w<1010},e.screenIs=function(){var o="noname";return e.isXS()?o="xs":e.isSM()?o="sm":e.isMD()?o="md":e.isMDH()?o="md-h":e.isLG()?o="lg":e.isXL()?o="xl":e.isXXL()?o="xxl":e.device()&&(o="device"),o},e.isPortrait=function(){return e.screen.h>e.screen.w},e.isLandscape=function(){return e.screen.w>e.screen.h},e.orientationIs=function(){var o="noname";return e.isPortrait()?o="portrait":e.isLandscape()&&(o="landscape"),o},e.is=function(o){return o==e.screenIs()||o==e.orientationIs()},e.onResize=function(o,s){if(o.type){var a=e.__resizefunctions[o.type];o.orientation?a[o.orientation].push(s):a.default.push(s)}},e.resizeCall=function(o){if(o.type){if(e.__resizefunctions[o.type].default)for(var s=0;s<e.__resizefunctions[o.type].default.length;s++){var a=e.__resizefunctions[o.type].default[s];a(o)}if(e.__resizefunctions[o.type][o.orientation])for(var s=0;s<e.__resizefunctions[o.type][o.orientation].length;s++){var a=e.__resizefunctions[o.type][o.orientation][s];a(o)}}},e.setScreen=function(){return e.screen.w=$(window).outerWidth(!0),e.screen.h=$(window).outerHeight(!0),e.screen.type=e.screenIs(),e.screen.orientation=e.orientationIs(),e.resizeCall(e.screen),console.log(e.screen),e.screen}}window.onerror=function(e,o,s,a,n){console.log("Error FECSS: "+o+":"+s+":"+a+": "+JSON.stringify(e)+"\n"+JSON.stringify(n))};var screenJS=new fecss_ScreenJS;$(window).on("resize",function(){screenJS.setScreen()}),function(e){var o=jQuery.fn.addClass,s=jQuery.fn.removeClass,a=jQuery.fn.toggleClass;e.fn.addClass=function(){var s=o.apply(this,arguments);return e(this).trigger("changeClass",["add"]),s},e.fn.removeClass=function(){var o=s.apply(this,arguments);return e(this).trigger("changeClass",["remove"]),o},e.fn.toggleClass=function(){var o=a.apply(this,arguments);return e(this).trigger("changeClass",["toggle"]),o}}(jQuery),!function(){$(window).on("load",function(){$("[data-toggle-nav]").click(function(){var e=$(this).data("toggle-nav");$(e).toggleClass("open-sidebar")}),$("[data-collapse-nav]").click(function(){var e=$(this).data("collapse-nav");$(e).toggleClass("open")}),$("[data-body]").click(function(){var e=$(this).data("body");$(e).toggleClass("open-navbar")}),$("[data-toggle-blog]").click(function(){var e=$(this).data("toggle-blog");$(e).toggleClass("is--open"),$(this).toggleClass("is--active"),$("body").toggleClass("blog-navbar--open")})})}(),$(function(){$(document.body).on("fecss.default",null,{},function(e){console.log("body trigger:fecss.default")}),$(document.body).on("fecss.init",null,{},function(e){console.log("body trigger:fecss.init");var o=(new Date).getTime();$(document.body).attr("data-created_at",o)}),$(document.body).on("fecss.window.unload",null,{},function(e,o){console.log("body trigger:fecss.window.unload: "+JSON.stringify(o))}),$(document.body).on("fecss.ajax.success",null,{},function(e){console.log("body trigger:fecss.ajax.success")}),$(document.body).on("fecss.keydown",null,{},function(e,o){console.log("body trigger:fecss.keydown: "+JSON.stringify(o))}),$(document.body).on("DOMSubtreeModified",null,{},function(e,o){}),$(document.body).on("wheel mousewheel DOMMouseScroll MozMousePixelScroll",function(e){-e.originalEvent.deltaY||e.originalEvent.detail||e.originalEvent.wheelDelta}),$(document.body).on("click.fecss.page-loader.close-loader",".page-loader .close-loader",{},function(e){e.preventDefault(),console.log("body trigger:click.fecss.page-loader.close-loader"),$(".page-loader").removeClass("active")}),$(document.body).on("changeClass",null,{},function(e,o){$(function(){})}),$(function(){var e="noname-browser",o=navigator.userAgent.toLowerCase();o.indexOf("msie")!=-1&&(e="msie"),o.indexOf("trident")!=-1&&(e="msie"),o.indexOf("konqueror")!=-1&&(e="konqueror"),o.indexOf("firefox")!=-1&&(e="firefox"),o.indexOf("safari")!=-1&&(e="safari"),o.indexOf("chrome")!=-1&&(e="chrome"),o.indexOf("chromium")!=-1&&(e="chromium"),o.indexOf("opera")!=-1&&(e="opera"),o.indexOf("yabrowser")!=-1&&(e="yabrowser"),$("html").eq(0).addClass(e)}),$(function(){$(document.body).on("keydown",function(e){e.stopPropagation(),$(document.body).trigger("fecss.keydown",[{alt:e.altKey,ctrl:e.ctrlKey,shift:e.shiftKey,meta:e.metaKey,key:e.which,liter:String.fromCharCode(e.which)}])})}),$(function(){}),$(document.body).on("click.fecss.go-to-top",".go-to-top",function(e){e.preventDefault(),$("html, body").animate({scrollTop:0},777)});var e;$(".page-loader .close-loader").on("click",function(o){o.preventDefault(),clearTimeout(e),$(".page-loader").data("window-can-close-it",!0).data("counter-can-close-it",!0).trigger("fecss.can-close-it").removeClass("active").addClass("ready")}),$(document.body).on("fecss.can-close-it",".page-loader",function(e){e.preventDefault();var o=$(this);o.data("counter-can-close-it")&&o.data("window-can-close-it")&&setTimeout(function(){if(o.removeClass("active").addClass("ready"),$(".site-wrap").removeClass("is--hidden").addClass("is--ready"),$(document.body).find(".page-loader").length>0){var e=new WOW({boxClass:"wow",animateClass:"animated",mobile:!1});e.init()}},85)}),$(window).load(function(e){"#contacts-scroll"==window.location.href&&$(".page-loader").data("counter-can-close-it",!0),$(".page-loader").data("window-can-close-it",!0).trigger("fecss.can-close-it"),$(".page-loader ._czr__preloader-process-container ._czr__preloader-process-level").data("fast-page-loading",!0)}),$(function(){var o=$(".page-loader.active");$("._czr__preloader-process-container ._czr__preloader-process-level",o).eq(0),"#contacts-scroll"==window.location.hash?o.data("counter-can-close-it",!0).data("window-can-close-it",!0).removeClass("active"):e=setTimeout(function(){$(".page-loader").data("counter-can-close-it",!0).trigger("fecss.can-close-it")},2e3)}),$(document.body).on("click.fecss.scrollto",".scrollto",{},function(e){e.preventDefault(),console.log("body trigger:click.fecss.scrollto");var o=$(this),s=$(o.attr("href")).eq(0),a=parseInt(o.attr("data-scrollto-diff"))||0,n=parseInt(o.attr("data-scrollto-speed"))||777;$("html, body").animate({scrollTop:s.offset().top+a},n)});var o=window.location.pathname;$('.buyers-tabs-block a[href="'+o+'"]').parent().addClass("active"),$("#objacts-carousel").carousel(),$("#about-carousel").carousel({}),$("#blog-carousel").carousel(),$("img").addClass("img-responsive"),$(".text-block ul").addClass("ul-site"),$(".project-step-panel__item-note ul").addClass("ul-site");var o=window.location.pathname;$('.navbar-nav a[href="'+o+'"]').parent().addClass("active"),$(".text-block table").addClass("table table-bordered"),$(".text-block .table.table-bordered").parent().addClass("table-responsive"),$(".text-block img").parent().addClass("_tb__img"),$(".btn-journal").on("click",function(){$(this).toggleClass("is-active"),$("._dicb__journal-list").toggleClass("is-visible")}),$("._acb__item ul").addClass("ul-site"),$(".decor-line.v").each(function(e){var o=$(this),s=o.outerHeight(!0);o.attr("data-default-height",s)});var o=window.location.pathname;$('.navbar__modal-nav a[href="'+o+'"]').parent().addClass("active"),(device.mobile()||device.tablet())&&$(".navbar-site").autoHidingNavbar(),$("#modal-nav").on("show.bs.modal",function(e){$(".navbar-site").addClass("is--open")}),$("#modal-nav").on("hide.bs.modal",function(e){$(".navbar-site").removeClass("is--open")}),$(window).on("resize",function(e){$(function(){var e={xs:{min:0,max:768},sm:{min:767,max:992},md:{min:991,max:1200},lg:{min:1199,max:1e4}},o={xs:{min:0,max:361},sm:{min:360,max:769},md:{min:768,max:961},lg:{min:960,max:1e4}},s="window-width",a="window-height",n=$(window).outerWidth(!0),t=$(window).outerHeight(!0),i=$("html body").eq(0);n<e.xs.max&&(i.hasClass("window-width-sm")&&i.removeClass("window-width-sm"),i.hasClass("window-width-md")&&i.removeClass("window-width-md"),i.hasClass("window-width-lg")&&i.removeClass("window-width-lg"),s="window-width-xs"),n>e.sm.min&&n<e.sm.max&&(i.hasClass("window-width-xs")&&i.removeClass("window-width-xs"),i.hasClass("window-width-md")&&i.removeClass("window-width-md"),i.hasClass("window-width-lg")&&i.removeClass("window-width-lg"),s="window-width-sm"),n>e.md.min&&n<e.md.max&&(i.hasClass("window-width-xs")&&i.removeClass("window-width-xs"),i.hasClass("window-width-sm")&&i.removeClass("window-width-sm"),i.hasClass("window-width-lg")&&i.removeClass("window-width-lg"),s="window-width-md"),n>e.lg.min&&(i.hasClass("window-width-xs")&&i.removeClass("window-width-xs"),i.hasClass("window-width-sm")&&i.removeClass("window-width-sm"),i.hasClass("window-width-md")&&i.removeClass("window-width-md"),s="window-width-lg"),t<o.xs.max&&(i.hasClass("window-height-sm")&&i.removeClass("window-height-sm"),i.hasClass("window-height-md")&&i.removeClass("window-height-md"),i.hasClass("window-height-lg")&&i.removeClass("window-height-lg"),a="window-height-xs"),t>o.sm.min&&t<o.sm.max&&(i.hasClass("window-height-xs")&&i.removeClass("window-height-xs"),i.hasClass("window-height-md")&&i.removeClass("window-height-md"),i.hasClass("window-height-lg")&&i.removeClass("window-height-lg"),a="window-height-sm"),t>o.md.min&&t<o.md.max&&(i.hasClass("window-height-xs")&&i.removeClass("window-height-xs"),i.hasClass("window-height-sm")&&i.removeClass("window-height-sm"),i.hasClass("window-height-lg")&&i.removeClass("window-height-lg"),a="window-height-md"),t>o.lg.min&&(i.hasClass("window-height-xs")&&i.removeClass("window-height-xs"),i.hasClass("window-height-sm")&&i.removeClass("window-height-sm"),i.hasClass("window-height-md")&&i.removeClass("window-height-md"),a="window-height-lg"),$("html body").eq(0).addClass(s).addClass(a)});var o=$(window).height(),s=($(window).width(),$(".navbar-site").outerHeight(!0)),a=($(".header-site").outerHeight(!0),$(".heading-site").outerHeight(!0)),n=($(".news-item__preview").outerWidth(!0),$(".news-block").outerHeight(!0),$(".footer-site").outerHeight(!0)),t=o-s-n-a;device.mobile()||($(".twoGIS-map__block").css("height",t),$(".twoGIS-map__block").css("height",t)),(device.mobile()||device.tablet())&&($("._iabai__cols.one").prependTo($("._iabai__row._two")),$("._ifbc__btn-block").appendTo($("._ifb__complex")),$(".bg-element").remove())}).trigger("resize"),$(window).on("scroll",function(e){$(function(){var e=$(document).scrollTop(),o=$(".go-to-top");o.hasClass("active")?e<200&&o.removeClass("active"):e>200&&o.addClass("active")});var o=$(document).scrollTop(),s=$(window).outerHeight(!0),a=o+s;$(".decor-line.v").each(function(e){var o=$(this),n=o.attr("data-default-height")||0,t=o.position().top,i=Math.abs(t-a)/s;i>1&&(i=1);var r=1-i;o.height(n*r+"px"),console.log(r)}),$(".navbar-site").addClass("scroll");var n=$(document).scrollTop(),t=$(".navbar-site.scroll");t.hasClass("scroll-navbar")?n<600&&t.removeClass("scroll-navbar"):n>600&&t.addClass("scroll-navbar"),t.hasClass("opacity")?n<200&&t.removeClass("opacity"):n>200&&t.addClass("opacity"),t.hasClass("fixed")?n<400&&t.removeClass("fixed"):n>400&&t.addClass("fixed")}).trigger("scroll"),window.onbeforeunload=function(e){$("body").trigger("fecss.window.unload",[e])},$(document.body).trigger("fecss.init")});