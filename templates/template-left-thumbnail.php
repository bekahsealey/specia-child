<?php
/**
Template Name: Thumbnail Left Aligned
**/
get_header();
get_template_part('sections/specia','breadcrumb'); ?>

<section class="page-wrapper">
	<div class="container">

		<div class="row padding-top-60 padding-bottom-60">		
			
			<div class="site-content">
			
			<?php 
				
				if( have_posts()) :  the_post();	?>
		    <header>
		        <?php the_title('<h2 class="page-title">', '</h2>' ); ?> 
		        <div class="title-border"></div>
		    </header>
		    	<?php the_post_thumbnail( 'medium', array( 'class' => 'alignleft' ) ); ?>

				<?php
				the_content(); 
				endif;
				
				comments_template( '', true ); // show comments 
			?>
				

			</div><!-- /.posts -->
							
			</div><!-- /.col -->
			
						
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>

<?php get_footer(); ?>

