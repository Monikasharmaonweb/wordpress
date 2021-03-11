<?php

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class Cl_Framework_Base{
    
    
    
    function init(){
   
        add_action( 'customize_preview_init', array($this, 'preview_init_enqueue' ));
        add_action( 'customize_controls_enqueue_scripts', array($this, 'pane_init_enqueue') );
        
        add_action('wp_enqueue_scripts', array(&$this, 'register_global_styles') );
    	add_action('wp_enqueue_scripts', array( &$this,'register_global_scripts') );
        add_action('admin_enqueue_scripts', array(&$this, 'register_admin_styles') );

        add_action('customize_controls_print_scripts', array(&$this, 'close_customize_sidebar'), 999);
        //add_action('customize_controls_print_footer_scripts', array(&$this, 'add_loading_overlay'), 1);

        Cl_Builder_Mapper::setInit();
    }

    

    function preview_init_enqueue(){

        wp_enqueue_script( 'cl-builder', cl_asset_url('js/cl-builder.js'), array('backbone', 'underscore', 'shortcode', 'jquery-ui-sortable', 'jquery-ui-droppable') );

        wp_enqueue_script( 'cl-editor-exts', cl_asset_url('js/medium-editor/cl-editor-exts.js'));
        wp_enqueue_script( 'medium-editor', cl_asset_url('js/medium-editor/medium-editor.min.js'), array('cl-editor-exts') );
        wp_enqueue_script( 'a11y-dialog', cl_asset_url('js/cl-a11y-dialog.min.js') );
        
        wp_enqueue_style( 'medium-editor', cl_asset_url('css/medium-editor/medium-editor.min.css') );
        wp_enqueue_style( 'medium-editor-theme', cl_asset_url('css/medium-editor/beagle.min.css') );
        wp_enqueue_style( 'cl-builder', cl_asset_url('css/cl-builder.css') );
        wp_enqueue_style( 'cl-icons', cl_asset_url('css/icons/icons.css') );
        wp_enqueue_style( 'cl-builder-icons', cl_asset_url('css/codeless-builder-icons.css') );
        wp_localize_script(
            'cl-builder',
            'scriptData',
            array(
                'ajax_url' => admin_url( 'admin-ajax.php' ),
            )
        );
    }
    
    function pane_init_enqueue(){
        wp_enqueue_script( 'cl-customize-pane', cl_asset_url('js/cl-customize-pane.js'), array( 'customize-controls', 'jquery', 'kirki-script' ) );
    }
    
    
    public function register_global_styles(){
        wp_register_style( 'cl-elements-inline', false );
        
        //wp_enqueue_style( 'cl-front-site', cl_asset_url('css/cl-front-site.css') );
    }
    
    public function register_global_scripts(){
        
    }
    
    public function load_global_vars(){
    	return $array = array(
    		
    		'FRONT_LIB_JS' => cl_asset_url('js/front_libraries/')
    		
    	);
    }
    
    public function fixPContent( $content = null ) {
		if ( $content ) {
			$s = array(
				'/' . preg_quote( '</div>', '/' ) . '[\s\n\f]*' . preg_quote( '</p>', '/' ) . '/i',
				'/' . preg_quote( '<p>', '/' ) . '[\s\n\f]*' . preg_quote( '<div ', '/' ) . '/i',
				'/' . preg_quote( '<p>', '/' ) . '[\s\n\f]*' . preg_quote( '<section ', '/' ) . '/i',
				'/' . preg_quote( '</section>', '/' ) . '[\s\n\f]*' . preg_quote( '</p>', '/' ) . '/i',
			);
			$r = array(
				'</div>',
				'<div ',
				'<section ',
				'</section>',
			);
			$content = preg_replace( $s, $r, $content );

			return $content;
		}

		return null;
	}

    public function register_admin_styles($hook){
        
        if ( 'post.php' != $hook && 'post-new.php' != $hook )
            return false;

        wp_enqueue_style( 'cl-admin-style', cl_asset_url('css/cl-admin-style.css'), false, '1.0.0' );
        wp_enqueue_style( 'cl-codeless-icons', get_template_directory_uri() . '/css/codeless-icons.css', false, '1.0.0' );
    }

}


?>