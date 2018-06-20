<?php
if ( have_posts() ) {
    $the_une = [];
    while ( have_posts() ) : the_post();

    if ( get_post_meta($post->ID, 'news_une', 1) ) {
        $the_une = [
            'the_title'     => $post->post_title,
            'the_subtitle'  => get_post_meta($post->ID, 'news_email', 1),
            'the_caption'   => get_post_meta($post->ID, 'news_caption', 1),
        ];
    } else {
        $the_news[] = [
            'the_title'     => $post->post_title,
            'the_subtitle'  => get_post_meta($post->ID, 'news_subtitle', 1),
            'the_caption'   => get_post_meta($post->ID, 'news_caption', 1),
        ];
    }


    endwhile; // End of the loop.
    bladerunner(
            'views.news',
            [
                'the_une'   => $the_une,
                'the_news'  => $the_news,
            ]
    );

} // end if

