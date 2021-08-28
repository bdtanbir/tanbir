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
            
            <section class="about-section" id="about">
                <div class="container">
                    <div class="section-heading">
                        <h1>About <span>Me</span></h1>
                        <p>Main information's about me</p>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="about-img text-right">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/1.jpg" alt="">
                                <span class="shape1"></span>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-7">
                            <div class="about-content">
                                <h1>I'm Tanbir Ahmed and <span class="typed"></span></h1>
                                <p>Hi! My name is <strong>Tanbir Ahmed</strong>. I am a web & WordPress Developer, and I'm very passionate and dedicated to my work. With 3+ years experience as a professional Web & WordPress Developer. I have acquired the skills and knowledge necessary to make your project a success. I enjoy every step of the design process, from discussion and collaboration to concept and execution, but I find the most satisfaction in seeing the finished product do everything for you that it was created to do.</p>
                                <ul class="d-flex flex-wrap">
                                    <li><span>Birthday:</span> 15.09.2000</li>
                                    <li><span>Age:</span> 20</li>
                                    <li><span>City:</span> Sylhet, Bangladesh</li>
                                    <li><span>Website:</span> <a href="tanbirahmed.com">www.tanbirahmed.com</a></li>
                                    <li><span>Study:</span> Class 10</li>
                                    <li><span>Mail:</span> <a href="mailto:tanbirsylhet20@gmail.com">tanbirsylhet20@gmail.com</a></li>
                                    <li><span>Phone:</span> +8801306614161</li>
                                </ul>
                                <div class="about-btns d-flex align-items-center">
                                    <a href="" class="download-cv theme-btn" target="_blank">Download CV</a>
                                    <a href="#contact" class="send-message theme-btn" target="_blank">Send Message</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="about-skills-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="section-heading">
                                    <h1>Skills</h1>
                                    <p>Some About my Abilities</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <ul class="skill-lists">
                                    <li class="wordpress">
                                        <span class="title-and-percent d-flex align-items-center justify-content-between">
                                            <span class="title">WordPress</span>
                                            <span class="percent">70%</span>
                                        </span>
                                        <div class="skill-bar"></div>
                                    </li>
                                    <li class="html">
                                        <span class="title-and-percent d-flex align-items-center justify-content-between">
                                            <span class="title">HTML</span>
                                            <span class="percent">95%</span>
                                        </span>
                                        <div class="skill-bar"></div>
                                    </li>
                                    <li class="css">
                                        <span class="title-and-percent d-flex align-items-center justify-content-between">
                                            <span class="title">CSS</span>
                                            <span class="percent">95%</span>
                                        </span>
                                        <div class="skill-bar"></div>
                                    </li>
                                    <li class="javascript">
                                        <span class="title-and-percent d-flex align-items-center justify-content-between">
                                            <span class="title">JavaScript</span>
                                            <span class="percent">50%</span>
                                        </span>
                                        <div class="skill-bar"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="portfolio-section" id="portfolio">
                <div class="container">
                    <div class="section-heading">
                        <h1>Creative <span>Works</span></h1>
                        <p>Check out my latest creative works</p>
                    </div>
                    
                    <div class="filters filter-button-group portfolio-filters-btn">
                        <ul class="d-flex align-items-center">
                            <li class="active" data-filter="*">Show All</li>
                            <li data-filter=".react">React</li>
                            <li data-filter=".vue">Vue</li>
                            <li data-filter=".wordpress-tm">WordPress</li>
                        </ul>
                    </div>

                    <div class="content grid row">
                        <div class="portfolio-item col-md-4 grid-item react ">
                            <img class="p2" src="https://static1.squarespace.com/static/56c5196f4c2f85dda57c1d66/59d944df8a02c7abc311e81d/5b71c491b8a045325bf1beba/1534182696851/Screen+Shot+2018-08-13+at+1.48.35+PM.png">
                        </div>
                        <div class="portfolio-item col-md-4 grid-item vue ">
                            <img class="p2" src="https://static1.squarespace.com/static/56c5196f4c2f85dda57c1d66/59d944df8a02c7abc311e81d/5b71c491b8a045325bf1beba/1534182696851/Screen+Shot+2018-08-13+at+1.48.35+PM.png">
                        </div>
                        <div class="portfolio-item col-md-4 grid-item wordpress-tm">
                            <img class="p2" src="https://static1.squarespace.com/static/56c5196f4c2f85dda57c1d66/59d944df8a02c7abc311e81d/5b71c491b8a045325bf1beba/1534182696851/Screen+Shot+2018-08-13+at+1.48.35+PM.png">
                        </div>
                        <div class="portfolio-item col-md-4 grid-item webdev">
                            <img class="p2" src="https://static1.squarespace.com/static/56c5196f4c2f85dda57c1d66/59d944df8a02c7abc311e81d/5b71c491b8a045325bf1beba/1534182696851/Screen+Shot+2018-08-13+at+1.48.35+PM.png">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    
	<?php wp_footer(); ?>
</body>
</html>