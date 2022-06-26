<?php
function listagem_depoimentos($atts) {
    ob_start();
        
        $args = array(
            'posts_per_page' => 10, 
            'post_type' => "depoimentos",
            'post_status' => 'publish',
            'ignore_sticky_posts'	=> false,
            'order' => 'DESC',
            'orderby' => 'date',
        );

        $query = new WP_Query( $args );

        $i = 1;

        $class = "";

        if($query->found_posts > 0){ 

        ?>
        

            <div id="slider" class="depoimentos-linhas">
                <?php while($query->have_posts()) : $query->the_post(); ?>
                <div class="depoimentos-linha">
                    <blockquote>
                        <cite class="author"><?php the_title(); ?></cite>
                        <?php the_content(); ?>
                        <?php

                            $ativas = get_field("quantide_de_estrelas", get_the_ID()); 

                            if(!empty($ativas)){
                        ?>
                        <footer>
                            <div class="estrelas">
                                <?php

                                $desativadas = 5 - $ativas;
                                
                                if($ativas != 0 && isset($ativas)){

                                    for ($i=1; $i<=$ativas; $i++){
                                        echo '<img src="'.get_home_url().'/wp-content/uploads/2022/06/estrela_colorida.svg"/>';
                                    }
                                }
            
                                if($desativadas != 0 && isset($desativadas)){
            
                                    for ($i=1; $i<=$desativadas; $i++){
                                        echo '<img src="'.get_home_url().'//wp-content/uploads/2022/06/estrela_vazia.svg"/>';
                                    }
                                }
                                
                                ?>
                            </div>
                        </footer>
                        <?php } ?>
                    </blockquote>
                </div>
                <?php $i++; endwhile; ?>
            </div>

        <?php } 



?>

<script>

var rev = jQuery('#slider');
rev.on('init', function(event, slick, currentSlide) {
  var
    cur = jQuery(slick.$slides[slick.currentSlide]),
    next = cur.next(),
    prev = cur.prev();
  prev.addClass('slick-sprev');
  next.addClass('slick-snext');
  cur.removeClass('slick-snext').removeClass('slick-sprev');
  slick.$prev = prev;
  slick.$next = next;
}).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
  console.log('beforeChange');
  var
    cur = jQuery(slick.$slides[nextSlide]);
  console.log(slick.$prev, slick.$next);
  slick.$prev.removeClass('slick-sprev');
  slick.$next.removeClass('slick-snext');
  next = cur.next(),
    prev = cur.prev();
  prev.prev();
  prev.next();
  prev.addClass('slick-sprev');
  next.addClass('slick-snext');
  slick.$prev = prev;
  slick.$next = next;
  cur.removeClass('slick-next').removeClass('slick-sprev');
});

rev.slick({
  speed: 1000,
  arrows: true,
  dots: true,
  focusOnSelect: true,
  prevArrow: '<button class="arrow-left"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2022/06/Icon-feather-arrow-down-circle.svg" /></button>',
  nextArrow: '<button class="arrow-right"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2022/06/Icon-feather-arrow-down-circle-1.svg" /></button>',
  infinite: true,
  centerMode: true,
  slidesPerRow: 1,
  slidesToShow: 1,
  slidesToScroll: 1,
  centerPadding: '0',
  swipe: true,
  customPaging: function(slider, i) {
    return '';
  },
  /*infinite: false,*/
});

</script>


<?php
    return ob_get_clean();
}
add_shortcode('listagem_depoimentos_custom', 'listagem_depoimentos');
?>