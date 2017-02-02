<?php if( is_active_sidebar('horizontal') ) : ?>
<div class="row">
	<div class="col-md-12 col-sm-12">
		<div class="horizontal" role="complementary">
			<?php dynamic_sidebar('horizontal'); ?>
		</div><!-- #secondary -->
	</div>
</div>
<?php endif; ?>
