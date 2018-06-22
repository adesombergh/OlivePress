<?php
use Carbon\Carbon;
if ( have_posts() ) {

    while ( have_posts() ) : the_post();

    $artists = get_post_meta($post->ID, 'release_artists', 1);
    $the_artists = "";
    $the_artist_link = "";

    if ($artists){
        for ($i=0; $i < sizeof($artists); $i++) {
            $the_artists .= get_the_title($artists[$i]);
            if (isset($artists[$i+1])) $the_artists .= ', ';
        }
        if (sizeof($artists)==1)
            $the_artist_link = get_permalink($artists[0]);
    }

    // dd( get_post_meta($post->ID, 'release_purchase', 1) );
    bladerunner(
            'views.release',
            [
                'the_title'     => $post->post_title,
                'the_artists'   => $the_artists,
                'the_pochette'  => get_post_meta($post->ID, 'release_pochette', 1),
                'the_date'      => get_post_meta($post->ID, 'release_date', 1),
                'the_formats'   => get_post_meta($post->ID, 'release_formats', 1),
                'the_index'     => get_post_meta($post->ID, 'release_index', 1),
                'the_texte'     => get_post_meta($post->ID, 'release_texte', 1),
                'the_tracks'    => get_post_meta($post->ID, 'release_tracks', 1),
                'the_links'     => get_post_meta($post->ID, 'release_purchase', 1),
                'the_artist_link' => $the_artist_link,
            ]
        );


    endwhile; // End of the loop.

} // end if

