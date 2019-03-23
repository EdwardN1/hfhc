<?php if ( have_rows( 'sections' ) ) : ?>
	<?php while ( have_rows( 'sections' ) ) : the_row(); ?>
		<?php $section_type = get_sub_field( 'section_type' ); ?>
		<?php $button_text = get_sub_field( 'button_text' ); ?>
		<?php echo $button_text; ?>
		<?php $button_colour = get_sub_field( 'button_colour' ); ?>
		<?php $heading = get_sub_field( 'heading' ); ?>
		<?php echo $heading; ?>
		<?php if ( get_sub_field( 'h1_heading' ) == 1 ) {
			// echo 'true';
		} else {
			// echo 'false';
		} ?>
		<?php $description = get_sub_field( 'description' ); ?>
		<?php echo $description; ?>
		<?php $image = get_sub_field( 'image' ); ?>
		<?php $imageURL = $image['url']; ?>
		<?php $imageALT = $image['alt']; ?>
		<?php if ( $image ) { ?>
			<img src="<?php echo $imageURL; ?>" alt="<?php echo $imageALT; ?>" />
		<?php } ?>
		<?php $link_type = get_sub_field( 'link_type' ); ?>
		<?php $link_text = get_sub_field( 'link_text' ); ?>
		<?php echo $link_text; ?>
		<?php $url = get_sub_field( 'url' ); ?>
		<?php echo $url; ?>
		<?php the_sub_field( 'page_link' ); ?>
		<?php $link = get_sub_field( 'link' ); ?>
		<?php echo $link; ?>
		<?php the_sub_field( 'page_link' ); ?>
	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
<?php if ( get_field( 'add_section_footer' ) == 1 ) {
	// echo 'true';
} else {
	// echo 'false';
} ?>
<?php $section_footer = get_field( 'section_footer' ); ?>
<?php echo $section_footer; ?>
<?php $footer_background_colour = get_field( 'footer_background_colour' ); ?>