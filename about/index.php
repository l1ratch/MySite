<?php

// https://www.php.net/manual/en/timezones.php
date_default_timezone_set('Europe/Berlin');

// General configuration
$sitename = 'l1ratch | Projects';
$domain = 'https://l1ratch.ru/projects';
$logo = '/img/logo.png';

// Social media links
$socialMedia = array(
    array(
        'icon' => '<i class="fab fa-discord"></i>',
        'url' => 'https://discord.com/users/681877886172659877'
    ),
    array(
        'icon' => '<i class="fab fa-instagram"></i>',
        'url' => 'https://www.instagram.com/dxve.b'
    ),
    array(
        'icon' => '<i class="fab fa-tiktok"></i>',
        'url' => 'https://www.tiktok.com/@dxve.tiktok'
    ),
    array(
        'icon' => '<i class="fab fa-youtube"></i>',
        'url' => 'https://www.youtube.com/c/DxveDE'
    ),
    array(
        'icon' => '<i class="fab fa-twitter"></i>',
        'url' => 'https://twitter.com/@dxve_b'
    ),
    array(
        'icon' => '<i class="fab fa-facebook"></i>',
        'url' => 'https://www.facebook.com/dxve.bomke/'
    ),
    array(
        'icon' => '<i class="fab fa-github"></i>',
        'url' => 'https://github.com/DxveDE'
    ),
    array(
        'icon' => '<i class="fab fa-whatsapp"></i>',
        'url' => 'https://wa.me/+4915251838855'
    ),
    array(
        'icon' => '<i class="fas fa-envelope"></i>',
        'url' => 'mailto:kontakt@dxve.de'
    )
);

// Color settings
$titleColor = '#FF7F7F'; // Color of the titles
$titleHoverColor = '#7F3F3F'; // Color of the title on hovering
$textColor = '#C0C0C0'; // Color of texts
$secondaryColor = '#FF0000'; // Secondary color for forwarding and other
$secondaryHoverColor = '#880000'; // Secondary color for forwarding and other on hovering

$backgroundColor = '#13161B'; // Page background color
$backgroundContentColor = '#242936'; // Background color of text rows
$backgroundIconColor = '#242936'; // Icon background color
$backgroundFooterColor = '#242936'; // Footer background color
$boxShadow = '#000000';

{
    /**
     * Only for preview
     * Can be deleted on own server
     */
    if(isset($_GET['titleColor'])) {
        $titleColor = '#' . $_GET['titleColor'];
    }
    if(isset($_GET['titleHoverColor'])) {
        $titleHoverColor = '#' . $_GET['titleHoverColor'];
    }
    if(isset($_GET['textColor'])) {
        $textColor = '#' . $_GET['textColor'];
    }
    if(isset($_GET['secondaryColor'])) {
        $secondaryColor = '#' . $_GET['secondaryColor'];
    }
    if(isset($_GET['secondaryHoverColor'])) {
        $secondaryHoverColor = '#' . $_GET['secondaryHoverColor'];
    }
    if(isset($_GET['backgroundColor'])) {
        $backgroundColor = '#' . $_GET['backgroundColor'];
    }
    if(isset($_GET['backgroundContentColor'])) {
        $backgroundContentColor = '#' . $_GET['backgroundContentColor'];
    }
    if(isset($_GET['backgroundIconColor'])) {
        $backgroundIconColor = '#' . $_GET['backgroundIconColor'];
    }
    if(isset($_GET['backgroundColor'])) {
        $backgroundColor = '#' . $_GET['backgroundColor'];
    }
    if(isset($_GET['backgroundFooterColor'])) {
        $backgroundFooterColor = '#' . $_GET['backgroundFooterColor'];
    }
    if(isset($_GET['boxShadow'])) {
        $boxShadow = '#' . $_GET['boxShadow'];
    }
    // Example link: {YOURLINK}?titleColor=FF7F7F&titleHoverColor=7F3F3F&textColor=C0C0C0&secondaryColor=FF0000&secondaryHoverColor=880000&backgroundColor=13161B&backgroundContentColor=242936&backgroundIconColor=242936&backgroundFooterColor=242936&boxShadow=000000
}


?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        
        <title><?= $sitename ?></title>
        <meta content="My Projects" name="description">
        <meta content="l1ratch, project, projects, Link_play" name="keywords">

        <!-- Favicons -->
        <link href="<?= $logo ?>" rel="icon">
        <link href="<?= $logo ?>" rel="apple-touch-icon">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

        <!-- Icon packs | Get icons: https://fontawesome.com/v5/search?o=r&m=free -->
        <script src="https://kit.fontawesome.com/4008ae7d9b.js" crossorigin="anonymous"></script>
        

        <!-- Scripts -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- CSS Style -->
        <style>
            /*--------------------------------------------------------------
            # General
            --------------------------------------------------------------*/
            body {
                font-family: "Open Sans", sans-serif;
                color: <?= $textColor?>;
                background: <?= $backgroundColor?>;
            }

            a {
                transition: 0.3s;
                color: <?= $secondaryColor?>;
                text-decoration: none;
            }

            a:hover {
                transition: 0.3s;
                color: <?= $secondaryHoverColor?>;
                text-decoration: none;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            .font-primary {
                font-family: "Raleway", sans-serif;
            }

            /* Use <hr> between the sections */
            hr {
                margin: 30px 14% 30px 14%;
            }


            /*--------------------------------------------------------------
            # Sections General
            --------------------------------------------------------------*/
            section {
                padding: 60px 0;
                overflow: hidden;
            }

            .section-title {
                text-align: center;
                padding-bottom: 30px;
            }

            .section-title h2 {
                font-size: 32px;
                font-weight: 600;
                margin-bottom: 20px;
                padding-bottom: 0;
                transition: 0.3s;
                color: <?= $titleColor?>;
            }
            .section-title h2:hover {
                transition: 0.3s;
                color: <?= $titleHoverColor?>;
            }

            .section-title p {
                margin-bottom: 0;
            }

            /*--------------------------------------------------------------
            # About Us
            --------------------------------------------------------------*/
            .about {
                padding-bottom: 30px;
            }
            .about-row {
                background-color: <?= $backgroundContentColor?>;
            }

            .about .container {
                box-shadow: 0 5px 25px 0 <?= $backgroundContentColor?>AA;
            }

            .about .section-title p {
                text-align: left;
                font-style: italic;
                color: <?= $textColor?>;
            }

            .about .about-content {
                padding: 40px;
            }

            .about .icon-box+.icon-box {
                margin-top: 40px;
            }

            .about .icon-box .icon {
                transition: 0.3s;
                float: left;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 72px;
                height: 72px;
                background: <?= $backgroundIconColor?>;
                border-radius: 6px;
            }

            .about .icon-box .icon i {
                transition: 0.3s;
                color: <?= $secondaryColor?>;
                font-size: 32px;
                padding-top: 1px;
            }

            .about .icon-box:hover .icon i {
                transition: 0.3s;
                color: <?= $secondaryHoverColor?>;
            }

            .about .icon-box .title {
                margin-left: 95px;
                font-weight: 700;
                margin-bottom: 10px;
                font-size: 18px;
                text-transform: uppercase;
            }

            .about .icon-box .title a {
                transition: 0.3s;
                color: <?= $secondaryColor?>;
            }

            .about .icon-box .title a:hover {
                transition: 0.3s;
                color: <?= $secondaryHoverColor?>;
            }
            .about .avatar-box {
                position: relative;
            }


            @keyframes pulsate-btn {
                0% {
                    transform: scale(0.6, 0.6);
                    opacity: 1;
                }

                100% {
                    transform: scale(1, 1);
                    opacity: 0;
                }
            }

            /*--------------------------------------------------------------
            # pointsSection
            --------------------------------------------------------------*/
            .pointsSection {
                padding-bottom: 30px;
            }

            .pointsSection .icon-box {
                margin-bottom: 20px;
                text-align: center;
            }

            .pointsSection .icon {
                transition: 0.3s;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: 80px;
                height: 80px;
                margin-bottom: 20px;
                background: <?= $backgroundIconColor?>;
                border-radius: 50%;
                color: <?= $secondaryColor?>;
                box-shadow: 0px 0 25px rgba(0, 0, 0, 0.15);
                overflow: hidden;
            }

            .pointsSection .icon i {
                font-size: 36px;
                line-height: 0;
                padding-top: 1px;
            }

            .pointsSection .icon i:hover {
                transition: 0.3s;
                color: <?= $secondaryHoverColor?>;
                font-size: 36px;
                line-height: 0;
                padding-top: 1px;
            }

            .pointsSection .icon-box:hover .icon {
                transition: 0.3s;
                box-shadow: 0px 0 25px <?= $backgroundContentColor?>AA;
                color: <?= $secondaryHoverColor?>;
            }

            .pointsSection .title {
                font-weight: 600;
                margin-bottom: 15px;
                font-size: 18px;
                position: relative;
                padding-bottom: 15px;
            }

            .pointsSection .title a {
                transition: 0.3s;
                color: <?= $textColor?>;
            }

            .pointsSection .title a:hover {
                transition: 0.3s;
                color: <?= $secondaryHoverColor?>;
            }

            .pointsSection .title::after {
                content: "";
                position: absolute;
                display: block;
                width: 50px;
                height: 2px;
                background: <?= $secondaryColor?>;
                bottom: 0;
                left: calc(50% - 25px);
            }

            .pointsSection .description {
                line-height: 24px;
                font-size: 14px;
            }

            /*--------------------------------------------------------------
            # My projects
            --------------------------------------------------------------*/
            .projects {
                background: <?= $backgroundColor?>;
                padding: 60px 0 30px 0;
            }

            .projects .member {
                text-align: center;
                margin-bottom: 80px;
                position: relative;
            }

            .projects .member .pic {
                border-radius: 4px;
                overflow: hidden;
            }

            .projects .member img {
                width: 100%;
                transition: all ease-in-out 0.4s;
                border-radius: 50%;
            }

            .projects .member .member-info {
                position: absolute;
                bottom: -80px;
                left: 20px;
                right: 20px;
                background: <?= $backgroundContentColor?>DD;
                padding: 15px 0;
                border-radius: 4px;
            }

            .projects .member h4 {
                font-weight: 700;
                margin-bottom: 10px;
                font-size: 16px;
                color: <?= $titleColor?>;
                position: relative;
                padding-bottom: 10px;
            }

            .projects .member h4::after {
                content: "";
                position: absolute;
                display: block;
                width: 50px;
                height: 1px;
                transition: 0.3s;
                background: <?= $titleHoverColor?>;
                bottom: 0;
                left: calc(50% - 25px);
            }

            .projects .member span {
                font-style: italic;
                display: block;
                font-size: 13px;
                color: <?= $textColor?>;
            }

            .projects .member .social {
                margin-top: 15px;
            }

            .projects .member .social i {
                font-size: 16px;
                margin: 0 2px;
            }

            @media (max-width: 992px) {
                .projects .member {
                    margin-bottom: 100px;
                }
            }

            #footer {
                background: <?= $backgroundFooterColor?>;
                padding: 0 0 30px 0;
                color: <?= $textColor?>;
                font-size: 14px;
            }

            .social-links a {
                font-size: 18px;
                display: inline-block;
                background: <?= $backgroundColor?>;
                color: <?= $secondaryColor?>;
                line-height: 1;
                padding: 8px 0;
                margin-right: 4px;
                border-radius: 50%;
                text-align: center;
                width: 36px;
                height: 36px;
                transition: 0.3s;
            }

            .social-links a:hover {
                background: <?= $backgroundContentColor?>;
                color: <?= $secondaryHoverColor?>;
                text-decoration: none;
                transition: 0.3s;
            }

            #footer .copyright {
                text-align: center;
                padding-top: 30px;
            }

            #footer .credits {
                padding-top: 10px;
                text-align: center;
                font-size: 13px;
                color: <?= $textColor?>;
            }
            /*--------------------------------------------------------------
            # Content
            --------------------------------------------------------------*/
            .content-box h4 {
                padding: 0 0 0 60px;
                font-size: 22px;
                font-weight: 600;
                margin-bottom: 5px;
            }
            .content-box p {
                margin-bottom: 20px;
                font-size: 14px;
                padding: 15px 4rem 0 4rem;
            }
            .content-box hr {
                margin: 30px 25% 30px 25%;
            }
            .content-box .img-box {
                text-align: center;
                margin: 50px 0;
            }
            .content-box .img-box img, .content-box img {
                max-width: 85%;
                border-radius: 25px;
                box-shadow: 0px 0 25px <?= $boxShadow ?>;
                justify-content: center;
            }
        </style>

    </head>

    <body>
        <main id="main">

            
            <!-- Social media | Delete -->   

            <!-- My Projects | start -->
            <section id="projects" class="projects" style="padding-bottom: 50px;">
                <div class="container">
                    
                    <!-- Title of section | start -->
                    <div class="section-title">
                        <h2>My projects</h2>
                        <p>Here you can find my projects.</p>
                    </div>
                    <!-- Title of section | end -->

                    <div class="row" style="justify-content: center;">

                        <!-- My Projects card | start -->
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="member">
                                <div class="pic">
                                    <img src="<?= $logo ?>" class="img-fluid" alt="">
                                </div>
                                <div class="member-info">
                                    <a href="https://discord.gg/3BCNjgT7MS" target="_blank"><h4>Dxve's Egge</h4></a>
                                    <span>Discord Community Server</span>
                                    <div class="social">
                                        <a href="https://discord.gg/3BCNjgT7MS"><i class="fab fa-discord"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- My Projects card | end -->

                        <!-- My Projects card | start -->
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="member">
                                <div class="pic">
                                    <img src="https://cdn.upload-host.de/1/540167-d0e02d.png" class="img-fluid" alt="">
                                </div>
                                <div class="member-info">
                                    <a href="https://upload-host.de/" target="_blank"><h4>UPLOAD-HOST.DE</h4></a>
                                    <span>Upload service for file uploads</span>
                                    <div class="social">
                                        <a href="https://upload-host.de" target="_blank"><i class="fas fa-globe"></i></a>
                                        <a href="https://discord.gg/fcu6SXTdzp"><i class="fab fa-discord"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- My Projects card | end -->

                    </div>
                </div>
            </section>
            <!-- My Projects | end -->
        </main>

        
        <!-- Footer | start -->
        <footer id="footer">
            <div class="container">
                <!-- Social media | start -->
                <div class="social-links text-center" style="padding-top: 20px;">
                    <?php
                    foreach ($socialMedia as $list) {
                        echo '<a href="' . $list['url'] . '" target="_blank">' . $list['icon'] . '</a>';
                    }
                    ?>
                </div>
                <!-- Social media | end -->

                <div class="copyright">&copy;Copyright <strong>l1ratch</strong>. All Rights Reserved</div>
                <div class="credits">Template by DxveDE</div>
            </div>
        </footer>
        <!-- Footer | end -->
    </body>
</html>

<!--

    Template by DxveDE
      Create by l1ratch
    
-->
