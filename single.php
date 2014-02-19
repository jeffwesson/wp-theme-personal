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
            <div id="post-<?php the_ID() ?>" class="row row-0">
                <aside class="col-sm-2 no-mobile">
                    <div class="pull-right">
                        <img src="/wp-content/uploads/2014/02/jeff-short-hair-225px.png" class="img-responsive img-circle"
                             alt="Jeff Wesson at a park">
                    </div>
                    <div class="clearfix"></div>
                    <?php
                    $tags = wp_get_post_tags(get_the_ID());
                    if (count($tags) >= 1): ?>
                        <h3 class="text-muted pull-right">Tags</h3>

                        <div class="clearfix"></div>
                        <!-- List of tags -->
                        <ul class="list-unstyled text-right">
                            <?php
                            foreach ($tags as $tag) {
                                $tag_link = get_tag_link($tag->term_id);
                                $tag_html = "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                                $tag_html .= "{$tag->name}</a></li>";
                                echo $tag_html;
                            }
                            ?>
                        </ul>
                    <?php endif; ?>
                    <?php
                    $categories = wp_get_object_terms(get_the_ID(), 'category');
                    if (count($categories) >= 1): ?>
                        <h3 class="text-muted pull-right">Categories</h3>

                        <div class="clearfix"></div>
                        <!-- List of categories -->
                        <ul class="list-unstyled text-right">
                            <?php
                            foreach ($categories as $category) {
                                $category_link = get_category_link($category->term_id);
                                $category_html = "<li><a href='{$category_link}' title='{$category->name} Tag' class='{$category->slug}'>";
                                $category_html .= "{$category->name}</a></li>";
                                echo $category_html;
                            }
                            ?>
                        </ul>
                    <?php endif; ?>
                </aside>
                <section role="main content" class="col-sm-10">
                    <hgroup class="blog-title row">
                        <h3 class="col-sm-8"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>

                        <div class="col-sm-4 text-right text-muted">
                            <span>Authored: <?php the_date() ?> at <?php the_time() ?></span>
                            <?php if (get_the_modified_date() != get_the_date()): ?>
                                <span>Modified: <?php the_modified_date() ?> at <?php the_modified_time() ?></span>
                            <?php endif; ?>
                        </div>
                    </hgroup>

                    <div class="main-content two-col">
                        <?php the_content() ?>
                    </div>

                </section>
            </div>
            <div class="row">
                <div class="col-xs-6 text-right">
                    <h4 class="lead"><?php previous_post_link('%link', '&larr; %title', FALSE); ?></h4>
                </div>
                <div class="col-xs-6">
                    <h4 class="lead"><?php next_post_link('%link', '%title &rarr;', FALSE); ?></h4>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </section>
<?php // get_sidebar() ?>
<?php get_footer() ?>