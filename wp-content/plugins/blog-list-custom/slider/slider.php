<?php
function blog_slider($list) {

ob_start();

$args = array(
    'posts_per_page' => '3',
    'orderby' => 'date',
    'order'	=> 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish',
    'ignore_sticky_posts'	=> false,
);

$blog = new WP_Query( $args );

?>

<section class="blog-slider">

<?php

    if($blog->found_posts > 0){

        while($blog->have_posts()) : $blog->the_post(); 

        ?>

            <article id="post-<?php the_ID(); ?>" class="blog-slider-post post-<?php the_ID(); ?>">

                <div class="blog-slider-img">

                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

                </div>

                <div class="blog-slider-conteudo">

                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

                    <p><?php 

                        $texto = get_the_content();

                        $texto = wp_strip_all_tags($texto);

                        $texto = mb_substr($texto, 0, 104);

                        if(strlen($texto) > 104){

                            echo $texto . "..."; 

                        }else{

                            echo $texto; 

                        }


                        ?>
                    </p>

                    <a href="<?php the_permalink(); ?>">Ler matéria <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2022/06/bolinha-1.svg" /></a>

                </div>

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
add_shortcode('blog_slider_customizada', 'blog_slider');