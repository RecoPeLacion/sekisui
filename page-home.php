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

<!-- customer -->
<section class="Customer">
    <div class="Title">
        <h3>CUSTOMER VOICE</h3>
        <p>お客様の声</p>
    </div>
    <div class="CustomerTagline">
        <h3>
            お客様からも <span class="ColorYellow">満足の声</span> を数多くいただいております！
        </h3>
    </div>
    <div class="CustomerConatiner">
        <ul class="CustomerList">
            <li>
                <div class="CustomerCard">
                    <span class="CustomerCircle">
                        G・S 様
                    </span>
                    <div class="CustomerImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/customer1.png" alt="">
                    </div>
                    <p class="CustomerText">
                        浴室の工事からそんなに間をあけることなく塗装工事だったのですが、近隣の方にも都度ごあいさつに行って下さり、助かりました。職人さんたちも皆さん礼儀正しく、好印象でした。仕上がりはもちろん大満足です！
                    </p>
                </div>
            </li>
            <li>
                <div class="CustomerCard">
                    <span class="CustomerCircle">
                    H・K 様
                    </span>
                    <div class="CustomerImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/customer2.png" alt="">
                    </div>
                    <p class="CustomerText">
                    7月8月と一番暑さが厳しい時に屋根やサインディングを始め、皆さんもくもくと仕事に取り組まれ、きれいに仕上げてもらえ大変感謝しております。また、萩原さん、岡島さんと担当者の方にも恵まれ、誠実に丁寧に対応していただき、安心して仕事を見ていられ、非常に感謝しております。つくづく、最初の家の内部のリフォーム工事もセキスイさんにお願いしていればと思っています。
                    </p>
                </div>
            </li>
            <li>
                <div class="CustomerCard">
                    <span class="CustomerCircle">
                    N・T 様
                    </span>
                    <div class="CustomerImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/customer3.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/customer3-1.png" alt="">
                    </div>
                    <p class="CustomerText">
                        問１０ <br>
                        古い古いマンションの一室、リフォームレベルで考えていたが提案力が凄くリノベーションレベルの提案と実行で室内は新築に！大変満足しています。<br><br>
                        問１１ <br>
                        ・リノベーション提案力の高さ・施工工程管理（施工工事中は立合えなかったが、管理人から好評価）<br>
                        ・施工品質＝仕上がり品質に大変満足
                    </p>
                </div>
            </li>
            <li>
                <div class="CustomerCard">
                    <span class="CustomerCircle">
                    A・T 様
                    </span>
                    <div class="CustomerImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/customer4.png" alt="">
                    </div>
                    <p class="CustomerText">
                    新型コロナの対応で、難しい点も多々あったと思いますが、施工前の対応、施行中の対応ともにいきとどいたものだったと思います。不足した電器パーツ等、調達し対応していただいた点
                    </p>
                </div>
            </li>
            <li>
                <div class="CustomerCard">
                <span class="CustomerCircle">
                S・I 様
                    </span>
                    <div class="CustomerImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/customer5.png" alt="">
                    </div>
                    <p class="CustomerText">
                    当方が優先事項と位置づけした点にていねいに対応いただき、（耐震補強）<br>
根拠を数字を見える化した上で、追加部分にも着手いただいた点
                    </p>
                </div>
            </li>
        </ul>
        <div class="WorksButton">
            <a href="#">
                <small class="Small">セキスイファミエスに</small>
                <p>今すぐ<span class="ColorYellow">無料</span>で相談してみる</p>
            </a>
        </div>
    </div>
</section>
<!-- end of customer -->

<!-- reason -->
<section class="Reason">
    <div class="ReasonTitle">
        <h4>セキスイファミエスがお客様に</h4>
        <h3>選ばれる3つの理由</h3>
    </div>
    <div class="ReasonWrapper">
        <div class="OverlayImg">
        <svg viewBox="0 0 192 1389" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M113.56 97.7803C108.28 131.044 87.688 147.94 60.496 147.94C29.344 147.94 0.831995 123.916 0.831997 71.3802C0.831998 45.5082 7.96 18.8442 20.632 0.89224L53.368 17.5242C42.808 31.5162 36.736 51.0522 36.736 70.3242C36.736 91.7082 45.448 104.908 60.496 104.908C74.488 104.908 83.2 94.6122 83.2 70.3242L83.2 50.7882L111.448 50.7882L154.48 88.8042L154.48 10.1322L188.8 10.1322L188.8 139.492L161.08 139.492L113.56 97.7803ZM3.99998 417.748L3.99998 371.812L55.48 336.172L55.48 334.06L55.48 296.836L3.99999 296.836L3.99999 254.068L188.8 254.068L188.8 334.06C188.8 383.428 163.192 414.316 121.744 414.316C94.024 414.316 73.696 400.324 63.4 376.3L3.99998 417.748ZM121.744 371.02C142.072 371.02 153.952 357.82 153.952 331.684L153.952 296.836L89.536 296.836L89.536 331.684C89.536 357.82 101.68 371.02 121.744 371.02ZM38.32 490.705L38.32 591.289L3.99997 591.289L3.99998 448.201L188.8 448.201L188.8 587.857L154.48 587.857L154.48 490.705L114.352 490.705L114.352 576.505L81.088 576.505L81.088 490.705L38.32 490.705ZM3.99997 763.39L43.6 747.022L43.6 661.222L3.99997 644.854L3.99997 601.03L188.8 683.398L188.8 725.638L3.99996 808.27L3.99997 763.39ZM76.072 674.95L76.072 733.558L146.824 704.254L76.072 674.95ZM0.831961 888.163C0.831962 858.859 9.54396 829.291 22.216 812.923L54.424 827.443C43.072 843.019 35.152 866.251 35.152 888.427C35.152 913.771 43.6 924.067 54.952 924.067C89.536 924.067 65.776 816.619 134.416 816.619C165.832 816.619 191.968 841.963 191.968 894.499C191.968 917.731 186.424 941.491 175.6 958.651L143.128 945.451C152.896 928.291 157.648 910.603 157.648 894.235C157.648 868.891 148.144 859.123 136.528 859.123C102.472 859.123 125.968 966.571 58.12 966.571C27.232 966.571 0.831959 940.963 0.831961 888.163ZM0.831953 1085.29C0.831955 1026.95 41.488 984.179 96.4 984.179C151.312 984.179 191.968 1026.95 191.968 1085.29C191.968 1143.37 151.576 1186.4 96.4 1186.4C41.2239 1186.4 0.83195 1143.37 0.831953 1085.29ZM37.264 1085.29C37.264 1118.29 61.288 1143.11 96.4 1143.11C131.512 1143.11 155.536 1118.29 155.536 1085.29C155.536 1052.29 131.512 1027.47 96.4 1027.47C61.288 1027.47 37.264 1052.29 37.264 1085.29ZM188.8 1345.79L188.8 1388.03L3.99994 1388.03L3.99994 1352.92L116.2 1260.78L3.99994 1260.78L3.99995 1218.54L188.8 1218.54L188.8 1253.92L76.5999 1345.79L188.8 1345.79Z" fill="#0065AE" fill-opacity="0.1"/>
</svg>
        </div>
        <div class="ReasonContainer">
             <ul class="ReasonList">
                <li>
                    <div class="ReasonListRow">
                        <div class="ReasonListCol">
                            <div class="ReasonListContent">
                                <div class="ReasonNumber">
                                    選ばれる理由①
                                </div>
                                <h3>
                                いつまでも安心が続く <br>
                                <span class="Color">長期サポートシステム</span>
                                </h3>
                                <p>セキスイファミエスではトラブル発生時にすぐさま対応できるよう、24時間365日お電話の受付窓口を開設しています。また引渡後、1年間定期点検サービスを実施し、保証内容に基づき不具合や問題は手直し、補修をさせていただきます。</p>
                            </div>
                        </div>
                        <div class="ReasonListCol">
                            <div class="ReasonImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="ReasonListRow">
                        <div class="ReasonListCol">
                            <div class="ReasonListContent">
                                <div class="ReasonNumber">
                                選ばれる理由②
                                </div>
                                <h3>
                                打ち合わせからアフターサポートまで <br>
                                <span class="Color">専任の担当者</span>が対応
                                </h3>
                                <p>セキスイファミエスでは、施主様との意思疎通を図るために、窓口を一本化。打ち合わせからプランニング、資金のご相談まで、建築関係の資格を保有したリフォームコーディネーターが懇切丁寧に対応させていただきます。</p>
                            </div>
                        </div>
                        <div class="ReasonListCol">
                            <div class="ReasonImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="ReasonListRow">
                        <div class="ReasonListCol">
                            <div class="ReasonListContent">
                                <div class="ReasonNumber">
                                選ばれる理由③
                                </div>
                                <h3>
                                施主様のご要望をもとに、 <br>
                                <span class="Color">リフォームプランをプロが提案</span>
                                </h3>
                                <p>セキスイファミエスでは、施主様のご要望や建物の状況を踏まえた上でのリフォームプランをご提案。リフォーム後のイメージがご理解いただけるよう、平面図やパース図を用意しプレゼンテーションを行わせていただきます。</p>
                            </div>
                        </div>
                        <div class="ReasonListCol">
                            <div class="ReasonImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reason3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </li>
             </ul>
        </div>
    </div>
</section>
<!-- end of reason -->


<?php
get_footer();