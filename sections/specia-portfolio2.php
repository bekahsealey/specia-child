<?php 
	$hide_show_child_portfolio= get_theme_mod('hide_show_child_portfolio','on');
	
	if($hide_show_child_portfolio == 'on') :
?>
<?php 
	for($portfolio =1; $portfolio<4; $portfolio++) 
	{
		if( get_theme_mod('portfolio-child-page'.$portfolio)) 
		{
			$portfolio_query = new WP_query('page_id='.get_theme_mod('portfolio-child-page'.$portfolio,true));
			while( $portfolio_query->have_posts() ) 
			{ 
				$portfolio_query->the_post();
				$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
				$img_arr[] = $image;
				$id_arr[] = $post->ID;
			}    
		}
	}
?>

<?php if(!empty($id_arr))
{ ?>

				<div class="row padding-bottom-60">
					
					<?php 
						$i=1;
						foreach($id_arr as $id)
						{ 
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
									if ( has_post_thumbnail() ) { the_post_thumbnail(); }  
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
<?php } endif; ?>
