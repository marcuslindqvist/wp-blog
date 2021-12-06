<?php
/* 
Template Name: page_archive
*/
get_header();
$date = $_GET['m'];
$year = substr($date, 0, 4);
$month = substr($date, 4)
?>
<div class="page-heading"><h2>Inlägg från: <?php echo "$year - $month"; ?></h2></div>
<div class="page-container">
    <main>
        <?php
        if (have_posts()) :
                    query_posts( array('category_name' => 'Blogg', 'posts_per_page' => -1,'date_query' => array('year' => date( $year ),'monthnum' => date( $month ),
                ),));
                while (have_posts()) : the_post();?>
                    <article id="<?php the_ID(); ?>"<?php post_class(); ?>>
                        <div class="post-title">
                            <?php the_title('<h2><a href="http://localhost:8100/wordpress/?p=<?php the_ID(); ?>">', '</a></h2>');?></div>
                        <div class="post-details">
                            <span><i class="fa fa-calendar"></i><?php the_date();?></span>
                            <span><i class="fa fa-user"></i><?php the_author( ' ', ', ', '<br />' );?></span>
                           <span><i class="fa fa-tag"></i><?php the_tags( '', ', ', '<br />' );?></span>
                        </div>
                        <div class="post-content">
                            <?php $content = get_the_content();
                            echo mb_strimwidth($content, 0, 1000, '...');?>
                            <a href="<?php the_permalink();?>">Läs vidare</a>
                        </div>
                    </article>
                <?php endwhile;
            endif;?>
    </main>
    <aside>
        <?php dynamic_sidebar( 'primary' );?>
    </aside>
</div>
<?php get_footer(); ?>