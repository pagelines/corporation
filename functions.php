<?php
// Load DMS //
require_once( dirname(__FILE__) . '/setup.php' );
	
class corporationTheme {


	function __construct() {

		$this->init();
		$this->options();

	}

	function init() {
		/*add_filter( 'pless_vars', array(&$this,'corporation_less_vars'));*/

	}

	// Draw Welcome Panel
	function welcome(){

		ob_start();
		?>
			 <div style="font-size:12px;line-height:14px;color:#444;">
        <p><?php _e('Welcome to Corporation Theme! Please let me know if you have any questions or comments, and enjoy your product.','corporation');?></p>
      </div>
      <div class="row">
        <div class="span6 zmb" style="text-align:center;">
          <a href="http://jamesgiroux.ca" target="_blank" class="btn btn-info btn-mini"><i class="icon icon-globe"></i>  <?php _e('Website','corporation');?></a>
        </div>
        <div class="span6 zmb" style="text-align:center;">
          <a href="http://forum.pagelines.com/68-store-products/" target="_blank" class="btn btn-info btn-mini"><i class="icon icon-ambulance"></i>  <?php _e('Support','corporation');?></a>
        </div>
      </div>
      <div style="margin-top:20px;color:#444;">
        <p style="border-bottom:1px solid #ccc;margin:0 0 0.75em;"><strong><?php _e('Overview','corporation');?></strong></p>
        <p style="font-size:12px;line-height:14px;"><?php _e('Corporation Theme is designed to work with core PageLines sections. To edit sections, click the pencil icon in the top left corner.','corporation');?></p>
      </div>
      <div style="margin-top:20px;color:#444;">
        <p style="border-bottom:1px solid #ccc;margin:0 0 0.75em;"><strong><?php _e('Instructions','corporation');?></strong></p>
        <p style="font-size:12px;line-height:14px;"><?php _e('In depth instructions are available in the theme folder, or by <a href="/wp-content/themes/corporation/theme_installation_instructions.pdf" target="_blank">clicking here.</a></p>','corporation');?>
        <ul class="unstyled" style="font-size:12px;line-height:14px;">
          <li style="margin-bottom:7px;"><strong><?php _e('1.','corporation');?> </strong><?php _e('Activate the theme in Appearance > Themes. Well done!','corporation');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('2.','corporation');?> </strong><?php _e('Import <a href="/wp-content/themes/corporation/content.xml" target="_blank">content.xml</a> using the WordPress Importer.','corporation');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('3.','corporation');?> </strong><?php _e('Click <a href="/wp-admin/options-reading.php">here</a> and set your front page to the home page, and the posts page to the blog page.','corporation');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('4.','corporation');?> </strong><?php _e('In the Global Options panel, locate the Import/Export area and click on it.','corporation');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('5.','corporation');?> </strong><?php _e('To recreate the demo, click the Child Theme Config Import button.','corporation');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('6.','corporation');?> </strong><?php _e('That\'s it! Templates and look will all be loaded.  If you want to create more pages, in your Templates area you can apply any of the templates from the demo to new pages.','corporation');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('7.','corporation');?> </strong><?php _e('To edit the main colours of the theme, open up the theme\'s style.less file and change the hex values for @themeColor and @themeColourContrast.','corporation');?></li>
				</ul>
			</div>
		<?php
		return ob_get_clean();
	}

	// Theme Options
	function options(){
		$theme_settings = array();

		$theme_settings['corporation_theme_config'] = array(
		   'pos'                  => 50,
		   'name'                 => __('Corporation Theme','corporation'),
		   'icon'                 => 'icon-circle',
		   'opts'                 => array(
		   		array(
		       	    'type'          => 'template',
            		'title'         => __('Welcome to Corporation Theme','corporation'),
            		'template'      => $this->welcome()
		       	),
		       	/*array(
		       		'type'			=> 'color',
		       		'key'			=> 'corporation_themeColor',
		       		'title'			=> __('Pick Primary Theme Color', 'corporation'),
		       		'template'		=> $this->welcome()
		       	),
		       	array(
		       		'type'			=> 'color',
		       		'key'			=> 'corporation_themeColorContrast',
		       		'title'			=> __('Pick Secondary Theme Color', 'corporation'),
		       		'template'		=> $this->welcome()
		       	),*/
		   )
		);
		pl_add_theme_tab($theme_settings);
	}

	/*function corporation_less_vars ($less) {
		$less['corporation_themeColor'] = ( $this->opt('corporation_themeColor') ) ? pl_hashify( $this->opt( 'corporation_themeColor' ) ) : '#5590ba';
		$less['corporation_themeColorContrast'] = ( $this->opt('corporation_themeColorContrast') ) ? pl_hashify( $this->opt( 'corporation_themeColorContrast' ) ) : '#84b63d';

		return $less;
	}*/


}

new corporationTheme;

add_filter( 'posix_bypass', '__return_true' );
add_filter( 'render_css_posix_', '__return_true' );
