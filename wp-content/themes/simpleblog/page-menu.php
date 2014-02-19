<?php
/*
    Template Name: Menu Page
*/
?>

<?php get_header(); ?>

    <section id="menu-content" class="row menu" role="menu content container">
        <section class="col-left" role="left content container">
            <h3>Breakfast <span>served all-day</span></h3>
            <h4>Breakfast</h4>
            <ul>
                <?php generate_menu('menu-breakfast'); ?>
            </ul>
            <h4>Griddle</h4>
            <ul>
                <?php generate_menu('menu-griddle'); ?>
            </ul>
            <h4>Breakfast Sides</h4>
            <ul>
                <?php generate_menu('menu-breakfast-sides'); ?>
            </ul>
            <h4>Kid's Menu</h4>
            <ul>
                <?php generate_menu('menu-kids'); ?>
            </ul>
            <h4>Drinks</h4>
            <h5>We are proud to serve Peerless organic fair trade coffee</h5>
            <ul>
                <?php generate_menu('menu-drinks'); ?>
            </ul>
        </section>
        <!-- End of left section -->
        <section class="col-right" role="right content container">
            <h3>Lunch <span>served 11am - 2:30pm</span></h3>
            <h4>Salads</h4>
            <ul>
                <?php generate_menu('menu-salad'); ?>
            </ul>
            <h4>Signature Dishes</h4>
            <ul>
                <?php generate_menu('menu-signature-dishes'); ?>
            </ul>
            <h4>Sandwiches</h4>
            <h5>Served with your choice of hand-cut fries, salad or coleslaw</h5>
            <ul>
                <?php generate_menu('menu-sandwiches'); ?>
            </ul>
            <h4>Burgers</h4>
            <h5>Natural beef char-broiled to order on a potato-onion roll with your choice of hand-cut fries, coleslaw or side
                salad</h5>
            <ul>
                <?php generate_menu('menu-burgers'); ?>
            </ul>
            <h4>Lunch Extras</h4>
            <ul>
                <?php generate_menu('menu-lunch-extras'); ?>
            </ul>
            <h4>Beer, Wine, &amp; Cocktails</h4>
            <ul>
                <?php generate_menu('menu-beer-wine-cocktails'); ?>
            </ul>
        </section>
        <!-- End of right section -->
    </section><!-- End of main section -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>