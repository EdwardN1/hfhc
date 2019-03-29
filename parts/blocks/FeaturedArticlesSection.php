<?php $heading = get_field('heading'); ?>


<div class="grid-container featured-articles">
    <div class="heading fontsize-48 lineheight-15 text-center semi-bold">
        <?php echo $heading; ?>
    </div>
    <?php if (have_rows('articles')) : ?>
        <div class="grid-x">
            <?php $x = 1; ?>
            <?php while (have_rows('articles')) : the_row(); ?>
            <div class="large-3 medium-6 small-12 cell cell-number-<?php echo $x; ?>">
                <?php $article = get_sub_field('article'); ?>
                <a href="<?php echo $article; ?>" class="featured-article light-green-background">
                    <div class="feature-heading text-center fontsize-34 lineheight-11 semi-bold">
                        <?php $aheading = get_sub_field('heading'); ?>
                        <?php echo $aheading; ?>
                    </div>
                    <div class="feature-description text-center semi-bold fontsize-20 lineheight-12">
                        <?php $description = get_sub_field('description'); ?>
                        <?php echo $description; ?>
                    </div>
                </a>
            </div>
            <?php $x++; ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</div>
