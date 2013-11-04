<?php
/**
 * Template Name: Submit Case
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<div id="intro" class="row" role="profile">
	<div class="inner flexslider">
	<?php if(get_field('slider')): ?>
		<ul class="slides">
		<?php while(has_sub_field('slider')): ?>
			<li style="background-image:url(<?php the_sub_field('slider_image'); ?>);"></li>
		<?php endwhile; ?>
		</ul>
	<?php endif; ?>
	</div>
</div>
	<div id="primary" class="content-area" role="profile">
		<div id="primary-border"></div>
		<div id="primary-bg"></div>
		<div id="content" class="site-content" role="main">
			<div id="chat">
				<img src="<?php echo get_template_directory_uri(); ?>/img/chat.png" alt="alt text">
			</div>
			<aside class="col-sm-4">
				<?php page_sidebar(); ?>
			</aside>
			<div class="col-sm-8 content-section">
				<div class="content">
				<?php if(get_field('page_content')): ?>
				<?php 	while(has_sub_field('page_content')): ?>	
				<section>
				<?php if(get_sub_field('image')){ ?>
					<?php $thumb = wp_get_attachment_image(get_sub_field('image'), 'profile-thumb' ); ?>
						<div id="photo-wrap" class="clearfix col-sm-4">
							<div id="photo">
								<?php echo $thumb; ?>
							</div>
						</div><!-- photo-wrap -->
						<h1><?php the_sub_field('title'); ?></h1>
					<?php }else{ ?>
					<h1 style="width:100%;"><?php the_sub_field('title'); ?></h1>
					<?php }; ?>
					<div><?php the_sub_field('content'); ?></div>
				</section>
				<?php  	endwhile; ?>
				<?php  	endif; ?>
					<?php page_footer(); ?>
				</div>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>