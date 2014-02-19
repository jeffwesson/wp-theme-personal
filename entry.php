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

<?php
$posts = get_posts('posts_per_page=3&order=DESC');
$i = 0;
foreach ($posts as $post): the_post() ?>
    <div id="post-<?php the_ID() ?>" class="row row-<?php echo $i ?>">
        <aside class="col-sm-2 no-mobile">
            <div class="pull-right">
                <?php if ($i === 0): ?>
                    <img src="/wp-content/uploads/2014/02/jeff-short-hair-225px.png" class="img-responsive img-circle"
                         alt="Jeff Wesson at a park">
                <?php endif; ?>
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
                <span class="col-sm-4 text-right text-muted"><?php _e(get_the_date()) ?></span>
            </hgroup>

            <div class="main-content two-col">
                <?php if ($i == 0) {
                    the_content();
                } else {
                    the_excerpt();
                } ?>
            </div>

        </section>
    </div>
    <!-- Only visible on xs screens (views < 768px) e.g., smart phones and phablets -->
    <div class="row visible-xs">
        <div class="col-xs-6">
            <h3 class="text-muted pull-right">Tags</h3>

            <div class="clearfix"></div>
            <!-- List of tags -->
            <ul class="list-unstyled text-right">
                <?php
                $tags = wp_get_post_tags(get_the_ID());
                foreach ($tags as $tag) {
                    $tag_link = get_tag_link($tag->term_id);
                    $tag_html = "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                    $tag_html .= "{$tag->name}</a></li>";
                    echo $tag_html;
                }
                ?>
            </ul>
        </div>
        <div class="col-xs-6">
            <h3 class="text-muted">Categories</h3>
            <!-- List of categories -->
            <ul class="list-unstyled">
                <?php
                $categories = wp_get_object_terms(get_the_ID(), 'category');
                foreach ($categories as $category) {
                    $category_link = get_category_link($category->term_id);
                    $category_html = "<li><a href='{$category_link}' title='{$category->name} Tag' class='{$category->slug}'>";
                    $category_html .= "{$category->name}</a></li>";
                    echo $category_html;
                }
                ?>
            </ul>
        </div>
    </div>
    <!-- /.row -->
    <?php $i++ ?>
<?php endforeach ?>