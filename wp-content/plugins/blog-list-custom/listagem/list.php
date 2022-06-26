<?php

function blog_inicial($list) {

    ob_start();

    $args = array(
        'posts_per_page' => '3',
        'orderby' => 'date',
        'order'	=> 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish',
        'ignore_sticky_posts'	=> false,
        'cat' => '10',
    );

    $args2 = array(
        'posts_per_page' => '3',
        'orderby' => 'date',
        'order'	=> 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish',
        'ignore_sticky_posts'	=> false,
        'cat' => '11',
    );

    $args3 = array(
        'posts_per_page' => '3',
        'orderby' => 'date',
        'order'	=> 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish',
        'ignore_sticky_posts'	=> false,
        'cat' => '12',
    );

    $categoria01 = new WP_Query( $args );

    $categoria02 = new WP_Query( $args2 );

    $categoria03 = new WP_Query( $args3 );

    ?>

    <section class="blog-inicial">

    <?php

        if($categoria01->found_posts > 0){
            $i = 1;
        ?>

            <div class="categoria-blog-01">
            

        <?php
            while($categoria01->have_posts()) : $categoria01->the_post(); 
                if($i == 1){
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
            }else{
            ?>
                <article class="mini-post  post-<?php the_ID(); ?>">
                    <div class="post-imagem">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <div class="post-conteudo">
                        <div class="blog-post-date">

                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2022/06/icon_calendar.svg" />

                            <time  datetime="<?php echo get_the_date( 'Y-m-d' ) ?>"><?php echo get_the_date( 'd/m/Y' ) ?></time>

                        </div>
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                    </div>
                </article>

            <?php
            }
            $i++;
            endwhile;
        ?>
            </div>
        <?php

        }else{
            
            
        }

    ?>

<?php

if($categoria02->found_posts > 0){
    $i = 1;
?>

    <div class="categoria-blog-02">
    

<?php
    while($categoria02->have_posts()) : $categoria02->the_post(); 
        if($i == 1){
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
    }else{
    ?>
        <article class="mini-post  post-<?php the_ID(); ?>">
            <div class="post-imagem">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </div>
            <div class="post-conteudo">
                <div class="blog-post-date">

                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2022/06/icon_calendar.svg" />

                    <time  datetime="<?php echo get_the_date( 'Y-m-d' ) ?>"><?php echo get_the_date( 'd/m/Y' ) ?></time>

                </div>
                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
            </div>
        </article>

    <?php
    }
    $i++;
    endwhile;
?>
    </div>
<?php

}else{
    
    
}

?>

<?php

if($categoria03->found_posts > 0){
    $i = 1;
?>

    <div class="categoria-blog-03">
    

<?php
    while($categoria03->have_posts()) : $categoria03->the_post(); 
        if($i == 1){
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
    }else{
    ?>
        <article class="mini-post  post-<?php the_ID(); ?>">
            <div class="post-imagem">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </div>
            <div class="post-conteudo">
                <div class="blog-post-date">

                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2022/06/icon_calendar.svg" />

                    <time  datetime="<?php echo get_the_date( 'Y-m-d' ) ?>"><?php echo get_the_date( 'd/m/Y' ) ?></time>

                </div>
                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
            </div>
        </article>

    <?php
    }
    $i++;
    endwhile;
?>
    </div>
<?php

}else{
    
    
}

?>

    </section>

    <?php

    return ob_get_clean();
    
}
add_shortcode('blog_inicial_customizada', 'blog_inicial');

function blog_lista($list) {

    ob_start();

    $currentCategory = '';
    $search_term = '';
    $posttags = '';
    $tag = '';

    if(is_archive()){
        $currentCategory = get_term_by( 'name', single_cat_title("", false), 'category' );
        $currentCategory = $currentCategory->term_id;
      }
      

      if(is_search()){
          $search_term = $_GET['s'];
      }

      if(is_tag()){
          $tag = get_term_by( 'name', get_the_archive_title("", false), 'tag' );
          $tag = $tag->term_id;
      }

    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

    $args = array(
        'posts_per_page' => '9',
        'paged' => $paged,
        'orderby' => 'date',
        'order'	=> 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish',
        'ignore_sticky_posts'	=> false,
        'cat' => $currentCategory,
        's' => $search_term,
        'tag_id' => $tag,
    );

    $blog = new WP_Query( $args );

    ?>

    <section class="blog-posts">

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

    <div class="rodape-blog">
        <div id="pagination">
            <?php wp_pagenavi( array( 'query' => $blog ) ); ?>
        </div>
    </div>

    <?php

    return ob_get_clean();
    
}
add_shortcode('blog_lista_customizada', 'blog_lista');

function filtro_categoria(){
?>
    <div class="filtro blog-categorias-filtro">
        <select onchange="location = this.value;">
            <?php 
                $categories = get_terms( 'category', 'orderby=count&hide_empty=0' );
                $output = '';
                $output .= '<option value="'.get_home_url().'/blog/">Selecione uma Categoria</option>';
                if ( ! empty( $categories ) ) {
                    foreach( $categories as $category ) {
                        if($currentCategory == $category->term_id){
                            $output .= '<option selected value="'.get_home_url().'/categoria/'.$category->slug.'/">' . esc_html( $category->name ) . '</option>';
                        }else{
                            $output .= '<option value="'.get_home_url().'/categoria/'.$category->slug.'/">' . esc_html( $category->name ) . '</option>';
                        }
                        
                    }
                    echo $output;
                }else{

                }
            ?>
        </select>
    </div>
<?php
}

add_shortcode('filtro_categoria_customizada', 'filtro_categoria');

?>