<?php
if ( have_posts() ) {

    while ( have_posts() ) : the_post();

    bladerunner(
            'views.artist',
            [
                'the_title'     => $post->post_title,
                'the_email'     => get_post_meta($post->ID, 'artist_email', 1),
                'the_socials'   => get_post_meta($post->ID, 'artist_socials', 1),
                'the_shows'     => get_post_meta($post->ID, 'artist_shows', 1),
                'free_zone1'    => get_post_meta($post->ID, 'artist_zone1', 1),
                'free_zone2'    => get_post_meta($post->ID, 'artist_zone2', 1),
            ]
        );


    endwhile; // End of the loop.

} // end if

