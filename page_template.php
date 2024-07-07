
<?php 
// Template Name: page_tmplate
?>
<?php get_header(); ?>
<div id="wrapper">
    <main>
        <?php
        while (have_posts()) : the_post();
            the_content();
        endwhile; // End of the loop.
        ?>
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>