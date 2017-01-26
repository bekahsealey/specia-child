<?php
get_header();
get_template_part('sections/specia','breadcrumb'); ?>

<?php
			$do_not_duplicate = array();
			$parent_id = get_query_var('cat');
			$parent = get_term_by( 'id', $parent_id, 'category' );
			$parent_term = $parent->name;
			$parent_slug = $parent->slug;
?>
<!-- Blog & Sidebar Section -->
<section class="page-wrapper">
	<?php if( is_active_sidebar( 'horizontal' ) ) { ?>
	<section class="cat-sidebar">
		<div class="container">
			<div class="row padding-top-60 padding-bottom-60">
				<?php get_sidebar( 'horizontal' ); ?>
			</div>
		</div>
	</section>
	<?php } ?>
	<?php if ( !is_paged() ) { ?>
	<section class="latest">
		<div class="container">
			<div class="row padding-top-60 padding-bottom-60">

			<h3>The Latest in <?php echo $parent_term; ?></h3>
			<?php 
				$termchildren = get_term_children( $parent_id, 'category' );

				foreach( $termchildren as $child ) { ?>

					<?php $child_cat_name = get_the_category_by_ID( $child ); ?>

					<?php $child_query = new WP_Query( array( 'cat' => $child, 'posts_per_page' => 1, 'order' => 'DESC' ) ); ?>
					<div class="child-category col-md-3 col-sm-12" >
						
					<h3><?php echo $child_cat_name ?></h3>

						<?php if( $child_query->have_posts() ): ?>
						
							<?php while( $child_query->have_posts() ): $child_query->the_post(); ?>
								<?php $do_not_duplicate[] .= $post->ID; ?>

								<?php get_template_part('template-parts/content','excerpt'); ?>
						
							<?php endwhile; ?>
							
						<?php else: ?>
							
							<?php get_template_part('template-parts/content','none'); ?>
							
						<?php endif; ?>
				
				</div>
				<?php } ?>

			 <?php wp_reset_postdata(); ?>
			</div>
		</div> 
	</section>
	<?php } ?>
	<div class="container">
		<div class="row padding-top-60 padding-bottom-60">
			<!--Blog Detail-->

			<div class="col-md-12 col-sm-12" >
			<h3>More <?php echo $parent_term; ?></h3>
					
					<?php 
			if( have_posts() ): ?>
					
						<?php while( have_posts() ): the_post(); ?>
							<?php if ( in_array($post->ID, $do_not_duplicate) ) {
								    continue;
								} ?>
								<div class="more-category col-md-6 col-sm-12" >
							<?php get_template_part('template-parts/content','excerpt'); ?>
								</div>
						<?php endwhile; ?>
						
						<div class="paginations">
						<?php						
						// Previous/next page navigation.
						the_posts_pagination( array(
						'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
						'next_text'          => '<i class="fa fa-angle-double-right"></i>',
						) ); ?>
						</div>
						
					<?php else: ?>
						
						<?php get_template_part('template-parts/content','none'); ?>
						
					<?php endif; ?>
			
			</div>
			<!--/End of Blog Detail-->
		
		</div>	
	</div>
</section>
<!-- End of Blog & Sidebar Section -->
 
<div class="clearfix"></div>

<?php get_footer(); ?>
