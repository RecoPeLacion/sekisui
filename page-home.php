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
    <div class="ReasonButtonWrapper">
        <div class="ReasonContainer">
            <p class="ReasonButtonText">まずはお気軽にご相談ください！</p>
            <div class="WorksButton">
                <a href="#">
                    <small class="Small">セキスイファミエスに</small>
                    <p>今すぐ<span class="ColorYellow">無料</span>で相談してみる</p>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end of reason -->

<!-- flow -->
<section class="Flow">
<div class="OverlayImg">
<svg  viewBox="0 0 192 821" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M154.48 139.838L154.48 42.9495L105.64 42.9495L105.64 128.486L71.32 128.486L71.32 42.9495L4 42.9495L4 0.181521L188.8 0.181529L188.8 139.838L154.48 139.838ZM3.99999 168.791L188.8 168.791L188.8 211.559L38.848 211.559L38.848 304.223L3.99999 304.223L3.99999 168.791ZM0.831981 414.521C0.831983 356.177 41.488 313.409 96.4 313.409C151.312 313.409 191.968 356.177 191.968 414.521C191.968 472.601 151.576 515.633 96.4 515.633C41.224 515.633 0.831978 472.601 0.831981 414.521ZM37.264 414.521C37.264 447.521 61.288 472.337 96.4 472.337C131.512 472.337 155.536 447.521 155.536 414.521C155.536 381.521 131.512 356.705 96.4 356.705C61.288 356.705 37.264 381.521 37.264 414.521ZM188.8 779.98L188.8 820.9L3.99997 760.444L3.99997 714.508L129.136 673.852L3.99997 631.876L3.99997 586.204L188.8 525.484L188.8 569.836L58.912 611.548L188.8 655.108L188.8 694.708L57.856 736.948L188.8 779.98Z" fill="#0065AE" fill-opacity="0.1"/>
</svg>
        </div>
    <div class="ReasonTitle">
        <h4>「暮らす家から楽しむ家へ」</h4>
        <h3>セキスイファミエスのリフォームの流れ</h3>
    </div>
    <div class="FlowContainer">
        <div class="FlowWrapper">
            <ul class="FlowList">
                <li>
                    <div class="FlowListRow">
                        <div class="FlowListLeft">
                            <div class="FlowListSteps">
                                <span class="StepName">Step</span>
                                <span class="StepNumber">01</span>
                            </div>
                        </div>
                        <div class="FlowListRight">
                            <div class="FlowListContent">
                                <h3>ご相談</h3>
                                <p>
                                お住まいのお困りごと、ご希望、何でもお気軽にご相談下さい。知識・経験豊富なスタッフがアドバイス致します。　<br><br>

①店舗でご相談→ 営業拠点案内 <br>
②お電話でご相談→ フリーダイヤル（0120-816-048）<br>
③ネットから→ ご相談/お見積りフォームへ
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="FlowListRow">
                        <div class="FlowListLeft">
                            <div class="FlowListSteps">
                                <span class="StepName">Step</span>
                                <span class="StepNumber">02</span>
                            </div>
                        </div>
                        <div class="FlowListRight">
                            <div class="FlowListContent">
                                <h3>現地調査</h3>
                                <p>
                                現在のお住まい（建物）の状態、構造、床下、配管などを調査・確認致します。（建物診断）お客様のお困りごと、ご要望を具体的に現実的に、解決や提案する為の大切な作業です。<br><br>

※技術的なこと、費用的なこと、法規制的なことを正確に把握します。安心して住み続けることのできるリフォームをする為に、とても大切です。
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="FlowListRow">
                        <div class="FlowListLeft">
                            <div class="FlowListSteps">
                                <span class="StepName">Step</span>
                                <span class="StepNumber">03</span>
                            </div>
                        </div>
                        <div class="FlowListRight">
                            <div class="FlowListContent">
                                <h3>プラン提案</h3>
                                <p>
                                現地調査を踏まえての、ご希望、ご要望を形にしたプランを提案致します。<br><br>

・現況図　・平面図　・パース図　・ARを提示し、わかりやすさに努めています。
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="FlowListRow">
                        <div class="FlowListLeft">
                            <div class="FlowListSteps">
                                <span class="StepName">Step</span>
                                <span class="StepNumber">04</span>
                            </div>
                        </div>
                        <div class="FlowListRight">
                            <div class="FlowListContent">
                                <h3>お見積もり</h3>
                                <p>
                                お客様とのお打合せで完成した、ご希望が実現するプランでお見積りを提示します。工事内容、工事費用を丁寧にご説明致します。<br><br>

※工事の範囲や、工事内容、設備仕様など、しっかりご確認下さい。ショールームへのご案内も致します。
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="FlowListRow">
                        <div class="FlowListLeft">
                            <div class="FlowListSteps">
                                <span class="StepName">Step</span>
                                <span class="StepNumber">05</span>
                            </div>
                        </div>
                        <div class="FlowListRight">
                            <div class="FlowListContent">
                                <h3>ご契約</h3>
                                <p>
                                図面・仕様書・打合せ工事スケジュール・お見積書・資金計画※をご確認頂き、ご契約となります。<br><br>

※資金計画<br>
ローンをお考えのお客様には、ご契約の前に、ローンの審査をお願いしています<br>
※リフォームのローンについて<br>
提携の信販会社によるリフォームローン、住宅ローン残債がおありの方のローン計画立案などのご相談を承っています。
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="FlowListRow">
                        <div class="FlowListLeft">
                            <div class="FlowListSteps">
                                <span class="StepName">Step</span>
                                <span class="StepNumber">06</span>
                            </div>
                        </div>
                        <div class="FlowListRight">
                            <div class="FlowListContent">
                                <h3>最終打合せ</h3>
                                <p>
                                図面、仕様書、工程表、お見積書の工事前最終確認です。
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="FlowListRow">
                        <div class="FlowListLeft">
                            <div class="FlowListSteps">
                                <span class="StepName">Step</span>
                                <span class="StepNumber">07</span>
                            </div>
                        </div>
                        <div class="FlowListRight">
                            <div class="FlowListContent">
                                <h3>着工・施工</h3>
                                <p>
                                着工前にご近所へご挨拶を行います。ご近所への配慮、安全のために養生をしっかり実施し、迅速、丁寧に工事を進めます。<br><br>

※追加・変更が生じた場合<br>
　書面にて追加変更内容を確認し、正確に進めます。
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="FlowListRow">
                        <div class="FlowListLeft">
                            <div class="FlowListSteps">
                                <span class="StepName">Step</span>
                                <span class="StepNumber">08</span>
                            </div>
                        </div>
                        <div class="FlowListRight">
                            <div class="FlowListContent">
                                <h3>完成・引き渡し</h3>
                                <p>
                                会社にて工事完了着の検査を実施し、その後お客様と完成確認を致します。<br><br>

リフォームを終えて   アフターサービス <br>
工事図面をセキスイのデータベースに登録し、お客様の情報を保管、実施したリフォーム工事の問合せやご相談に対応致します。末永く、「住まいのコンシュルジュ」としてお付き合い頂けます。<br>
※改装リフォームをされた方は、1年点検を実施
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- end of flow -->

<!-- area -->
<section class="Area">
    <div class="Title">
        <h3>AREA</h3>
        <p>対応エリア</p>
    </div>
    <div class="CustomerTagline">
        <h3>
            セキスイファミエスでは<span class="ColorYellow">一都三県</span>を <br>
            施工対応エリアとしております
        </h3>
    </div>
    <div class="AreaContainer">
        <div class="AreaImg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map.png" alt="">
        </div>
    </div>
</section>
<!-- end of area -->

<!-- faq -->
<section class="Faq">
    <div class="Title">
        <h3>FAQ</h3>
        <p>よくあるご質問</p>
        <div class="FaqTag">はじめての<span class="Color">リフォーム</span>よくある質問にお応えします</div>
    </div>
    <div class="FaqContainer">
        <ul class="FaqList">
            <li>
                 <div class="FaqCard">
                    <div class="FaqRow">
                        <div class="FaqLeft">
                            <div class="FaqQ">
                                Q
                            </div>
                        </div>
                        <div class="FaqRight">
                            <h4>お見積もりは無料ですか</h4>
                            <p>はい、お見積もりは無料で承っております。ホームページまたは、お電話・ＦＡＸでもお受けしております。 <br>
どのようなご相談でも。まずはお気軽にご相談ください。</p>
                        </div>
                    </div>
                 </div>
            </li>
            <li>
                 <div class="FaqCard">
                    <div class="FaqRow">
                        <div class="FaqLeft">
                            <div class="FaqQ">
                                Q
                            </div>
                        </div>
                        <div class="FaqRight">
                            <h4>工事途中で追加費用が必要な場合はありますか</h4>
                            <p>
                            リフォーム工事は、事前には確認できない部分等の状況により、費用に変更が生じる場合があります。<br>
弊社では、事前の現場調査を行い、出来る限り工事途中の追加費用がかからないように努めております。
                            </p>
                        </div>
                    </div>
                 </div>
            </li>
            <li>
                 <div class="FaqCard">
                    <div class="FaqRow">
                        <div class="FaqLeft">
                            <div class="FaqQ">
                                Q
                            </div>
                        </div>
                        <div class="FaqRight">
                            <h4>住みながらのリフォーム工事は可能ですか</h4>
                            <p>
                            もちろん可能です。弊社では大型リフォームの場合には、仮住まいもおすすめしております。<br>
仮住まいすることにより、コストダウンや工期短縮ができるメリットがあります。
                            </p>
                        </div>
                    </div>
                 </div>
            </li>
            <li>
                 <div class="FaqCard">
                    <div class="FaqRow">
                        <div class="FaqLeft">
                            <div class="FaqQ">
                                Q
                            </div>
                        </div>
                        <div class="FaqRight">
                            <h4>問い合わせ・相談の後に、しつこい営業はありませんか？</h4>
                            <p>
                            弊社ではお客様のご満足を一番に考えております。そのため、飛び込みや無理な営業は一切行なっておりません。<br>
安心してご相談ください。
                            </p>
                        </div>
                    </div>
                 </div>
            </li>
        </ul>
    </div>
</section>
<!-- end of faq -->

<!-- contact -->
<section class="Contact">
    <div class="Title">
        <h3>CONTACT</h3>
        <p>お問い合わせ</p>
    </div>
    <div class="ContactContainer">
        <div class="ContactWrapper">
            <?php echo do_shortcode('[contact-form-7 id="c38c9ff" title="Contact form 1"]'); ?>
            <div class="ContactInquiry">
                <h3>お電話でのお問い合わせ（24時間/365日）</h3>
                <p>
                ・リフォームをお考えの方 <br>
                ・リフォーム費用を知りたい方 <br><br>
                リフォームについてのご質問・ご相談、お気軽にお問い合わせください！ <br><br>
                <span class="Color">TEL：0120−816−048</span> <br><br>
                オペレーターがお電話を受け取り、後ほどご担当者よりお電話をさせていただきます。
                </p>
            </div>
        </div>
    </div>
</section>
<!-- end of contact -->


<?php
get_footer();