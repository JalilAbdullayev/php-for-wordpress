<?php
/*
Working with variables
*/

// a simple text variable
$message = 'Hello World';
echo $message;

//using a variable with a function
$date = date('l jS F Y');
echo $date;

// using variables to store results of a database call
$args = array(
    'parent' => 0,
    'sort_order' => ASC,
    'sort_column' => 'menu_order',
);
$mypages = get_pages($args);
if ($mypages) {
    echo '<ul class="pages"></ul>';
    foreach ($mypages as $mypage) {
        $mypageID = $mypage->ID;
        echo '<li>
                <a href="' . get_page_link($mypageID) . '">'
            . $mypage->post_title .
            '</a>
            </li>';
    }
    echo '</ul>';
}

$message = 'Hello everybody';
$mood = get_post_meta(get_the_ID(), 'mood', true);
echo $message . " today's date is " . $date . " and I'm feeling " . $mood . '.';

$args = array(
    'posts_per_page' => 5
);
$myposts = get_posts($args);
if ($myposts) {
    $message = 'Hello everybody';
    echo '<ul class="pages"></ul>';
    $mood = get_post_meta($mypostID, 'mood', true);
    foreach ($myposts as $mypost) {
        $mypostID = $mypost->ID;
        $date = date('l jS F Y', $mypostID);
        echo '<li>'
            . $message . " I wrote this post on  " . $date . " and I'm feeling " . $mood . '.' .
            '</li>';
    }
    echo '</ul>';
}