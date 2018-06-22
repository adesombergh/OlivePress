<?php
use Carbon\Carbon;
if ( have_posts() ) {

    while ( have_posts() ) : the_post();


    $shows = get_post_meta($post->ID, 'artist_shows', 1);
    if ($shows){
        usort($shows, 'date_compare');
        $now = Carbon::now();
        foreach ($shows as $key => $show) {
            $dt = Carbon::createFromFormat('d/m/Y', $show['when']);
            $shows[$key]['too-late'] = ($dt < $now)?1:0;
        }
    }
    $the_releases = array();
    $releases = get_posts([
        'post_type' => 'release',
        'post_status' => 'any',
        'meta_query' => array(
            array(
                'key' => 'release_artists',
                'compare' => 'LIKE',
                'value' => '"'.$post->ID.'"',
            )
        )
    ]);
    foreach($releases as $release){
        $the_releases[] = array(
            'the_title'     => $release->post_title,
            'the_pochette'  => get_post_meta($release->ID, 'release_pochette', 1),
            'the_link'      => get_permalink($release->ID)
        );
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
                'the_extras'    => get_post_meta($post->ID, 'artist_extras', 1),
                'the_releases'  => $the_releases
            ]
        );


    endwhile; // End of the loop.

} // end if


function date_compare($a, $b)
{
    return Carbon::createFromFormat('d/m/Y', $a['when']) < Carbon::createFromFormat('d/m/Y', $b['when']);
}

