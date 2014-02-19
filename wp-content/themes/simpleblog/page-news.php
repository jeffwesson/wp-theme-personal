<?php
/*
    Template Name: News Page
*/
?>

<?php get_header(); ?>

    <section id="news-content" class="row news" role="news content container">
        <?php query_posts('category_name=news&&posts_per_page=5'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="post" id="post-<?php the_ID(); ?>">

                <div class="post-header">
                    <div class="date">
                        <span class="day"><?php the_time('d') ?></span>
                        <span class="month"><?php the_time('M') ?></span>
                    </div>

                    <div class="title">
                        <h3><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3>
                    </div>
                </div>

                <?php // include(TEMPLATEPATH . '/inc/meta.php'); ?>

                <div class="entry">

                    <?php the_content(); ?>

                    <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

                </div>

                <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

            </div>

            <?php // comments_template(); ?>

        <?php endwhile; endif; ?>
    </section>
    <!-- End of news section -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>