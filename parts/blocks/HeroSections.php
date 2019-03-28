<?php $section_footer = get_field( 'section_footer' ); ?>
<?php //echo $section_footer; ?>
<?php $footer_background_colour = get_field( 'footer_background_colour' ); ?>
<?php $footerClass = ''; ?>
<?php $overlayClass = ' class="white-overlay"'; ?>
<?php if ( $footer_background_colour == 'Green' ) {
	$footerClass = 'class="light-green-background"';
} ?>
<?php if ( $footer_background_colour == 'Blue' ) {
	$footerClass  = 'class="light-blue-background"';
	$overlayClass = ' class="blue-overlay"';
} ?>
<?php $add_section_footer = get_field( 'add_section_footer' ); ?>


<?php if ( have_rows( 'sections' ) ) : ?>
	<?php
	$slickNavigator = '<div class="hero-bottom grid-container">';
	$slickNavigator .= '<div class="grid-x">';
	$slideCount     = 0;
	$sliderID       = 'tsSlick' . uniqid();
	?>

    <div id="<?php echo $sliderID; ?>" data-slick-slider data-slick='{"infinite":true, "arrows":false, "fade":true}'>
		<?php while ( have_rows( 'sections' ) ) :
			the_row(); ?>
			<?php $image = get_sub_field( 'image' ); ?>
			<?php $imageURL = $image['url']; ?>
			<?php $imageALT = $image['alt']; ?>
            <div>
                <div class="hero-top" style="background-image: url(<?php echo $imageURL; ?>)">
                    <div<?php echo $overlayClass; ?>>
                        <div class="grid-container">
							<?php $heading = get_sub_field( 'heading' ); ?>
							<?php if ( get_sub_field( 'h1_heading' ) == 1 ) {
								?>
                                <h1><?php echo $heading; ?></h1>
								<?php
							} else {
								?>
                                <h2><?php echo $heading; ?></h2>
								<?php
							} ?>
							<?php $description = get_sub_field( 'description' ); ?>
                            <p><?php echo $description; ?></p>
                            <p>
								<?php $link_type = get_sub_field( 'link_type' ); ?>
								<?php $link_text = get_sub_field( 'link_text' ); ?>


								<?php if ( $link_type == 'URL' ) {
									$url = get_sub_field( 'url' ); ?>
                                    <a href="<?php echo $url; ?>" class="arrow-button"><?php echo $link_text; ?></a>
									<?php
								} ?>
								<?php if ( $link_type == 'Page Link' ) {
									?>
                                    <a href="<?php the_sub_field( 'page_link' ); ?>"
                                       class="arrow-button"><?php echo $link_text; ?></a>
									<?php
								} ?>
                            </p>
                        </div>
                    </div>
                </div>
				<?php
				$button_colour  = get_sub_field( 'button_colour' );
				$button_text    = get_sub_field( 'button_text' );
				$slickNavigator .= '<div class="large-4">';
				$slickNavigator .= '<a class="slick-button ' . $button_colour . '" data-slide="' . $slideCount . '" data-slider-id="' . $sliderID . '">' . $button_text . '</a>';
				$slideCount ++;
				$slickNavigator .= '</div>';
				?>
            </div>
		<?php endwhile; ?>
		<?php $slickNavigator .= '</div></div>'; ?>

    </div>
    </div>
    <div <?php echo $footerClass; ?>>
		<?php echo $slickNavigator; ?>
		<?php if ( $add_section_footer ) { ?>
            <div class="hero-footer grid-container">

                <?php echo '<div class="hero-footer-content">'.$section_footer.'</div>'; ?>

            </div>
		<?php } else { ?>
            <div style="height: 2rem;"></div>
		<?php } ?>
    </div>


<?php endif; ?>

