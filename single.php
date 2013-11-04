<?php
/**
 * Template for single post
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
<div id="intro" class="row" role="news">
	<div class="inner flexslider">
	<?php if(get_field('slider',11)): ?>
		<ul class="slides">
		<?php while(has_sub_field('slider',11)): ?>
			<li style="background-image:url(<?php the_sub_field('slider_image',11); ?>);"></li>
		<?php endwhile; ?>
		</ul>
	<?php endif; ?>
	</div>
</div>
	<div id="primary" class="content-area" role="news">
		<div id="primary-border"></div>
		<div id="primary-bg"></div>
		<div id="content" class="site-content" role="main">
			<!-- <div id="chat">
				<img src="<?php echo get_template_directory_uri(); ?>/img/chat.png" alt="alt text">
			</div> -->
			<div class="col-sm-9 content-section">
			<?php 	while ( have_posts() ) : the_post(); 
					$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
					$thumb = wp_get_attachment_image($post_thumbnail_id, 'post-thumb' );
					$category = get_the_category(); 
					$catName = $category[0]->cat_name;
				?>
				<div class="post clearfix single-post">
					<div class="content">
						<div class="featured-single  col-sm-4">
							<a href="<?php the_permalink();?>" target="" class="">
								<?php echo $thumb; ?>
							</a>
						</div>
						<div class="entry-content col-sm-8">
						<header class="">
							<h4><?php the_title(); ?></h4>
							<div class="entry-meta"><?php the_date(); ?> * <?php comments_popup_link( '<span class="leave-reply">' . __( '0 Comments', 'clayburgess' ) . '</span>', __( '1 Comment', 'clayburgess' ), __( 'View all % comments', 'clayburgess' ) ); ?></div>
							<p class="post-meta">Filed under: <a href="#"><?php echo $catName; ?></a></p>
							<p class="source">Source: <span><?php the_field("source"); ?></span></p>
						</header>
						<?php the_content(); ?>
						</div>
					</div>
				</div><!-- post -->
				<?php endwhile; ?>
			</div><!-- content-section -->
			<aside class="col-sm-3">
				<div class="areas col-sm-12">
					<h5>Practice Areas</h5>
					<?php subnav(7); ?>
					<div class="popular">
						<h4>Popular Posts <span></span></h4>
						<?php 	$args = array ( 'post_type' => "post", 'posts_per_page' => 1 );
							$custom_query = new WP_Query( $args );
							if ( $custom_query->have_posts() ):
							while ( $custom_query->have_posts() ) : $custom_query->the_post();
								$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
								$thumb = wp_get_attachment_image($post_thumbnail_id, 'post-thumb' );
								$category = get_the_category(); 
								$catName = $category[0]->cat_name;
							?>
						<div class="thumb">
							<img src="<?php echo get_template_directory_uri(); ?>/img/books.png" alt="Books">
						</div>
						<h5><?php the_title(); ?></h5>
						<div class="meta">
							<?php the_date(); ?> * <?php comments_popup_link( '<span class="leave-reply">' . __( '0 Comments', 'clayburgess' ) . '</span>', __( '1 Comment', 'clayburgess' ), __( 'View all % comments', 'clayburgess' ) ); ?>
						</div>
							<?php endwhile;endif;?>
					</div>
					<div class="contact-form">
						<a href="<?php bloginfo('url'); ?>/contact-us" target="" class="">
							<img src="<?php echo get_template_directory_uri(); ?>/img/form-box.png" alt="alt text">
						</a>
					</div>
				</div><!-- areas -->
				
			</aside>
		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>