<?php $hide_show_call_actions= get_theme_mod('hide_show_call_actions','on'); 
	$call_action_button_label= get_theme_mod('call_action_button_label');
	$call_action_button_link= get_theme_mod('call_action_button_link');
	$call_action_button_target= get_theme_mod('call_action_button_target');
?>
<section class="breadcrumb">
    <div class="background-overlay">
        <div class="container">
            <div class="row padding-top-10 padding-bottom-10">
               <div class="col-md-9 col-xs-12 col-sm-9 breadcrumb-position">
						<?php if (function_exists('the_breadcrumb')) the_breadcrumb();?>
                </div>

                <div class="col-md-3 col-xs-12 col-sm-3">
					<?php 
						if($hide_show_call_actions == 'on' && $call_action_button_label) : ?>
	                <div class="col-md-3 pull-right padding-top-10 padding-bottom-5">
	                    <a href="<?php echo esc_url($call_action_button_link); ?>" <?php if(($call_action_button_target)== 1){ echo "target='_blank'"; } ?> class="call-btn-1"><?php echo esc_attr($call_action_button_label); ?></a>
	                </div>
					<?php endif; ?>
                </div>
 
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>