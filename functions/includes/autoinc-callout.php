<?php
add_shortcode('callout', 'sc_callout');

function sc_callout($atts, $content = null) {
    $a = shortcode_atts( array(
        'width' => '',
        'heading' => '',
        'colour' => '',
        'url' => ''
    ), $atts );

    $width = '';
    $heading = '';
    $colour = '';
    $url = '';

    $return = '';

    if (array_key_exists('width', $a)) {
        if ($a['width'] != '') {
            $width = $a['width'];
        };
    };

    if (array_key_exists('width', $a)) {
        if ($a['width'] != '') {
            $heading = $a['width'];
        };
    };

    if (array_key_exists('width', $a)) {
        if ($a['width'] != '') {
            $width = $a['width'];
        }
    };

    if (array_key_exists('width', $a)) {
        if ($a['width'] != '') {
            $url = $a['width'];
        };
    };

    $calloutID = uniqid('ts');

    if(basename( get_page_template() )=='master-page.php') {
        if ( ( $tourname != '' ) ) {
            $tourURL = $tourname;
            $return .= '<div id="'.$tourID.'" class="large reveal text-center tour" data-reveal style="height: 80vh;">';
            $return .= '<iframe src="'.$tourURL.'" style="width: 100%; height: 95%;"></iframe>';
            $return .= '<button class="close-button" data-close aria-label="Close reveal" type="button"><span aria-hidden="true">&times;</span></button>';
            $return .= '</div>';
            $return .= '<a href="#'.$tourID.'" data-open="'.$tourID.'">'.$content.'</a>';
        }
    }

    return $return;
}