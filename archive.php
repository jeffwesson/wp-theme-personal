<?php
/**
 * Theme Name: twbs-wp
 * Template Name: Archives
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
            <div class="row">
                <h2 class="col-xs-12 text-muted">Archives</h2>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="text-muted">Tags</h3>
                    <ul class="list-unstyled">
                        <?php $tags = get_tags(array('orderby' => 'count', 'order' => 'DESC'));
                        foreach ((array)$tags as $tag) {
                            echo '<li><a href="' . get_tag_link($tag->term_id) . '" rel="tag">' . $tag->name . '</a>' . ' (' . $tag->count . ') </li>';
                        } ?>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <h3 class="text-muted">Categories</h3>
                    <ul class="list-unstyled">
                        <?php wp_list_categories('show_count=1&title_li=') ?>
                    </ul>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </section>
<?php // get_sidebar() ?>
<?php get_footer() ?>