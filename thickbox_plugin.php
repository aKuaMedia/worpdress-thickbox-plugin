<?php
/*
Plugin Name: ThickBox Plugin 2.1
Plugin URI: http://www.anieto2k.com/plugins-themes/mis-plugins/thickbox-21-plugin/
Description: Muestra mediante ajax una URL, imagen o contenido inline desde tu web.
Version: 2.1
Author: Original: Andres Nieto - Fork: akuamedia-joseluisgv
Author URI: https://github.com/aKuaMedia/worpdress-thickbox-plugin
*/

//Funcion que carga los fichero necesarios
function ThickBox_init() {
?>
	<?php
		$thickboxPluginURL_js = plugin_dir_url(__FILE__). '/thickbox.js';
		$thickboxPluginURL_spin = plugin_dir_url(__FILE__). '/loadingAnimation.gif';
		$thickboxPluginURL_css = plugin_dir_url(__FILE__). '/thickbox.css';
		
		wp_enqueue_script('thickbox-plugin', $thickboxPluginURL_js, array('jquery'), '1.1.0', true);
	?>
	<style type="text/css" media="all">
		@import "<?echo $thickboxPluginURL_css; ?>";
	</style>
	<!--script src="<?=get_settings('siteurl')?>/wp-content/plugins/thickbox/jquery.js" type="text/javascript"></script-->
	<!--script src="<?=get_settings('siteurl')?>/wp-content/plugins/thickbox/thickbox.js" type="text/javascript"></script-->
	<script type="text/javascript">var imgURL = "<?php echo $thickboxPluginURL_spin; ?>";</script>
<?php
}

add_action('wp_head', 'ThickBox_init');
?>