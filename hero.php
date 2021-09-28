
<div class="container-fluid fh5co_header_bg">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php wp_nav_menu(
					array(
						'theme_location' => 'top-left-header-menu',
						'menu_id' => "top-left-menu",
						'link_after' => ' /',
					)
				); ?>
			</div>
			<div class="col-md-6 text-right">
				<?php echo get_search_form()  ?>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-3 fh5co_padding_menu">
				<div class="b-logo">
					<?php $custom_logo_id = get_theme_mod('custom_logo');
					$image = wp_get_attachment_image_src($custom_logo_id, 'full');
					?>
					<a href="<?php bloginfo('url'); ?>">
						<img src=" <?php echo $image[0] ?>" alt="Logo">
					</a> <br>
					<div class="site">
						<a id="site" href="<?php bloginfo('url'); ?>">
							<?php bloginfo('name'); ?>
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
					<?php if (is_active_sidebar('single-left-ads')){
						dynamic_sidebar('single-left-ads');
					} ?>
			</div>
		</div>
	</div>
</div>
<?php
$options = get_option( 'scl_simple_options' );
if($options['show'] == 'true'){
	?>
	<marquee>
	<?php
	$news = implode(" | " ,  explode(",",$options['message']));
_e($news);
	?>
	</marquee>
	<?php
}
?>
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
	<div class="container padding_786">
		<nav class="navbar navbar-toggleable-md navbar-light ">
			<button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
			        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
			        aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
			<a class="navbar-brand" href="#"><img src="images/logo.png" alt="img" class="mobile_logo_width"/></a>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php wp_nav_menu(
					array(
						'theme_location' => 'main-menu',
						'menu_id' => "main-menu",

					)
				); ?>

			</div>
		</nav>
	</div>
</div>