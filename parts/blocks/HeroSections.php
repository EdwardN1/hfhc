<?php $section_footer = get_field( 'section_footer' ); ?>
<?php //echo $section_footer; ?>
<?php $footer_background_colour = get_field( 'footer_background_colour' ); ?>
<?php $add_section_footer = get_field( 'add_section_footer' ); ?>

<div class="grid-container">
	<?php if ( have_rows( 'sections' ) ) : ?>
        <div data-slick-slider
             data-slick='{"slidesToShow":1, "slidesToScroll":1, "infinite":false, "initialSlide":1, "responsive": [{"breakpoint": 915,"settings": {"slidesToShow": 1, "slidesToScroll": 1}}, {"breakpoint": 550, "settings": {"slidesToShow": 1, "slidesToScroll": 1}}]}'>
			<?php while ( have_rows( 'sections' ) ) : the_row(); ?>
				<?php $image = get_sub_field( 'image' ); ?>
				<?php $imageURL = $image['url']; ?>
				<?php $imageALT = $image['alt']; ?>
                <div class="hero-top" style="background-image: url(<?php echo $imageURL; ?>)">
                    <div class="white-overlay">
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
                                <a href="<?php echo $url; ?>"><?php echo $link_text; ?></a>
								<?php
							} ?>
	                        <?php if ( $link_type == 'Page Link' ) {
		                        ?>
                                <a href="<?php the_sub_field( 'page_link' ); ?>"><?php echo $link_text; ?></a>
		                        <?php
	                        } ?>
                        </p>
                    </div>
                </div>
                <div class="hero-bottom">
					<?php $button_text = get_sub_field( 'button_text' ); ?>
					<?php echo $button_text; ?>
					<?php $button_colour = get_sub_field( 'button_colour' ); ?>
                </div>
			<?php endwhile; ?>

        </div>


	<?php endif; ?>

</div>
