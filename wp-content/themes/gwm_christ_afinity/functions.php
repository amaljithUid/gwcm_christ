<?php
/**
 * components functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Affinity
 */



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function affinity_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'affinity' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets 1', 'affinity' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets 2', 'affinity' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets 3', 'affinity' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'affinity_widgets_init' );

/**
 * Register Google Fonts
 */
function affinity_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Raleway, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$raleway = esc_html_x( 'on', 'Raleway font: on or off', 'affinity' );

	/* Translators: If there are characters in your language that are not
	 * supported by Lora; translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$lora = esc_html_x( 'on', 'Lora font: on or off', 'affinity' );

	if ( 'off' !== $raleway || 'off' !== $lora ) {

		$font_families = array();

		if ( 'off' !== $raleway ) {
			$font_families[] = 'Raleway:400,400italic,700,700italic';
		}

		if ( 'off' !== $lora ) {
			$font_families[] = 'Lora:400,400italic,700,700italic';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;

}

/**
 * Enqueue scripts and styles.
 */
/*function affinity_scripts() {
	wp_enqueue_style( 'affinity-style', get_stylesheet_uri() );

	wp_enqueue_style( 'affinity-fonts', affinity_fonts_url(), array(), null );

	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/fonts/genericons/genericons.css', array(), '3.4.1' );

	if ( is_front_page() ) {
		wp_enqueue_script( 'affinity-frontpage', get_template_directory_uri() . '/assets/js/frontpage.js', array( 'jquery' ), '20160324', true );
	}

	wp_enqueue_script( 'affinity-functions', get_template_directory_uri() . '/assets/js/functions.js', array( 'jquery', 'masonry' ), '20160324', true );

	wp_enqueue_script( 'affinity-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'affinity-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}*/
//add_action( 'wp_enqueue_scripts', 'affinity_scripts' );


/* Allow user to adjust opacity of overlay to work with lighter/darker photos */
/*function affinity_style_options() {

	$opacity = get_theme_mod( 'affinity_overlay', '0.7' );

	$backgroundscroll = get_theme_mod( 'affinity_scrolling', true );

	if ( '0' !== $opacity ) { ?>

		<style type="text/css" id="affinity-overlay-opacity">

			.custom-header-image {
				opacity: <?php echo esc_attr( $opacity ); ?>;
			}

			.in-panel .custom-header-image {
				opacity: 1;
			}

			@media screen and ( min-width: 48em ) {
				.custom-header-image,
				.in-panel .custom-header-image {
					opacity: <?php echo esc_attr( $opacity ); ?>;
				}
			}

		</style>

	<?php }

	if ( true == $backgroundscroll ) { ?>
		<style type="text/css" id="affinity-scrolling-background-images">
			@media screen and (min-width: 65em) {
					.custom-header-image {
						background-attachment: fixed;
						background-size: cover;
						background-position: center;
					}

					.affinity-customizer .custom-header-image {
						background-attachment: scroll;
						background-size: cover;
					}
			}
		</style>
	<?php }
}*/

//add_action( 'wp_head', 'affinity_style_options' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
//require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

wp_enqueue_style( 'bootstrapCss', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7' );
wp_enqueue_style( 'gwmc_css', get_template_directory_uri() . '/gwmc_css/css/screen.css', array(), '1.0.0' );



wp_enqueue_script( 'BootstrapJs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '3.3.7');

