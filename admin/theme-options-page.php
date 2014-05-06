<div class="wrap">

<?

if( is_admin() ){

if(isset($_POST['update_css'])){

require_once ( get_template_directory() . '/plugins/scssphp/scss.inc.php' );
$scss = new scssc();
$file = file_get_contents(get_template_directory() .'/assets/css/stack-portfolio.scss');
$compiled = $scss->compile($file);
file_put_contents(get_template_directory() .'/assets/css/stack-portfolio.css', $compiled);
?>
  <div id="updated-css" class='updated'>
        <p><?php _e( 'CSS Updated!' ); ?></p>
  </div>

<?
}
}

?>

<section>
<h2>SCSS Processor</h2>
If you have changed anything in the style scss file
click here to run processor on your changes:
<form method="post" action="">
<input type='submit' name='update_css' value='Process SCSS' class="button button-primary"></input>
</form>
</section>
<hr />

<form method="post" action="options.php">
    <?php settings_fields( 'stack-settings-group' ); ?>
    <?php do_settings_sections( 'stack-settings-group' ); ?>

 <h2>Site Description</h2>
<?php

fields_html();

     submit_button(); ?>

</form>

</div>