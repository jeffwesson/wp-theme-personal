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
    <section role="main content">
        <?php if (have_posts()): ?>
            <hgroup class="row">
                <h2 class="col-xs-12 text-muted"><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>'); ?></h2>
            </hgroup>
            <?php while (have_posts()): the_post() ?>
                <section class="entry-summary">
                    <?php if (is_search()) { ?>
                        <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                        <div class="main-content">
                            <?php the_excerpt() ?>
                        </div>
                        <div class="entry-links"><?php wp_link_pages() ?></div><?php } ?>
                </section>
            <?php endwhile; ?>
        <?php else: ?>
            <article id="post-0" class="post no-results not-found">
                <header class="header">
                    <h2 class="entry-title"><?php _e('Nothing found.') ?></h2>
                </header>
                <section class="entry-content">
                    <p><?php _e('Sorry, nothing matched your search. Please try again.') ?></p>
                </section>
            </article>
        <?php endif; ?>
    </section>
<?php //get_sidebar() ?>
<?php get_footer() ?>



