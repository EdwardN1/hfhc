<?php

echo '<!--<link rel="stylesheet" href="https://use.typekit.net/mjd0yzh.css">--><!--imports the fonts into the editor-->';
$version=filemtime(get_template_directory().'/assets/styles/style.css');
echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/assets/styles/style.css?v='.$version.'"/>';
?>
<style>
    /*.slick-button {
        font-size: 40px;
        !*width: auto;*!
        !*height: 3em;*!
    }
    .slick-button:after {
        !*height: 3em;*!
    }
    @media screen and ( min-width: 768px ) {
        .edit-post-visual-editor .editor-post-title,
        .edit-post-visual-editor .editor-block-list__block {
            max-width:	1260px;
        }
    }

    .grid-container {
        max-width: 1260px;
    }*/
    ul {
        list-style: none;
    }

    ul.wp-submenu {
        margin-left: 0;
    }

</style>