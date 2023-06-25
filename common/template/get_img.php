<?php
$alt = get_the_title() . '画像';
if (!empty(SCF::get('img')) && !empty(SCF::get('imgL'))) {
    $img_id = SCF::get('img');
    $imgL_id = SCF::get('imgL');
    $img_path = wp_get_attachment_url($img_id);
    $imgL_path = wp_get_attachment_url($imgL_id);
    echo 'src = "' . $img_path . '"' . 'srcset = "' . $imgL_path . ' 2x" alt = "' . $alt . '"';
} else {
    $img_path = get_template_directory_uri() . '/common/img/noimageM.png';
    echo 'src = "' . $img_path . '" alt = "' . $alt . '"';
}
