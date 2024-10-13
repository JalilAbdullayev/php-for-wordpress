<?php
/*
    echoing out text and more
*/

// simple echo
echo 'Hello World';

// using a template tag
echo get_the_title();
the_title();

// echoing html
get_header();
/*loop opens*/ ?>
<article id="<?php the_ID(); ?>">
    <h2>
        <?php the_title(); ?>
    </h2>
    <?php the_content(); ?>
</article>
<?php
/* loop closes */
get_sidebar();

// alternative using echo
get_header();
/*loop opens*/
echo '<article id="' . get_the_ID() . '">
    <h2>'
    . get_the_title() .
    '</h2>' .
    the_content() .
    '</article>';
/* loop closes */
get_sidebar();

// internationalization
_e('Hello World', 'jalil');

// including variables and text - not using echo
function jalil_get_pages()
{
    if (is_page()) {
        $args = array(
            'parent' => 0,
            'sort_order' => ASC,
            'sort_column' => 'menu_order',
        );
        $mypages = get_pages($args);
        if ($mypages) { ?>
            '<ul class="pagelist"></ul>';
            <?php foreach ($mypages as $mypage) { ?>
                <li>
                    <a href="<?php echo get_page_link($mypage->ID); ?>">
                        <?php echo $mypage->post_title; ?>
                    </a>
                </li>
            <?php } ?>
            </ul>
        <?php }
    }
}