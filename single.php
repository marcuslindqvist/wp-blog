    <?php
    get_header();?>
    <div class="page-container">
    <main>    
        <?php if (have_posts()) :
        while (have_posts()) : the_post();?>
            <article id="<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="post-title">
                            <a href="http://localhost:8100/wordpress/?p=<?php the_ID(); ?>"><?php the_title('<h2>', '</h2>');?></a>
                        </div>
            <div class="post-details">
                            <span><i class="fa fa-calendar"></i><?php the_date();?></span>
                            <span><i class="fa fa-user"></i><a href="http://localhost:8100/wordpress/?author=<?php echo $author_id ?>"><?php the_author( ' ', ', ', '<br />' );?></a></span>
                           <span><i class="fa fa-tag"></i><?php the_tags( '', ', ', '<br />' );?></span>
                        </div>
                        <div class="post-content">
            <?php the_content();
            ?></div>
            </article>
            <?php
        endwhile;
    endif;?>
    </main>
    <aside>
        <?php dynamic_sidebar( 'primary' );?>
    </aside>
</div>
    <?php get_footer();
    ?>