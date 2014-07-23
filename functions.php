<?php function top_bar_search() {


    
   $output = '<form id="searchform" action="/" method="get">';
   $output .= '<fieldset id="formfield" class="group">';
  	$output .= '<input id="search" type="text" name="s" placeholder="">';
	$output .= '<input type="hidden" name="post_type" value="Search" />';
	$output .= '<button type="submit" class="button" title=" "></button>';
	$output .= '</fieldset></form>';
  

    return $output;
}


function enqueue_toggler() {
    wp_register_script( 'enqueue_toggler', get_stylesheet_directory_uri() . '/scripts/toggler.js',
                        array( 'jquery' ) );
    wp_enqueue_script( 'enqueue_toggler' );
}
 
add_action( 'init', 'enqueue_toggler' );
 
function add_jquery() {
    wp_enqueue_script( 'add_jquery', get_template_directory_uri() . '/js/jquery.js', 
                        array( 'jquery', 'enqueue_toggler' ) );
}
add_action( 'init', 'add_jquery' );


function add_isotope() {
    wp_register_script( 'isotope', get_stylesheet_directory_uri() .'/scripts/isotope.pkgd.js', array('jquery'),  true );
    wp_register_script( 'isotope-init', get_stylesheet_directory_uri() .'/scripts/isotopeOut.js', array('jquery', 'isotope'),  true );
 //   wp_register_style( 'isotope-css', get_stylesheet_directory_uri() . '/js/isotope.css' );

    wp_enqueue_script('isotope-init');
//    wp_enqueue_style('isotope-css');
}

add_action( 'wp_enqueue_scripts', 'add_isotope' );

function new_excerpt_more( $more ) {
	$output = '<a class="moretext" href="'. get_the_permalink() .'">[...]</a>';
	return $output;
}
add_filter('excerpt_more', 'new_excerpt_more');