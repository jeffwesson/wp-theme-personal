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

<form method="get" id="searchform" class="form-search navbar-form navbar-right" action="<?php echo esc_url(home_url('/')) ?>">
    <div class="form-group">
        <label for="s" class="sr-only">Search: </label>
        <input id="s" class="form-control search-query" type="search" name="s"
               placeholder=Search>
        <button id="searchsubmit" type=submit class="btn btn-default"><i class="fa fa-search"></i> Find</button>
    </div>
</form>