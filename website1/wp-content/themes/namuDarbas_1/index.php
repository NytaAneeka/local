

<div class="container">

    <?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="row">
                <div class="col-md-9 big-class">
                    <?php


                    if( have_posts() ):

                        while( have_posts() ): the_post(); ?>

                            <h3><?php the_title(); ?></h3>

                            <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a')?>, in <?php the_category();?></small>

                            <p><?php  the_content(); ?></p>

                            <hr>
                        <?php  endwhile;

                    endif;

                    $pages = get_pages();

                    if( $pages ):

                        foreach ($pages as $page_data) {
                            $content = apply_filters('the_content', $page_data->post_content);
                            $title = $page_data->post_title;
                            echo $title .'<br>'.$content;


                        }


                    endif;

                    ?>
                </div>
                <?php get_sidebar(); ?>
            </div>




        </main><!-- .site-main -->
    </div><!-- .content-area -->





<?php get_footer(); ?>
</div>