var f=function(){var v=$(window).width(),m=function(){var e=jQuery("#quik-search-btn"),r=jQuery("#quik-search-remove");e.on("click",function(){jQuery(".dz-quik-search").fadeIn(500),jQuery(".dz-quik-search").addClass("On")}),r.on("click",function(){jQuery(".dz-quik-search").fadeOut(500),jQuery(".dz-quik-search").removeClass("On")})},j=function(){var e=parseInt($(".onepage").css("height"),10);$(".scroll").unbind().on("click",function(r){if(r.preventDefault(),this.hash!==""){var t=this.hash,i=$(t).offset().top,n=parseInt($(".onepage").css("height"),10);$("body").scrollspy({target:".navbar",offset:n+2});var l=i-n;$("html, body").animate({scrollTop:l},800,function(){})}}),$("body").scrollspy({target:".navbar",offset:e+2})},y=function(){var e=0,r=0;setTimeout(function(){$(".header .sticky-header").removeClass("is-fixed"),$(".header").removeAttr("style"),jQuery(".header").length>0&&(jQuery(".header .top-bar").length>0&&v>991?(e=$(".header .top-bar").outerHeight(),r=$(".header .main-bar").outerHeight()):r=$(".header").height());var t=Math.round(r+e);jQuery(".header").css("height",t)},500)};window.addEventListener("scroll",function(){const e=document.querySelector(".scrollIcon");window.scrollY>100?e.classList.remove("hidden"):e.classList.add("hidden")}),document.querySelector(".scrollIcon").addEventListener("click",function(){window.scrollTo({top:0,behavior:"smooth"})});var Q=function(){jQuery("#accordion").on("hidden.bs.collapse",function(e){jQuery(e.target).prev(".panel-heading").find("i.indicator").toggleClass("glyphicon-minus glyphicon-plus")}),jQuery("#accordion").on("shown.bs.collapse",function(e){jQuery(e.target).prev(".panel-heading").find("i.indicator").toggleClass("glyphicon-minus glyphicon-plus")})},b=function(e){if(jQuery(e).length==0)return!1;var r=0,t=0,i=new Array,n;$(e).each(function(){if(n=$(this),$(n).height("auto"),topPostion=n.position().top,t!=topPostion){for(currentDiv=0;currentDiv<i.length;currentDiv++)i[currentDiv].height(r);i.length=0,t=topPostion,r=n.height(),i.push(n)}else i.push(n),r=r<n.height()?n.height():r;for(currentDiv=0;currentDiv<i.length;currentDiv++)i[currentDiv].height(r)})},w=function(){jQuery(window).on("scroll",function(){if(jQuery(".sticky-header").length>0){var e=jQuery(".sticky-header");$(window).scrollTop()>e.offset().top?e.addClass("is-fixed"):e.removeClass("is-fixed")}})},C=function(){if(jQuery("#masonry, .masonry").length>0){jQuery(".filters li").removeClass("active"),jQuery(".filters li:first").addClass("active");var e=jQuery("#masonry, .masonry");if(jQuery(".card-container").length>0){e.data("gutter");var r=e.data("gutter")===void 0?0:e.data("gutter");r=parseInt(r);var t=e.attr("data-column-width")===void 0?"":e.attr("data-column-width");t!=""&&(t=parseInt(t)),e.imagesLoaded(function(){e.masonry({gutter:r,columnWidth:t,isAnimated:!0,itemSelector:".card-container"})})}}jQuery(".filters").length&&(jQuery(".filters li:first").addClass("active"),jQuery(".filters").on("click","li",function(){jQuery(".filters li").removeClass("active"),jQuery(this).addClass("active");var i=$(this).attr("data-filter");e.isotope({filter:i,masonry:{gutter:r,columnWidth:t,isAnimated:!0,itemSelector:".card-container"}})}))},k=function(){jQuery(".counter").length&&jQuery(".counter").counterUp({delay:10,time:3e3})},S=function(){jQuery('iframe[src*="youtube.com"]').wrap('<div class="embed-responsive embed-responsive-16by9"></div>'),jQuery('iframe[src*="vimeo.com"]').wrap('<div class="embed-responsive embed-responsive-16by9"></div>')},x=function(){jQuery("#image-gallery-mix").length&&(jQuery(".gallery-filter").find("li").each(function(){$(this).addClass("filter")}),jQuery("#image-gallery-mix").mixItUp()),jQuery(".gallery-filter.masonary").length&&jQuery(".gallery-filter.masonary").on("click","span",function(){var e=$(this).parent().attr("data-filter");return jQuery(".gallery-filter.masonary span").parent().removeClass("active"),jQuery(this).parent().addClass("active"),jQuery("#image-gallery-isotope").isotope({filter:e}),!1})},z=function(){jQuery("select").length&&jQuery("select").selectpicker()},q=function(){$(".full-height").css("height",$(window).height())},D=function(e){$(".countdown").length&&$(".countdown").countdown({date:e+" 23:5"},function(){$(".countdown").text("we are live")})},T=function(){$("input, textarea").focus(function(){$(this).parents(".form-group").addClass("focused")}),$("input, textarea").blur(function(){var e=$(this).val();e==""?($(this).removeClass("filled"),$(this).parents(".form-group").removeClass("focused")):$(this).addClass("filled")})},s=new Date,A=["January","February","March","April","May","June","July","August","September","October","November","December"];s.setMonth(s.getMonth()+1),s=s.getDate()+" "+A[s.getMonth()]+" "+s.getFullYear();var I=function(){jQuery("input[name='demo_vertical2']").length&&jQuery("input[name='demo_vertical2']").TouchSpin({verticalbuttons:!0,verticalupclass:"ti-plus",verticaldownclass:"ti-minus"})},F=function(){jQuery(".pricingtable-wrapper, .box-hover").on("mouseenter",function(){var e=jQuery(this).parent().parent();e.find(".pricingtable-wrapper, .box-hover").removeClass("active"),jQuery(this).addClass("active")})},L=function(){$(".custom-file-input").on("change",function(){var e=$(this).val().split("\\").pop();$(this).siblings(".custom-file-label").addClass("selected").html(e)})},M=function(){$(".price-slide, .price-slide-2").length>0&&$("#slider-range,#slider-range-2").slider({range:!0,min:300,max:4e3,values:[0,5e3],slide:function(e,r){var t=r.values[0],i=r.values[1];$("#"+this.id).prev().val("$"+t+" - $"+i)}})},P=function(){jQuery(".pricingtable-price.year").css("display","none"),jQuery(".toggle-tabs").on("click",function(){jQuery(".toggle-tabs").hasClass("monthly")&&(jQuery(".pricingtable-price.year").css("display","none"),jQuery(".pricingtable-price.month").css("display","block")),jQuery(".toggle-tabs").hasClass("yearly")&&(jQuery(".pricingtable-price.year").css("display","block"),jQuery(".pricingtable-price.month").css("display","none"))})},B=function(){jQuery(".navbar-toggler").on("click",function(){jQuery("body").toggleClass("screen-lock")})},E=function(){for(var e=window.location,r=$("ul.navbar a").filter(function(){return this.href==e}).addClass("active").parent().addClass("active");r.is("li");)r=r.parent().addClass("show").parent("li").addClass("active")},O=function(){const e=document.createElement("div");e.id="pointer-dot";const r=document.createElement("div");r.id="pointer-ring",document.body.insertBefore(e,document.body.children[0]),document.body.insertBefore(r,document.body.children[0]);let t=-100,i=-100,n=-100,l=-100,c=!1;const Y=u=>{window.onmousemove=a=>{t=a.clientX!=null?a.clientX:-100,i=a.clientY!=null?a.clientY:-100},window.onmousedown=a=>{c=!0},window.onmouseup=a=>{c=!1};const d=(a,h,g)=>(1-g)*a+g*h;window.trace=d;const o=a=>{let h={pointerColor:"#750c7e",ringSize:15,ringClickSize:(u.ringSize||15)-5};return u[a]==null?h[a]:u[a]},p=()=>{t!=null&&(n=d(n,t,.2),l=d(l,i,.2),document.querySelector(".p-action-click:hover")?e.style.borderColor=o("pointerColor"):e.style.borderColor="white",r.style.borderColor=o("pointerColor"),c?r.style.padding=o("ringClickSize")+"px":r.style.padding=o("ringSize")+"px",e.style.transform=`translate(${t}px, ${i}px)`,r.style.transform=`translate(${n-o(c?"ringClickSize":"ringSize")}px, ${l-o(c?"ringClickSize":"ringSize")}px)`,requestAnimationFrame(p))};requestAnimationFrame(p)};jQuery("a").on("mousemove",function(u){jQuery("#pointer-ring").addClass("active")}),jQuery("a").on("mouseleave",function(u){jQuery("#pointer-ring").removeClass("active")}),Y({})};return{init:function(){F(),j(),m(),y(),T(),Q(),w(),S(),x(),D(s),q(),L(),M(),P(),B(),E(),O()},load:function(){z(),b(".equal-wraper .equal-col"),k(),C(),I()},resize:function(){v=$(window).width(),setTimeout(function(){y()},500)}}}();jQuery(document).ready(function(){f.init(),jQuery(".navicon").on("click",function(){$(this).toggleClass("open")})});jQuery(window).on("load",function(){f.load(),setTimeout(function(){jQuery("#loading-area").remove()},500)});jQuery(window).on("resize",function(){f.resize()});