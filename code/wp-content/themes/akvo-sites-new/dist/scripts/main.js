!function(n){var i={common:{init:function(){},finalize:function(){}},home:{init:function(){},finalize:function(){n(".box-wrap.dyno .thumb-wrapper").each(function(){var i=n(this).innerWidth()-15,t=i/1.77777778;n(this).css({height:t+"px"})}),window.addEventListener("resize",function(i){n(".box-wrap.dyno .thumb-wrapper").each(function(){var i=n(this).innerWidth()-15,t=i/1.77777778;n(this).css({height:t+"px"})})})}},about_us:{init:function(){}}},t={fire:function(n,t,e){var o,c=i;t=void 0===t?"init":t,o=""!==n,o=o&&c[n],o=o&&"function"==typeof c[n][t],o&&c[n][t](e)},loadEvents:function(){t.fire("common"),n.each(document.body.className.replace(/-/g,"_").split(/\s+/),function(n,i){t.fire(i),t.fire(i,"finalize")}),t.fire("common","finalize")}};n(document).ready(t.loadEvents)}(jQuery);
//# sourceMappingURL=main.js.map
