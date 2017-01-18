<?php
/**
Template Name: Highlight Category Post (make sure only a single category is set on this page)
**/
get_header();
get_template_part('sections/specia','breadcrumb'); ?>
<?php 
	$hilite_page = get_the_ID();
	$cat = get_the_category();
	$cat = $cat[0]->cat_ID; 
	$cat_query = new WP_Query( array( 'cat' => $cat, 'posts_per_page' => 1, 'orderby' => 'modified', 'order'   => 'DESC',) );
	$cat_thumb = get_post_thumbnail_id($cat_query->ID);

?>
<!-- Blog & Sidebar Section -->
<section class="page-wrapper">
	<div class="container">
		<div class="row padding-top-60 padding-bottom-60">
			
			<!--Blog Detail-->
			<div class="<?php specia_post_column(); ?>" >
					
					<?php if( $cat_query->have_posts() ): ?>
					
						<?php while( $cat_query->have_posts() ): $cat_query->the_post(); ?>
						
							<?php get_template_part('template-parts/content','page'); ?>
					
						<?php endwhile; ?>
						
						<?php comments_template( '', true ); // show comments  ?>
						
					<?php else: ?>
						
						<?php get_template_part('template-parts/content','none'); ?>
						
					<?php endif; ?>
			
			</div>
			<!--/End of Blog Detail-->

				<?php get_sidebar(); ?>
		</div>	
	</div>
</section>
<!-- End of Blog & Sidebar Section -->

