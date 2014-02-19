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

    <footer class="row">
        <div class="col-sm-6">
            <span>&copy; 2014 Jeff Wesson</span>
        </div>
        <div class="no-mobile col-sm-6">
            <ul class="list-inline text-right">
                <li><a href="https://github.com/jeffwesson"><i class="fa fa-github-square fa-3x"></i></a></li>
                <li><a href="https://twitter.com/jeffwesson"><i class="fa fa-twitter-square fa-3x"></i></a></li>
                <li><a href="https://plus.google.com/102430060937675758208"><i class="fa fa-google-plus-square fa-3x"></i></a></li>
            </ul>
        </div>
    </footer>

    </div>
    <!-- /.container -->

    <script src="js/vendor.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function (b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function () {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = '//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X');
        ga('send', 'pageview');
    </script>
    <script src="js/plugins.js"></script>
<?php wp_footer() ?>