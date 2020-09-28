<?php
/**
 * Template Name: Works一覧
 */
get_header(); ?>

<div class="wrapper">
    <?php while(have_posts() ) : the_post(); ?>
        <?php get_template_part("content", "page"); ?>
<?php endwhile; ?>
</div>

<section class="contact">
    <div class="wrapper">
        <div class="contact__title">
            <h2><img src="<?php echo get_template_directory_uri(); ?>/dist/images/pc/contact_title_pc.png" alt="CONTACT"></h2>
        </div>
        <p class="contact__text">お仕事のご依頼、ご質問などお気軽にお問い合わせください。</p>
        <div class="contact__btn">
            <a href="<?php echo home_url(); ?>/contact">
                <span>お問い合わせ</span>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>