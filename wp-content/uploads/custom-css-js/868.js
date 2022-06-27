<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
if( jQuery(window).width() >= 1024){

jQuery(function () {
	var header = jQuery("#menu-pc");

		var scroll = jQuery(window).scrollTop();

	if (scroll > 0) {
				jQuery("#menu-pc").css("box-shadow", " 0 0 30px 0 rgba(0,0,0,.2)");
				jQuery("#menu-pc").css("position", "fixed");
				jQuery('body').css('padding-top', jQuery('#menu-pc').innerHeight());
			} else {
				jQuery("#menu-pc").css("box-shadow", "unset");
				jQuery("#menu-pc").css("position", "relative");
				jQuery('body').css('padding-top', 0);
			}
		jQuery(window).scroll(function () {
			var scroll2 = jQuery(window).scrollTop();

			if (scroll2 > 0) {
				jQuery("#menu-pc").css("box-shadow", " 0 0 30px 0 rgba(0,0,0,.2)");
				jQuery("#menu-pc").css("position", "fixed");
				jQuery('body').css('padding-top', jQuery('#menu-com-fundo').innerHeight());
			} else {
				jQuery("#menu-pc").css("box-shadow", "unset");
				jQuery("#menu-pc").css("position", "relative");
				jQuery('body').css('padding-top', 0);
			}
		});


});
	
}else{
	
	jQuery(function () {
	var header = jQuery("#menu-mobile");

		var scroll = jQuery(window).scrollTop();

	if (scroll > 0) {
				jQuery("#menu-mobile").css("box-shadow", " 0 0 30px 0 rgba(0,0,0,.2)");
				jQuery("#menu-mobile").css("position", "fixed");
				jQuery('body').css('padding-top', jQuery('#menu-mobile').innerHeight());
			} else {
				jQuery("#menu-mobile").css("box-shadow", "unset");
				jQuery("#menu-mobile").css("position", "relative");
				jQuery('body').css('padding-top', 0);
			}
		jQuery(window).scroll(function () {
			var scroll2 = jQuery(window).scrollTop();

			if (scroll2 > 0) {
				jQuery("#menu-mobile").css("box-shadow", " 0 0 30px 0 rgba(0,0,0,.2)");
				jQuery("#menu-mobile").css("position", "fixed");
				jQuery('body').css('padding-top', jQuery('#menu-mobile').innerHeight());
			} else {
				jQuery("#menu-mobile").css("box-shadow", "unset");
				jQuery("#menu-mobile").css("position", "relative");
				jQuery('body').css('padding-top', 0);
			}
		});


});
	
}</script>
<!-- end Simple Custom CSS and JS -->
