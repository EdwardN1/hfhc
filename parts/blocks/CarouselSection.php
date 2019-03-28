<?php $heading = get_field('heading'); ?>
<?php $description = get_field('description'); ?>
<div class="carousel-section grid-container">
    <div class="header">
        <h2 class="text-center"><?php echo $heading; ?></h2>
        <div class="description text-center fontsize-24 lineheight-13"><?php echo $description; ?></div>
    </div>
    <?php if (have_rows('slides')) : ?>
        <div class="carousel-slider" data-slick-slider
             data-slick='{"dots": true, "slidesToShow":5, "slidesToScroll":1, "infinite":true, "responsive": [{"breakpoint": 915,"settings": {"slidesToShow": 3, "slidesToScroll": 1}}, {"breakpoint": 550, "settings": {"slidesToShow": 1, "slidesToScroll": 1}}]}'>
            <?php while (have_rows('slides')) : the_row(); ?>
                <div class="slide">
                    <?php $image = get_sub_field('image'); ?>
                    <?php $imageURL = $image['url']; ?>
                    <?php $imageALT = $image['alt']; ?>
                    <?php $heading = get_sub_field('heading'); ?>
                    <?php $description = get_sub_field('description'); ?>
                    <?php $link = get_sub_field('link'); ?>
                    <div class="image text-center" style="background: url(<?php echo $imageURL; ?>)">
                        <a class="slide-link" href="<?php echo $link; ?>">
                            <div class="fontsize-28 white lineheight-12 pad-bottom-30 pad-top-70"><?php echo $heading; ?></div>
                            <div class="fontsize-24 white lineheight-12"><?php echo $description; ?></div>
                        </a>
                    </div>
                    <div class="title fontsize-26 semi-bold text-center">
                        <a href="<?php echo $link; ?>"><?php echo $heading; ?></a>
                    </div>


                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</div>
