<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
	<?php wp_head(); ?>
</head>
<body <?php body_class(  ); ?>>

    <main class="personal-website-main">
        <aside class="personal-sidebar-area d-flex flex-column justify-content-between">
            <div class="sidebar-top-logo text-center">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo.png" alt="">
                </a>
            </div>

            <ul class="sidebar-menu">
                <li>
                    <a href="#home"><i class="la la-home"></i> Home</a>
                </li>
                <li>
                    <a href="#about"><i class="la la-user"></i> About</a>
                </li>
                <li>
                    <a href="#portfolio"><i class="la la-filter"></i> Portfolio</a>
                </li>
                <li>
                    <a href="#contact"><i class="la la-envelope"></i> Contact</a>
                </li>
            </ul>
            <p class="copyright text-center">Copyright &copy; 2021</p>
        </aside>

        <div class="personal-content-area">
            <section class="home-section text-center" id="home">
                <div class="home-content">
                    <div class="me-img">
                        <img src="<?php echo get_template_directory_uri(  ); ?>/assets/imgs/me.png" alt="">
                    </div>
                    <h1>Tanbir <span>Ahmed</span></h1>
                    <h2>I'm a <span class="typed"></span></h2>
                </div>
                <a href="#about" class="go-to-btn go-to-about">
                    <i class="la la-angle-down"></i>
                </a>
            </section>
        </div>
    </main>
    
	<?php wp_footer(); ?>
</body>
</html>