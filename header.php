<?php
$logoimg = get_header_image();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.png"
        type="image/x-icon" />
    <title>
        <?php bloginfo('name') ?>
        <?php wp_title(); ?> |
        <?php if (is_front_page()) {
            bloginfo('description');
        } ?>
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@400;700;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/home/home.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/home/products.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/home/blog.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/home/404.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/home/contact.css">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header-image">
        <div class="container container-flex">
            <div class="header-logo">
                <a href='<?php the_permalink(28); ?>'>
                    <img src="<?php echo $logoimg; ?>" class="logo" alt="logo">
                </a>
            </div>
            <div class="header-contact-details">
                <div class="contact-title">Contact US:</div>
                <div class="contact-content">
                    <div class="header-contact-mobile">
                        <div class="mobile-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                            </svg>
                        </div>
                        <div class="mobile-number">
                            <a href="tel:0330 229 0546">0330 229 0546</a>
                        </div>
                    </div>
                    <div class="header-contact-email">
                        <div class="email-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <div class="email-address">
                            <a href="mailto:info@fundraisers-for-schools.co.uk">info@fundraisers-for-schools.co.uk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar">
        <div class="desktop-menu" id="mobileMenu">
            <?php
            wp_nav_menu(
                array('theme-location' => 'primary-menu')
            );
            ?>
        </div>
        <div class="mobile-menu">
            <div>
                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="mobileMenu()">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <div class="mobile-menu-number">Call us: <a href="tel:03302290546">0330 229 0546</a></div>
        </div>
    </nav>