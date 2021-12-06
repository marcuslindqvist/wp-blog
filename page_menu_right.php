<?php
/*
Template name: page_menu_right
*/
    get_header();?>
    <div class="page-heading"><h2><?php the_title('<h2>', '</h2>');?></h2></div> 
    <div class="page-container">
    <main>
        <?php the_content('<p>', '</p>'); ?>
    </main>
    <div id="secondary-sidebar">
    <?php dynamic_sidebar( 'secondary' );?>
    </div></div>
    <?php get_footer();?>