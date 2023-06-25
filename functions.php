<?php
function portforio_enqueue()
{
    //共通
    //google fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap',
    );
    //google fonts
    wp_enqueue_style(
        'portforio-css',
        get_template_directory_uri() . '/common/css/style.css',
        [],
        filemtime(get_theme_file_path('/common/css/style.css'))
    );
    //jquery
    wp_enqueue_script(
        'portforio-jquery',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js',
        [],
        '',
        true
    );
    //fontawesome
    wp_enqueue_script(
        'portforio-fontawesome',
        'https://kit.fontawesome.com/90915e8bad.js',
        [],
        '',
        true
    );
    //gsap
    wp_enqueue_script(
        'portforio-gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js',
        [],
        '',
        true
    );
    //crossoriginを付与
    add_filter('script_loader_tag', 'option_insert', 10, 2);
    function option_insert($tag, $handle)
    {
        if ($handle !== 'portforio-fontawesome') {
            return $tag;
        }
        return str_replace('></script>', ' crossorigin="anonymous"></script>', $tag);
    }

    //フロントページでの読み込み
    if (is_front_page()) {
        //nav
        wp_enqueue_script(
            'portforio-nav',
            get_template_directory_uri() . '/common/js/nav.js',
            [],
            filemtime(get_theme_file_path('/common/js/nav.js')),
            true
        );
        //split-animation
        wp_enqueue_script(
            'portforio-split-animation',
            get_template_directory_uri() . '/common/js/split-animation.js',
            [],
            filemtime(get_theme_file_path('/common/js/split-animation.js')),
            true
        );
        //fadeup
        wp_enqueue_script(
            'portforio-fadeup',
            get_template_directory_uri() . '/common/js/fadeup.js',
            [],
            filemtime(get_theme_file_path('/common/js/fadeup.js')),
            true
        );
        //io
        wp_enqueue_script(
            'portforio-io',
            get_template_directory_uri() . '/common/js/io.js',
            [],
            filemtime(get_theme_file_path('/common/js/io.js')),
            true
        );
        //modal
        wp_enqueue_script(
            'portforio-modal',
            get_template_directory_uri() . '/common/js/modal.js',
            [],
            filemtime(get_theme_file_path('/common/js/modal.js')),
            true
        );
        //smooth-scroll
        wp_enqueue_script(
            'portforio-smooth-scroll',
            get_template_directory_uri() . '/common/js/smooth-scroll.js',
            [],
            filemtime(get_theme_file_path('/common/js/smooth-scroll.js')),
            true
        );
        //page-top
        wp_enqueue_script(
            'portforio-page-top',
            get_template_directory_uri() . '/common/js/page-top.js',
            [],
            filemtime(get_theme_file_path('/common/js/page-top.js')),
            true
        );
        //page-script
        wp_enqueue_script(
            'portforio-page-script',
            get_template_directory_uri() . '/common/js/script.js',
            [],
            filemtime(get_theme_file_path('/common/js/script.js')),
            true
        );
    } else {
        if (is_404() || is_page(['contact', 'check', 'thanks'])) {
            //split-animation
            wp_enqueue_script(
                'portforio-split-animation',
                get_template_directory_uri() . '/common/js/split-animation.js',
                [],
                filemtime(get_theme_file_path('/common/js/split-animation.js')),
                true
            );
            //io
            wp_enqueue_script(
                'portforio-io',
                get_template_directory_uri() . '/common/js/io.js',
                [],
                filemtime(get_theme_file_path('/common/js/io.js')),
                true
            );
            //page-top
            wp_enqueue_script(
                'portforio-page-top',
                get_template_directory_uri() . '/common/js/page-top.js',
                [],
                filemtime(get_theme_file_path('/common/js/page-top.js')),
                true
            );
            //contact
            wp_enqueue_script(
                'portforio-contact',
                get_template_directory_uri() . '/common/js/contact.js',
                [],
                filemtime(get_theme_file_path('/common/js/contact.js')),
                true
            );
        }
    }
}

//css,js読み込み
add_action('wp_enqueue_scripts', 'portforio_enqueue');

// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');

//ユーザー名を隠す記述
function theme_slug_redirect_author_archive()
{
    if (is_author()) {
        wp_redirect(home_url());
        exit;
    }
}
add_action('template_redirect', 'theme_slug_redirect_author_archive');
