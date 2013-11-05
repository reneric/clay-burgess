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
			<div id="chat" style="margin-top: -170px;">
				<img src="<?php echo get_template_directory_uri(); ?>/img/chat.png" alt="alt text">
			</div>
			<aside class="col-sm-4">
				<?php page_sidebar(); ?>
			</aside>
			<div class="col-sm-8 content-section">
				<h1>Submit a Case</h1>
				<div class="content">
					<section>
						<div class="form">
						<?php gravity_form(2); ?>
					</div>
					</section>
					<?php page_footer(); ?>
				</div>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>