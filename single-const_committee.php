<?php
get_header();
get_template_part('sections/specia','breadcrumb'); ?>

<!-- Blog & Sidebar Section -->
<section class="page-wrapper">
	<div class="container">
		<div class="row padding-top-60 padding-bottom-60">
			
			<!--Blog Detail-->
			<div class="col-md-12 col-sm-12">
					
					<?php if( have_posts() ): ?>
					
						<?php while( have_posts() ): the_post(); ?>
						
							<?php get_template_part('template-parts/content','committee'); ?>

						<div class="navigation">
							<?php if( is_singular('const_committee') ) { ?>
								<div class="post-nav">
								<div class="alignleft prev-next-post-nav"><?php previous_post_link( '%link', '&laquo;Older' ) ?></div>
								<div class="alignright prev-next-post-nav"><?php next_post_link( '%link', 'Newer&raquo;' ) ?></div>
								</div><?php } ?>
							<div class="clearfix"></div>
						</div>
					
						<?php endwhile; ?>
						
						<?php comments_template( '', true ); // show comments  ?>
						
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

