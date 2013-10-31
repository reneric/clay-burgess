<?php
/**
 * Template Name: Contact Us
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
	<div class="inner">
		<ul class="slides">
			<li style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/profile.png);">
			</li>
		</ul>
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
				<h1>Our<br> Mission</h1>
				<div class="entry-content">
					<p>Our mission is to provide our clients with the finest legal services through zealous and aggressive representation, personal attention, and professional diligence. We are forceful trial advocates and leave no stone unturned giving our clients the fairest compensation for their claims. Whether in the courtroom or in our research and pleadings, we vigorously fight for justice as we pursue our clients’ causes.</p>
				</div>
			</aside>
			<div class="col-sm-8 content-section">
				<h1>Contact Us</h1>
				<div class="content">
					<section>
						<div class="form">
						<?php gravity_form(1); ?>
					</div>
					</section>
					<?php page_footer(); ?>
				</div>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>