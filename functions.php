<?php
function news_bootstrapping()
{
	load_theme_textdomain('news');  // Deafult Thakbe
	add_theme_support("post-thumbnails"); // Feautured Image in admin panel
	add_theme_support("title-tag"); // Title support dibe
	add_theme_support('custom-logo');
	add_theme_support('custom-background');
	$custom_header_details_with_coloor= array(
		'header-text' => true,
		'default-text-color'=> '#222',
		'width'=> '1200',
		'height'=>'600'
	);
	add_theme_support("custom-header",$custom_header_details_with_coloor); // Custom Header added
}
add_action("after_setup_theme", "news_bootstrapping");

function news_assets()
{
	wp_enqueue_style("alpha", get_stylesheet_uri());

}
add_action("wp_enqueue_scripts", "news_assets");

function news_sidebar()
{
	register_sidebar(
		array(
			'name' => __('Left Rss', 'news'),
			'id' => 'sidebar-rss',
			'description' => __('left Sidebar', 'news'),
			'before-_widget' => '<ul id="%1$s" class="widget %2$s">',
			'after-_widget' => '</ul>',
			'before-title' => '<h2 class="widget-title">',
			'after-title' => '<h2>',
		)
	);

	register_sidebar(
		array(
			'name' => __('SP Adds', 'news'),
			'id' => 'single-left-ads',
			'description' => __('SP Adds', 'news'),
			'before-_widget' => '<ul id="%1$s" class="widget %2$s">',
			'after-_widget' => '</ul>',
			'before-title' => '<h2 class="widget-title">',
			'after-title' => '<h2>',
		)
	);

	register_sidebar(
		array(
			'name' => __('search Calender', 'news'),
			'id' => 'search-side-calender',
			'description' => __('Search Calender', 'news'),
			'before-_widget' => '<ul id="%1$s" class="widget %2$s">',
			'after-_widget' => '</ul>',
			'before-title' => '<h2 class="widget-title">',
			'after-title' => '<h2>',
		)
	);
	register_sidebar(
		array(
			'name' => __('Left Footer', 'news'),
			'id' => 'left-footer',
			'description' => __('Left Footer', 'news'),
//			'before-_widget' => '<ul id="%1$s" class="widget %2$s">',
//			'after-_widget' => '</ul>',
//			'before-title' => '<h2 class="widget-title">',
//			'after-title' => '<h2>',
		)
	);register_sidebar(
	array(
		'name' => __('Right Footer', 'news'),
		'id' => 'right-footer',
		'description' => __('Right Footer', 'news'),
		'before-_widget' => '<ul id="%1$s" class="widget %2$s">',
		'after-_widget' => '</ul>',
//			'before-title' => '<h2 class="widget-title">',
//			'after-title' => '<h2>',
	)
);
	register_sidebar(
		array(
			'name' => __('After Middle Footer', 'news'),
			'id' => 'after-middle-footer',
			'description' => __('After Middle Footer', 'news'),
			'before-_widget' => '<ul id="%1$s" class="widget %2$s">',
			'after-_widget' => '</ul>',
			'before-title' => '<h2 class="widget-title">',
			'after-title' => '<h2>',
		)
	);	register_sidebar(
	array(
		'name' => __('After left Footer', 'news'),
		'id' => 'after-left-footer',
		'description' => __('After left Footer', 'news'),
		'before-_widget' => '<ul id="%1$s" class="footer-menu">',
		'after-_widget' => '</ul>',
		'before-title' => '<h2 class="widget-title">',
		'after-title' => '<h2>',
	)
);register_sidebar(
	array(
		'name' => __('tags', 'news'),
		'id' => 'tags',
		'description' => __('tags', 'news'),

	)
);
}

add_action("widgets_init", 'news_sidebar');

//Menu Register

function register_my_menus()
{
	register_nav_menus(
		array(
			'top-left-header-menu' => __('Top Left Header Menu'),
			'main-menu' => __('Main Menu'),
			'sp-left-cat-side' => __('SP Cat Menu'),
			'footer-bottom-menu' => __('Footer Bottom Menu'),
		)
	);
}
add_action('init', 'register_my_menus');

function wpdocs_my_search_form($form)
{
	$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url('/') . '" >
    <div>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search here" />
    </div>
    </form>';
	return $form;
}
add_filter('get_search_form', 'wpdocs_my_search_form');

// sample option start

function scl_simple_options_page() {
	?>
	<div class="wrap">
	<form method="post" id="scl_simple_options" action="options.php">
  <?php
  settings_fields('scl_simple_options');
  
  $options = get_option( 'scl_simple_options' );
  var_dump($options);
  
  //$d = get_option( 'recently_edited' );
  //var_dump($d);
  ?>
	<h2><?php _e('Sample Options' ); ?></h2>
  <table class="form-table">
  <tr>
  <th scope="row"><?php _e('Short Links' ); ?></th>
  <td colspan="3">
  <p> <label>
  <input type="text" id="show"
  name="scl_simple_options[show]" value="<?php echo esc_attr($options['show']); ?>" />
  </label></p>
  </td>
  </tr>
  <tr>
  <th scope="row"><?php _e('Admin Message' ); ?></th>
  <td colspan="3">
  <input size=150 type="text" id="google_meta_key"
  name="scl_simple_options[message]" value="<?php echo esc_attr($options['message']); ?>" />
  <br /><span class="description">
  </td>
  </tr>
  <tr>
  <th scope="row"><?php _e('Home page post column width' ); ?></th>
  <td colspan="3">
  <input size=150 type="text" id="google_meta_key"
  name="scl_simple_options[col]" value="<?php echo esc_attr($options['col']); ?>" />
  <br />
  </td>
  </tr>
  </table>
	<p class="submit">
	<input type="submit" value="<?php esc_attr_e('Update Options'); ?>"
	class="button-primary" />
	</p>
	</form>
	</div>
	<?php
	}
	add_action('admin_menu', 'scl_simple_options_add_pages');
	function scl_simple_options_add_pages() {
	add_options_page('Admin Message Form', 'Sample Options', 'manage_options', 'simple-options-example', 'scl_simple_options_page');
  register_setting( 'scl_simple_options', 'scl_simple_options' );    
  }
  // sample option end


