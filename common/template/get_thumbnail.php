<?php
$alt = get_the_title() . '画像';
if (has_post_thumbnail() && !empty(SCF::get('thumbnailL'))) {
    $thumbnail_id = get_post_thumbnail_id();
    $thumbnailL_id = SCF::get('thumbnailL');
    $thumbnail_path = wp_get_attachment_url($thumbnail_id);
    $thumbnailL_path = wp_get_attachment_url($thumbnailL_id);
    echo 'src = "' . $thumbnail_path . '"' . 'srcset = "' . $thumbnailL_path . ' 2x" alt = "' . $alt . '"';
} else {
    $img_path = get_template_directory_uri() . '/common/img/noimage.png';
    echo 'src = "' . $img_path . '" alt = "' . $alt . '"';
}
