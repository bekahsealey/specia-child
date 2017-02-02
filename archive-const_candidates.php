<?php
get_header();
get_template_part('sections/specia','breadcrumb'); ?>

<!-- Blog & Sidebar Section -->
<section class="page-wrapper">
	<div class="container">
		<div class="row padding-top-60 padding-bottom-60">		

			<div class="col-md-12 col-sm-12" >
				<header>

			        <h2 class="page-title">State &amp; Local Candidates</h2>
		        	<div class="title-border"></div>

			    </header><!-- .entry-header -->
				<div class="site-content">
					<?php if( have_posts() ): ?>
					
						<?php while( have_posts() ): the_post(); ?>
						
							<?php get_template_part('template-parts/content','candidates'); ?>
							
						<div class="paginations">
						<?php						
						// Previous/next page navigation.
						the_posts_pagination( array(
						'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
						'next_text'          => '<i class="fa fa-angle-double-right"></i>',
						) ); ?>
						</div>
					
						<?php endwhile; ?>
						
					<?php else: ?>
						
						<?php get_template_part('template-parts/content','none'); ?>
						
					<?php endif; ?>
			
			</div>
			<!--/End of Blog Detail-->
			</div>
		
		</div>	
	</div>
</section>
<!-- End of Blog & Sidebar Section -->
 
<div class="clearfix"></div>

<?php get_footer(); ?>
