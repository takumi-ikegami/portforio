<?php get_header(); ?>
<header class="ly_header">
    <div class="ly_header_inner">
        <nav class="bl_headerNav js_hum">
            <button class="bl_headerNav_hum js_hum_btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="bl_headerNav_container js_hum_body">
                <div class="bl_headerNav_itemWrap">
                    <li class="bl_headerNav_item"><button data-sm="#1" class="bl_headerNav_link js_hum_link">ABOUT
                        </button>
                    </li>
                    <li class="bl_headerNav_item"><button data-sm="#2" class="bl_headerNav_link js_hum_link">SKILL
                        </button>
                    </li>
                    <li class="bl_headerNav_item"><button data-sm="#3" class="bl_headerNav_link js_hum_link">WORKS
                        </button>
                    </li>
                    <li class="bl_headerNav_item"><button data-sm="#4" class="bl_headerNav_link js_hum_link">CONTACT
                        </button>
                    </li>
                </div>
            </ul>
        </nav>
    </div>
    <!--/.ly_header_inner-->
</header>
<div class="ly_key">
    <div class="ly_key_inner">
        <div class="bl_key">
            <div class="bl_key_img">
                <h1 class="bl_key_title js_drop hp_nobr_pc">
                    Takumi Ikegami /Portfolio
                </h1>
            </div>
        </div>
    </div>
</div>
<main>
    <section data-sm="sm-#1" class="ly_about js_smooth">
        <div class="ly_about_inner">
            <div class="bl_about">
                <h2 class="bl_about_title js_drop">
                    About
                </h2>
                <div class="bl_about_textContainer">
                    <p class="bl_about_text">
                        池上拓海と申します。Webデザインを学習しデザイナー・コーダーを目指しています。<br>
                    </p>
                    <p class="bl_about_text">
                        前職ではシステム業界でプログラマとして働いていたのでコーディングが得意です。現在はさらにできることを増やせるように日々学習しています。<br>
                    </p>
                    <p class="bl_about_text">
                        Webサイトのコーディング、簡単なデザインが出来ます。また、Illustlator・Potoshopを使用して画像の加工やバナーの作成ができます。<br>
                    </p>
                    <p class="bl_about_text">
                        今後は得意を活かすため、コーディングを中心にスキルを伸ばしていきたいと考えています。<br>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section data-sm="sm-#2" class="ly_skill js_smooth">
        <div class="ly_skill_inner bl_skill">
            <h2 class="bl_skill_title js_drop">
                Skill
            </h2>
            <div class="bl_skill_container">
                <div class="bl_skill_item js_up">
                    <h3 class="bl_skill_subTitle">
                        HTML CSS
                    </h3>
                    <div class="bl_skill_imgContainer">
                        <img class="bl_skill_img" src="<?php echo get_template_directory_uri(); ?>/common/img/htmlCss.png" alt="html/cssのロゴ">
                    </div>
                    <p class="bl_skill_txt">
                        レスポンシブ対応、Sassでの記述が可能です。設計はBEMを学習中です。エディタはvisual studio codeを使用しています。
                    </p>
                </div>
                <div class="bl_skill_item js_up">
                    <h3 class="bl_skill_subTitle">
                        JavaScript
                    </h3>
                    <div class="bl_skill_imgContainer">
                        <img class="bl_skill_img" src="<?php echo get_template_directory_uri(); ?>/common/img/js.png" alt="html/cssのロゴ">
                    </div>
                    <p class="bl_skill_txt">
                        jQueryを利用した動きのあるサイトを作成できます。Vanilla JSに関しても基本的なコードを記述することができます。
                    </p>
                </div>
                <div class="bl_skill_item js_up">
                    <h3 class="bl_skill_subTitle">
                        Wordpress
                    </h3>
                    <div class="bl_skill_imgContainer">
                        <img class="bl_skill_img" src="<?php echo get_template_directory_uri(); ?>/common/img/wp.png" alt="html/cssのロゴ">
                    </div>
                    <p class="bl_skill_txt">
                        Wordpressを活用した動的Webサイトを作成することができます。本サイトにもWordpressを利用しています。
                    </p>
                </div>
                <div class="bl_skill_item js_up">
                    <h3 class="bl_skill_subTitle">
                        Potoshop
                    </h3>
                    <div class="bl_skill_imgContainer">
                        <img class="bl_skill_img" src="<?php echo get_template_directory_uri(); ?>/common/img/ps.png" alt="html/cssのロゴ">
                    </div>
                    <p class="bl_skill_txt">
                        画像の加工や切り抜きなどの基本的な操作が可能です。XDと合わせてデサインカンプの作成時に利用します。
                    </p>
                </div>
                <div class="bl_skill_item js_up">
                    <h3 class="bl_skill_subTitle">
                        Illustlator
                    </h3>
                    <div class="bl_skill_imgContainer">
                        <img class="bl_skill_img" src="<?php echo get_template_directory_uri(); ?>/common/img/ai.png" alt="html/cssのロゴ">
                    </div>
                    <p class="bl_skill_txt">
                        ロゴの作成や簡単なイラストの作成に使用します。基本操作が可能です。
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section data-sm="sm-#3" class="ly_works js_smooth">
        <div class="ly_works_inner bl_works">
            <h2 class="bl_works_title js_drop">
                Works
            </h2>
            <div class="el_works">
                <?php
                $works_query = new WP_Query([
                    'post_type' => 'works',
                    'posts_per_page' => -1,
                    'order' => 'DESC'
                ]);
                ?>
                <?php if ($works_query->have_posts()) : ?>
                    <?php while ($works_query->have_posts()) : $works_query->the_post(); ?>
                        <div class="el_works_item js_up js_modal" data-id="<?php the_permalink(); ?>">
                            <div class="el_works_point">
                                <img <?php get_template_part('common/template/get_thumbnail'); ?> class="el_works_img">
                                <p class="el_works_text"><?php echo SCF::get('site'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <?php if ($works_query->have_posts()) : ?>
            <?php while ($works_query->have_posts()) : $works_query->the_post(); ?>
                <div class="ly_modal bl_modal js_modalWindow" data-id="modal<?php the_permalink(); ?>">
                    <div class="bl_modal_back js_modal_close"></div>
                    <div class="ly_modal_inner bl_modal_inner">
                        <div class="bl_modal_container">
                            <div class="el_buttonA_container">
                                <button class="el_buttonA js_modal_close">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                            <img <?php get_template_part('common/template/get_img'); ?> class="bl_modal_img">
                            <div class="bl_modal_item">
                                <h3 class="bl_modal_subTitle">URL</h3>
                                <a href="<?php echo SCF::get('url'); ?>" class="bl_modal_link bl_modal_text" rel="noopener" target="_blank"><?php echo SCF::get('site'); ?></a>
                            </div>
                            <div class="bl_modal_item">
                                <h3 class="bl_modal_subTitle">担当</h3>
                                <p class="bl_modal_text"><?php echo SCF::get('skill'); ?></p>
                            </div>
                            <div class="bl_modal_item">
                                <h3 class="bl_modal_subTitle">制作期間</h3>
                                <p class="bl_modal_text"><?php echo SCF::get('date'); ?></p>
                            </div>
                            <div class="bl_modal_item">
                                <h3 class="bl_modal_subTitle">デザインについて</h3>
                                <p class="bl_modal_text"><?php echo SCF::get('ex'); ?></p>
                            </div>
                            <?php if (!empty(SCF::get('code'))) { ?>
                                <div class="bl_modal_item">
                                    <h3 class="bl_modal_subTitle">コーディングについて</h3>
                                    <p class="bl_modal_text"><?php echo SCF::get('code'); ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
    <section data-sm="sm-#4" class="ly_contact js_smooth">
        <div class="ly_contact_inner">
            <div class="bl_contact">
                <h2 class="bl_contact_title js_drop">
                    Contact
                </h2>
                <div class="bl_contact_textContainer">
                    <p class="bl_contact_text">
                        <a class="bl_contact_link" href="<?php echo home_url('/contact/'); ?>" rel="noopener">こちら</a>はメールフォームへのリンクです。<br>
                        ご質問・お問い合わせ等ございましたらお気軽にご連絡ください。
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>