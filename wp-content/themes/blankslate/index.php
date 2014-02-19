<?php get_header(); ?>
    <div class=row>
        <div class="visible-sm visible-md visible-lg col-sm-2">
            <div class=pull-right><img src=/wp-content/uploads/2014/02/jeff-short-hair-225px.png class="img-responsive img-circle"
                                       alt="Jeff Wesson at a park"></div>
            <div class=clearfix></div>
            <h4 class=text-right>Tags</h4>
            <ul class="blog-tags text-right">
                <li>Tag 1</li>
                <li>Tag 2</li>
                <li>Tag 3</li>
                <li>Tag 4</li>
            </ul>
        </div>
        <div class=col-sm-10>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php get_template_part('entry'); ?>
            <?php endwhile; endif; ?>
        </div>
        <div class=visible-xs><h4>Tags</h4>
            <ul class=blog-tags>
                <li>Tag 1</li>
                <li>Tag 2</li>
                <li>Tag 3</li>
                <li>Tag 4</li>
            </ul>
        </div>
    </div>
<?php // get_sidebar(); ?>
<?php get_footer(); ?>