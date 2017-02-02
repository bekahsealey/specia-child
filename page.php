<?php
get_header();
get_template_part('sections/specia','breadcrumb'); ?>

<section class="page-wrapper">
	<div class="container">

		<div class="row padding-top-60 padding-bottom-60">		
			<?php 
				if ( class_exists( 'WooCommerce' ) ) 
				{
					
					if( is_account_page() || is_cart() || is_checkout() ) {
							echo '<div class="col-md-'.( !is_active_sidebar( "woocommerce-1" ) ?"12" :"8" ).'">'; 
					}
					else{ 
				
					echo '<div class="col-md-'.( !is_active_sidebar( "sidebar-primary" ) ?"12" :"8" ).'">'; 
					
					}
					
				}
				else
				{ 
				
					echo '<div class="col-md-12 col-sm-12">';
					
					
				} 
			?>
			<div class="site-content">
			
			<?php 
				
				if( have_posts()) :  the_post();	?>
		    <header>
		        <?php the_title('<h2 class="page-title">', '</h2>' ); ?> 
		        <div class="title-border"></div>
		    </header>
		    	<?php the_post_thumbnail( 'large', array( 'class' => 'aligncenter' ) ); ?>

				<?php
				the_content(); 
				endif;
				
				comments_template( '', true ); // show comments 
			?>
				

			</div><!-- /.posts -->
							
			</div><!-- /.col -->
			

			<?php 
				if ( class_exists( 'WooCommerce' ) ) 
					{
						
						if( is_account_page() || is_cart() || is_checkout() ) {
								get_sidebar('woocommerce'); 
						}
						else{ 
					
						get_sidebar(); 
						
						}
						
					}
			?>
			
						
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>

<?php get_footer(); ?>

