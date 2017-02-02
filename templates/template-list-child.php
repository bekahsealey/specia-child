<?php
/**
Template Name: List Children of Page
**/

get_header();
get_template_part('sections/specia','breadcrumb'); 

$parent_page = get_the_ID();
$parent_query = new WP_Query( array( 'post_type' => 'page' , 'post_parent' => $parent_page, 'order' => 'ASC', 'orderby' => 'menu_order', 'posts_per_page' => -1 ) );
?>

<section class="page-wrapper">
	<div class="container">

		<div class="row padding-top-60 padding-bottom-60">		
			
			<!--Blog Detail-->
			<div class="site-content">
			<div class="col-md-12 col-sm-12" >
					
					<?php if( $parent_query->have_posts() ): ?>
					
						<?php while( $parent_query->have_posts() ): $parent_query->the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('child-list'); ?>>
						    
						    <a  href="<?php the_permalink(); ?>" class="post-thumbnail" ><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' )  ); ?></a>

						    <div class="entry-content">

						    <header class="entry-header">
						        <?php     
						            if ( is_single() ) :
						            
						            the_title('<h2 class="entry-title">', '</h2>' );
						            
						            else:
						            
						            the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
						            
						            endif; 
						        ?> 
						    </header><!-- .entry-header -->
						       <?php 
									the_excerpt();
								?>
						    </div><!-- .entry-content -->
					    </article>
						<?php endwhile; ?>
						
					<?php else: ?>
						
						<?php get_template_part('template-parts/content','none'); ?>
						
					<?php endif; ?>
			
			</div> <!--col-->
		</div>	<!--site content-->
		</div> <!--row-->
	</div> <!--container-->
</section>

<?php get_footer(); ?>

