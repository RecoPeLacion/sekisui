<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TEMPLATENAME
 */

get_header();
?>

<!-- banner -->
<section class="Banner">
    <div class="BannerWrapper">
        <div class="BannerImg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner.png" alt="">
        </div>
        <div class="BannerContent">
            <div class="BannerCard">
                <h1>
                    <span class="Color">セキスイファミエス</span>の <br>
                    住宅リフォーム
                </h1>
                <p>
                    住宅リフォームは、<span class="Color">リフォーム歴 52年</span>の実績があります。<br>
                    リフォームなら<span class="Color">東京セキスイファミエス</span>にお任せください。
                </p>
                <div class="BannerButton">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                            <path d="M6 30C5.175 30 4.4685 29.706 3.8805 29.118C3.2925 28.53 2.999 27.824 3 27V9C3 8.175 3.294 7.4685 3.882 6.8805C4.47 6.2925 5.176 5.999 6 6H30C30.825 6 31.5315 6.294 32.1195 6.882C32.7075 7.47 33.001 8.176 33 9V27C33 27.825 32.706 28.5315 32.118 29.1195C31.53 29.7075 30.824 30.001 30 30H6ZM18 19.5L6 12V27H30V12L18 19.5ZM18 16.5L30 9H6L18 16.5ZM6 12V9V27V12Z" fill="white"/>
                        </svg>
                        今すぐ無料相談をしてみる
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of banner -->

<!-- text list -->
<section class="TextListSection">
    <div class="TextListContainer">
        <ul class="TextList">
            <li>
                <a href="#">
                    施工事例
                </a>
            </li>
            <li>
                <a href="#">
                    お客様の声
                </a>
            </li>
            <li>
                <a href="#">
                    選ばれる理由
                </a>
            </li>
            <li>
                <a href="#">
                    対応エリア
                </a>
            </li>
            <li>
                <a href="#">
                    FAQ
                </a>
            </li>
            <li>
                <a href="#">
                    お問い合わせ
                </a>
            </li>
        </ul>
    </div>
</section>
<!-- end of text list -->

<!-- wokrs -->
<section class="Works">
    <div class="WorksContainer">
        <div class="WorksWrapper">
            <div class="Title">
                <h3>WORKS</h3>
                <p>施工事例</p>
            </div>
            <div class="WorksText">
                <h3>
                    事例から理想の住まいを鮮明に <br>
                    <span class="Color">お悩みに合わせたプランを提案</span>させていただきます。
                </h3>
                <p>
                    セキスイファミエスでは一戸建てやマンションのフルリフォーム、スケルトンリフォームなど幅広く対応しております。複数の施工事例から、理想の住まいをイメージしてみてください。
                </p>
            </div>
            <div class="WorksSlider">
                <ul class="WorksSliderList">
                    <li>
                        <div class="WorksSliderCard">
                            <div class="WorksSliderImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider01.jpg" alt="">
                            </div>
                            <div class="WorksSliderContent">
                                <h4>埼玉県O様邸</h4>
                                <p>
                                    建物のタイプ：一戸建て <br>
                                    築年数：23年<br>
                                    費用：2,824万円
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="WorksSliderCard">
                            <div class="WorksSliderImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider02.jpg" alt="">
                            </div>
                            <div class="WorksSliderContent">
                                <h4>埼玉県O様邸</h4>
                                <p>
                                    建物のタイプ：一戸建て <br>
                                    築年数：23年<br>
                                    費用：2,824万円
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="WorksSliderCard">
                            <div class="WorksSliderImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider03.jpg" alt="">
                            </div>
                            <div class="WorksSliderContent">
                                <h4>埼玉県O様邸</h4>
                                <p>
                                    建物のタイプ：一戸建て <br>
                                    築年数：23年<br>
                                    費用：2,824万円
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="WorksSliderCard">
                            <div class="WorksSliderImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider03.jpg" alt="">
                            </div>
                            <div class="WorksSliderContent">
                                <h4>埼玉県O様邸</h4>
                                <p>
                                    建物のタイプ：一戸建て <br>
                                    築年数：23年<br>
                                    費用：2,824万円
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="WorksButton">
                <a href="#">
                    <small class="Small">セキスイファミエスに</small>
                    <p>今すぐ<span class="ColorYellow">無料</span>で相談してみる</p>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end of works -->


<?php
get_footer();