<?php
/**
 * Template Name: ABOUTページ
 */
get_header(); ?>

<section class="about">
    <div class="wrapper">
        <div class="about__title">
            <h2><img src="<?php echo get_template_directory_uri(); ?>/dist/images/pc/about_title_pc.png" alt="ABOUT"></h2>
        </div>
        <div class="about__content">
            <div class="about__profile">
                <h3 class="profile__title"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/pc/about_profile_pc.png" alt="- PROFILE"></h3>
                <div class="profile__content">
                    <div class="profile__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/pc/about_profile_image.jpg" alt="石沼竜一のプロフィール写真">
                    </div>
                    <div class="profile__text">
                        <p>石沼 竜一 Ryuichi Ishinuma / 1994年生まれ</p>
                        <p>滋賀県在住</p>
                        <br>
                        <p>立命館大学経済学部卒業</p>
                        <p>新卒で地方銀行員としてキャリアスタート</p>
                        <p>2019年10月よりデジタルエージェンシーにてWebデザイナーとして<br>
                        LPやバナーのデザイン制作、コーディングなどの業務を行っています。</p>
                        <br>
                        <p>個人の活動としても同じくデザイン制作、コーディングとブログ運営を行っています。</p>
                        <span><a target="_blank" href="https://numablog.net">https://numablog.net</a></span>
                        <br>
                        <br>
                        <p>お問い合わせ：<span><a href="mailto:info&#64;doronuma0422@gmail.com">doronuma0422@gmail.com</a></span></p>
                        <p>Facebook：<span><a target="_blank" href="https://www.facebook.com/ryuichi.ishinuma">https://www.facebook.com/ryuichi.ishinuma</a></span></p>
                        <p>Twitter：<span><a target="_blank" href="https://twitter.com/ryu_webdesi31">https://twitter.com/ryu_webdesi31</a></span></p>
                    </div>
                </div>
            </div>
            <div class="about__interests">
                <h3 class="interests__title"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/pc/about_interests_pc.png" alt="- INTERESTS"></h3>
                <div class="interests__content">
                    <div class="interests__text">
                        <p><strong>・海外旅行</strong></p>
                        <p>【14か国46都市訪問】</p>
                        <p>グアム/オーストラリア/イギリス/台湾/タイ/カンボジア/ベトナム/ラオス/アメリカ/中国/<br>
                        フランス/イタリア/バチカン市国/スペイン/香港/マカオ</p>
                        <br>
                        <p><strong>・映画観賞</strong></p>
                        <p>【700作品以上観賞】</p>
                        <p><お気に入り作品></p>
                        <ul>
                            <li>・グッドウィルハンティング - 旅立ち</li>
                            <li>・スタンドバイミー</li>
                            <li>・レオン</li>
                            <li>・ララランド</li>
                            <li>・アベンジャーズ エンドゲーム</li>
                        </ul>
                        <br>
                        <p><strong>・写真</strong></p>
                        <span>【活動実績】</span>
                        <ul>
                            <li>・株式会社Alquimista様 - AirBnB掲載用室内写真撮影</li>
                            <li>・株式会社BitRech様 - Webサイト掲載プロフィール写真撮影</li>
                            <li>・Portrait Session in Kyoto 2019出展</li>
                            <li>・#koseitekinaフォトコンテスト2018入選 - JR西日本車両内中吊り広告に写真掲載</li>
                            <li>・株式会社アスカネット様のサービス「mybook」で作成した写真集が同社より評価され、CP+2018(カメラの祭典)にてブースでのサンプル作品展示、社内ショーウィンドウへの展示、その他企業活動での利用権利の譲渡を行う。</li>
                        </ul>
                    </div>
                </div>
            </div>
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