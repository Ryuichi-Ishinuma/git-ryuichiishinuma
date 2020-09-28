<?php
/**
 * Template Name: Works一覧
 */
get_header(); ?>


<section class="works">
    <div class="wrapper">
        <div class="works__title">
            <h2><img src="<?php echo get_template_directory_uri(); ?>/dist/images/pc/works_title_pc.png" alt="works"></h2>
        </div>
        <div class="works__content">
            <ul class="works__list">
                <?php query_posts(""); ?>
                <?php if(have_posts()) : 
                    while( have_posts() ) : the_post();
                ?>
                <li class="works__list__item">
                    <figure>
                        <?php if (has_post_thumbnail() ): ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail("medium"); ?>
                            </a>
                        <?php else: ?>
                            <a href="<?php the_permalink(); ?>" style="pointer-events: none;">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/noimage.jpg" height="280" width="280" alt="">
                            </a>
                        <?php endif; ?>
                    </figure>
                    <span class="works__item__title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </span>
                    <?php 
                        endwhile; 
                    endif; 
                    ?>
                </li>
            </ul>
        </div>
    </div>
</section>

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