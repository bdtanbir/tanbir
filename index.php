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

    <header class="header-wrapper">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo.png" alt="">
                </a>
                <div class="menu-bars d-flex align-items-center flex-column justify-content-between">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>

    <div class="responsive-sidebar position-fixed flex-column justify-content-between">
        <i class="la la-times close-responsive-sidebar"></i>
        <ul class="sidebar-menu">
            <li>
                <a href="#home"><i class="la la-home"></i> <?php esc_html_e( 'Home', 'tanbir' ); ?></a>
            </li>
            <li>
                <a href="#about"><i class="la la-user"></i> <?php esc_html_e( 'About', 'tanbir' ); ?></a>
            </li>
            <li>
                <a href="#portfolio"><i class="la la-filter"></i> <?php esc_html_e( 'Portfolio', 'tanbir' ); ?></a>
            </li>
            <li>
                <a href="#contact"><i class="la la-envelope"></i> <?php esc_html_e( 'Contact', 'tanbir' ); ?></a>
            </li>
        </ul>
        <p class="copyright text-center"><?php esc_html_e( 'Copyright &copy; 2021', 'tanbir' ); ?></p>
    </div>

    <main class="personal-website-main">
        <aside class="personal-sidebar-area flex-column justify-content-between">
            <div class="sidebar-top-logo text-center">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo.png" alt="">
                </a>
            </div>

            <ul class="sidebar-menu">
                <li>
                    <a href="#home"><i class="la la-home"></i> <?php esc_html_e( 'Home', 'tanbir' ); ?></a>
                </li>
                <li>
                    <a href="#about"><i class="la la-user"></i> <?php esc_html_e( 'About', 'tanbir' ); ?></a>
                </li>
                <li>
                    <a href="#portfolio"><i class="la la-filter"></i> <?php esc_html_e( 'Portfolio', 'tanbir' ); ?></a>
                </li>
                <li>
                    <a href="#contact"><i class="la la-envelope"></i> <?php esc_html_e( 'Contact', 'tanbir' ); ?></a>
                </li>
            </ul>
            <p class="copyright text-center"><?php esc_html_e( 'Copyright &copy; 2021', 'tanbir' ); ?></p>
        </aside>

        <div class="personal-content-area">
            <section class="home-section text-center" id="home">
            <div id="particles-js"></div>
                <div class="home-content">
                    <div class="me-img">
                        <img src="<?php echo get_template_directory_uri(  ); ?>/assets/imgs/me.png" alt="">
                        <span class="me-img-shapes position-absolute">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <h1><?php esc_html_e( 'Tanbir', 'tanbir' ); ?> <span><?php esc_html_e( 'Ahmed', 'tanbir' ); ?></span></h1>
                    <h2><?php esc_html_e( 'I\'m a', 'tanbir' ); ?> <span class="typed"></span></h2>
                </div>
                <a href="#about" class="go-to-btn go-to-about">
                    <i class="la la-angle-down"></i>
                </a>
            </section>
            
            <section class="about-section" id="about">
                <div class="container">
                    <div class="section-heading">
                        <h1><?php esc_html_e( 'About', 'tanbir' ); ?> <span><?php esc_html_e( 'Me', 'tanbir' ); ?></span></h1>
                        <p><?php esc_html_e( "Main information's about me", "tanbir" ); ?></p>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="about-img text-right">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/me-2.png" alt="">
                                <span class="shape1"></span>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-7">
                            <div class="about-content">
                                <h1><?php esc_html_e( "I'm Tanbir Ahmed and", "tanbir" ); ?> <span class="typed"></span></h1>
                                <p>Hi! My name is <strong>Tanbir Ahmed</strong>. I am a web & WordPress Developer, fast typing speed, and I'm very passionate and dedicated to my work. With 3+ years experience as a professional Web & WordPress Developer. I have acquired the skills and knowledge necessary to make your project a success. I enjoy every step of the design process, from discussion and collaboration to concept and execution, but I find the most satisfaction in seeing the finished product do everything for you that it was created to do.</p>
                                <!-- 
                                    Hi! My name is Tanbir Ahmed. I am submitting my resume for the position of Full-stack WordPress Developer. With 3+ years of experience as a professional full-stack wordpress developer, I am confident that I would make a valuable addition to the WPDeveloper team.

                                    My professional experience includes designing and implementing web pages, user interfaces and plugins for WordPress, designing themes that are as functional as they are beautiful and working with a team of colleagues to create the best products possible.
                                    Here are some highlights of my career thus far:
                                    Worked as an full-stack WordPress Developer for 3+ years
                                    Ensured consistent functionality and performance at all times
                                    Used a variety of debugging tools
                                    I hope to bring my programming skills.
                                    I am grateful for your time and consideration, and I look forward to speaking with you further about this position.
                                 -->
                                <ul class="d-flex flex-wrap">
                                    <li><span><?php esc_html_e( 'Birthday:', 'tanbir' ); ?></span> <?php esc_html_e( '07.07.2000', 'tanbir' ); ?></li>
                                    <li><span><?php esc_html_e( 'Age:', 'tanbir' ); ?></span> <?php esc_html_e( '21', 'tanbir' ); ?></li>
                                    <li><span><?php esc_html_e( 'City:', 'tanbir' ); ?></span> <?php esc_html_e( 'Sylhet, Bangladesh', 'tanbir' ); ?></li>
                                    <li><span><?php esc_html_e( 'Website:', 'tanbir' ); ?></span> <a href="http://tanbirahmed.unaux.com/"><?php esc_html_e( 'tanbirahmed.unaux.com', 'tanbir' ); ?></a></li>
                                    <li><span><?php esc_html_e( 'Study:', 'tanbir' ); ?></span> Class 10</li>
                                    <li><span>Mail:</span> <a href="mailto:tanbirsylhet20@gmail.com">tanbirsylhet20@gmail.com</a></li>
                                    <li><span>Phone:</span> +8801306614161</li>
                                </ul>
                                <div class="about-btns d-flex">
                                    <a href="<?php echo get_template_directory_uri(); ?>/assets/imgs/resume.pdf" class="download-cv theme-btn" target="_blank">Download CV</a>
                                    <a href="#contact" class="send-message theme-btn">Send Message</a>
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
                        <ul class="d-flex align-items-center flex-wrap">
                            <li class="active" data-filter="*">Show All</li>
                            <li data-filter=".react">React</li>
                            <li data-filter=".vue">Vue</li>
                            <li data-filter=".wordpress-tm">WordPress</li>
                        </ul>
                    </div>

                    <div class="content grid row">
                        <div class="portfolio-item col-md-4 grid-item wordpress-tm ">
                            <div class="portfolio-item-inner position-relative">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/aduca-wp.png">

                                <div class="portfolio-item-overlay position-absolute text-center d-flex align-items-center flex-column justify-content-center">
                                    <a href="https://aduca.techydevs.com" class="portfolio-live-preview" target="_blank">
                                        <i class="la la-eye"></i>
                                    </a>
                                    <h1>Aduca - <span>Education</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-4 grid-item wordpress-tm ">
                            <div class="portfolio-item-inner position-relative">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/minzel-wp.png">

                                <div class="portfolio-item-overlay position-absolute text-center d-flex align-items-center flex-column justify-content-center">
                                    <a href="https://minzel.techydevs.com" class="portfolio-live-preview" target="_blank">
                                        <i class="la la-eye"></i>
                                    </a>
                                    <h1>Minzel - <span>Multipurpose</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-4 grid-item vue">
                            <div class="portfolio-item-inner position-relative">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/costar-vue.png">

                                <div class="portfolio-item-overlay position-absolute text-center d-flex align-items-center flex-column justify-content-center">
                                    <a href="https://costar-vue.vercel.app/" class="portfolio-live-preview" target="_blank">
                                        <i class="la la-eye"></i>
                                    </a>
                                    <h1>Costar - <span>Medical</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-4 grid-item react">
                            <div class="portfolio-item-inner position-relative">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/dirto-react.png">

                                <div class="portfolio-item-overlay position-absolute text-center d-flex align-items-center flex-column justify-content-center">
                                    <a href="https://techydevs.com/demos/themes/html/dirto-react-demo/" class="portfolio-live-preview" target="_blank">
                                        <i class="la la-eye"></i>
                                    </a>
                                    <h1>Dirto - <span>Directory</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-4 grid-item react">
                            <div class="portfolio-item-inner position-relative">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/costar-react.png">

                                <div class="portfolio-item-overlay position-absolute text-center d-flex align-items-center flex-column justify-content-center">
                                    <a href="https://costar-react.vercel.app/" class="portfolio-live-preview" target="_blank">
                                        <i class="la la-eye"></i>
                                    </a>
                                    <h1>Costar - <span>Medical</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-4 grid-item wordpress-tm">
                            <div class="portfolio-item-inner position-relative">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/trizen-wp.png">

                                <div class="portfolio-item-overlay position-absolute text-center d-flex align-items-center flex-column justify-content-center">
                                    <a href="https://trizen.techydevs.com" class="portfolio-live-preview" target="_blank">
                                        <i class="la la-eye"></i>
                                    </a>
                                    <h1>Trizen - <span>Hotel Booking</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-4 grid-item react">
                            <div class="portfolio-item-inner position-relative">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/minzel-react.png">

                                <div class="portfolio-item-overlay position-absolute text-center d-flex align-items-center flex-column justify-content-center">
                                    <a href="https://minzel-react.vercel.app/" class="portfolio-live-preview" target="_blank">
                                        <i class="la la-eye"></i>
                                    </a>
                                    <h1>Minzel - <span>Multipurpose</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-4 grid-item wordpress-tm">
                            <div class="portfolio-item-inner position-relative">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/costar-wp.png">

                                <div class="portfolio-item-overlay position-absolute text-center d-flex align-items-center flex-column justify-content-center">
                                    <a href="http://costar.techydevs.com" class="portfolio-live-preview" target="_blank">
                                        <i class="la la-eye"></i>
                                    </a>
                                    <h1>Costar - <span>Medical</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-4 grid-item vue">
                            <div class="portfolio-item-inner position-relative">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/vision-vue.png">

                                <div class="portfolio-item-overlay position-absolute text-center d-flex align-items-center flex-column justify-content-center">
                                    <a href="https://vision-vue.vercel.app/" class="portfolio-live-preview" target="_blank">
                                        <i class="la la-eye"></i>
                                    </a>
                                    <h1>Vision - <span>Tesla</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-4 grid-item vue">
                            <div class="portfolio-item-inner position-relative">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/amani-vue.png">

                                <div class="portfolio-item-overlay position-absolute text-center d-flex align-items-center flex-column justify-content-center">
                                    <a href="https://amani-git-main-kamalahmed.vercel.app/" class="portfolio-live-preview" target="_blank">
                                        <i class="la la-eye"></i>
                                    </a>
                                    <h1>Amani - <span>Simple Shop</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-4 grid-item vue">
                            <div class="portfolio-item-inner position-relative">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/beats-solo-pro-vue.png">

                                <div class="portfolio-item-overlay position-absolute text-center d-flex align-items-center flex-column justify-content-center">
                                    <a href="https://beats-solo-pro.vercel.app/" class="portfolio-live-preview" target="_blank">
                                        <i class="la la-eye"></i>
                                    </a>
                                    <h1>Beats Solo Pro - <span>Simple Shop</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-4 grid-item vue">
                            <div class="portfolio-item-inner position-relative">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/judy-vue.png">

                                <div class="portfolio-item-overlay position-absolute text-center d-flex align-items-center flex-column justify-content-center">
                                    <a href="https://judy-vue.vercel.app/" class="portfolio-live-preview" target="_blank">
                                        <i class="la la-eye"></i>
                                    </a>
                                    <h1>Judy - <span>Simple Shop</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-4 grid-item vue">
                            <div class="portfolio-item-inner position-relative">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/madison-james-vue.png">

                                <div class="portfolio-item-overlay position-absolute text-center d-flex align-items-center flex-column justify-content-center">
                                    <a href="https://madisonjames-vue.vercel.app/" class="portfolio-live-preview" target="_blank">
                                        <i class="la la-eye"></i>
                                    </a>
                                    <h1>Madison James</h1>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item col-md-4 grid-item vue">
                            <div class="portfolio-item-inner position-relative">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/sass-on-demand-vue.png">

                                <div class="portfolio-item-overlay position-absolute text-center d-flex align-items-center flex-column justify-content-center">
                                    <a href="https://sass-on-demand.vercel.app/" class="portfolio-live-preview" target="_blank">
                                        <i class="la la-eye"></i>
                                    </a>
                                    <h1>Sass on Demand</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="contact-form-section" id="contact">
                <div class="container">
                    <div class="section-heading">
                        <h1>Contact <span>Me</span></h1>
                        <p>Get in touch with me</p>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="contact-form-infos">
                                <h1>Get in Touch</h1>
                                <ul>
                                    <li>
                                        <span>Address: </span>Sylhet - Modina Market, Bangladesh
                                    </li>
                                    <li>
                                        <span>Email: </span><a href="mailto:tanbirsylhet20@gmail.com">tanbirsylhet20@gmail.com</a>
                                    </li>
                                    <li>
                                        <span>Phone: </span>+8801306614161
                                    </li>
                                    <li>
                                        <span>Website: </span><a href="http://tanbirahmed.unaux.com/">http://tanbirahmed.unaux.com/</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="contact-form">
                                <?php echo do_shortcode( get_theme_mod( 'contact_form_shortcode' ) ); ?>
                                <!-- <form>
                                    <div class="input-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name">
                                    </div>
                                    <div class="input-group">
                                        <label for="email">Email</label>
                                        <input type="text" id="email">
                                    </div>
                                    <div class="input-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" id="subject">
                                    </div>
                                    <div class="input-group">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                    </div>
                                    <button class="theme-btn send-message" type="submit">Send Message</button>
                                </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    
    <a href="#home" class="back-to-top">
        <i class="la la-angle-up"></i>
    </a>
	<?php wp_footer(); ?>
</body>
</html>