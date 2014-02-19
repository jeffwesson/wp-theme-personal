<?php
/** searchform.php
 *
 * The template for displaying search forms
 *
 * @author		Jeff Wesson
 * @package		Simple Blog
 * @since		1.0.0 - 02.04.2014
 */
?>
    <form method="get" id="searchform" class="form-search navbar-form navbar-right" action="<?php echo esc_url(home_url('/')); ?>">
        <div class="form-group">
            <label for="s" class="sr-only">Search:</label>
            <input id="s" class="form-control search-query" type="search" name="s"
                   placeholder=Search>
            <button id="searchsubmit" type=submit class="btn btn-default"><i class="fa fa-search"></i> Find</button>
        </div>
    </form>
<?php


/* End of file searchform.php */
/* Location: ./wp-content/themes/the-bootstrap/searchform.php */