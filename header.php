<?php if (is_front_page()) { ?>
    <!DOCTYPE html>
    <html lang="ja">

    <head prefix="og: https://ogp.me/ns#">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/common/img/favicon.ico" id="favicon">
        <title>Takumi Ikegami Portforio</title>
        <!-- ogp -->
        <meta property="og:site_name" content="Takumi Ikegami Portforio">
        <meta property="og:url" content="<?php echo get_permalink(); ?>">
        <meta property="og:type" content="<?php get_template_part('common/template/get_path') ?>">
        <meta property="og:title" content="Takumi Ikegami Portforio">
        <meta property="og:description" <?php echo get_template_part('common/template/get_description') ?>>
        <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/common/img/glssses.png">
        <meta property=" og:locale" content="ja_JP">
        <?php wp_head(); ?>
    </head>

    <body>
    <?php } else if (is_404() || is_page()) { ?>
        <!DOCTYPE html>
        <html lang="ja" class="ly_strech">

        <head prefix="og: https://ogp.me/ns#">
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="format-detection" content="telephone=no">
            <title>Takumi Ikegami Portforio</title>

            <!-- ogp -->
            <meta property="og:site_name" content="Takumi Ikegami Portforio">
            <meta property="og:url" content="<?php echo get_permalink(); ?>">
            <meta property="og:type" content="<?php echo get_template_part('common/template/get_path') ?>">
            <meta property="og:title" content="Takumi Ikegami Portforio">
            <meta property="og:description" content="<?php get_template_part('common/template/get_description') ?>">
            <meta property=" og:image" content="<?php echo get_template_directory_uri(); ?>/common/img/glssses.png">
            <meta property=" og:locale" content="ja_JP">
            <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/common/img/favicon.ico" id="favicon">
            <?php wp_head(); ?>
        </head>

        <body class="ly_strech_body">
            <div class="ly_strech_container">
                <header class="ly_subHeader">
                    <div class="ly_subHeader_inner bl_subHwader">
                        <h1 class="bl_subHeader_title js_drop">
                            <?php if (is_404()) { ?>
                                404
                            <?php } else { ?>
                                <?php the_title() ?>
                            <?php } ?>
                        </h1>
                    </div>
                </header>

                <?php get_template_part('common/template/get_breadcrumb') ?>
            <?php } ?>