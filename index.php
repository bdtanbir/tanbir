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

    <main class="personal-website-main d-flex flex-wrap">
        <aside class="personal-sidebar-area">
            <div class="sidebar-top-logo">
                <a href="">
                    <img src="" alt="">
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
        </aside>

        <div class="personal-content-area">
            <section class="home-section" id="home">
                <div class="home-content">
                    <img src="" alt="">
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