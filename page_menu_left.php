<?php
/*
Template name: page_menu_left
*/
    get_header();?>
    <div class="page-container reverse-column">
        <div id="secondary-sidebar">
        <?php dynamic_sidebar( 'secondary' );?>
        </div>
        <main>
            <h2><?php the_title('<h2>', '</h2>');?></h2>
        <?php the_content('<p>', '</p>'); ?>
        </main>
    </div>
    <?php get_footer();?>