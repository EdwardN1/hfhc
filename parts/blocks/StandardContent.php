<?php $content = get_field('content'); ?>
<?php $background_color = get_field('background_colour'); ?>
<?php
$grid_class = ' grid-container pad-left-0 pad-right-0';
$background_class = '';
if ($background_color == 'Green') {
    $background_class = ' class="light-green-background" ';
    $grid_class = ' grid-container pad-left-0 pad-right-0';
}
if ($background_color == 'Blue') {
    $background_class = ' class="light-blue-background" ';
    $grid_class = ' grid-container pad-left-0 pad-right-0';
}

$no_top_padding =  get_field( 'no_top_padding' );
$no_bottom_padding =  get_field( 'no_bottom_padding' );

$padClass = '';
if(!$no_top_padding) {$padClass .= ' pad-top-33';}
if(!$no_bottom_padding) {$padClass .= ' pad-bottom-20';}

?>
<div<?php echo $background_class; ?>>
    <div class="fontsize-24 lineheight-12<?php echo $padClass; echo $grid_class; ?>">
        <?php echo $content; ?>
    </div>
</div>