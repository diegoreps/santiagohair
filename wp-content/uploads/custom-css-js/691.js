<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
function ativo(){

        function acc_ativo(){
			jQuery( ".elementor-tab-title" ).each(function( index ) {
              if(jQuery(this).hasClass("elementor-active")){
				parent = jQuery( this ).parents(".elementor-accordion-item");
				jQuery(parent).addClass("accordion-active");
			 }else{
				 parent = jQuery( this ).parents(".elementor-accordion-item");
				 jQuery(parent).removeClass("accordion-active");
			 }
			});
        }

    window.setInterval(acc_ativo,500);
}

jQuery(document).ready(function () {

    ativo();

});</script>
<!-- end Simple Custom CSS and JS -->
