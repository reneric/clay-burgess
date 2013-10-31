<?php
function enqueue_scripts(){
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '2013-08-03' );
	wp_enqueue_style( 'bootstrap_theme', get_template_directory_uri().'/css/bootstrap-theme.css', array(), '2013-08-03' );
	wp_enqueue_style( 'fontawesome', '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css', array(), '2013-08-03' );
	wp_enqueue_style( 'maincss', get_template_directory_uri().'/css/main.css', array(), '2013-08-03' );
	
	//wp_enqueue_style( 'responsive', get_template_directory_uri().'/css/responsive.css', array(), '2013-08-03' );
	wp_enqueue_style( 'lato','http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Open+Sans:400,300,600,700,800|Open+Sans+Condensed:300,700,300italic', array(), '2013-08-03' );
	wp_enqueue_script( 'bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js', array( 'jquery' ), '2013-08-03', true );
	wp_enqueue_script( 'plugins', get_template_directory_uri().'/js/plugins.js', array( 'jquery' ), '2013-08-03', true );
	wp_enqueue_script( 'mainjs', get_template_directory_uri().'/js/main.js', array( 'jquery' ), '2013-08-03', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

add_action( 'admin_init', 'jquery_admin' );
function jquery_admin() {

    global $concatenate_scripts;

    $concatenate_scripts = false;
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', ( '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js' ), false, false, true );
}
wp_deregister_script('jquery');
wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js', false, false, true);
function subnav($id){
	global $post;
	if(!is_page('where')):
		$ishome = (is_front_page()) ? ' home' : '';
		$page = $id;//($post->post_parent ? $post->post_parent : $post->ID );
		$subnav = wp_list_pages( array(
			    'title_li' => '',
			    'child_of' => $page,
			    'link_after'   => '<span></span>',
			    'sort_column' => 'menu_order',
			    'depth' => '1',
			    'echo' => 0 )
			);
	echo '<ul class="clearfix">'.$subnav.'</ul>';
	endif;
}
function page_footer(){
	get_template_part('page', 'footer');
}
?>