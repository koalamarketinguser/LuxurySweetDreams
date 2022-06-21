<?php
/**
 * The template for displaying search forms.
 */
?>
<div class="search-form-outer-container">
<form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<a href="#" class="search-close"><i class="bridey-icon-times-circle"></i></a>
	<div class="input-group">
		<input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Search', 'luxury' ); ?>" />
		<button type="submit" class="btn btn-secondary" name="submit"><?php esc_html_e( 'Search', 'luxury' ); ?></button>
	</div><!-- /.input-group -->
</form>
</div>

