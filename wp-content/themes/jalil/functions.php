<?php
// a basic function
function jalil_say_hello()
{
    echo 'Hello World';
}

add_action('compass_after_header', 'jalil_say_hello', 20);

// a pluggable function
if (!function_exists('jalil_say_hello')) {
    function jalil_say_hello()
    {
        echo "I'm not in a good mood today. I'm not going to say hello.";
    }
}

add_action('widgets_init', 'jalil_say_hello');

function jalil_today_date()
{
    echo date('l jS F Y');
}

add_action('compass_after_header', 'jalil_today_date', 10);

if (!function_exists('jalil_grumpy')) {
    function jalil_grumpy()
    {
        echo "I'm not in a good mood today. I'm not going to say hello.";
    }
}

add_action('compass_after_header', 'jalil_grumpy', 30);

echo apply_filters('jalil_new_filter', '<h3>Latest posts</h3>');

function jalil_new_heading()
{
    '<h3>My Latest Posts</h3>';
}

add_filter('jalil_new_filter', 'jalil_new_heading');