!function(o){"use strict";o(".carousel").carousel({interval:2e3}),o('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var l=o(this.hash);if((l=l.length?l:o("[name="+this.hash.slice(1)+"]")).length)return o("html, body").animate({scrollTop:l.offset().top-48},1e3,"easeInOutExpo"),!1}}),o(".js-scroll-trigger").click(function(){o(".navbar-collapse").collapse("hide")}),o("body").scrollspy({target:"#mainNav",offset:54}),o(window).scroll(function(){o("#mainNav").offset().top>100?(o("#mainNav").addClass("navbar-shrink"),o("#logo").addClass("logo-size-sm"),o("#logo").removeClass("logo-size-lg")):(o("#mainNav").removeClass("navbar-shrink"),o("#logo").addClass("logo-size-lg"),o("#logo").removeClass("logo-size-sm"))}),o(function(){o("body").on("input propertychange",".floating-label-form-group",function(l){o(this).toggleClass("floating-label-form-group-with-value",!!o(l.target).val())}).on("focus",".floating-label-form-group",function(){o(this).addClass("floating-label-form-group-with-focus")}).on("blur",".floating-label-form-group",function(){o(this).removeClass("floating-label-form-group-with-focus")})})}(jQuery);