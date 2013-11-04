<section class="footer">
<?php $id = get_the_id(); ?>
	<h5><?php the_field("footer_header",$id); ?></h5>
	<div class="row">
		<a href="tel:3372347573" class="col-sm-6">
			<div class="button orange">
				<h5>Call Us</h5>
				<p><?php the_field("phone_number",$id); ?></p>
			</div><!-- button -->
		</a>
		<a href="<?php bloginfo('url'); ?>/contact-us" class="col-sm-6">
			<div class="button orange">
				<h5>Fill Out Our</h5>
				<p>Contact Form</p>
			</div><!-- button -->
		</a>
	</div><!-- row -->
	<span><?php the_field("consultation_text",$id); ?></span>
</section>
<section class="bottom">
	<p class="col-sm-12"><?php the_field("footer_message",$id); ?></p>
</section>