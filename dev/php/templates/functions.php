<?php
  //import the default gravityform contact forms
define("GF_THEME_IMPORT_FILE", "includes/gravityforms-contactform.xml");

// Register the sitemap menu
add_action( 'init', 'register_menu_sitemap' );

function register_menu_sitemap(){
	register_nav_menus( array(
		'sitemap' => 'Sitemap'
    ));
}

$initialized = get_option('slate_initialized');
if($initialized == null){
	$initialized = false;
}

if(is_admin() && !$initialized){
	  include_once('includes/initialize_pages.php');
	
	  $siteIniter = new SiteInitializer(
		  "aerden-autobanden", 
		  "Dorpsstraat 5 4635 BC Huijbergen", 
		  "0164-646115", 
		  "info@aerdenautobanden.nl");
	  $siteIniter->initializeAll();
	  add_option('slate_initialized', true);
}

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
      'name' => 'Banden',
      'description'   => 'Deze area wordt gebruikt voor de bandenzoeker',     
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
}

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
      'name' => 'Velgen',
      'description'   => 'Deze area wordt gebruikt voor de velgenzoeker',     
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
}

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js", false, null);
	wp_enqueue_script('jquery.json', plugins_url('/webshop-plugin/js/jquery.json.min.js'), array('jquery') );		
	wp_enqueue_script('jquery.cookie', plugins_url('/webshop-plugin/js/jquery.cookie.js'), array('jquery') );		
}

?>
