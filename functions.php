<?php
/**
 * Silicon Child
 *
 * @author 8guild
 */

/**
 * Enqueue child scripts and styles
 *
 * Note the priority: 20.
 * This function should be executed after the callback in the parent theme
 */
function silicon_child_assets() {
	wp_enqueue_style( 'silicon-child', get_stylesheet_directory_uri() . '/style.css', array(), null );
}

add_action( 'wp_enqueue_scripts', 'silicon_child_assets', 20 );

/* customize login screen */
function charity_images_custom_login_page() {
    echo '<style type="text/css">
        .login h1 a { background-image:url("'. get_stylesheet_directory_uri().'/img/logo.png") !important; height: 100px !important; width: 100% !important; margin: 0 auto !important; background-size: contain !important; }
		h1 a:focus { outline: 0 !important; box-shadow: none; }
        body.login { background-image:url("'. get_stylesheet_directory_uri().'/img/banner.jpg") !important; background-repeat: no-repeat !important; background-attachment: fixed !important; background-position: center !important; background-size: cover !important; position: relative; z-index: 999;}
  		body.login:before {background-color: #831e288c; position: absolute; width: 100%; height: 100%; left: 0; top: 0; content: ""; z-index: -1; }
  		.login form {
  			background: rgba(255,255,255, 0.2) !important;
  		}
		.login form .input, .login form input[type=checkbox], .login input[type=text] {
			background: transparent !important;
			color: #ddd;
		}
		.login label {
			color: #DDD !important;
		}
		.login #login_error, .login .message {
			color: #ddd;
			margin-top: 20px;
			background: rgba(255,255,255, 0.2) !important;
		}
		#login {
		    padding: 7% 0 0;
		}
    </style>';
}
add_action('login_head', 'charity_images_custom_login_page', 99);
function cabinet_login_logo_url_title() {
 	return 'Business Simple';
}
add_filter( 'login_headertitle', 'cabinet_login_logo_url_title' );
function cabinet_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'cabinet_login_logo_url' );

