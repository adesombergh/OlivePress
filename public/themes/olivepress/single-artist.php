<?php
use Carbon\Carbon;
if ( have_posts() ) {

    while ( have_posts() ) : the_post();


    $shows = get_post_meta($post->ID, 'artist_shows', 1);
    function date_compare($a, $b)
    {
        return Carbon::createFromFormat('d/m/Y', $a['when']) < Carbon::createFromFormat('d/m/Y', $b['when']);
    }
    usort($shows, 'date_compare');
    $now = Carbon::now();
    foreach ($shows as $key => $show) {
        $dt = Carbon::createFromFormat('d/m/Y', $show['when']);
        $shows[$key]['too-late'] = ($dt < $now)?1:0;
    }



    bladerunner(
            'views.artist',
            [
                'the_title'     => $post->post_title,
                'the_email'     => get_post_meta($post->ID, 'artist_email', 1),
                'the_socials'   => get_post_meta($post->ID, 'artist_socials', 1),
                'the_shows'     => $shows,
                'free_zone1'    => get_post_meta($post->ID, 'artist_zone1', 1),
                'free_zone2'    => get_post_meta($post->ID, 'artist_zone2', 1),
            ]
        );


    endwhile; // End of the loop.

} // end if

