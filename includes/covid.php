<?php
/**
 * Creates shortcode for rendering COVID-19 Map
 *
 * @since 1.0.0
 */

/**
 * HRMEX_Covid_Map_Mexico_Shortcode Class
 *
 * @since 1.0.0
 */
class HRMEX_Covid_Map_Shortcode {

    /**
     * Output an iframe about COVID-19 cases in Mexico
     *
     * Since 1.0.0
     *
     * @return string
     */
    public static function hrmex_shortcode($atts) {

        // Optional iframe width
        if ( ! empty( $atts['width'] ) ) {
            $width = $atts['width'];
        } else {
            $width = '100%';
        }

        // Optional iframe height
        if ( ! empty( $atts['height'] ) ) {
            $height = $atts['height'];
        } else {
            $height = '500px';
        }

        $output  = '<iframe width="' . $width . '" height="' . $height . '" frameborder="0" ';
        $output .= 'src="https://datos.covid-19.conacyt.mx/fHDMap/" ';
        $output .= 'allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" ';
        $output .= 'oallowfullscreen="" msallowfullscreen=""></iframe>';

        return $output;
    }

}
