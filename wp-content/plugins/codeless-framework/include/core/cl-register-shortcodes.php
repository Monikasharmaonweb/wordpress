<?php

if(!function_exists('codeless_sc_highlight')){ 


    /**

     * codeless_sc_highlight()

     * Highlights for texts

     * @param mixed $atts

     * @param mixed $content

     * @param string $shortcodename

     * @return

     */


    function codeless_sc_highlight($atts, $content = null, $shortcodename=""){

        $output = '';   
        $output .= '<span class="cl-highlight-text">'.$content.'</span>';   
       
        return $output;
         
    }
         
    add_shortcode('cl_highlight', 'codeless_sc_highlight');

}


if(!function_exists('codeless_sc_text_thin')){ 

    function codeless_sc_text_thin($atts, $content = null, $shortcodename=""){

        $output = '';   
        $output .= '<span class="cl-text-thin">'.$content.'</span>';   
       
        return $output;
         
    }
         
    add_shortcode('cl_text_thin', 'codeless_sc_text_thin');

}

?>