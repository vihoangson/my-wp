<?php
define('URL_TEMPLATE', 'http://vihoangson.com/templates/webapplayers.com/');
/**
 * Template Name: Homepage
 *
 * @package    WordPress
 * @subpackage Twenty_Fourteen
 * @since      Twenty Fourteen 1.0
 */
?>
<?php

get_header("family");
?>
<div class="container">
    <?php

    /* Start the Loop */
    while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content/content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) {
            comments_template();
        }

    endwhile; // End of the loop.
    ?>
</div>
<?php
get_footer("family");


