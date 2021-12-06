<?php
/* 
Template Name: page_search
*/
get_header();
$search_query = $_GET['s'];
?>
<div class="page-heading"><h2>Inlägg som innehåller: <?php echo $search_query; ?></h2></div>
<div class="page-container">
    <main>
        <?php
        if (have_posts()) :
                    query_posts( array ( 's' => $search_query, 'posts_per_page' => -1 ) );
                while (have_posts()) : the_post();?>
                    <article id="<?php the_ID(); ?>"<?php post_class(); ?>>
                        <div class="post-title">
                            <?php the_title('<h2><a href="http://localhost:8100/wordpress/?p=<?php the_ID(); ?>">', '</a></h2>');?></div>
                        <div class="post-details">
                            <span><i class="fa fa-calendar"></i><?php the_date();?></span>
                            <span><a href="http://localhost:8100/wordpress/?author=<?php echo $author_id ?>"><i class="fa fa-user"></i><?php the_author( ' ', ', ', '<br />' );?></a></span>
                           <span><i class="fa fa-tag"></i><?php the_tags( '', ', ', '<br />' );?></span>
                        </div>
                        <div class="post-content">
                            <?php $content = get_the_content();
                            echo mb_strimwidth($content, 0, 1000, '...');?>
                            <a href="<?php the_permalink();?>">Läs vidare</a>
                        </div>
                    </article>
                <?php endwhile;
             else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
           <?php endif;?>
    </main>
    <aside>
        <?php dynamic_sidebar( 'primary' );?>
    </aside>
</div>
<?php get_footer(); ?>