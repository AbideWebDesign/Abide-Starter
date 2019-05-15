<?php
/**
 * Block Name: Testimonial
 *
 * This is the template that displays the testimonial block.
 */

// get image field (array)
$avatar = get_field('avatar');

// create id attribute for specific styling
$id = 'testimonial-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div id="<?php echo $id; ?>" class="py-5 <?php echo $align_class; ?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<?php echo wp_get_attachment_image($avatar['id'], 'large', false, array('class'=>'img-fluid')); ?>
			</div>
			<div class="col-lg-7">
				<h2><?php the_field('author'); ?></h2>
				<p class="lead"><?php the_field('testimonial'); ?></p>
			</div>
		</div>
	</div>
</div>
<style type="text/css">
	#<?php echo $id; ?> {
		background: <?php the_field('background_color'); ?>;
		
	}
	#<?php echo $id; ?> h2 {
		color: <?php the_field('text_color'); ?>;
	}
</style>