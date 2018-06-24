<?php
if ( have_posts() ) {
    $the_une = [];
    while ( have_posts() ) : the_post();

    if ( get_post_meta($post->ID, 'news_une', 1) ) {
        $the_une = [
            'the_title'     => $post->post_title,
            'the_subtitle'  => get_post_meta($post->ID, 'news_subtitle', 1),
            'the_caption'   => wp_get_attachment_image_url(get_post_meta($post->ID, 'news_caption_id', 1),'large'),
            'the_link'      => get_post_meta($post->ID,'news_link_url', 1)
        ];
    } else {
        $the_news[] = [
            'the_title'     => $post->post_title,
            'the_subtitle'  => get_post_meta($post->ID, 'news_subtitle', 1),
            'the_caption'   => wp_get_attachment_image_url(get_post_meta($post->ID, 'news_caption_id', 1),'large'),
            'the_link'      => get_post_meta($post->ID,'news_link_url', 1)
        ];
    }


    endwhile; // End of the loop.
    // dump($the_news);
    // dd($the_une);
    bladerunner(
            'views.news',
            [
                'the_une'   => $the_une,
                'the_news'  => $the_news,
            ]
    );

} // end if

