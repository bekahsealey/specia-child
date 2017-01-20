<?php
get_header();
get_template_part('sections/specia','breadcrumb'); ?>

<!-- Blog & Sidebar Section -->
<section class="page-wrapper">
	<div class="container">
		<div class="row padding-top-60 padding-bottom-60">

		<?php get_sidebar( 'education' ); ?>
		<?php 
			$do_not_duplicate = $post->ID;
			$parent = get_query_var('cat');
			$termchildren = get_term_children( $parent, 'category' );

			foreach( $termchildren as $child ) { ?>

				<?php $child_cat_name = get_the_category_by_ID( $child ); ?>

				<?php $child_query = new WP_Query( array( 'cat' => $child, 'posts_per_page' => 1, 'order' => 'DESC' ) ); ?>
				<div class="col-md-6 col-sm-12" >
					
				<h3><?php echo $child_cat_name ?></h3>

					<?php if( $child_query->have_posts() ): ?>
					
						<?php while( $child_query->have_posts() ): $child_query->the_post(); ?>
							<?php $do_not_duplicate = $post->ID; ?>

							<?php get_template_part('template-parts/content','excerpt'); ?>
					
						<?php endwhile; ?>
						
					<?php else: ?>
						
						<?php get_template_part('template-parts/content','none'); ?>
						
					<?php endif; ?>
			
			</div>
			<?php } ?>

		 <?php wp_reset_postdata(); ?>
		</div>
		<div class="row padding-top-60 padding-bottom-60">
			<!--Blog Detail-->

			<div class="col-md-12 col-sm-12" >
			<h3>More <?php echo get_the_category_by_ID($parent); ?></h3>
					
					<?php 
			echo '<pre>'; var_dump($do_not_duplicate); echo '</pre>';if( have_posts() ): ?>
					
						<?php while( have_posts() ): the_post(); ?>
							<?php if ($post->ID == $do_not_duplicate ) continue; ?>
							<?php get_template_part('template-parts/content','excerpt'); ?>
					
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
