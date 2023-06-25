<?php
if (is_page('contact')) {
    remove_filter('the_content', 'wpautop');
}
?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <section class="ly_form ly_strech_item">
            <div class="ly_form_inner">
                <?php the_content(); ?>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>