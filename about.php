<?php
/**
 * Theme Name: twbs-wp
 * Template Name: About
 * Theme URI: http://jeffwesson.com
 * Author: Jeff Wesson
 * Author URI: http://jeffwesson.com/
 * Description: A simple blog theme utilizing Twitter Bootstrap 3.1.0.
 * Version: 1.0
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Tags: orange, white, blue, light, responsive, mobile-first
 * Text Domain: twbs-wp
 * This theme, like WordPress, is licensed under the GPL.
 * Use it to make something cool, have fun, and share what you've learned with others.
 */
?>

<?php get_header() ?>
    <div class="row">
        <?php
        $posts = get_posts('posts_per_page=2&include=36,38&order=ASC');
        foreach ($posts as $post): the_post() ?>
            <div class="col-sm-6">
                <h3 class="text-muted"><?php the_title() ?></h3>

                <div class="main-content">
                    <?php the_content() ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

<?php // get_sidebar() ?>
<?php get_footer() ?>