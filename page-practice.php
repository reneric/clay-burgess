<?php
/**
 * Template Name: Practice Areas
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
<div id="intro" class="row" role="practice">
	<div class="inner">
		<ul class="slides">
			<li style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/profile.png);">
			</li>
		</ul>
	</div>
</div>
	<div id="primary" class="content-area" role="practice">
		<div id="primary-border"></div>
		<div id="primary-bg"></div>
		<div id="content" class="site-content" role="main">
			<div id="chat">
				<img src="<?php echo get_template_directory_uri(); ?>/img/chat.png" alt="alt text">
			</div>
			<aside class="col-sm-4">
				<div class="areas col-sm-5">
					<h5>Practice Areas</h5>
					<?php subnav(7); ?>
					<div class="contact-form">
						<img src="<?php echo get_template_directory_uri(); ?>/img/form-box.png" alt="alt text">
					</div>
				</div>
				<div class="featured col-sm-7">
					<img src="<?php echo get_template_directory_uri(); ?>/img/areas-featured.png" alt="alt text">
				</div>
			</aside>
			<div class="col-sm-8 content-section">
				<header>
					<h4 class="fancy"><span><?php the_title(); ?></span></h4>
				</header>
				<div class="content clearfix">
				<?php 	if(get_field('practice_sections')): ?>
					<ul class="practice-content<?php echo (get_field('layout') == 'col2') ? ' col2' : '';?>">
					<?php 	while(has_sub_field('practice_sections')): ?>
						<li>
							<?php if(get_sub_field('title')): ?><h5><?php the_sub_field('title'); ?></h5><?php endif; ?>
							<?php the_sub_field('content'); ?>
						</li>
					<?php 	endwhile; ?>
					</ul>
				<?php 	endif; ?>
				</div><!-- content -->
				<?php page_footer(); ?>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>