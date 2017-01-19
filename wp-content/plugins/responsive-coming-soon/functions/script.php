<?php 
function wpsm_responsive_coming_soon_plugin_js_css()
{

    //enequeue scripts page for coming soon plugin admin panel
   
    wp_enqueue_script('theme-preview');
	wp_enqueue_media();
    wp_enqueue_style('wp-color-picker');
	wp_enqueue_style('thickbox');
	wp_enqueue_style('wpsm_rcs-bootstrap_css', WPSM_RCS_PLUGIN_URL.'css/bootstrap.css');
	wp_enqueue_style('wpsm_rcs-smartech_css', WPSM_RCS_PLUGIN_URL.'css/smartech.css');

	wp_enqueue_style('wpsm_rcs-font-awesome_min', WPSM_RCS_PLUGIN_URL.'css/font-awesome/css/font-awesome.min.css');
	//wp_enqueue_style('font-animate', WPSM_RCS_PLUGIN_URL.'css/animate.css');
	wp_enqueue_style('wpsm_rcs-font-awesome-picker', WPSM_RCS_PLUGIN_URL.'css/fontawesome-iconpicker.css');
	
	//dailog pop css
	wp_enqueue_style('wpsm_rcs-dialog', WPSM_RCS_PLUGIN_URL.'css/dialog/dialog.css');
	wp_enqueue_style('wpsm_rcs-dialog-box-style', WPSM_RCS_PLUGIN_URL.'css/dialog/dialog-box-style.css');
	wp_enqueue_style('wpsm_rcs-dialog-wilma', WPSM_RCS_PLUGIN_URL.'css/dialog/dialog-jamie.css');
	
	wp_enqueue_style('wpsm_rcs-fv', WPSM_RCS_PLUGIN_URL.'css/fv.css');
	
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'jquery-ui-sortable' );
	
        wp_enqueue_script( 'jquery-ui-sortable' );
	// Media Upload Js
	wp_enqueue_script('wpsm_rcs-media-uploads',WPSM_RCS_PLUGIN_URL.'js/media-upload-script.js',array('media-upload','thickbox','jquery'));
    // Date Picker Js
	wp_enqueue_script('wpsm_rcs-time-picker', WPSM_RCS_PLUGIN_URL.'js/jquery-ui-timepicker.js',array('jquery','jquery-ui-datepicker'));
	// Colour Picker Js
	wp_enqueue_script('wpsm_rcs-my-color-picker-script', WPSM_RCS_PLUGIN_URL.'js/my-color-picker-script.js', array( 'wp-color-picker' ), false, true );
	// Bootstrap Js
	wp_enqueue_script('wpsm_rcs-bootstrap_min_js',WPSM_RCS_PLUGIN_URL.'js/bootstrap.min.js');
	// Admin Settings Dashboard Js
	wp_enqueue_script('wpsm_rcs-metisMenu',WPSM_RCS_PLUGIN_URL.'js/plugins/metisMenu/metisMenu.min.js');
	wp_enqueue_script('wpsm_rcs-smartech',WPSM_RCS_PLUGIN_URL.'js/smartech.js',array('jquery'));
	wp_enqueue_script('wpsm_rcs-sidebar_nav',WPSM_RCS_PLUGIN_URL.'js/rcsp_sidebar_nav.js');
	// Font Awesome Icon Picker Js
	wp_enqueue_script('wpsm_rcs-font-icon-picker-js',WPSM_RCS_PLUGIN_URL.'js/fontawesome-iconpicker.js',array('jquery'));
	wp_enqueue_script('wpsm_rcs-call-icon-picker-js',WPSM_RCS_PLUGIN_URL.'js/call-icon-picker.js',array('jquery'), false, true);
	
	// Multi select Dropdown Js
	wp_enqueue_script('wpsm_rcs-bootstrap-multiselect-js',WPSM_RCS_PLUGIN_URL.'js/chosen.jquery.js');
	// Data Save Js
	wp_enqueue_script('wpsm_rcs-rcsp-option-data-save-js',WPSM_RCS_PLUGIN_URL.'js/rcsp-option-data-save.js');
	// Data Field Validator Js
	wp_enqueue_script('wpsm_rcs-rcsp-validator-js',WPSM_RCS_PLUGIN_URL.'js/validator.js');
	
	wp_enqueue_style('wpsm_rcs-jquery-ui-css', WPSM_RCS_PLUGIN_URL.'css/rcsp_jquery-ui.css');
	
	//dailog pop js
	wp_enqueue_script('wpsm_rcs-snap-svg-min',WPSM_RCS_PLUGIN_URL.'js/dialog/snap.svg-min.js');
	wp_enqueue_script('wpsm_rcs-modernizr-custom',WPSM_RCS_PLUGIN_URL.'js/dialog/modernizr.custom.js');
	wp_enqueue_script('wpsm_rcs-classie',WPSM_RCS_PLUGIN_URL.'js/dialog/classie.js');
	wp_enqueue_script('wpsm_rcs-dialogFx',WPSM_RCS_PLUGIN_URL.'js/dialog/dialogFx.js'); 
	
		
	
}
?>