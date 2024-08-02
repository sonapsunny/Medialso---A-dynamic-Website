<html lang="zh-CN" style="height: 100%;" class="translated-ltr">

<head>
    <!-- Google Tag Manager -->
    <script type="text/javascript" async=""
        src="https://www.googletagmanager.com/gtag/js?id=G-YFFR844H2N&amp;l=dataLayer&amp;cx=c"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-WKMT6NW4"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-YFFR844H2N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        // Configure to use first-party cookies with SameSite and   Secure attributes
        gtag('config', 'G-YFFR844H2N', {
            'cookie_flags': 'SameSite=None;Secure'
        });
    </script>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WKMT6NW4');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <title>案例研究 | MEDIALSO</title>
    <meta name="description"
        content="Medialso web design and digital marketing cases. We offer full-service growth solutions to ensure your business reaches its full potential. ">
    <link rel="canonical" href="https://medialso.com/medialso-portfolio.html">
    <link rel="icon" href="assets/favicon.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">


    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background: linear-gradient(90deg, #120349be, #000000, #04053d);
            background-size: 200% 200%;
            animation: gradientAnimation 15s ease infinite;
            color: #ffffff;
            font-family: 'Poppins';
        }

        /* .logo {
            margin-left: 300px;
            width: 100px;
            height: 100px;
        } */



        .testimonial {
            background-color: #161616;
            color: white;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            position: relative;
            width: 45%;
        }

        .testimonial-text {
            font-size: 1.2em;
            margin-bottom: 10px;
            position: relative;
            z-index: 1;
        }

        .testimonial-author {
            font-weight: bold;
        }

        .testimonial-title {
            font-size: 0.9em;
            color: #ccc;
        }

        .testimonial-image {
            position: absolute;
            right: 20px;
            bottom: 20px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
        }

        .testimonial-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .quote-sign {
            position: absolute;
            font-size: 5em;
            color: #5C45FD;
            top: 20px;
            left: 20px;
            z-index: 0;
        }



        .portfolio-section {
            padding: 50px 0;
        }

        .portfolio-container {
            display: flex;
            flex-wrap: wrap;
            margin-right: 0;
            margin-left: 0;
        }

        .portfolio-item {
            position: relative;
            flex: 1 0 33.33%;
            max-width: 33.33%;
            overflow: hidden;
        }

        .portfolio-item img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s;
        }

        .portfolio-item:hover img {
            transform: scale(1.1);
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        .portfolio-text {
            text-align: center;
        }

        .portfolio-text h4 {
            margin: 0;
            padding: 0;
            font-size: 1.5em;
        }

        .portfolio-text p {
            margin: 5px 0 0;
            font-size: 1em;
        }

        @media (max-width: 768px) {
            .portfolio-item {
                flex: 1 0 50%;
                max-width: 50%;
            }
        }

        @media (max-width: 576px) {
            .portfolio-item {
                flex: 1 0 100%;
                max-width: 100%;
            }
        }

        /* Removing gaps between images */
        .portfolio-container .portfolio-item {
            margin: 0;
            padding: 0;
        }

        .portfolio-container {
            width: 100%;
        }

        .clients-carousel {
            width: 100%;
            overflow: hidden;

            padding: 10px 0;
        }

        .clients-track {
            display: flex;
            animation: scroll 10s linear infinite;
        }

        .clients {
            padding: 10px;
            flex: 0 0 auto;
            width: 200px;
            margin: 0 20px;
            filter: grayscale(100%);
            transition: transform 0.3s, filter 0.3s;
        }

        .clients:hover {
            transform: scale(1.2);
            filter: grayscale(0%);
        }

        /* Keyframe for continuous scrolling */
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .clients {
                width: 80px;
                margin: 0 15px;
            }
        }

        @media (max-width: 480px) {
            .clients {
                width: 60px;
                margin: 0 10px;
            }
        }

        .card-container {
            display: flex;
            gap: 20px;
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            text-align: center;
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card h3 {
            padding: 20px;
            font-size: 18px;
            color: #333;
        }

        @media (max-width: 768px) {


            .clients {
                width: 80px;

            }
        }

        /* 
        @media (max-width: 990px) {

            .logo {
                width: 80px;
                height: 100px;
                margin: 1px 10px 1px 2px;
            }
        } */

        .container1 {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 10px;
        }

        .card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            max-width: 300px;
            text-align: center;
            transition: transform 0.2s;
        }

        .card img {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            max-width: 100%;
            height: auto;
        }

        .card h3 {
            font-size: 1em;
            margin: 15px;
        }

        .card:hover {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .card {
                flex: 1 1 calc(50% - 20px);
                max-width: calc(50% - 20px);
            }
        }

        @media (max-width: 480px) {
            .card {
                flex: 1 1 100%;
                max-width: 100%;
            }
        }
    </style>
    <script src="https://www.googletagmanager.com/gtag/js?id=G-YFFR844H2N" async=""></script>
    <link type="text/css" rel="stylesheet" charset="UTF-8"
        href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.26tY-h6gH9w.L.W.O/am=GgY/d=0/rs=AN8SPfrqqoWIdSroVZYwyZfbNaO7nvNEag/m=el_main_css">
    <script type="text/javascript" charset="UTF-8"
        src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.en_US.uQgoKXUfpjA.O/am=ACA/d=1/exm=el_conf/ed=1/rs=AN8SPfp01Zhym7Ic0i1waA1vrCwOu-7ifg/m=el_main"></script>
    <link type="text/css" rel="stylesheet" charset="UTF-8"
        href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.26tY-h6gH9w.L.W.O/am=GgY/d=0/rs=AN8SPfrqqoWIdSroVZYwyZfbNaO7nvNEag/m=el_main_css">
</head>

<body style="position: relative; min-height: 100%; top: 0px;">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/zh/"><img loading="lazy" src="assets/Medialso-logo.png" alt="Medialso-logo"
                    class="logo"></a>
            <div class="d-flex align-items-center">
                <!-- Language dropdown for mobile view -->
                <div class="mobile-language-dropdown d-lg-none">
                    <div class="d-flex align-items-center">
                        <a class="nav-link" href="" onclick="translatePage('zh-CN')">
                            <img src="https://flagcdn.com/w20/cn.png" alt="中国人">
                        </a>
                        <a class="nav-link" href="/es/medialso-portfolio/">
                            <img src="https://flagcdn.com/w20/es.png" alt="西班牙语">
                        </a>
                        <a class="nav-link" href="/medialso-portfolio/">
                            <img src="https://flagcdn.com/w20/us.png" alt="英语">
                        </a>
                    </div>
                </div>
                <!-- Language selector and Google Translate element -->
                <div class="d-flex ml-auto d-lg-none" style="margin-bottom: 15px;">
                    <div class="language-selector">
                        <a id="languageButton" class="language-button">🌐</a>
                        <div id="languageDropdownMobile" class="language-dropdown"></div>
                    </div>
                    <div id="google_translate_element" style="display:none;"></div>
                </div>

                <!-- Navbar toggler for mobile view -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class='bx bx-menu' style="font-size: xx-large;"></i></span>
                </button>
            </div>
            <div class="navbar-collapse custom-collapse collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-center" style="font-size: larger;">
                    <li class="nav-item dropdown" style="width: 150px; margin-top: 10px; text-align: left;">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown1" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    服务
                                </font>
                            </font>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown1" style="display: none;">
                            <a class="dropdown-item" href="/zh/digital-marketing-services-dubai.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">数字营销</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/digital-marketing-consultancy.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">数字营销咨询</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/digital-marketing-strategy-dubai.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">数字营销策略制定</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/website-design-development-services.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">网站设计与开发</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/social-media-agency-dubai.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">社交媒体</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/branding-agency-dubai.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">品牌</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/email-marketing.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">电子邮件营销</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/seo-company-dubai.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">搜索引擎优化</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/video-production-services.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        视频制作</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/photography-production-services.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        摄影制作</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/pay-per-click-advertising.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">按点击付费</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/ai-ads-generation.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">AI广告生成</font>
                                </font>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown" style=" margin-top: 10px; margin-left: 10px; text-align: left;">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown2" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    行业
                                </font>
                            </font>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2" style="display: none;">
                            <a class="dropdown-item" href="/zh/b2b-marketing-agency.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">B2B营销</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/education-marketing-services-schools-universities.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">教育</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/automotive-marketing-services.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">汽车</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/healthcare-marketing-services.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">卫生保健</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/hotel-tourism-hospitality-marketing-services.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">酒店业</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/real-estate-marketing.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">房地产</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/ecommerce-marketing-services.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">电子商务</font>
                                </font>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item" style="width: 200px; margin-top: 10px; margin-left: 10px; text-align: left;">
                        <a class="nav-link" href="/zh/medialso-portfolio.html" style="margin-right: 0px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">实例探究</font>
                            </font>
                        </a>
                    </li>
                    <li class="nav-item dropdown" style="width: 150px;  margin-top: 10px; text-align: left;">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown3" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    价钱
                                </font>
                            </font>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3" style="display: none;">
                            <a class="dropdown-item" href="/zh/pricing/social-media-management-pricing.php">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">社交媒体管理</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/pricing/branding-pricing.php">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">品牌</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/pricing/web-development-and-design-pricing.php">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">网站设计与开发</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/pricing/seo-pricing.php">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">搜索引擎优化</font>
                                </font>
                            </a>

                            <a class="dropdown-item" href="/zh/pricing/digital-strategy-pricing.php">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">数字战略</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/pricing/production-pricing.php">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">生产</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/pricing/ai-generated-contents-pricing.php">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">人工智能生成内容</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/pricing/pay-per-click-pricing.php">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">PPC</font>
                                </font>
                            </a>
                            <a class="dropdown-item" href="/zh/pricing/other-pricing.php">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">其他的</font>
                                </font>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item" style="width: 150px; margin-top: 10px; text-align: left;">
                        <a class="nav-link" href="/zh/about-us.html">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">关于我们</font>
                            </font>
                        </a>
                    </li>
                    <li class="nav-item" style="width: 80px; margin-top: 10px; text-align: left;">
                        <a class="nav-link" href="/zh/blog.html">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">博客</font>
                            </font>
                        </a>
                    </li>
                    <li class="nav-item dropdown d-none d-lg-block"
                        style="width: 150px;  margin-top: 10px; text-align: left;">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown3" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    语言
                                </font>
                            </font>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3" style="display: none;">
                            <a class="dropdown-item" href="" onclick="translatePage('zh-CN')"
                                style="display: flex; justify-content: space-between; align-items: center;">
                                <span style="vertical-align: inherit;">中国人</span>
                                <span style="margin-left: 10px;"><img src="https://flagcdn.com/w20/cn.png"
                                        alt="中国人"></span>
                            </a>
                            <a class="dropdown-item" href="/es/medialso-portfolio/"
                                style="display: flex; justify-content: space-between; align-items: center;">
                                <span style="vertical-align: inherit;">西班牙语</span>
                                <span style="margin-left: 10px;"><img src="https://flagcdn.com/w20/es.png"
                                        alt="西班牙语"></span>
                            </a>
                            <a class="dropdown-item" href="/medialso-portfolio/"
                                style="display: flex; justify-content: space-between; align-items: center;">
                                <span style="vertical-align: inherit;">英语</span>
                                <span style="margin-left: 10px;"><img src="https://flagcdn.com/w20/us.png"
                                        alt="英语"></span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-none d-lg-block">
                        <div class="language-selector">
                            <a id="languageButton" class="language-button">🌐</a>
                            <div id="languageDropdownDesktop" class="language-dropdown"></div>
                        </div>
                        <div id="google_translate_element" style="display:none;"></div>
                    </li>
                    <li>
                        <div class="desktop-only">
                            <a href="/zh/contact-us.php" class="btn view-work-btn mt-3 speak-to-us-btn"
                                style="font-size: large;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">联系我们</font>
                                </font>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <section class="main-section">
        <div class="container">
            <h1 class="main-title text-center mt-1 ">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">您是否有兴趣看看</font>
                </font><br>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">我们能为您做些什么实例？
                    </font>
                </font>
            </h1>
            <p class="main-description ">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                        在 Medialso，我们拥有设计、开发和执行提升您品牌的项目的专业知识和技能。我们专业的战略家团队始终走在设计潮流的前沿，并利用最新技术帮助我们的客户实现潜在客户生成和转化目标。
                    </font>
                </font>
            </p>
            <p class="main-description ">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                        我们在全球拥有超过 300 个活跃客户，因此不可能在此展示我们所有的工作，但我们提供了一些样本来展示我们的能力。
                    </font>
                </font>
            </p>
            <p class="main-description" style="font-weight: bold;">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                        如果您想了解更多，请随时联系我们。
                    </font>
                </font>
            </p>



        </div>
        <div class="container1 card-container mt-5">
            <div class="card">
                <a href="tasty-bites.html"><img loading="lazy" src="assets/tastybites.webp" alt="汉堡王"></a>
                <h3>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">在两个月内，Tasty Bites 在社交媒体平台上的粉丝从 0 名增长到 50,000 名。</font>
                    </font>
                </h3>
            </div>
            <div class="card" style="transform: scale(1);">
                <a href="cooking.html"><img loading="lazy" src="assets/cooking.webp" alt="OVH云"></a>
                <h3>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">社交媒体关注者增加了 50%。社交媒体参与率提高了 45%。</font>
                    </font>
                </h3>
            </div>
            <div class="card" style="transform: scale(1);">
                <a href="pawsitivity.html"><img loading="lazy" src="assets/pawsitivity.webp" alt="字谜"></a>
                <h3>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">三个月内关注者从 1,000 人增加到 30,000 人。第一季度内采用率增加了 50%。</font>
                    </font>
                </h3>
            </div>
        </div>
        <div class="container1 card-container mt-5">
            <div class="card">
                <a href="futbol.html"><img loading="lazy" src="assets/futbol-frenzy-logo.webp" alt="汉堡王"></a>
                <h3>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">下载量增加了 50%。玩家参与度和游戏内活动增加了 40%。
                        </font>
                    </font>
                </h3>
            </div>
            <div class="card">
                <a href="battlezone.html"><img loading="lazy" src="assets/battlezone.webp" alt="OVH云"></a>
                <h3>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">社交媒体关注者增加了 60%。月销售额增长了 25%。</font>
                    </font>
                </h3>
            </div>
            <div class="card">
                <a href="hidden-place.html"><img loading="lazy" src="assets/hiddenplace.webp" alt="字谜"></a>
                <h3>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">网站参与度指标提高了 50%。六个月内销售额增长了 40%。</font>
                    </font>
                </h3>
            </div>
        </div>
        <div class="container1 card-container mt-5">
            <div class="card">
                <a href="forest-survivor.html"><img loading="lazy" src="assets/forest-survivor.webp" alt="汉堡王"></a>
                <h3>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">网站流量增加了 50%，参与度也更高。社交媒体关注者增加了 40%。</font>
                    </font>
                </h3>
            </div>
            <div class="card">
                <a href="veggie-delight.html"><img loading="lazy" src="assets/veggie-delight.webp" alt="OVH云"></a>
                <h3>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">社交媒体关注者增加了 35%，非素食者的参与度显著提高。</font>
                    </font>
                </h3>
            </div>
            <div class="card">
                <a href="movie-spot.html"><img loading="lazy" src="assets/movie-spot.webp" alt="字谜"></a>
                <h3>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">剧院上座率增加了 30%。社交媒体粉丝增加了 50%。</font>
                    </font>
                </h3>
            </div>
        </div>


    </section>
    <!-- Testimonial Start -->
    <div class="container mt-5">
        <h2>
            <font style="vertical-align: inherit;"></font><span style="color: #6C63FF;">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">人们</font>
                </font>
            </span>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">在说什么</font>
                <font style="vertical-align: inherit;">？</font>
            </font>
        </h2>
        <div class="container-xxl mt-5 test">
            <div class="carousel">
                <div class="testimonial-card">
                    <img loading="lazy" src="assets/client1.png" alt="客户端 1">
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">“DRT Medialso 针对 Acne-Aid 的营销策略非常出色。他们专注于关键信息 — 3
                                倍控油和 12 小时功效 — 提升了我们品牌的吸引力。影响力管理、商业视频和综合活动显著提高了品牌知名度和客户参与度。他们的奉献精神和创造力带来了巨大的变化。强烈推荐！”
                            </font>
                        </font>
                    </p>
                    <span class="read-more">Read More</span>
                    <h3>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">祛痘</font>
                        </font>
                    </h3>
                </div>
                <div class="testimonial-card">
                    <img loading="lazy" src="assets/Client2.png" alt="客户端 2">
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Medialso 为 Anakku Malaysia 做了出色的工作。他们在更新我们网站的 UI/UX
                                方面的专业知识极大地改善了用户体验。他们为我们推出的新款液体清洁剂制定的品牌和沟通策略非常出色，推动了令人印象深刻的社交媒体参与度和知名度。我们强烈推荐 DRT
                                Medialso，因为他们的专业精神、创造力和对卓越的奉献精神。</font>
                        </font>
                    </p>
                    <span class="read-more">Read More</span>
                    <h3>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">马来西亚</font>
                        </font>
                    </h3>
                </div>
                <div class="testimonial-card">
                    <img loading="lazy" src="assets/Client3.png" alt="客户端 3">
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">与 DRT Medialso 的合作也改变了 ADDA
                                泰国。他们在网站管理方面的专业知识提高了我们的在线形象，使我们的网站更加用户友好且具有视觉吸引力。他们创新的社交媒体营销极大地提高了我们的参与度和影响力，从而提高了品牌知名度和客户互动。强烈推荐，因为服务卓越，效果显著。
                            </font>
                        </font>
                    </p>
                    <span class="read-more">Read More</span>
                    <h3>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">ADDA 泰国</font>
                        </font>
                    </h3>
                </div>
                <div class="testimonial-card">
                    <img loading="lazy" src="assets/client4.jpg" alt="客户端 4">
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">与 DRT Medialso 的合作也改变了 Angkas 的格局。他们的 Jester
                                品牌原型沟通策略引起了我们目标受众的共鸣，并吸引了更广泛的受众。他们的创造力和战略思维大大提升了我们的品牌知名度和在线知名度，从而显著提高了参与度。强烈推荐他们创新且有影响力的方法。
                            </font>
                        </font>
                    </p>
                    <span class="read-more">Read More</span>
                    <h3>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">安卡斯</font>
                        </font>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!-- Quote Start -->
    <div>
        <div class="container-xxl mt-5 query ">
            <div class="container">
                <div class="row g-8 text-white">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.1s" style="color: white;">
                                <p class="fs-5 fw-medium">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">获取报价</font>
                                    </font>
                                </p>
                                <h2 class="display-5 mb-4" style="font-size: 2.5rem;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">需要我们专家的</font>
                                    </font><br>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">帮助吗？我们就在这里！</font>
                                    </font>
                                </h2>
                                <p>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            准备好改变您的数字形象并取得显著成果了吗？立即联系我们安排咨询，了解我们的专家团队如何帮助您的企业在迪拜竞争激烈的市场中蓬勃发展。</font>
                                    </font>
                                </p>
                                <div class="d-inline-flex">
                                    <a class="d-inline-flex align-items-center rounded  border p-1"
                                        style="color: white; width: 200px; ">
                                        <span class="align-items-center"><i class="fa fa-phone-alt"></i>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">+971 04 297 7303</font>
                                            </font>
                                        </span>
                                    </a>
                                    <a href="query.php" class="btn view-work-btn mt-1"
                                        style="font-size: large; margin-left: 10px;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">发送询问</font>
                                        </font>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 wow fadeInUp text-center mt-4" data-wow-delay="0.5s">
                                <img loading="lazy" src="assets/enquiry.webp" alt="询问图片" class="img-fluid enquiry"
                                    style="max-width: 100%; height: auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer text-center text-md-left">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-6 mb-4">
                    <h5>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">服务</font>
                        </font>
                    </h5>
                    <ul class="list-unstyled">
                        <li><a href="digital-marketing-services-dubai.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">数字营销</font>
                                </font>
                            </a></li>
                        <li><a href="digital-marketing-consultancy.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">数字营销咨询</font>
                                </font>
                            </a></li>
                        <li><a href="digital-marketing-strategy-dubai.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">数字营销策略制定</font>
                                </font>
                            </a>
                        </li>
                        <li><a href="website-design-development-services.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">网站设计与开发</font>
                                </font>
                            </a></li>
                        <li><a href="social-media-agency-dubai.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">社交媒体</font>
                                </font>
                            </a></li>
                        <li><a href="branding-agency-dubai.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">品牌</font>
                                </font>
                            </a></li>
                        <li><a href="email-marketing.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">电子邮件营销</font>
                                </font>
                            </a></li>
                        <li><a href="seo-company-dubai.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">搜索引擎优化</font>
                                </font>
                            </a></li>
                        <li><a href="video-production-services.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        视频制作</font>
                                </font>
                            </a></li>
                        <li><a href="photography-production-services.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        摄影制作</font>
                                </font>
                            </a></li>
                        <li><a href="pay-per-click-advertising.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">按点击付费</font>
                                </font>
                            </a></li>
                        <li><a href="ai-ads-generation.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">AI广告生成</font>
                                </font>
                            </a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-6 mb-4">
                    <h5>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">行业</font>
                        </font>
                    </h5>
                    <ul class="list-unstyled">
                        <li><a href="b2b-marketing-agency.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">B2B营销</font>
                                </font>
                            </a></li>
                        <li><a href="education-marketing-services-schools-universities.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">教育</font>
                                </font>
                            </a></li>
                        <li><a href="automotive-marketing-services.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">汽车</font>
                                </font>
                            </a>
                        </li>
                        <li><a href="healthcare-marketing-services.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">卫生保健</font>
                                </font>
                            </a></li>
                        <li><a href="hotel-tourism-hospitality-marketing-services.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">酒店业</font>
                                </font>
                            </a></li>
                        <li><a href="real-estate-marketing.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">房地产</font>
                                </font>
                            </a></li>
                        <li><a href="ecommerce-marketing-services.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">电子商务</font>
                                </font>
                            </a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-6 mb-4">
                    <h5>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">公司</font>
                        </font>
                    </h5>
                    <ul class="list-unstyled">
                        <li><a href="about-us.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">关于我们</font>
                                </font>
                            </a></li>
                        <li><a href="medialso-portfolio.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">实例探究</font>
                                </font>
                            </a></li>


                        <li><a href="blog.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">博客</font>
                                </font>
                            </a></li>

                        <li><a href="contact-us.php">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">接触</font>
                                </font>
                            </a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <h5>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">联系我们</font>
                        </font>
                    </h5>
                    <ul class="list-unstyled" style="color: #fff;">
                        <li>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">销售量</font>
                            </font>
                        </li>
                        <li>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">web@drtseagull.com </font>
                            </font><br>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">+971 04 297 7303</font>
                            </font>
                        </li>

                        <li>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">地址</font>
                            </font>
                        </li>
                        <li>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">阿联酋迪拜商业湾单一商务大厦 HO 3401-3404 号，邮政信箱 554566</font>
                            </font>
                        </li>

                    </ul>

                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center text-md-left">
                    <h5>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">跟着我们</font>
                        </font>
                    </h5>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/drtmedialso/"><i class="bx bxl-facebook-square"></i></a>
                        <a href="https://www.tiktok.com/@drtmedialso"><i class="bx bxl-tiktok"></i></a>
                        <a href="https://x.com/DrtMedialso" id="home"><img loading="lazy" class="image_on"
                                src="assets/Twitter.webp" alt="推特" style="width: 19px;"><img loading="lazy"
                                class="image_off" src="assets/twitter_color.webp" alt="Twitter"
                                style="width: 19px;"></a>

                        <a href="https://www.linkedin.com/company/drt-medialso/"><i
                                class="bx bxl-linkedin-square"></i></a>
                        <a href="https://www.instagram.com/drtmedialso"><i class="bx bxl-instagram-alt"></i></a>

                    </div>
                </div>
            </div>
            <hr>

            <hr>
            <div class="row">
                <div class="col text-center">
                    <p style="color: #bdbdbd;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">© 2024 Medialso。保留所有权利。</font>
                        </font><a href="#">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">隐私政策</font>
                            </font>
                        </a>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">|</font>
                        </font><a href="#">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">条款和条件</font>
                            </font>
                        </a>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">| </font>
                        </font><a href="https://www.drt-seagull.com/">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Seagull DRT</font>
                            </font>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
            populateLanguageDropdown();
        }

        function translatePage(language) {
            var selectField = document.querySelector("select.goog-te-combo");
            if (selectField) {
                selectField.value = language;
                selectField.dispatchEvent(new Event('change'));
            }
        }

        function populateLanguageDropdown() {
            var languages = {
                'af': 'Afrikaans',
                'sq': 'Albanian',
                'am': 'Amharic',
                'ar': 'Arabic',
                'hy': 'Armenian',
                'az': 'Azerbaijani',
                'eu': 'Basque',
                'be': 'Belarusian',
                'bn': 'Bengali',
                'bs': 'Bosnian',
                'bg': 'Bulgarian',
                'ca': 'Catalan',
                'ceb': 'Cebuano',
                'ny': 'Chichewa',
                'zh-CN': 'Chinese (Simplified)',
                'zh-TW': 'Chinese (Traditional)',
                'co': 'Corsican',
                'hr': 'Croatian',
                'cs': 'Czech',
                'da': 'Danish',
                'nl': 'Dutch',
                'en': 'English',
                'eo': 'Esperanto',
                'et': 'Estonian',
                'tl': 'Filipino',
                'fi': 'Finnish',
                'fr': 'French',
                'fy': 'Frisian',
                'gl': 'Galician',
                'ka': 'Georgian',
                'de': 'German',
                'el': 'Greek',
                'gu': 'Gujarati',
                'ht': 'Haitian Creole',
                'ha': 'Hausa',
                'haw': 'Hawaiian',
                'iw': 'Hebrew',
                'hi': 'Hindi',
                'hmn': 'Hmong',
                'hu': 'Hungarian',
                'is': 'Icelandic',
                'ig': 'Igbo',
                'id': 'Indonesian',
                'ga': 'Irish',
                'it': 'Italian',
                'ja': 'Japanese',
                'jw': 'Javanese',
                'kn': 'Kannada',
                'kk': 'Kazakh',
                'km': 'Khmer',
                'rw': 'Kinyarwanda',
                'ko': 'Korean',
                'ku': 'Kurdish (Kurmanji)',
                'ky': 'Kyrgyz',
                'lo': 'Lao',
                'la': 'Latin',
                'lv': 'Latvian',
                'lt': 'Lithuanian',
                'lb': 'Luxembourgish',
                'mk': 'Macedonian',
                'mg': 'Malagasy',
                'ms': 'Malay',
                'ml': 'Malayalam',
                'mt': 'Maltese',
                'mi': 'Maori',
                'mr': 'Marathi',
                'mn': 'Mongolian',
                'my': 'Myanmar (Burmese)',
                'ne': 'Nepali',
                'no': 'Norwegian',
                'or': 'Odia (Oriya)',
                'ps': 'Pashto',
                'fa': 'Persian',
                'pl': 'Polish',
                'pt': 'Portuguese',
                'pa': 'Punjabi',
                'ro': 'Romanian',
                'ru': 'Russian',
                'sm': 'Samoan',
                'gd': 'Scots Gaelic',
                'sr': 'Serbian',
                'st': 'Sesotho',
                'sn': 'Shona',
                'sd': 'Sindhi',
                'si': 'Sinhala',
                'sk': 'Slovak',
                'sl': 'Slovenian',
                'so': 'Somali',
                'es': 'Spanish',
                'su': 'Sundanese',
                'sw': 'Swahili',
                'sv': 'Swedish',
                'tg': 'Tajik',
                'ta': 'Tamil',
                'tt': 'Tatar',
                'te': 'Telugu',
                'th': 'Thai',
                'tr': 'Turkish',
                'tk': 'Turkmen',
                'uk': 'Ukrainian',
                'ur': 'Urdu',
                'ug': 'Uyghur',
                'uz': 'Uzbek',
                'vi': 'Vietnamese',
                'cy': 'Welsh',
                'xh': 'Xhosa',
                'yi': 'Yiddish',
                'yo': 'Yoruba',
                'zu': 'Zulu'
            };

            var dropdownDesktop = document.getElementById('languageDropdownDesktop');
            var dropdownMobile = document.getElementById('languageDropdownMobile');

            for (var code in languages) {
                var a = document.createElement('a');
                a.href = "#";
                a.onclick = (function (code) {
                    return function () {
                        translatePage(code);
                    };
                })(code);
                a.textContent = languages[code];
                dropdownDesktop.appendChild(a);
            }

            for (var code in languages) {
                var a = document.createElement('a');
                a.href = "#";
                a.onclick = (function (code) {
                    return function () {
                        translatePage(code);
                    };
                })(code);
                a.textContent = languages[code];
                dropdownMobile.appendChild(a);
            }
        }

        (function () {
            var gtScript = document.createElement('script');
            gtScript.type = 'text/javascript';
            gtScript.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
            document.body.appendChild(gtScript);
        })();
    </script>
    <script type="text/javascript"
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>document.querySelectorAll('.card').forEach(card => { card.addEventListener('mouseover', () => { card.style.transform = 'scale(1.05)' }); card.addEventListener('mouseout', () => { card.style.transform = 'scale(1)' }) });</script>
    <script>$(document).ready(function () { $("#navbarDropdown1, #navbarDropdown2, #navbarDropdown3,#mobileNavbarDropdownLanguage").click(function (event) { event.preventDefault(); var dropdownMenu = $(this).next(".dropdown-menu"); $(".dropdown-menu").not(dropdownMenu).hide(); dropdownMenu.toggle() }); $(document).click(function (event) { var target = $(event.target); if (!target.closest(".nav-item.dropdown").length) { $(".dropdown-menu").hide() } }) });</script>

    <!-- Consent Management Example -->
    <script>document.addEventListener('DOMContentLoaded', function () {
            var consentGranted = checkUserConsent(); if (consentGranted) {
                var gtmScript = document.createElement('script'); gtmScript.src = "https://www.googletagmanager.com/gtag/js?id=G-YFFR844H2N"; gtmScript.async = !0; document.head.appendChild(gtmScript); gtmScript.onload = function () {
                    window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments) }
                    gtag('js', new Date()); gtag('config', 'G-YFFR844H2N', { 'cookie_flags': 'SameSite=None;Secure' })
                }
            }
        }); function checkUserConsent() { return !0 }</script>
    <script>document.addEventListener("DOMContentLoaded", function () { var toggler = document.querySelector(".navbar-toggler"); var navbar = document.querySelector("#navbarSupportedContent"); document.addEventListener("click", function (e) { if (!navbar.contains(e.target) && !toggler.contains(e.target)) { navbar.classList.remove("show") } }) });</script>
    <script>document.addEventListener('DOMContentLoaded', function () { const readMoreLinks = document.querySelectorAll('.read-more'); readMoreLinks.forEach(link => { link.addEventListener('click', function () { const card = this.parentElement; const paragraph = card.querySelector('p'); const paragraphWidth = paragraph.offsetWidth; paragraph.style.width = `${paragraphWidth}px`; if (paragraph.style.whiteSpace === 'normal') { paragraph.style.whiteSpace = 'nowrap'; paragraph.style.textOverflow = 'ellipsis'; paragraph.style.maxHeight = '6em'; this.textContent = 'Read More' } else { paragraph.style.whiteSpace = 'normal'; paragraph.style.textOverflow = 'clip'; paragraph.style.maxHeight = 'none'; this.textContent = 'Read Less' } }) }) });</script>
    <div id="goog-gt-tt" class="VIpgJd-yAWNEb-L7lbkb skiptranslate"
        style="border-radius: 12px; margin: 0 0 0 -23px; padding: 0; font-family: 'Google Sans', Arial, sans-serif;"
        data-id="">
        <div id="goog-gt-vt" class="VIpgJd-yAWNEb-hvhgNd">
            <div class=" VIpgJd-yAWNEb-hvhgNd-l4eHX-i3jM8c"><img
                    src="https://fonts.gstatic.com/s/i/productlogos/translate/v14/24px.svg" width="24" height="24"
                    alt=""></div>
            <div class=" VIpgJd-yAWNEb-hvhgNd-k77Iif-i3jM8c">
                <div class="VIpgJd-yAWNEb-hvhgNd-IuizWc" dir="ltr">Original text</div>
                <div id="goog-gt-original-text" class="VIpgJd-yAWNEb-nVMfcd-fmcmS VIpgJd-yAWNEb-hvhgNd-axAV1"></div>
            </div>
            <div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid ltr">
                <div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid-B7I4Od ltr" dir="ltr">
                    <div class="VIpgJd-yAWNEb-hvhgNd-UTujCb">Rate this translation</div>
                    <div class="VIpgJd-yAWNEb-hvhgNd-eO9mKe">Your feedback will be used to help improve Google Translate
                    </div>
                </div>
                <div class="VIpgJd-yAWNEb-hvhgNd-xgov5 ltr"><button id="goog-gt-thumbUpButton" type="button"
                        class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Good translation" aria-label="Good translation"
                        aria-pressed="false"><span id="goog-gt-thumbUpIcon"><svg width="24" height="24"
                                viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                                <path
                                    d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7H2v13h16c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM7 18H4V9h3v9zm14-7l-3 7H9V8l4.34-4.34L12 9h9v2z">
                                </path>
                            </svg></span><span id="goog-gt-thumbUpIconFilled"><svg width="24" height="24"
                                viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                                <path
                                    d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7v13h11c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM5 7H1v13h4V7z">
                                </path>
                            </svg></span></button><button id="goog-gt-thumbDownButton" type="button"
                        class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Poor translation" aria-label="Poor translation"
                        aria-pressed="false"><span id="goog-gt-thumbDownIcon"><svg width="24" height="24"
                                viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                                <path
                                    d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7h5V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zM17 6h3v9h-3V6zM3 13l3-7h9v10l-4.34 4.34L12 15H3v-2z">
                                </path>
                            </svg></span><span id="goog-gt-thumbDownIconFilled"><svg width="24" height="24"
                                viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                                <path
                                    d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zm16 0h4V4h-4v13z">
                                </path>
                            </svg></span></button></div>
            </div>
            <div id="goog-gt-votingHiddenPane" class="VIpgJd-yAWNEb-hvhgNd-aXYTce">
                <form id="goog-gt-votingForm" action="//translate.googleapis.com/translate_voting?client=te"
                    method="post" target="votingFrame" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><input type="text" name="sl"
                        id="goog-gt-votingInputSrcLang"><input type="text" name="tl"
                        id="goog-gt-votingInputTrgLang"><input type="text" name="query"
                        id="goog-gt-votingInputSrcText"><input type="text" name="gtrans"
                        id="goog-gt-votingInputTrgText"><input type="text" name="vote" id="goog-gt-votingInputVote">
                </form><iframe name="votingFrame" frameborder="0"></iframe>
            </div>
        </div>
    </div>


    <div id="goog-gt-tt" class="VIpgJd-yAWNEb-L7lbkb skiptranslate"
        style="border-radius: 12px; margin: 0 0 0 -23px; padding: 0; font-family: 'Google Sans', Arial, sans-serif;"
        data-id="">
        <div id="goog-gt-vt" class="VIpgJd-yAWNEb-hvhgNd">
            <div class=" VIpgJd-yAWNEb-hvhgNd-l4eHX-i3jM8c"><img
                    src="https://fonts.gstatic.com/s/i/productlogos/translate/v14/24px.svg" width="24" height="24"
                    alt=""></div>
            <div class=" VIpgJd-yAWNEb-hvhgNd-k77Iif-i3jM8c">
                <div class="VIpgJd-yAWNEb-hvhgNd-IuizWc" dir="ltr">Original text</div>
                <div id="goog-gt-original-text" class="VIpgJd-yAWNEb-nVMfcd-fmcmS VIpgJd-yAWNEb-hvhgNd-axAV1"></div>
            </div>
            <div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid ltr">
                <div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid-B7I4Od ltr" dir="ltr">
                    <div class="VIpgJd-yAWNEb-hvhgNd-UTujCb">Rate this translation</div>
                    <div class="VIpgJd-yAWNEb-hvhgNd-eO9mKe">Your feedback will be used to help improve Google Translate
                    </div>
                </div>
                <div class="VIpgJd-yAWNEb-hvhgNd-xgov5 ltr"><button id="goog-gt-thumbUpButton" type="button"
                        class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Good translation" aria-label="Good translation"
                        aria-pressed="false"><span id="goog-gt-thumbUpIcon"><svg width="24" height="24"
                                viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                                <path
                                    d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7H2v13h16c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM7 18H4V9h3v9zm14-7l-3 7H9V8l4.34-4.34L12 9h9v2z">
                                </path>
                            </svg></span><span id="goog-gt-thumbUpIconFilled"><svg width="24" height="24"
                                viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                                <path
                                    d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7v13h11c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM5 7H1v13h4V7z">
                                </path>
                            </svg></span></button><button id="goog-gt-thumbDownButton" type="button"
                        class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Poor translation" aria-label="Poor translation"
                        aria-pressed="false"><span id="goog-gt-thumbDownIcon"><svg width="24" height="24"
                                viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                                <path
                                    d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7h5V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zM17 6h3v9h-3V6zM3 13l3-7h9v10l-4.34 4.34L12 15H3v-2z">
                                </path>
                            </svg></span><span id="goog-gt-thumbDownIconFilled"><svg width="24" height="24"
                                viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                                <path
                                    d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zm16 0h4V4h-4v13z">
                                </path>
                            </svg></span></button></div>
            </div>
            <div id="goog-gt-votingHiddenPane" class="VIpgJd-yAWNEb-hvhgNd-aXYTce">
                <form id="goog-gt-votingForm" action="//translate.googleapis.com/translate_voting?client=te_lib"
                    method="post" target="votingFrame" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><input type="text" name="sl"
                        id="goog-gt-votingInputSrcLang"><input type="text" name="tl"
                        id="goog-gt-votingInputTrgLang"><input type="text" name="query"
                        id="goog-gt-votingInputSrcText"><input type="text" name="gtrans"
                        id="goog-gt-votingInputTrgText"><input type="text" name="vote" id="goog-gt-votingInputVote">
                </form><iframe name="votingFrame" frameborder="0"></iframe>
            </div>
        </div>
    </div>
    <div class="VIpgJd-ZVi9od-aZ2wEe-wOHMyf">
        <div class="VIpgJd-ZVi9od-aZ2wEe-OiiCO"><svg xmlns="http://www.w3.org/2000/svg" class="VIpgJd-ZVi9od-aZ2wEe"
                width="96px" height="96px" viewBox="0 0 66 66">
                <circle class="VIpgJd-ZVi9od-aZ2wEe-Jt5cK" fill="none" stroke-width="6" stroke-linecap="round" cx="33"
                    cy="33" r="30"></circle>
            </svg></div>
    </div>
</body>

</html>