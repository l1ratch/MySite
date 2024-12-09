<?php

// https://www.php.net/manual/en/timezones.php
date_default_timezone_set('Europe/Berlin');

// Конфигурация
$sitename = 'l1ratch';
$domain = 'https://l1ratch.ru';
$logo = 'img/logo.png';

// Блок ссылок
// https://fontawesome.com/v5/search?m=free
$linktree = array(
    array(
        'displayName' => 'About me',
        'icon' => '<i class="fas fa-globe"></i>',
        'url' => '/error/nosite'
    ),
    array(
        'displayName' => 'Projects',
        'icon' => '<i class="fas fa-arrow-circle-down"></i>',
        'url' => '/project'
    ),
    array(
        'displayName' => 'Downloads',
        'icon' => '<i class="fab fa-github"></i>',
        'url' => '/download'
    )
);

// Блок соц сетей
$socialMedia = array(
    array(
        'icon' => '<i class="fab fa-github"></i>',
        'url' => 'https://github.com/l1ratch'
    ),
    array(
        'icon' => '<i class="fab fa-discord"></i>',
        'url' => 'https://discord.com/'
    ),
    array(
        'icon' => '<i class="fab fa-youtube"></i>',
        'url' => 'https://www.youtube.com/'
    ),
    array(
        'icon' => '<i class="fab fa-github"></i>',
        'url' => 'https://vk.com'
    ),
    array(
        'icon' => '<i class="fab fa-github"></i>',
        'url' => 'https://tg.me'
    ),
    array(
        'icon' => '<i class="fab fa-github"></i>',
        'url' => 'https://github.com/'
    )
);

// Настройка цветов
$titleColor = '#ff8f00'; // Color of the titles
$titleHoverColor = '#89f400'; // Color of the title on hovering
$textColor = '#C0C0C0'; // Color of texts
$secondaryColor = '#ff8f00'; // Secondary color for forwarding and other
$secondaryHoverColor = '#00d89f'; // Secondary color for forwarding and other on hovering

$backgroundColor = '#13161B'; // Page background color (background image overrides this, if it's set)
$buttonColor = '#242936'; // Page background color
$buttonShadowColor = '#353535'; // Icon background color
$backgroundImage = 'img/bg1.jpg'; // Page background image (overrides background color); No image: "NONE"


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        
        <title><?= $sitename ?> | LinkTree</title>
        <meta content="l1ratch (Link_play)" name="description">
        <meta content="website by l1ratch" name="keywords">

        <!-- Favicons -->
        <link href="<?= $logo ?>" rel="icon">
        <link href="<?= $logo ?>" rel="apple-touch-icon">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

        <!-- Icon packs | Get icons: https://fontawesome.com/v5/search?m=free -->
        <script src="https://kit.fontawesome.com/4008ae7d9b.js" crossorigin="anonymous"></script>
        

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <style>
            /*--------------------------------------------------------------
            # General
            --------------------------------------------------------------*/
            body {
                font-family: "Open Sans", sans-serif;
                color: <?= $textColor?>;
            }
            .fixedBackground {
                position: fixed;
                inset: 0px;
                z-index: -1;
                <?php
                if($backgroundImage != 'NONE') {
                    echo 'background-image: url(' . $backgroundImage . ');';
                }
                ?>
                background-image: url(<?= $backgroundImage?>);
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                background-color: <?= $backgroundColor?>;
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
                margin: 30px 28% 30px 28%;
            }


            /*--------------------------------------------------------------
            # Sections General
            --------------------------------------------------------------*/
            section {
                padding: 10px 0;
                overflow: hidden;
            }

            .section-title {
                text-align: center;
                padding-bottom: 30px;
            }

            .section-title img {
                width: 128px;
                border-radius: 50%;
                margin: 20px;
            }

            .section-title h2 {
                font-size: 32px;
                font-weight: 600;
                margin-bottom: 10px;
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
            # Linktree
            --------------------------------------------------------------*/
            .linktree {
                text-align: -webkit-center;
            }
            .linklist {
                max-width: 500px;
                margin: 0 10%;
            }
            .linklist a {
                transition: 0.3s;
                background-color: <?= $buttonColor; ?>;
                padding: 15px;
                border-radius: 15px;
                box-shadow: <?= $buttonShadowColor; ?> 4px 4px 0px 0px;
                margin: 7px 0;
            }
            .linklist a:hover {
                transition: 0.3s;
                transform: translate(-4px, -4px);
            }
            
            .social-links a {
                font-size: 18px;
                display: inline-block;
                background: <?= $backgroundColor?>;
                line-height: 1;
                padding: 8px 0;
                margin-right: 4px;
                border-radius: 50%;
                text-align: center;
                width: 36px;
                height: 36px;
            }

            .social-links a:hover {
                background: <?= $backgroundContentColor?>;
                text-decoration: none;
            }
        </style>
    </head>
    
    <body>

        <!-- Background image / color | start -->
        <div class="fixedBackground"></div>
        <!-- Background image / color -->

        <main>
            <section class="linktree">
                <div class="container">
                    
                    <!-- Title | start -->
                    <div class="section-title">
                        <img src="<?= $logo ?>"></img>
                        <h2>l1ratch (Link_play)</h2>
                        <p>Информация, ресурсы и проекты</p>
                    </div>
                    <!-- Title / color -->
                    <hr>
                    <!-- Link list | start -->
                    <div class="linklist">
                        <div class="row">
                            <?php
                            foreach ($linktree as $list) {
                                echo '<a class="link" href="' . $list['url'] . '" target="_self">' . $list['icon'] . ' ' . $list['displayName'] . '</a>';
                            }
                            ?>
                        </div>
                    </div>
                    <!-- Link list | end -->

                    <hr>

                    <!-- Social links | start -->
                    <div class="social-links text-center" style="padding-top: 20px;">
                            <?php
                            foreach ($socialMedia as $list) {
                                echo '<a href="' . $list['url'] . '" target="_blank">' . $list['icon'] . '</a>';
                            }
                            ?>
                    </div>
                    <!-- Social links | end -->

                </div>
            </section>
        </main>
    </body>
</html>

<!--

       Template by DxveDE
         Create by l1ratch
    
-->