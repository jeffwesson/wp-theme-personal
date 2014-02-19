<?php get_header() ?>
    <section id="content" role="main">
        <hgroup class="row">
            <h2 class="col-xs-12 text-muted"><?php _e('Tag Archives: ') ?><span><?php single_tag_title() ?></span></h2>
        </hgroup>
        <?php if (have_posts()): while (have_posts()): the_post() ?>
            <section class="entry-summary">
                <?php if (is_tag()) { ?>
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