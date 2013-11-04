<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="inner row">
				<div class="site-info">
					<div class="col-sm-4 visit">
						<div class="container">
							<h5>Visit Our Office</h5>
							<p><?php the_field('street_address','options'); ?></p>
							<p><?php the_field('city','options'); ?></p>
						</div>
					</div><!-- visit -->
					<div class="col-sm-4 social">
						<div class="container">
							<div class="links">
								<a target="_blank" href="<?php the_field('facebook','options'); ?>" class="fb"></a>	
								<a target="_blank" href="<?php the_field('linked_in','options'); ?>" class="ln"></a>
							</div>
							<div id="searchform">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div><!-- social -->
					<div class="col-sm-4 call">
						<div class="container">
							<h5>Call Us</h5>
							<div class="content">
								<div class="tr">
									<p>Phone</p>
									<span><?php the_field("phone","options"); ?></span>
								</div>
								<div class="tr">
									<p>Toll Free</p>
									<span><?php the_field("toll_free","options"); ?></span>
								</div>
								<div class="tr">
									<p>Fax</p>
									<span><?php the_field("fax","options"); ?></span>
								</div>
							</div>
						</div>
					</div><!-- call -->
				</div><!-- .site-info -->
			</div><!-- inner -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
	
	<?php wp_footer(); ?>
	<script type="text/javascript" data-project="clay-burgess" src="http://localhost:48626/takana.js"></script>
</body>
</html>