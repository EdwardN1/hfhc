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

$no_top_padding =  get_field( 'no_top_padding' );
$no_bottom_padding =  get_field( 'no_bottom_padding' );

$padClass = '';
if($no_top_padding) {$padClass .= ' no-top-gutter';}
if($no_bottom_padding) {$padClass .= ' no-bottom-gutter';}

?>
<div<?php echo $background_class; ?>>
    <div class="standard-content<?php echo $padClass; ?>">
        <?php echo $content; ?>
    </div>
</div>