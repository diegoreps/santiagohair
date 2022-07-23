<?php
function ebooks($list) {

ob_start();

$args = array(
    'posts_per_page' => '-1',
    'orderby' => 'date',
    'order'	=> 'DESC',
    'post_type' => 'ebooks',
    'post_status' => 'publish',
    'ignore_sticky_posts'	=> false,
);

$ebooks = new WP_Query( $args );

?>

<section class="ebooks-grid">

<?php

    if($ebooks->found_posts > 0){

        while($ebooks->have_posts()) : $ebooks->the_post(); 

        ?>

            <article id="ebook-<?php the_ID(); ?>" class="ebook-post post-<?php the_ID(); ?>">

                <div class="ebook-img">
                    <?php the_post_thumbnail(); ?>
                </div>

                <p class="tipo"><b><?php echo get_field("tipo", get_the_ID()) ?></b></p>

                <?php the_content(); ?>

                <a download href="<?php echo get_field("link_do_ebook", get_the_ID()); ?>">
                    Download 
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2022/07/Icon-feather-download.svg" />
                </a>

            </article >

        <?php

        endwhile;

    }else{
        
        
    }

?>

</section>

<?php

return ob_get_clean();

}
add_shortcode('ebooks_customizada', 'ebooks');