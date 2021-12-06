<?php
/*
Template name: page_image_right
*/
    get_header();?>
    <div class="page-heading"><h2><?php the_title('<h2>', '</h2>');?></h2></div>    
    <div class="page-container">
    <main id="hide-image">
        <?php the_content('<p>', '</p>'); ?>
    </main>
    <div><img width="400px" src="<?php echo catch_that_image() ?>" />
</div></div>
    <?php get_footer();?>