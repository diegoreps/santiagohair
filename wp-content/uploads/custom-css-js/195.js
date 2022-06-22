<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function () {

    var img = jQuery('.parallax');
	
        lastPosition = 0;
	
         jQuery(window).scroll(function () {

        var position = jQuery(window).scrollTop()

        var top = -position / 3;
            itop = top;
        if (position > lastPosition) {
            TweenLite.to(img, 1, {y: top/2});
        } else {
            TweenLite.to(img, 1, {y: itop/2});
        }
        lastPosition = position;
    })
})</script>
<!-- end Simple Custom CSS and JS -->
