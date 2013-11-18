<?php
/**
 * Template Name: Home
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
<div id="intro" class="row" role="home">
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
	<div id="primary" class="content-area" role="home">
	<div id="primary-border"></div>
		<div id="primary-bg"></div>
		<div id="content" class="site-content" role="main">
			<div id="chat">
				<img src="<?php echo get_template_directory_uri(); ?>/img/chat.png" alt="alt text">
			</div>
			<?php if(get_field('content_row')): ?>
				<div class="row">
				<?php 	while(has_sub_field('content_row')):
					if(get_row_layout() == "text_section"): ?>
					<a class="col-md-4 areas" href="<?php the_sub_field('url'); ?>">
						<h5><?php the_sub_field('title'); ?></h5>
						<div class="content">
							<?php the_sub_field('excerpt'); ?>
						</div>
						<span class="more"><?php the_sub_field('more_text'); ?></span>
					</a><!-- areas -->
					<?php 	elseif(get_row_layout() == "image_section"): ?>
						<a class="col-md-4 col-xs-6 accidents" href="<?php the_sub_field('url'); ?>">
						<div class="content">
							<div class="featured"><?php echo wp_get_attachment_image( get_sub_field('image'), 'home-thumb' , false, array('class'=>'class_name')); ?></div>
							<h4 class="fancy"><span><?php the_sub_field('title'); ?></span></h4>
						</div><!-- content -->
					</a><!-- accidents -->
					<?php 	endif;
						endwhile; ?>
				</div>
			<?php endif; ?>
		</div><!-- #content -->
		<div id="feeds">
			<div class="inner">
				<div class="row">
					<div class="col-sm-3 news">
						<h5>News &amp; Media</h5>
						<div class="content">
							<?php the_field("news_excerpt"); ?>
						</div>
						<a href="<?php bloginfo('url'); ?>/news-case-studies" class="more">Read More</a>
					</div><!-- news -->  
					<?php $args = array ( 'post_type' => "post", 'posts_per_page' => 3 );
					$custom_query = new WP_Query( $args );
					if ( $custom_query->have_posts() ):
					while ( $custom_query->have_posts() ) : $custom_query->the_post();
					$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
					$thumb = wp_get_attachment_image($post_thumbnail_id, 'home-post' );
					?> 
					<div class="col-md-3 col-xs-4 post">
						<div class="featured">
							<?php echo  $thumb;?>
						</div><!-- featured -->
						<h5><?php the_title(); ?></h5>
						<div class="entry-meta">
							<span><?php the_date(); ?> * <?php comments_popup_link( '<span class="leave-reply">' . __( '0 Comments', 'clayburgess' ) . '</span>', __( '1 Comment', 'clayburgess' ), __( 'View all % comments', 'clayburgess' ) ); ?></span>
						</div><!-- entry-meta -->
						<div class="excerpt">
							<?php the_excerpt(); ?>
						</div>
						
					</div><!-- post -->
					<?php endwhile;endif; ?>
				</div><!-- row -->
			</div><!-- inner -->
		</div><!-- feeds -->
	</div><!-- #primary -->
	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>