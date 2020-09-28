<footer class="footer">
    <div class="wrapper">
        <div class="footer__back">
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/pc/arrow_back_pc.png">
            </a>
        </div>
        <div class="footer__content">
            <ul class="footer__list">
                <li class="footer__list__item">
                    <a href="<?php echo home_url(); ?>">HOME</a>
                </li>
                <li class="footer__list__item">
                    <a href="<?php echo home_url(); ?>/about">ABOUT</a>
                </li>
                <li class="footer__list__item">
                    <a href="<?php echo home_url(); ?>/works">WORKS</a>
                </li>
                <li class="footer__list__item">
                    <a href="<?php echo home_url(); ?>/contact">CONTACT</a>
                </li>
            </ul>
            <div class="footer__copyright">
                <small>Copyright©️ 2019-2020 ryuichiishinuma.com All Rights Researved.</small>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>