<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YFFR844H2N"></script>
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
    <title>Case Study | MEDIALSO</title>
    <meta name="description"
        content="Medialso web design and digital marketing cases. We offer full-service growth solutions to ensure your business reaches its full potential. " />
    <link rel="canonical" href="https://medialso.com/medialso-portfolio.html" />
    <link rel="icon" href="assets/favicon.jpg" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


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
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img loading="lazy" src="assets/Medialso-logo.png" alt="Medialso-logo"
                    class="logo"></a>
            <div class="d-flex align-items-center">
                <!-- Language dropdown for mobile view -->
                <div class="mobile-language-dropdown d-lg-none">
                    <div class="d-flex align-items-center">
                        <a class="nav-link" href="/zh/medialso-portfolio/">
                            <img src="https://flagcdn.com/w20/cn.png" alt="Chinese">
                        </a>
                        <a class="nav-link" href="/es/medialso-portfolio/">
                            <img src="https://flagcdn.com/w20/es.png" alt="Spanish">
                        </a>
                        <a class="nav-link" href="" onclick="translatePage('en')">
                            <img src="https://flagcdn.com/w20/us.png" alt="English">
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
            <div class="collapse navbar-collapse custom-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-center" style="font-size: larger;">
                    <li class="nav-item dropdown" style="width: 150px; margin-top: 10px; text-align: left;">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown1" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <a class="dropdown-item" href="/digital-marketing-services-dubai.html">Digital
                                Marketing</a>
                            <a class="dropdown-item" href="/digital-marketing-consultancy.html">Digital Marketing
                                Consulting</a>
                            <a class="dropdown-item" href="/digital-marketing-strategy-dubai.html">Digital Marketing
                                Strategy
                                Creation</a>
                            <a class="dropdown-item" href="/website-design-development-services.html">Website Design &
                                Development</a>
                            <a class="dropdown-item" href="/social-media-agency-dubai.html">Social
                                Media</a>
                            <a class="dropdown-item" href="/branding-agency-dubai.html">Branding</a>
                            <a class="dropdown-item" href="/email-marketing.html">Email
                                Marketing</a>
                            <a class="dropdown-item" href="/seo-company-dubai.html">SEO</a>
                            <a class="dropdown-item" href="/video-production-services.html">
                                Video Production</a>
                            <a class="dropdown-item" href="/photography-production-services.html">
                                Photography Production</a>
                            <a class="dropdown-item" href="/pay-per-click-advertising.html">Pay Per
                                Click</a>
                            <a class="dropdown-item" href="/ai-ads-generation.html">AI Ads
                                Generation</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown" style=" margin-top: 10px; margin-left: 10px; text-align: left;">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown2" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Industries
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="/b2b-marketing-agency.html">B2B
                                Marketing</a>
                            <a class="dropdown-item"
                                href="/education-marketing-services-schools-universities.html">Education</a>
                            <a class="dropdown-item" href="/automotive-marketing-services.html">Automotive</a>
                            <a class="dropdown-item" href="/healthcare-marketing-services.html">Healthcare</a>
                            <a class="dropdown-item"
                                href="/hotel-tourism-hospitality-marketing-services.html">Hospitality</a>
                            <a class="dropdown-item" href="/real-estate-marketing.html">Real
                                Estate</a>
                            <a class="dropdown-item" href="/ecommerce-marketing-services.html">E-Commerce</a>
                        </div>
                    </li>
                    <li class="nav-item" style="width: 200px; margin-top: 10px; margin-left: 10px; text-align: left;">
                        <a class="nav-link" href="/medialso-portfolio.html" style="margin-right: 0px;">Case Studies</a>
                    </li>
                    <li class="nav-item dropdown" style="width: 150px;  margin-top: 10px; text-align: left;">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown3" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pricing
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="/pricing/social-media-management-pricing.php">Social Media
                                Management</a>
                            <a class="dropdown-item" href="/pricing/branding-pricing.php">Branding</a>
                            <a class="dropdown-item" href="/pricing/web-development-and-design-pricing.php">Website
                                Design
                                and Development</a>
                            <a class="dropdown-item" href="/pricing/seo-pricing.php">SEO</a>

                            <a class="dropdown-item" href="/pricing/digital-strategy-pricing.php">Digital
                                Strategy</a>
                            <a class="dropdown-item" href="/pricing/production-pricing.php">Production</a>
                            <a class="dropdown-item" href="/pricing/ai-generated-contents-pricing.php">AI
                                Generated Contents</a>
                            <a class="dropdown-item" href="/pricing/pay-per-click-pricing.php">PPC</a>
                            <a class="dropdown-item" href="/pricing/other-pricing.php">Others</a>
                        </div>
                    </li>
                    <li class="nav-item" style="width: 150px; margin-top: 10px; text-align: left;">
                        <a class="nav-link" href="/about-us.html">About Us</a>
                    </li>
                    <li class="nav-item" style="width: 80px; margin-top: 10px; text-align: left;">
                        <a class="nav-link" href="/blog.html">Blog</a>
                    </li>
                    <li class="nav-item dropdown d-none d-lg-block"
                        style="width: 150px; margin-top: 10px; text-align: left;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Language
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="/zh/medialso-portfolio/"
                                style="display: flex; justify-content: space-between; align-items: center;">Chinese<span
                                    style="margin-left: 10px;"><img src="https://flagcdn.com/w20/cn.png"
                                        alt="Chinese"></span></a>
                            <a class="dropdown-item" href="/es/medialso-portfolio/"
                                style="display: flex; justify-content: space-between; align-items: center;">Spanish<span
                                    style="margin-left: 10px;"><img src="https://flagcdn.com/w20/es.png"
                                        alt="Spanish"></span></a>
                            <a class="dropdown-item" href="" onclick="translatePage('en')"
                                style="display: flex; justify-content: space-between; align-items: center;">English<span
                                    style="margin-left: 10px;"><img src="https://flagcdn.com/w20/us.png"
                                        alt="English"></span></a>
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
                            <a href="/contact-us.php" class="btn view-work-btn mt-3 speak-to-us-btn"
                                style="font-size: large;">Speak To
                                Us</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <section class="main-section">
        <div class="container">
            <h1 class="main-title text-center mt-1 ">Are you interested in seeing <br>examples of what we can do for
                you?
            </h1>
            <p class="main-description ">
                At Medialso, we possess the expertise and knowledge to design, develop, and execute projects that
                elevate your brand. Our team of dedicated strategists stays ahead of design trends and leverages the
                latest technologies to help our clients achieve their lead generation and conversion goals.
            </p>
            <p class="main-description ">
                With over 300 active clients worldwide, it's impossible to showcase all our work here, but we've
                included a few samples to demonstrate our capabilities.
            </p>
            <p class="main-description" style="font-weight: bold;">
                Feel free to reach out if you would like to see more.
            </p>



        </div>
        <div class="container1 card-container mt-5">
            <div class="card">
                <a href="tasty-bites.html"><img loading="lazy" src="assets/tastybites.webp" alt="Burger King"></a>
                <h3>Within two months, Tasty Bites grew from 0 to 50,000 followers on social media platforms.</h3>
            </div>
            <div class="card">
                <a href="cooking.html"><img loading="lazy" src="assets/cooking.webp" alt="OVHCloud"></a>
                <h3>Increased social media followers by 50%. Improved engagement rates on social media by 45%.</h3>
            </div>
            <div class="card">
                <a href="pawsitivity.html"><img loading="lazy" src="assets/pawsitivity.webp" alt="Rebus"></a>
                <h3>Increased followers from 1,000 to 30,000 in three months. Adoptions increased by 50% within the
                    first quarter.</h3>
            </div>
        </div>
        <div class="container1 card-container mt-5">
            <div class="card">
                <a href="futbol.html"><img loading="lazy" src="assets/futbol-frenzy-logo.webp" alt="Burger King"></a>
                <h3>Increased the number of downloads by 50%. Player engagement and in-game activity increased by 40%.
                </h3>
            </div>
            <div class="card">
                <a href="battlezone.html"><img loading="lazy" src="assets/battlezone.webp" alt="OVHCloud"></a>
                <h3>Increased social media followers by 60%. Achieved a 25% increase in monthly sales.</h3>
            </div>
            <div class="card">
                <a href="hidden-place.html"><img loading="lazy" src="assets/hiddenplace.webp" alt="Rebus"></a>
                <h3>Website engagement metrics improved by 50%. Sales increased by 40% over six months.</h3>
            </div>
        </div>
        <div class="container1 card-container mt-5">
            <div class="card">
                <a href="forest-survivor.html"><img loading="lazy" src="assets/forest-survivor.webp"
                        alt="Burger King"></a>
                <h3>Website traffic increased by 50%, leading to higher engagement. Social media followers increased by
                    40%.</h3>
            </div>
            <div class="card">
                <a href="veggie-delight.html"><img loading="lazy" src="assets/veggie-delight.webp" alt="OVHCloud"></a>
                <h3>Social media followers increased by 35%, with significant engagement from non-vegans.</h3>
            </div>
            <div class="card">
                <a href="movie-spot.html"><img loading="lazy" src="assets/movie-spot.webp" alt="Rebus"></a>
                <h3>Increased theater attendance by 30%. Social media followers grew by 50%.</h3>
            </div>
        </div>


    </section>
    <!-- Testimonial Start -->
    <div class="container mt-5">
        <h2>What <span style="color: #6C63FF;">People </span> Are Saying ?</h2>
        <div class="container-xxl mt-5 test">
            <div class="carousel">
                <div class="testimonial-card">
                    <img loading="lazy" src="assets/client1.png" alt="Client 1">
                    <p>"DRT Medialso's marketing strategy for Acne-Aid has been outstanding. Their focus on key
                        messaging—3 times oil control and 12-hour efficacy—boosted our brand’s appeal. The influencer
                        management, commercial videos, and integrated campaign significantly increased brand awareness
                        and customer engagement. Their dedication and creativity made a tremendous difference. Highly
                        recommended!"</p>
                    <span class="read-more">Read More</span>
                    <h3>Acne-Aid</h3>
                </div>
                <div class="testimonial-card">
                    <img loading="lazy" src="assets/Client2.png" alt="Client 2">
                    <p>Medialso did an exceptional job for Anakku Malaysia. Their expertise in updating our website's
                        UI/UX greatly improved user experience. Their branding and communication strategy for our new
                        liquid cleanser launch was outstanding, driving impressive social media engagement and
                        visibility. We highly recommend DRT Medialso for their professionalism, creativity, and
                        dedication to excellence.</p>
                    <span class="read-more">Read More</span>
                    <h3>Anakku Malaysia</h3>
                </div>
                <div class="testimonial-card">
                    <img loading="lazy" src="assets/Client3.png" alt="Client 3">
                    <p>Working with DRT Medialso has transformed ADDA Thailand. Their expertise in website management
                        improved our online presence, making our site user-friendly and visually appealing. Their
                        innovative social media marketing greatly enhanced our engagement and reach, resulting in
                        increased brand awareness and customer interaction. Highly recommended for exceptional service
                        and impactful results.</p>
                    <span class="read-more">Read More</span>
                    <h3>ADDA Thailand</h3>
                </div>
                <div class="testimonial-card">
                    <img loading="lazy" src="assets/client4.jpg" alt="Client 4">
                    <p>Partnering with DRT Medialso has been a game-changer for Angkas. Their Jester brand archetype
                        communication strategy resonated with our target audience and attracted a broader one. Their
                        creativity and strategic thinking significantly boosted our brand awareness and online
                        visibility, leading to remarkable growth in engagement. Highly recommended for their innovative
                        and impactful approach.</p>
                    <span class="read-more">Read More</span>
                    <h3>Angkas</h3>
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
                                <p class="fs-5 fw-medium">Get A Quote</p>
                                <h2 class="display-5 mb-4" style="font-size: 2.5rem;">Need Our Expert <br>Help? We're
                                    Here!</h2>
                                <p>Ready to transform your digital presence and achieve remarkable results? Contact us
                                    today to schedule a consultation and discover how our expert team can help your
                                    business thrive in Dubai's competitive market.</p>
                                <div class="d-inline-flex">
                                    <a class="d-inline-flex align-items-center rounded  border p-1"
                                        style="color: white; width: 200px; ">
                                        <span class="align-items-center"><i class="fa fa-phone-alt"></i> +971 04 297
                                            7303</span>
                                    </a>
                                    <a href="query.php" class="btn view-work-btn mt-1"
                                        style="font-size: large; margin-left: 10px;">SEND ENQUIRY</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 wow fadeInUp text-center mt-4" data-wow-delay="0.5s">
                                <img loading="lazy" src="assets/enquiry.webp" alt="Enquiry Image"
                                    class="img-fluid enquiry" style="max-width: 100%; height: auto;">
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
                    <h5>Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="digital-marketing-services-dubai.html">Digital Marketing</a></li>
                        <li><a href="digital-marketing-consultancy.html">Digital Marketing Consulting</a></li>
                        <li><a href="digital-marketing-strategy-dubai.html">Digital Marketing Strategy Creation</a>
                        </li>
                        <li><a href="website-design-development-services.html">Website Design and Development</a></li>
                        <li><a href="social-media-agency-dubai.html">Social Media</a></li>
                        <li><a href="branding-agency-dubai.html">Branding</a></li>
                        <li><a href="email-marketing.html">Email Marketing</a></li>
                        <li><a href="seo-company-dubai.html">SEO</a></li>
                        <li><a href="video-production-services.html">
                                Video Production</a></li>
                        <li><a href="photography-production-services.html">
                                Photography Production</a></li>
                        <li><a href="pay-per-click-advertising.html">Pay
                                Per
                                Click</a></li>
                        <li><a href="ai-ads-generation.html">AI Ads Generation</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-6 mb-4">
                    <h5>Industries</h5>
                    <ul class="list-unstyled">
                        <li><a href="b2b-marketing-agency.html">B2B Marketing</a></li>
                        <li><a href="education-marketing-services-schools-universities.html">Education</a></li>
                        <li><a href="automotive-marketing-services.html">Automotive</a>
                        </li>
                        <li><a href="healthcare-marketing-services.html">Healthcare</a></li>
                        <li><a href="hotel-tourism-hospitality-marketing-services.html">Hospitality</a></li>
                        <li><a href="real-estate-marketing.html">Real Estate</a></li>
                        <li><a href="ecommerce-marketing-services.html">E-Commerce</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-6 mb-4">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li><a href="about-us.html">About us</a></li>
                        <li><a href="medialso-portfolio.html">Case Studies</a></li>


                        <li><a href="blog.html">Blog</a></li>

                        <li><a href="contact-us.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled" style="color: #fff;">
                        <li>Sales</li>
                        <li>web@drtseagull.com <br>+971 04 297 7303</li>

                        <li>Address</li>
                        <li>3401-3404, Single Business tower HO, Business Bay, PO BOX 554566, Dubai UAE</li>

                    </ul>

                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center text-md-left">
                    <h5>Follow Us</h5>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/drtmedialso/"><i class='bx bxl-facebook-square'></i></a>
                        <a href="https://www.tiktok.com/@drtmedialso"><i class='bx bxl-tiktok'></i></a>
                        <a href="https://x.com/DrtMedialso" id="home"><img loading="lazy" class="image_on"
                                src="assets/Twitter.webp" alt="Twitter" style="width: 19px;" /><img loading="lazy"
                                class="image_off" src="assets/twitter_color.webp" alt="Twitter"
                                style="width: 19px;" /></a>

                        <a href="https://www.linkedin.com/company/drt-medialso/"><i
                                class='bx bxl-linkedin-square'></i></a>
                        <a href="https://www.instagram.com/drtmedialso"><i class='bx bxl-instagram-alt'></i></a>

                    </div>
                </div>
            </div>
            <hr>

            <hr>
            <div class="row">
                <div class="col text-center">
                    <p style="color: #bdbdbd;">&copy; 2024 Medialso. All rights reserved. <a href="#">Privacy
                            Policy</a> | <a href="#">Terms &
                            Conditions</a> | <a href="https://www.drt-seagull.com/">Seagull DRT</a></p>
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
</body>

</html>