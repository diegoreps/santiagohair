<?php

function blog_single_post($single) {
    ob_start();
    if(is_single()){
        ?>
            <section class="blog_list blog_single">
                <div class="blog_list_titulo">
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="blog_list_data">
                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2022/06/icon_calendar.svg" /><time datetime="<?php echo get_the_date( 'Y-m-d' ) ?>"><?php echo "".get_the_date( 'd' )." de ".get_the_date( 'F' ).", ".get_the_date( 'Y' )."" ?></time>
                </div>
                <div class='blog_list_img'>
                    <?php the_post_thumbnail(false,'full') ?>
                </div>
                <div class="blog_list_text">
                    <div class="blog_list_texto">
                        <?php the_content() ?>
                    </div>
                </div>
            </section>
        <?php

    }
    return ob_get_clean();
}
add_shortcode('blog_lista_customizada_single_post', 'blog_single_post');

function blog_single_post_recentes($single) {
    ob_start();
    if(is_single()){

    $args = array(
        'posts_per_page' => '5',
        'orderby' => 'date',
        'order'	=> 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish',
        'ignore_sticky_posts'	=> false,
    );

    $blog = new WP_Query( $args );

    ?>

    <section class="blog-recentes">

    <?php

        if($blog->found_posts > 0){

            while($blog->have_posts()) : $blog->the_post(); 

            ?>

                <article id="post-<?php the_ID(); ?>" class="blog-post post-<?php the_ID(); ?>">

                    <div class="blog-post-img">

                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

                    </div>

                    <div class="blog-post-conteudo">

                    <div class="blog-post-date">

                        <img src="<?php echo get_home_url() ?>/wp-content/uploads/2022/06/icon_calendar.svg" />

                        <time  datetime="<?php echo get_the_date( 'Y-m-d' ) ?>"><?php echo get_the_date( 'd/m/Y' ) ?></time>

                    </div>

                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

                        <p>
                            <?php 

                                $texto = get_the_content();

                                $texto = wp_strip_all_tags($texto);

                                $texto = mb_substr($texto, 0, 97);
                                
                                if(strlen($texto) > 97){

                                    echo $texto . "..."; 

                                }else{

                                    echo $texto; 

                                }


                            ?>
                        </p>

                    </div>

                </article >

            <?php

            endwhile;

        }else{
            
            
        }

    ?>

    </section>
        <?php

    }
    return ob_get_clean();
}
add_shortcode('blog_lista_customizada_single_post_recentes', 'blog_single_post_recentes');

?>