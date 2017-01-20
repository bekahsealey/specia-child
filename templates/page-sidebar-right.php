<?php
/**
Template Name: Page Right Sidebar
**/
get_header();
get_template_part('sections/specia','breadcrumb'); ?>

<section class="page-wrapper">
	<div class="container">
					
		<div class="row padding-top-60 padding-bottom-60">		
			
			<div class="<?php specia_post_column(); ?>" >
				<div class="site-content">
					<?php the_post(); the_content(); ?>
				</div>
				
				<?php comments_template( '', true ); // show comments ?>	
			</div><!-- /.col -->


			
				<?php get_sidebar(); ?>
						
		</div><!-- /.row -->
		
	</div><!-- /.container -->
</section>

<?php get_footer(); ?>

