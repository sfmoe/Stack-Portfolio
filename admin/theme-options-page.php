<div class="wrap">
<?php
if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;
?>
<?php screen_icon(); echo "<h2>" . get_current_theme() ." - ". __( ' Stack Options', 'Stack Portfolio' ) . "</h2>"; ?>
<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'sampletheme' ); ?></strong></p></div>
		<?php endif; ?>

<form method="post" action="options.php">
	<?php settings_fields( 'stack_portfolio_options' ); ?>
	<?php $options = get_option( 'stack_portfolio_theme_options' );

	print_r($options);
	 ?>

<h3>Stack Portfolio Pages Options</h3>
<hr/>
<table>
<tr><td>
	<label>Pages Name
<input id="stack_portfolio_options[stack_pages_name]" class="regular-text" type="text" name="stack_portfolio_options[stack_pages_name]" value="<?php esc_attr_e( $options['stack_pages_name'] ); ?>" />
</label>

</td>
<td>

	<label>Pages Title
<input id="stack_portfolio_options[stack_pages_title]" class="regular-text" type="text" name="stack_portfolio_options[stack_pages_title]" value="<?php esc_attr_e( $options['stack_pages_title'] ); ?>" />
</label>
</td>
</tr>

</table>



<h3>Stack Portfolio Blog Options</h3>
<hr/>
<table>
<tr><td>
	<label>Blog Name
<input id="stack_portfolio_options[stack_blog_name]" class="regular-text" type="text" name="stack_portfolio_options[stack_blog_name]" value="<?php esc_attr_e( $options['stack_blog_name'] ); ?>" />
</label>

</td>
<td>

	<label>Blog Title
<input id="stack_portfolio_options[stack_blog_title]" class="regular-text" type="text" name="stack_portfolio_options[stack_blog_title]" value="<?php esc_attr_e( $options['stack_blog_title'] ); ?>" />
</label>
</td>
</tr>

</table>


<p class="submit">
	<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'Stack Portfolio' ); ?>" />
</p>
</form>
</div>


<style type="text/css">
table{
	width: 100%;
}
</style>