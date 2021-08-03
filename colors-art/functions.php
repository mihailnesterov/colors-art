<?php
/**
 * Colors-Art functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Colors-Art
 */

if ( ! function_exists( 'colors_art_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function colors_art_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Colors-Art, use a find and replace
		 * to change 'colors-art' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'colors-art', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'colors-art' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'colors_art_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'colors_art_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function colors_art_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'colors_art_content_width', 640 );
}
add_action( 'after_setup_theme', 'colors_art_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function colors_art_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'colors-art' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'colors-art' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'colors_art_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function colors_art_scripts() {
	wp_enqueue_style( 'colors-art-style', get_stylesheet_uri(), array( 'bootstrap-style') );
	
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1');
	wp_enqueue_style( 'font-awesome-style', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0');
	wp_enqueue_style( 'swiper-slider-style', get_template_directory_uri() . '/css/swiper.min.css', array(), '4.4.1');
	wp_enqueue_style( 'lightbox-style', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.10.0');
	wp_enqueue_style( 'animate-style', get_template_directory_uri() . '/css/animate.css', array(), '3.5.1');

	wp_enqueue_script( 'colors-art-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'colors-art-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	wp_enqueue_script('lib-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1', true);
	//wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '3.3.1', true );
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array('lib-jquery'), '4.3.1', true );
	wp_enqueue_script( 'swiper-slider-script', get_template_directory_uri() . '/js/swiper.min.js', array('lib-jquery'), '4.4.1', true );
	wp_enqueue_script( 'lightbox-script', get_template_directory_uri() . '/js/lightbox.min.js', array(), '2.10.0', true );
	wp_enqueue_script( 'js-cookie-script', get_template_directory_uri() . '/js/js.cookie.js', array(), '2.2.0', true );
	wp_enqueue_script( 'colors-art-script', get_template_directory_uri() . '/js/scripts.js', array('bootstrap-script'), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'colors_art_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * breadcrumbs 
 * источник- https://misha.blog/wordpress/how-to-create-breadcrumbs.html
 * 13.09.19
*/

function the_breadcrumb(){
	global $post;
	if(!is_home()){
		echo '<nav aria-label="breadcrumb">';
			echo '<ol class="breadcrumb bg-white small border">';
				echo '<li class="breadcrumb-item"><a href="'.site_url().'">Главная</a></li>';
		/*if(is_single()){ // записи
		the_category(', ');
		echo " / ";
		the_title();
		}
		else*/
		if (is_page()) { // страницы
			if ($post->post_parent ) {
				$parent_id  = $post->post_parent;
				$breadcrumbs = array();
				while ($parent_id) {
					$page = get_page($parent_id);
					if($page->ID == 14) {
						$breadcrumbs[] = '<li class="breadcrumb-item"><a href="/#courses">' . get_the_title($page->ID) . '</a></li>';
					} else
						$breadcrumbs[] = '<li class="breadcrumb-item"><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
					$parent_id  = $page->post_parent;
				}
				$breadcrumbs = array_reverse($breadcrumbs);
				foreach ($breadcrumbs as $crumb) echo $crumb;
			}
			echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
		}
			echo '</ol>';
		echo '</nav>';
	} else { // главная
	   $pageNum=(get_query_var('paged')) ? get_query_var('paged') : 1;
	   if($pageNum>1)
	      echo '<a href="'.site_url().'">Главная</a> / '.$pageNum.'-я страница';
	   else
	      echo 'Вы находитесь на главной странице';
	}
}

## Исполняемый PHP код в контенте записи WordPress. 13-09-19
## [exec]PHP_код[/exec]
##
## @version: 1.0
## https://wp-kama.ru/id_87/ispolnyaemyiy-php-kod-v-zapisyah-wordpress.html
if( 'Исполняемый PHP код в контенте' ){

	add_filter( 'the_content', 'content_exec_php', 0 );

	function content_exec_php( $content ){
		return preg_replace_callback( '/\[exec( off)?\](.+?)\[\/exec\]/s', '_content_exec_php', $content );
	}

	function _content_exec_php( $matches ){

		if( ' off' === $matches[1] ){
			return "\n\n<".'pre>'. htmlspecialchars( $matches[2] ) .'</pre'.">\n\n";
		}
		else {
			eval( "ob_start(); {$matches[2]}; \$exec_php_out = ob_get_clean();" );
			return $exec_php_out;
		}

	}

}


// Оплата Robokassa - 15-09-19
// Robokassa payment integration
function pay_to_robokassa($summ=0,$payment_type=null) {

	$mrh_login = "your_robokassa_login";
	$mrh_pass1 = "your_robokassa_pass";
	
	// номер заказа
	// number of order
	$inv_id = get_the_ID();
	
	// сумма заказа
	// sum of order
	$out_summ = $summ;
	
	// описание заказа
	// order description
	$type = 'занятие';
	if($payment_type) $type = $payment_type;
	$inv_desc = "Colors-Art получен платеж сумма=" . $out_summ . " № " . $inv_id . " (" . $type . ") " . get_the_title() . " дата: " . date('d.m.Y H:i:s');

	// тип товара
	// code of goods
	$shp_item = 1;
	
	// язык
	// language
	$culture = "ru";
	
	// кодировка
	// encoding
	$encoding = "utf-8";
	
	// формирование подписи
	// generate signature
	$crc  = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:Shp_item=$shp_item");

	// build URL
	$url = "https://auth.robokassa.ru/Merchant/Index.aspx?".
	      "MerchantLogin=$mrh_login&OutSum=$out_summ&InvId=$inv_id&IncCurrLabel=$in_curr".
	      "&Description=$inv_desc&SignatureValue=$crc&Shp_item=$shp_item".
	      "&Culture=$culture&Encoding=$encoding";
	
	return $url;
}

// получаем дочерние страницы по $id - 17-09-19
function get_the_page_children($id) {
	/*
		создаем объект WP_Query для выборки страниц
		'posts_per_page=-1' - это fix, без него не работает (не выводятся дочерние страницы), источник:
		https://stackoverflow.com/questions/14224089/get-page-children-not-returning-all-child-pages
	*/
	$wp_query = new WP_Query('posts_per_page=-1');
	
	// Получаем все страницы, по которым будет проходить поиск.
	// фильтр: страницы, опубликованные, сортируем по ID
	$all_wp_pages = $wp_query->query(
		array(
			'post_type' => 'page', 
			'posts_per_page' => -1, 
			'post_status' => 'publish', 
			'orderby' => 'ID', 
			'order'   => 'ASC',
			)
		);
	// Фильтруем $all_wp_pages и получаем только дочерние к $id
	$page_children = get_page_children( $id, $all_wp_pages );
	
	// выводим на экран дочерние страницы (echo) или возвращаем результат (return)
	return $page_children;
}

// получаем список дочерних страниц текущей, шоткод для вывода - [childpages] 17-09-19
function list_child_pages() {

	global $post;
	
	if ( is_page() && $post->post_parent )
	
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
	else
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
	
	if ( $childpages ) {
	
		$string = '<ul>' . $childpages . '</ul>';
	}
	
	return $string;

}
add_shortcode('childpages', 'list_child_pages');

// вывод краткой карточки преподавателя но id на странице курса 18-09-19
function get_the_teacher_preview($teacher_id) {
	$teacher = get_post($teacher_id); 
	$thumbnail = get_the_post_thumbnail(
		$teacher->ID,
		array(600, 600),
		array(
			'class' => 'img-fluid p-5',
			'alt'   => $teacher->post_title
		)
	);
	$excerpt = get_the_excerpt( $teacher->ID );
	echo '
		<div class="col-12 my-5" >
		    <div class="row border">
			    <div class="text-center p-4 col-12 col-md-5">
					'. $thumbnail .'
				</div>
				<div class="text-center p-4 col-12 col-md-7" style="margin-top: 10%">
					<p class="text-bold mb-3"><a href="/teachers#teacher-'. $teacher->ID .'">' . $teacher->post_title . '</a></p>
					<p class="mb-4">'. $excerpt .'</p>
					<a href="/teachers#teacher-'. $teacher->ID .'" class="btn btn-outline-success">Подробнее</a>
				</div>
			</div>
		</div>
	';
}

// вывод блока оплаты 18-09-19
function get_payments() {
	$loop = CFS()->get( 'loop' );	// получаем все цены для текущей страницы
	if($loop) {
		$col = (12 / count($loop));	// вычисляем кол-во col-md-...
		foreach ( $loop as $row ) {	// в цикле выводим блоки с ценами и кнопкой оплаты
			echo '
				<div class="col-md-'. $col .' mt-2 mb-2">
					<table class="table table-bordered">
						<tr>
							<th class="text-center bg-light">'.$row["price_title"].'</th>
						</tr>
						<tr>
							<td class="font-weight-bold">
								<s>'.$row["price_s"].' руб.</s> '.$row["price"].' руб.
							</td>
						</tr>
					</table>
					<div class="text-center mb-3">
						<a href="' . pay_to_robokassa($row["price"],$row["price_title"]) . '" class="btn btn-success btn-lg" target="_blank"><i class="fa fa-check"></i> Оплатить</a>
					</div>
				</div>
			';
			$col_count++;
		}
	}
}
