"use strict";window.onerror=function(e,o,s,a,i){console.log("Error FECSS: "+o+":"+s+":"+a+": "+JSON.stringify(e)+"\n"+JSON.stringify(i))},$(function(){$(document.body).on("fecss.default",null,{},function(e){console.log("body trigger:fecss.default")}),$(document.body).on("fecss.init",null,{},function(e){console.log("body trigger:fecss.init");var o=(new Date).getTime();$(document.body).attr("data-created_at",o)}),$(document.body).on("fecss.window.unload",null,{},function(e,o){console.log("body trigger:fecss.window.unload: "+JSON.stringify(o))}),$(document.body).on("fecss.ajax.success",null,{},function(e){console.log("body trigger:fecss.ajax.success")}),$(document.body).on("fecss.keydown",null,{},function(e,o){console.log("body trigger:fecss.keydown: "+JSON.stringify(o))}),$(document.body).on("DOMSubtreeModified",null,{},function(e,o){}),$(document.body).on("wheel mousewheel DOMMouseScroll MozMousePixelScroll",function(e){-e.originalEvent.deltaY||e.originalEvent.detail||e.originalEvent.wheelDelta}),$(document.body).on("click.fecss.page-loader.close-loader",".page-loader .close-loader",{},function(e){e.preventDefault(),console.log("body trigger:click.fecss.page-loader.close-loader"),$(".page-loader").removeClass("active")}),$(document.body).on("changeClass",null,{},function(e,o){$(function(){})}),$(function(){var e="noname-browser",o=navigator.userAgent.toLowerCase();o.indexOf("msie")!=-1&&(e="msie"),o.indexOf("trident")!=-1&&(e="msie"),o.indexOf("konqueror")!=-1&&(e="konqueror"),o.indexOf("firefox")!=-1&&(e="firefox"),o.indexOf("safari")!=-1&&(e="safari"),o.indexOf("chrome")!=-1&&(e="chrome"),o.indexOf("chromium")!=-1&&(e="chromium"),o.indexOf("opera")!=-1&&(e="opera"),o.indexOf("yabrowser")!=-1&&(e="yabrowser"),$("html").eq(0).addClass(e)}),$(function(){$(document.body).on("keydown",function(e){e.stopPropagation(),$(document.body).trigger("fecss.keydown",[{alt:e.altKey,ctrl:e.ctrlKey,shift:e.shiftKey,meta:e.metaKey,key:e.which,liter:String.fromCharCode(e.which)}])})}),$(function(){}),$(document.body).on("click.fecss.go-to-top",".go-to-top",function(e){e.preventDefault(),$("html, body").animate({scrollTop:0},777)});var e;$(".page-loader .close-loader").on("click",function(o){o.preventDefault(),clearTimeout(e),$(".page-loader").data("window-can-close-it",!0).data("counter-can-close-it",!0).trigger("fecss.can-close-it").removeClass("active").addClass("ready")}),$(document.body).on("fecss.can-close-it",".page-loader",function(e){e.preventDefault();var o=$(this);o.data("counter-can-close-it")&&o.data("window-can-close-it")&&setTimeout(function(){if(o.removeClass("active").addClass("ready"),$(".site-wrap").removeClass("is--hidden").addClass("is--ready"),$(document.body).find(".page-loader").length>0){var e=new WOW({boxClass:"wow",animateClass:"animated",mobile:!1});e.init()}},85)}),$(window).load(function(e){"#contacts-scroll"==window.location.href&&$(".page-loader").data("counter-can-close-it",!0),$(".page-loader").data("window-can-close-it",!0).trigger("fecss.can-close-it"),$(".page-loader ._czr__preloader-process-container ._czr__preloader-process-level").data("fast-page-loading",!0)}),$(function(){var o=$(".page-loader.active");$("._czr__preloader-process-container ._czr__preloader-process-level",o).eq(0),"#contacts-scroll"==window.location.hash?o.data("counter-can-close-it",!0).data("window-can-close-it",!0).removeClass("active"):e=setTimeout(function(){$(".page-loader").data("counter-can-close-it",!0).trigger("fecss.can-close-it")},2e3)}),$(document.body).on("click.fecss.scrollto",".scrollto",{},function(e){e.preventDefault(),console.log("body trigger:click.fecss.scrollto");var o=$(this),s=$(o.attr("href")).eq(0),a=parseInt(o.attr("data-scrollto-diff"))||0,i=parseInt(o.attr("data-scrollto-speed"))||777;$("html, body").animate({scrollTop:s.offset().top+a},i)});var o=window.location.pathname;$('.buyers-tabs-block a[href="'+o+'"]').parent().addClass("active"),$("#objacts-carousel").carousel(),$("#blog-carousel").carousel(),screenJS.isXS()||screenJS.isSM()?$("#about-carousel").carousel({interval:0}):$("#about-carousel").carousel({}),$("img").addClass("img-responsive"),$(".text-block ul").addClass("ul-site"),$(".project-step-panel__item-note ul").addClass("ul-site");var o=window.location.pathname;$('.navbar-nav a[href="'+o+'"]').parent().addClass("active"),$(".text-block table").addClass("table table-bordered"),$(".text-block .table.table-bordered").parent().addClass("table-responsive"),$(".text-block img").parent().addClass("_tb__img"),$('.text-block iframe[src^="https://www.youtube.com"]').parent().addClass("youtube-frame"),$(".btn-journal").on("click",function(){$(this).toggleClass("is-active"),$("._dicb__journal-list").toggleClass("is-visible")}),$("._acb__item ul").addClass("ul-site"),!function(){$(document.body).on("click",".azbn-show-video-btn",{},function(e){e.preventDefault();var o=$(this),s=o.attr("data-iframe-url")||"",a=$("#modal-objacts-video"),i=a.find("iframe");a.modal(),i.attr("src",s),a.one("hide.bs.modal",function(){i.attr("src","")})})}();var o=window.location.pathname;$('.navbar__modal-nav a[href="'+o+'"]').parent().addClass("active"),(device.mobile()||device.tablet())&&$(".navbar-site").autoHidingNavbar(),$("#modal-nav").on("show.bs.modal",function(e){$(".navbar-site").addClass("is--open")}),$("#modal-nav").on("hide.bs.modal",function(e){$(".navbar-site").removeClass("is--open")}),$(window).on("resize",function(e){$(function(){var e={xs:{min:0,max:768},sm:{min:767,max:992},md:{min:991,max:1200},lg:{min:1199,max:1e4}},o={xs:{min:0,max:361},sm:{min:360,max:769},md:{min:768,max:961},lg:{min:960,max:1e4}},s="window-width",a="window-height",i=$(window).outerWidth(!0),t=$(window).outerHeight(!0),n=$("html body").eq(0);i<e.xs.max&&(n.hasClass("window-width-sm")&&n.removeClass("window-width-sm"),n.hasClass("window-width-md")&&n.removeClass("window-width-md"),n.hasClass("window-width-lg")&&n.removeClass("window-width-lg"),s="window-width-xs"),i>e.sm.min&&i<e.sm.max&&(n.hasClass("window-width-xs")&&n.removeClass("window-width-xs"),n.hasClass("window-width-md")&&n.removeClass("window-width-md"),n.hasClass("window-width-lg")&&n.removeClass("window-width-lg"),s="window-width-sm"),i>e.md.min&&i<e.md.max&&(n.hasClass("window-width-xs")&&n.removeClass("window-width-xs"),n.hasClass("window-width-sm")&&n.removeClass("window-width-sm"),n.hasClass("window-width-lg")&&n.removeClass("window-width-lg"),s="window-width-md"),i>e.lg.min&&(n.hasClass("window-width-xs")&&n.removeClass("window-width-xs"),n.hasClass("window-width-sm")&&n.removeClass("window-width-sm"),n.hasClass("window-width-md")&&n.removeClass("window-width-md"),s="window-width-lg"),t<o.xs.max&&(n.hasClass("window-height-sm")&&n.removeClass("window-height-sm"),n.hasClass("window-height-md")&&n.removeClass("window-height-md"),n.hasClass("window-height-lg")&&n.removeClass("window-height-lg"),a="window-height-xs"),t>o.sm.min&&t<o.sm.max&&(n.hasClass("window-height-xs")&&n.removeClass("window-height-xs"),n.hasClass("window-height-md")&&n.removeClass("window-height-md"),n.hasClass("window-height-lg")&&n.removeClass("window-height-lg"),a="window-height-sm"),t>o.md.min&&t<o.md.max&&(n.hasClass("window-height-xs")&&n.removeClass("window-height-xs"),n.hasClass("window-height-sm")&&n.removeClass("window-height-sm"),n.hasClass("window-height-lg")&&n.removeClass("window-height-lg"),a="window-height-md"),t>o.lg.min&&(n.hasClass("window-height-xs")&&n.removeClass("window-height-xs"),n.hasClass("window-height-sm")&&n.removeClass("window-height-sm"),n.hasClass("window-height-md")&&n.removeClass("window-height-md"),a="window-height-lg"),$("html body").eq(0).addClass(s).addClass(a)});var o=$(window).height(),s=($(window).width(),$(".navbar-site").outerHeight(!0)),a=($(".header-site").outerHeight(!0),$(".heading-site").outerHeight(!0)),i=($(".news-item__preview").outerWidth(!0),$(".news-block").outerHeight(!0),$(".footer-site").outerHeight(!0)),t=o-s-i-a;device.mobile()||($(".twoGIS-map__block").css("height",t),$(".twoGIS-map__block").css("height",t)),(device.mobile()||device.tablet())&&($("._iabai__cols.one").prependTo($("._iabai__row._two")),$("._ifbc__btn-block").appendTo($("._ifb__complex")),$(".bg-element").remove())}).trigger("resize"),$(window).on("scroll",function(e){$(function(){var e=$(document).scrollTop(),o=$(".go-to-top");o.hasClass("active")?e<200&&o.removeClass("active"):e>200&&o.addClass("active")}),$(".navbar-site").addClass("scroll");var o=$(document).scrollTop(),s=$(".navbar-site.scroll");s.hasClass("scroll-navbar")?o<600&&s.removeClass("scroll-navbar"):o>600&&s.addClass("scroll-navbar"),s.hasClass("opacity")?o<200&&s.removeClass("opacity"):o>200&&s.addClass("opacity"),s.hasClass("fixed")?o<400&&s.removeClass("fixed"):o>400&&s.addClass("fixed")}).trigger("scroll"),window.onbeforeunload=function(e){$("body").trigger("fecss.window.unload",[e])},$(document.body).trigger("fecss.init")});