<?php get_header() ?>
    <section id="content" role="main">
        <hgroup class="row">
            <h2 class="col-xs-12 text-muted"><?php _e('Category Archives: '); ?>
                <span><?php single_cat_title() ?></span></h2>
            <?php if ('' != category_description()) echo apply_filters('archive_meta', '<div class="col-xs-12">' . category_description() . '</div>') ?>
        </hgroup>
        <?php if (have_posts()): while (have_posts()): the_post() ?>
            <section class="entry-summary">
                <?php if (is_category()) { ?>
                    <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                    <div class="main-content">
                        <?php the_excerpt() ?>
                    </div>
                    <div class="entry-links"><?php wp_link_pages() ?></div><?php } ?>
            </section>
        <?php endwhile; endif; ?>
    </section>
<?php // get_sidebar() ?>
<?php get_footer() ?>