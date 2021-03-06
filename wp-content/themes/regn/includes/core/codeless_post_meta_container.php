<?php

class Cl_Post_Meta{
    
    public static $meta = array();
    public $post_meta = array();

    public function __construct(){
    }
    
    public function init(){
        
    }

   
    /**
     * Add Meta in page Metabox plugin
     * 
     * @since 2.0.0
     */
    
    public static function register_meta_boxes_inpage( $meta_boxes ) {

        // all meta
        $meta = self::codeless_transform_meta_inpage( self::$meta );


        $meta_boxes[] = array(
            'id'         => 'layout_sect',
            'title'      => esc_html__( 'Layout', 'regn' ),
            'post_types' => array('page', 'post', 'portfolio'),
            'priority'   => 'high',
            'context'    => 'side',
            'fields'     => $meta['layout_sect'],
            'closed'      => false,
        );

        $meta_boxes[] = array(
            'id'         => 'general',
            'title'      => esc_html__( 'General', 'regn' ),
            'post_types' => array('page'),
            'priority'   => 'high',
            'fields'     => $meta['general'],
            'closed'      => false,
        );

        $meta_boxes[] = array(
            'id'         => 'page_header',
            'title'      => esc_html__( 'Page Header', 'regn' ),
            'post_types' => array('page', 'portfolio'),
            'priority'   => 'high',
            'fields'     => $meta['page_header'],
            'closed'      => false,
        );

        $meta_boxes[] = array(
            'id'         => 'post_data',
            'title'      => esc_html__( 'Post Data', 'regn' ),
            'post_types' => array( 'post' ),
            'priority'   => 'high',
            'fields' => $meta['post_data'],
            'closed'      => false,
        );



        $meta_boxes[] = array(
            'id'         => 'slider_layout',
            'title'      => esc_html__( 'Style & Layout', 'regn' ),
            'post_types' => array('codeless_slider'),
            'priority'   => 'high',
            'fields'     => $meta['slider_layout'],
            'closed'      => false,
        );
 
        $meta_boxes[] = array(
            'id'         => 'slider_query',
            'title'      => esc_html__( 'Slider Query', 'regn' ),
            'post_types' => array('codeless_slider'),
            'priority'   => 'high',
            'fields'     => $meta['slider_query'],
            'closed'      => false,
        );

        $meta_boxes[] = array(
            'id'         => 'portfolio_data',
            'title'      => esc_html__( 'Portfolio Data', 'regn' ),
            'post_types' => array('portfolio'),
            'priority'   => 'high',
            'fields'     => $meta['portfolio_data'],
            'closed'      => false,
        );

        $meta_boxes[] = array(
            'id'         => 'staff_data',
            'title'      => esc_html__( 'Team Data', 'regn' ),
            'post_types' => array('staff'),
            'priority'   => 'high',
            'fields'     => $meta['staff_data'],
            'closed'      => false,
        );

        $meta_boxes[] = array(
            'id'         => 'testimonial_data',
            'title'      => esc_html__( 'Testimonial Data', 'regn' ),
            'post_types' => array('testimonial'),
            'priority'   => 'high',
            'fields'     => $meta['testimonial_data'],
            'closed'      => false,
        );

        return $meta_boxes;
    }


    public static function codeless_transform_meta_inpage($post_metas){

        $organized_metas = array();

        foreach( $post_metas as $meta ){
            if( isset( $meta['group_in'] ) )
                $organized_metas[ $meta['group_in'] ][ $meta['id'] ] = $meta;
        }

        return $organized_metas;
    }

    public static function map($meta){
        if( ! function_exists( 'codeless_get_meta' ) )
            return;

        if( ! codeless_get_meta( $meta['id'] ) )
            $meta['value'] = isset( $meta['std'] ) ? $meta['std'] : '';
        else
            $meta['value'] = codeless_get_meta( $meta['id'] );

        self::$meta[] = $meta;
    }

    
}

$cl_post_meta = new Cl_Post_Meta();
$cl_post_meta->init();

?>