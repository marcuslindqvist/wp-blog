<?php
/*
Template name: page_no_menu
*/
    get_header();?>
    <div class="page-heading"><h2><?php the_title('<h2>', '</h2>');?></h2></div> 
    <div class="page-container">
    <main>
        <?php the_content('<p>', '</p>'); ?>
    </main>
    </div>
    <?php get_footer();?>