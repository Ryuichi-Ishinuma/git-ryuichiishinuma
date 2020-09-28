<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="RYUICHI ISHINUMA 現役WEBデザイナーのポートフォリオサイト">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RYUICHI ISHINUMA | WEB DESIGNER</title>
    <!-- スタイルシート -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/main.css">
    <!-- ファビコン -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/dist/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/dist/images/android-chrome-256x256.png">
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="wrapper">
        <div class="header__center">
            <ul class="header__list">
                <li class="header__list__item">
                    <a href="<?php echo home_url(); ?>">HOME</a>
                </li>
                <li class="header__list__item">
                    <a href="<?php echo home_url(); ?>/about">ABOUT</a>
                </li>
                <li class="header__list__item">
                    <a href="<?php echo home_url(); ?>/works">WORKS</a>
                </li>
                <li class="header__list__item">
                    <a href="<?php echo home_url(); ?>/contact">CONTACT</a>
                </li>
                <li class="header__list__item header__list__item--sns">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/pc/twitter.png" alt="Twitter">
                    </a>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/pc/facebook.png" alt="facebook">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
<div class="logo">
    <div class="wrapper">
        <div class="logo__center is-pc">
            <h1 class="logo__title">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/pc/mv_title_pc.png"  alt="RYUICHI ISHINUMA">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/pc/mv_subtitle_pc.png" alt="WEB DESIGNER">
            </h1>
        </div>
        <div class="logo__center is-sp">
            <h1 class="logo__title">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/pc/mv_title_pc.png"  alt="RYUICHI ISHINUMA">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/pc/mv_subtitle_pc.png" alt="WEB DESIGNER">
            </h1>
        </div>
    </div>
</div>