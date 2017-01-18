<?php 
	$hide_show_portfolio= get_theme_mod('hide_show_portfolio','on'); 
	$portfolio_title= get_theme_mod('portfolio_title'); 
	$portfolio_description= get_theme_mod('portfolio_description'); 
	
	if($hide_show_portfolio == 'on') :
?>
<?php 
	for($portfolio =1; $portfolio<4; $portfolio++) 
	{
		if( get_theme_mod('portfolio-page'.$portfolio)) 
		{
			$portfolio_query = new WP_query('page_id='.get_theme_mod('portfolio-page'.$portfolio,true));
			while( $portfolio_query->have_posts() ) 
			{ 
				$portfolio_query->the_post();
				$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
				$img_arr[] = $image;
				$id_arr[] = $post->ID;
			}    
		}
	}for($child_portfolio =1; $child_portfolio<4; $child_portfolio++) 
	{
		if( get_theme_mod('portfolio-child-page'.$child_portfolio)) 
		{
			$portfolio_child_query = new WP_query('page_id='.get_theme_mod('portfolio-child-page'.$portfolio,true));
			while( $portfolio_child_query->have_posts() ) 
			{ 
				$portfolio_child_query->the_post();
				$image = wp_get_attachment_url( get_post_thumbnail_id($portfolio_child_query->ID));
				$img_arr[] = $image;
				$id_child_arr[] = $portfolio_child_query->ID;
			}    
		}
	}
?>

<?php if(!empty($id_arr))
{ ?>
	<section class="portfolio-version">
		<div class="container">
			<div class="portfolio-version-one">
				
				<div class="row text-center padding-top-60 padding-bottom-30">
					<div class="col-sm-12">
						<?php if ($portfolio_title) : ?>
							<h2 class="section-heading wow zoomIn"><?php echo wp_filter_post_kses($portfolio_title); ?></span></h2>
						<?php endif; ?>
						
						<?php if ($portfolio_description) : ?>
							<p><?php echo esc_attr($portfolio_description); ?></p>
						<?php endif; ?>
					</div>
				</div>

				<div class="row padding-bottom-60">
					
					<?php 
						$i=1;
						foreach($id_arr as $id)
						{ 
							$template = get_page_template_slug( $id );

							if ( $template == "templates/template-category-highlight.php") {
								$cat = get_the_category( $id );
								$cat = $cat[0]->cat_ID; 
								$cat_query = new WP_Query( array( 'cat' => $cat, 'posts_per_page' => 1, 'orderby' => 'modified', 'order'   => 'DESC',) );
								$id = $cat_query->post->ID;

							} else {
								$id == $id;
							}

							$title	= get_the_title( $id ); 
							$post	= get_post($id);

							$content = $post->post_content;
							$content = apply_filters('the_content', $content);
							$content = str_replace(']]>', ']]>', $content);		
							$content = substr( $content, 0, strpos( $content, '</p>' ) + 4 );
							$content = strip_tags($content, '<a><strong><em>');					?> 
					
					<div class="col-md-4 col-sm-6">
						<div class="grid wow bounceIn">
							<figure class="effect-sadie">
								<?php 
									if ( has_post_thumbnail() ) { the_post_thumbnail( 'home' ); }  
								?>
								
								<figcaption>
									<div>
										<h2><?php echo $title; ?></h2>
										<p><?php echo $content; ?></p>
									</div>
									<a href="<?php echo get_permalink(); ?>"></a>
								</figcaption>           
							</figure>
						</div>
					</div>
					
					<?php $i++; }  ?>
					
				</div>	

				<?php get_template_part('sections/specia','portfolio2'); ?>
				
			</div>
		</div>
	</section>
	<div class="clearfix"></div>
<?php } endif; ?>
