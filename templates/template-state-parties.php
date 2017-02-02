<?php
/**
Template Name: State Parties Page
**/

get_header();
get_template_part('sections/specia','breadcrumb'); 
?>

<section class="page-wrapper">
	<div class="container">

		<div class="row padding-top-60 padding-bottom-60">		
			
			<!--Blog Detail-->
			<div class="site-content">
			<div class="col-md-12 col-sm-12" >
				
		    <header>
		        <?php the_title('<h2 class="page-title">', '</h2>' ); ?> 
		        <div class="title-border"></div>
		    </header>
					
                    <?php
                        $page = get_page_by_title( get_the_title() );
                        $content = apply_filters('the_content', $page->post_content); 
                        echo $content;
                    ?>
                
	                <div class="grid">

							<?php //get data and store as js for the map
								echo '<script>';
								echo '	var stateData = new Array();';
								if(get_field('eastern_area'))
								{
									while(has_sub_field("eastern_area"))
									{
										$state = get_sub_field('state');
										$name = get_sub_field('name');
										$address = get_sub_field('address');
										$address2 = get_sub_field('address2');
										$phone = get_sub_field('phone');
										$email = get_sub_field('email');
										$website = get_sub_field('website');
										echo '	stateData.push(["'. $state .'","'. $name .'","'. $address.'","'. $address2 .'","'. $phone .'","'. $email .'","'. $website .'"]);';
									}
								}
								if(get_field('southern_area'))
								{
									while(has_sub_field("southern_area"))
									{
										$state = get_sub_field('state');
										$name = get_sub_field('name');
										$address = get_sub_field('address');
										$address2 = get_sub_field('address2');
										$phone = get_sub_field('phone');
										$email = get_sub_field('email');
										$website = get_sub_field('website');
										echo '	stateData.push(["'. $state .'","'. $name .'","'. $address.'","'. $address2 .'","'. $phone .'","'. $email .'","'. $website .'"]);';
									}
								}
								if(get_field('mid-western_area'))
								{
									while(has_sub_field("mid-western_area"))
									{
										$state = get_sub_field('state');
										$name = get_sub_field('name');
										$address = get_sub_field('address');
										$address2 = get_sub_field('address2');
										$phone = get_sub_field('phone');
										$email = get_sub_field('email');
										$website = get_sub_field('website');
										echo '	stateData.push(["'. $state .'","'. $name .'","'. $address.'","'. $address2 .'","'. $phone .'","'. $email .'","'. $website .'"]);';
									}
								}
								if(get_field('western_area'))
								{
									while(has_sub_field("western_area"))
									{
										$state = get_sub_field('state');
										$name = get_sub_field('name');
										$address = get_sub_field('address');
										$address2 = get_sub_field('address2');
										$phone = get_sub_field('phone');
										$email = get_sub_field('email');
										$website = get_sub_field('website');
										echo '	stateData.push(["'. $state .'","'. $name .'","'. $address.'","'. $address2 .'","'. $phone .'","'. $email .'","'. $website .'"]);';
									}
								}					
							
								echo '</script>';
							?>

							<!--
							<?php if(get_field('eastern_area')):?>
								<h2 class="center">Eastern Area States</h2>
								<?php while(has_sub_field('eastern_area')):?>
									<div class="state col_4">
										<h3><?php the_sub_field('state')?></h3>
										<h5><?php the_sub_field('name')?></h5>
										<h5><address><?php the_sub_field('address')?></address></h5>
										<h5><address><?php the_sub_field('address2')?></address></h5>
										<a href="tel:<?php the_sub_field('phone')?>"><h5><?php the_sub_field('phone')?></h5></a>
										<a href="mailto:<?php the_sub_field('email')?>"><h6><?php the_sub_field('email')?></h6></a>
									</div>
								<?php endwhile;?>
							<?php endif;?> 
							<div class="clear"></div>

							<?php if(get_field('southern_area')):?>
								<h2 class="center">Southern Area States</h2>
								<?php while(has_sub_field('southern_area')):?>
									<div class="state col_4">
										<h3><?php the_sub_field('state')?></h3>
										<h5><?php the_sub_field('name')?></h5>
										<h5><address><?php the_sub_field('address')?></address></h5>
										<h5><address><?php the_sub_field('address2')?></address></h5>
										<a href="tel:<?php the_sub_field('phone')?>"><h5><?php the_sub_field('phone')?></h5></a>
										<a href="mailto:<?php the_sub_field('email')?>"><h6><?php the_sub_field('email')?></h6></a>
									</div>
								<?php endwhile;?>
							<?php endif;?> 
							<div class="clear"></div>

							<?php if(get_field('mid-western_area')):?>
								<h2 class="center">Mid-Western Area States</h2>
								<?php while(has_sub_field('mid-western_area')):?>
									<div class="state col_4">
										<h3><?php the_sub_field('state')?></h3>
										<h5><?php the_sub_field('name')?></h5>
										<h5><address><?php the_sub_field('address')?></address></h5>
										<h5><address><?php the_sub_field('address2')?></address></h5>
										<a href="tel:<?php the_sub_field('phone')?>"><h5><?php the_sub_field('phone')?></h5></a>
										<a href="mailto:<?php the_sub_field('email')?>"><h6><?php the_sub_field('email')?></h6></a>
									</div>
								<?php endwhile;?>
							<?php endif;?> 
							<div class="clear"></div>

							<?php if(get_field('western_area')):?>
								<h2 class="center">Western Area States</h2>
								<?php while(has_sub_field('western_area')):?>
									<div class="state col_4">
										<h3><?php the_sub_field('state')?></h3>
										<h5><?php the_sub_field('name')?></h5>
										<h5><address><?php the_sub_field('address')?></address></h5>
										<h5><address><?php the_sub_field('address2')?></address></h5>
										<a href="tel:<?php the_sub_field('phone')?>"><h5><?php the_sub_field('phone')?></h5></a>
										<a href="mailto:<?php the_sub_field('email')?>"><h6><?php the_sub_field('email')?></h6></a>
									</div>
								<?php endwhile;?>
							<?php endif;?> 
							<div class="clear"></div> -->
							<div class="clear"></div>
							<div class="map-container" id="container">
								<div id="map" style="position:relative;"></div>
								<div class="state-info-container"><div id="stateInfo"></div></div>
							</div>
							
							<hr>
							<h3 class="center">Area Chairs</h3>
							<hr>
							<?php if(get_field('area_chairs')):?>
								<?php while(has_sub_field('area_chairs')):?>
									<div class="state-chair col_6">
										<div class="area-color" style="background-color:<?php the_sub_field('area_color');?>"></div>
										<h4><?php the_sub_field('title')?></h4>
										<div class="clear"></div>
										<h5>Chairman: <?php the_sub_field('name')?></h5>
										<h5><address><?php the_sub_field('address')?></address></h5>
										<h5><address><?php the_sub_field('address2')?></address></h5>
										<a href="tel:<?php the_sub_field('phone')?>"><h5><?php the_sub_field('phone')?></h5></a>
										<a href="mailto:<?php the_sub_field('email')?>"><h6><?php the_sub_field('email')?></h6></a>
									</div>
								<?php endwhile;?>
							<?php endif;?> <!-- end area chairs -->
							<div class="clear"></div>

					</div> <!-- end grid -->
			
			</div> <!--col-->
		</div>	<!--site content-->
		</div> <!--row-->
	</div> <!--container-->
</section>
<?php get_footer(); ?>

