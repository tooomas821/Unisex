
<div id="secondary">
	<?php if ( is_active_sidebar( 'unique-sidebar-id' ) ) : ?>
	<div id="primary-sidebar" class="barra-lateral" role="complementary">
		<?php dynamic_sidebar( 'unique-sidebar-id' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>
</div><!-- #secondary -->