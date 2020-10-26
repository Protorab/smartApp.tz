<?php
/*
Template Name: page-main
*/

get_header();
?>

<main id="primary" class="site-main">
	<div class="wrap">
		<h3>HubSpot form</h3>
		<?php echo do_shortcode('[hubspot type=form portal=8708698 id=d5467dd5-8e4b-46b3-bf69-fb33c8a78d1e]'); ?>
	</div>
	<div class="wrap">
		<h3>ContactForm7 form</h3>
		<?php echo do_shortcode('[contact-form-7 id="16" title="contactForm1"]') ;?>
	</div>
	<div class="wrap">
		<h3>Simple form</h3>
		<form class="send__form">

			<!-- Hidden Required Fields -->
			<input type="hidden" name="project_name" value="SmartApp.tz">
			<input type="hidden" name="admin_email" value="<?php the_field('emailField', 'option') ;?>">
			<input type="hidden" name="form_subject" value="<?php the_field('emailField', 'option') ;?>">
			<!-- END Hidden Required Fields -->

			<input required class="form__input" type="text" name="Name" placeholder="You name..." required>
			<input required class="form__input" type="email" name="E-mail" placeholder="You E-mail...">
			<input class="form__input" type="text" name="Phone" placeholder="You phone...">
			<textarea placeholder="Message..." class="form__input" name="message" id="" cols="30" rows="10"></textarea>
			<button class="btn">Send</button>

		</form>
	</div>







</main><!-- #main -->

<?php
get_footer();
