<?php
if ( have_posts() ) {
    $the_artists = [];
    while ( have_posts() ) : the_post();

        $the_artists[] = [
            'the_title'     => $post->post_title,
            'the_link'      => get_permalink()
        ];



    endwhile; // End of the loop.
    bladerunner(
            'views.artists',
            [
                'the_artists'   => $the_artists,
            ]
    );

} // end if

