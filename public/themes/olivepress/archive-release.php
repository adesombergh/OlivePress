<?php
if ( have_posts() ) {
    $the_releases = [];
    while ( have_posts() ) : the_post();
    if (!get_post_meta($post->ID, 'release_pochette', 1)) continue;
    $artists = get_post_meta($post->ID, 'release_artists', 1);
    $the_artists = "";
    if($artists){
        for ($i=0; $i < sizeof($artists); $i++) {
            $the_artists .= get_the_title($artists[$i]);
            if (isset($artists[$i+1])) $the_artists .= ', ';
        }
    }

    $the_releases[] = [
        'the_title'     => $post->post_title,
        'the_artists'   => $the_artists,
        'the_date'      => get_post_meta($post->ID, 'release_date', 1),
        'the_pochette'  => wp_get_attachment_image_url( get_post_meta($post->ID, 'release_pochette_id', 1), 'large'),
        'the_link'      => get_permalink()
    ];
    endwhile; // End of the loop.

    bladerunner(
            'views.releases',
            [
                'the_releases'   => $the_releases,
            ]
    );

} // end if

