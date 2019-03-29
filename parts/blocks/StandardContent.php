<?php $content = get_field('content'); ?>
<?php $background_color = get_field('background_colour'); ?>
<?php
$background_class = '';
if ($background_color == 'Green') {
    $background_class = ' class="light-green-background" ';
}
if ($background_color == 'Blue') {
    $background_class = ' class="light-blue-background" ';
}
?>
<div<?php echo $background_class; ?>>
    <div class="grid-container fontsize-24 lineheight-12 pad-top-33 pad-bottom-20">
        <?php echo $content; ?>
    </div>
</div>