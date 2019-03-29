
<?php $image = get_field( 'image' ); ?>
<?php $imageURL = $image['url']; ?>
<?php $imageALT = $image['alt']; ?>

<div class="heading-image" style="background-image: url(<?php echo $imageURL; ?>)">
    <div class="white-overlay">
        <div class="grid-container">
            <?php $heading = get_field( 'heading' ); ?>
            <?php if ( get_field( 'make_h1_heading' ) == 1 ) {
                ?>
                <h1><?php echo $heading; ?></h1>
                <?php
            } else {
                ?>
                <h2><?php echo $heading; ?></h2>
                <?php
            } ?>
            <?php $description = get_field( 'description' ); ?>
            <p><?php echo $description; ?></p>
        </div>
    </div>
</div>
