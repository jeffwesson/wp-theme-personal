<?php
/**
 * Theme Name: twbs-wp
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

<?php get_header(); ?>
    <section id="content" role="main">
        <article id="post-0" class="post not-found">
            <header class="header">
                <h1 class="entry-title"><?php _e('Not Found'); ?></h1>
            </header>
            <section class="entry-content">
                <p><?php _e('Nothing found for the requested page. Try a search instead?'); ?></p>
                <?php // get_search_form(); ?>
            </section>
        </article>
    </section>
<?php // get_sidebar(); ?>
<?php get_footer(); ?>