<?php
/**
 *  Template Name: Demo Page Template
 *  The template for displaying demo pages
 */
get_header();
/* if(have_posts()) : while(have_posts()) : the_post();
endwhile: endif; */
if (have_posts()) {
    while (have_posts()) {
        the_post();
        echo '<article id="' . the_ID() . '"' . post_class() . '>';
        the_content();
        echo '</article>';
    }
} else {
    // what happens if there are no posts
}

get_sidebar();
get_footer();