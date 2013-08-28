<?php
/**
 * Single Blog Post template file
 * 
 * This file is the single blog post template file, used to display single blog posts.
 *
 * @package 	Tiga
 * @author		Satrya
 * @license		license.txt
 * @since 		0.0.1
 *
 */

get_header(); ?>

	<section id="primary" class="site-content">

		<?php tiga_content_before(); ?>

		<div id="content" role="main">

		<?php tiga_content(); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php tiga_content_nav( 'nav-below' ); ?>

			<?php get_template_part( 'content', 'single' ); ?>



<div class="wp_rp_wrap  wp_rp_vertical_m" id="wp_rp_first">
<div class="wp_rp_content"><h3 class="related_post_title">Recetas relacionadas</h3>
<ul class="related_post wp_rp" style="visibility: visible">
<?php
        $orig_post = $post;
        global $post;
        $tags = wp_get_post_tags($post->ID);
        
        if ($tags) {
        $tag_ids = array();
        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
        $args=array(
        'tag__in' => $tag_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page'=>5, // Número de entradas relacionadas a mostrar.
        'caller_get_posts'=>1
        );
        
        $my_query = new wp_query( $args );

        while( $my_query->have_posts() ) {
        $my_query->the_post();
        ?>
        
        	<li>
                <a rel="external" href="<? the_permalink()?>" class="wp_rp_thumbnail"><?php the_post_thumbnail(array(150,100)); ?><br />
                <?php the_title(); ?>
                </a>
		</li>
        
        <? }

        }
        $post = $orig_post;
        wp_reset_query();
        ?>
</ul>
</div></div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template( '', true );
			?>

		<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->

		<?php tiga_content_after(); ?>
		
	</section><!-- #primary .site-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
