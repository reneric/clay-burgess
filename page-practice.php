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

get_header(); 
global $post;
$slug = get_post( $post )->post_name;
?>
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
				<div id="catpost clearfix">
					<?php $args = array ( 'post_type' => "post", 'posts_per_page' => 3, 'category_name' => $slug );
					$custom_query = new WP_Query( $args );
					if ( $custom_query->have_posts() ):
					while ( $custom_query->have_posts() ) : $custom_query->the_post();
					$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
					$thumb = wp_get_attachment_image($post_thumbnail_id, 'home-post' );
					?>
					<div class="col-sm-4 post">
						<a class="featured" href="<?php the_permalink(); ?>">
							<?php echo  $thumb;?>
						</a><!-- featured -->
						<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						<div class="entry-meta">
							<span><?php the_date(); ?> * <?php comments_popup_link( '<span class="leave-reply">' . __( '0 Comments', 'clayburgess' ) . '</span>', __( '1 Comment', 'clayburgess' ), __( 'View all % comments', 'clayburgess' ) ); ?></span>
						</div><!-- entry-meta -->
						<a href="<?php the_permalink(); ?>">
							<div class="excerpt">	
								<?php the_excerpt(); ?>
							</div>
						</a>
					</div><!-- post -->
					<?php endwhile;endif; ?>
				</div>
				<?php page_footer(); ?>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>