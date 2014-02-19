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

<?php get_header() ?>
    <section id="content" role="main">
        <?php if (have_posts()): while (have_posts()): the_post() ?>
            <article id="post-<?php the_ID() ?>" <?php post_class() ?>>
                <header class="header">
                    <h1 class="entry-title"><?php the_title() ?></h1> <?php edit_post_link() ?>
                </header>
                <section class="entry-content">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    } ?>
                    <div class="main-content">
                        <?php the_content() ?>
                    </div>
                    <div class="entry-links"><?php wp_link_pages() ?></div>
                </section>
            </article>
            <?php if (!post_password_required()) comments_template('', true) ?>
        <?php endwhile; endif; ?>
    </section>
<?php // get_sidebar() ?>
<?php get_footer() ?>