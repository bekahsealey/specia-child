<?php 
	$hide_show_features= get_theme_mod('hide_show_features','on'); 
	$features_title= get_theme_mod('features_title'); 
	$features_description= get_theme_mod('features_description');
	$features_overlay= get_theme_mod('features_overlay','#333333'); 	
	if($hide_show_features == 'on') {
?>

<section class="features-version-one" style="background: <?php echo esc_attr($features_overlay); ?>">

    <div class="features-overlay" style="background: <?php echo esc_attr($features_overlay); ?>;">
        <div class="container">
            
            <div class="row text-center padding-top-60 padding-bottom-30">
                <div class="col-sm-12">
					<?php if ($features_title)  : ?>
						<h2 class="section-heading wow zoomIn"><?php echo wp_filter_post_kses($features_title); ?></span></h2>
					<?php endif; ?>
					
					<?php if ($features_description)  : ?>
						<p><?php echo esc_attr($features_description); ?></p>
					<?php endif; ?>
                </div>
            </div>
			
			<?php 
				if( is_active_sidebar('specia_feature_widget') ) :
					echo '<div class="row padding-bottom-30">';
						dynamic_sidebar( 'specia_child_feature_widget' );
					echo '</div>';
				endif;
			?>
		
		</div>
    </div>
</section>
<div class="clearfix"></div>
<?php } ?>