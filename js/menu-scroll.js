jQuery(window).scroll(function(){
    if  (jQuery(window).scrollTop() >= 250){
         jQuery('#bg-menu-blog').css({'position': 'fixed', 'z-index':'1000', 'top': '0', 'margin-top': '0'});
		 jQuery('#site-navigation').css({'position': 'fixed', 'z-index':'2000', 'top': '0', 'margin-top': '3px'});
    } else {
         jQuery('#bg-menu-blog').css({'position': 'absolute', 'z-index': 'auto', 'margin-top': '250px'});
         jQuery('#site-navigation').css({'position': 'relative', 'z-index': 'auto', 'margin-top': '68px'});
        }
});