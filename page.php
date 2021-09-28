<?php get_header() ?>
<?php get_template_part('hero') ?>



	<div class="container-fluid pb-4 pt-4 paddding">
	<div class="container paddding">
		<div class="row mx-0">
			<div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">

				<?php if (have_posts()):while (have_posts()):the_post(); ?>
					
						<div class="col-md-12">
								<h2><?php the_title() ?></h2>
							<div class="auinfo d-flex justify-content-between">
								<div><?php echo get_the_date(); ?></div>
								<div>Post By: <?php  the_author(); ?></div>
							</div>
							<div class="post-img">
								<?php the_post_thumbnail('large',['class'=>'img-fluid']); ?>
							</div>
							<p class="pp"><?php the_content() ; ?></p>
						</div>
					
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>

			<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
				<div>
					<div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags Cloud</div>
				</div>
				<div class="clearfix"></div>
				<div class="fh5co_tags_all">
					<?php
					if (is_active_sidebar('tags')){
						dynamic_sidebar('tags');
					}
					?>
				</div>
				<div>
					<div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular RSS </div>
				</div>
				<div class="row pb-3">

					<?php
					if (is_active_sidebar('sidebar-rss')){
						dynamic_sidebar('sidebar-rss');
					}
					?>
				</div>
			</div>
			
		</div>
	</div>
<?php get_footer() ?>