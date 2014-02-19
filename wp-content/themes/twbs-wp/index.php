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

<?php
if (have_posts()) :
    // Start the Loop.
    while (have_posts()) {
        get_template_part('entry');
    }
else : ?>
    <div class="row">
        <hgroup class="col-sm-10 col-sm-offset-2">
            <h3>Unfortunately, there aren't any blog posts to read :(</h3>
        </hgroup>
    </div>
<?php endif; ?>

<?php // get_sidebar() ?>

<?php get_footer() ?>