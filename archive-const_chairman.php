<?php
get_header();
get_template_part('sections/specia','breadcrumb'); ?>
<!-- Blog & Sidebar Section -->
<section class="page-wrapper">

	<div class="container">
		<div class="row padding-top-60 padding-bottom-60">
			
			<!--Blog Detail-->
			<div class="col-md-12 col-sm-12">

				<header>

			        <h2 class="page-title">Message From the Chairman</h2>
		        	<div class="title-border"></div>

			    </header><!-- .entry-header -->
					<?php $counter = 0; ?>
					<?php if( have_posts() ): ?>
					
						<?php while( have_posts() ): the_post(); ?>						
							<?php
							$hide_show_blog_meta = get_theme_mod('hide_show_blog_meta','on'); 
						?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						    
						    <a  href="<?php the_permalink(); ?>" class="post-thumbnail" ><?php the_post_thumbnail(); ?></a>
							
						    <header class="entry-header">
						        <?php $title = get_the_title();
						            if( $title != NULL && $title != ''){ ?>
						        <?php     
						            if ( is_single() ) :
						            
						            the_title('<h2 class="page-title">', '</h2>' );
						            
						            else :
						            
						            the_title( sprintf( '<h2 class="page-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
						            endif;
						            
						        ?> 
						        <div class="title-border"></div>
						        <?php } ?>
						    </header><!-- .entry-header -->

						    <div class="entry-content">

						        <?php
						            if ( $counter == 0 && !is_paged() ){

						    			the_content( 
						    				sprintf( 
						    					__( 'Read More', 'specia' ), 
						    					'<span class="screen-reader-text">  '.get_the_title().'</span>' 
						    				) 
						    			);
						            } else {
						            	
						                the_excerpt();
						            }
								?>
						    </div><!-- .entry-content -->
						    <?php if( $hide_show_blog_meta == 'on' ): ?>
						    <footer class="entry-footer">

						        <?php   $cat_list = get_the_category_list();
						            if(!empty($cat_list)) { ?>
						        <span class="cat-links">
						            <a href="<?php the_permalink(); ?>"><i class="fa fa-folder-open"></i><?php the_category(','); ?></a>
						        </span>
						        <?php } ?>

						        <?php if( get_the_tags() ) { ?>
						        <span class="tags-links">
						            <a href="<?php the_permalink(); ?>"><i class="fa fa-tags"></i> <?php the_tags('', ', ', ''); ?></a>
						        </span>
						        <?php } ?>

						    </footer><!-- .entry-footer -->
						    <?php endif; ?>


						</article>

							<?php $counter++; ?>
					
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
