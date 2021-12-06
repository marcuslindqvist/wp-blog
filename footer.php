<footer>
    <div class="footer-info">
    <?php
    if (have_posts()) :
        query_posts( array ( 'category_name' => 'Footer', 'posts_per_page' => -1 ) );
        while (have_posts()) : the_post();?>
            <article id="<?php the_ID(); ?>" 
            <?php post_class(); ?>
            >
            <?php 
            the_title('<h3>', '</h3>');
            the_content('<p>', '</p>');
            ?>
            </article>
            <?php
        endwhile;
    endif;?>
    </div>
    <div class="copyright">Copyright © Grupp X, 2016</div>
<?php wp_footer();?>
   </body>
</html>