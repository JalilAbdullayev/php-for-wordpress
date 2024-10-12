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
    }
} else {
    // what happens if there are no posts
}

get_sidebar();
get_footer();