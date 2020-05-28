<?php
// set page title
$pageTitle = 'Andrew Von Haden';

// set meta description
$metaDescription = 'Andrew Von Haden\'s web and graphic design portfolio.';

// includes
include "includes/head.php";
include "includes/nav-transparent.php";
?>

<main>
    <!-- HERO -->
    <section class="hero uk-background-fixed uk-background-cover uk-background-center-center uk-light uk-flex"
         uk-height-viewport="offset-top: true"
         style="background-image: url('img/cover-bg.jpg');"
    >
        <div class="uk-container uk-text-center uk-margin-auto uk-margin-auto-vertical">
            <img src="img/AVH-Logo.svg" height="200" width="175" alt="logo" class="uk-animation-scale-up" uk-svg>
            <h1 class="uk-animation-fade">I am a full stack web developer and designer from Southeast Wisconsin.</h1>
        </div>
    </section>


    <!-- Who am I -->
    <section class="uk-section bg-grey-white">
        <div class="uk-container">
            <div class="uk-child-width-expand" uk-grid>
                <div class="uk-width-1-1 uk-width-2-3@s uk-width-2-3@m uk-width-4-5@l">
                    <h2>Who am I?</h2>
                    <p>Hi! My name is Andrew I am a full stack web developer and graphic designer located in Menomonee Falls, Wisconsin. I am a problem solver with the ability to transform vague ideas into client pleasing results. My strong grasp of both front-end and back end development combined with my deep background in many facets of graphic design allows me to tackle a huge range of different projects. I have a proven track record of delivering quality work while managing dozens of projects on tight deadlines. My knowledge of the entire Adobe Creative Cloud is vast and paired with my design skills to create unique branding, typography, and design layouts. I am constantly expanding knowledge of web development including HTML5, CSS and SCSS, jQuery,Vue JavaScript framework, PHP, SQL and NoSQL databases, and WordPress. Pursing perfection is what drives me in my work. </p>
                </div>
    <!--            <div class="uk-cover-container">-->
                <div>
                    <img src="img/andrew.webp" alt="Photo of Andrew Von Haden." uk-img>
                </div>
            </div>
        </div>
    </section>


    <!-- Web -->
    <section class="portfolio-showcase web-showcase uk-section">
        <div class="uk-container">

            <h2>Web</h2>

            <div class="uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>

                <a href="web/kingdom-prep-lutheran-high-school.php" class="image-link">
                    <div class="link-box-outer uk-height-medium">
                        <div class="link-box-inner uk-background-cover" data-src="img/thumbnails/kp.webp" uk-img></div>
                        <div class="link-text">Kingdom Prep</div>
                    </div>
                </a>

                <a href="web/costog.php" class="image-link">
                    <div class="link-box-outer uk-height-medium">
                        <div class="link-box-inner uk-background-cover" data-src="img/thumbnails/costog.webp" uk-img></div>
                        <div class="link-text">Costog</div>
                    </div>
                </a>

                <a href="web/books-plugin.php" class="image-link">
                    <div class="link-box-outer uk-height-medium">
                        <div class="link-box-inner uk-background-cover" data-src="img/thumbnails/books.webp" uk-img></div>
                        <div class="link-text">Books Plugin</div>
                    </div>
                </a>

                <a href="web/midwest-connection.php" class="image-link uk-hidden@xs uk-visible@s uk-hidden@m">
                    <div class="link-box-outer uk-height-medium">
                        <div class="link-box-inner uk-background-cover" data-src="img/thumbnails/midwest.webp" uk-img></div>
                        <div class="link-text">Midwest Connection</div>
                    </div>
                </a>

            </div>

            <a href="web.php" class="uk-margin-top uk-button uk-button-default uk-align-right@s button button-teal-on-white">See More</a>

        </div>
    </section>


    <!-- Design -->
    <section class="portfolio-showcase design-showcase uk-section">
        <div class="uk-container">

            <h2>Design</h2>

            <div class="uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>

                <a href="design/rushing-past-willow.php" class="image-link">
                    <div class="link-box-outer uk-height-medium">
                        <div class="link-box-inner uk-background-cover" data-src="img/thumbnails/rpw.webp" uk-img></div>
                        <div class="link-text">Rushing Past Willow</div>
                    </div>
                </a>

                <a href="design/designer-link.php" class="image-link">
                    <div class="link-box-outer uk-height-medium">
                        <div class="link-box-inner uk-background-cover" data-src="img/thumbnails/designer-link.webp" uk-img></div>
                        <div class="link-text">Designer Link</div>
                    </div>
                </a>

                <a href="design/rock-bike-park.php" class="image-link">
                    <div class="link-box-outer uk-height-medium">
                        <div class="link-box-inner uk-background-cover" data-src="img/thumbnails/bike.webp" uk-img></div>
                        <div class="link-text">Rock Bike Park</div>
                    </div>
                </a>

                <a href="design/aptura.php" class="image-link uk-hidden@xs uk-visible@s uk-hidden@m">
                    <div class="link-box-outer uk-height-medium">
                        <div class="link-box-inner uk-background-cover" data-src="img/thumbnails/aptura.webp" uk-img></div>
                        <div class="link-text">Aptura</div>
                    </div>
                </a>

            </div>

            <a href="design.php" class="uk-margin-top uk-button uk-button-default uk-align-right@s button button-teal-on-white">See More</a>

        </div>
    </section>


    <!-- Testimonials -->
    <section class="testimonials uk-section bg-grey-white">
        <div class="uk-container">
            <h2 class="uk-text-center">Testimonials</h2>

            <div uk-slider="center: true">

                <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

                    <ul class="uk-slider-items">

                        <li class="testimonial-slide uk-width-5-6">
                            <div class="testimonial-slide-content">
                                <img class="uk-align-center uk-border-circle" data-src="img/testimonials/adam.jpg" width="100" height="100" alt="" uk-img>
                                <h3 class="uk-text-center">Adam Derus</h3>
                                <h4 class="uk-text-center">Senior Strategic Marketer, Direct Supply</h4>
                                <p class="uk-text-center">"I worked with Andrew quite a bit in my role as strategic and content direction, while Andrew's role was to make it come to life. He was always great with creative ideas and there was no project too large for his creative eye. It was also great being able to have him consult on projects I was doing."</p>
                            </div>
                        </li>

                        <li class="testimonial-slide uk-width-5-6">
                            <div class="testimonial-slide-content">
                                <img class="uk-align-center uk-border-circle" data-src="img/testimonials/erica.jpg" width="100" height="100" alt="" uk-img>
                                <h3 class="uk-text-center">Erica Breitrick</h3>
                                <h4 class="uk-text-center">Senior Event & Video Production Associate, Direct Supply</h4>
                                <p class="uk-text-center">"Andrew's presentations always have a great impact through creative design and eye-catching animations. He has a knack for taking stale data and reports, and turning them into visually-pleasing graphics that really tell the story behind the details."</p>
                            </div>
                        </li>

                        <li class="testimonial-slide uk-width-5-6">
                            <div class="testimonial-slide-content">
                                <img class="uk-align-center uk-border-circle" data-src="img/testimonials/rose.jpg" width="100" height="100" alt="" uk-img>
                                <h3 class="uk-text-center">Rose Koenings</h3>
                                <h4 class="uk-text-center">Document and Data Management Support, Alcami Corporation</h4>
                                <p class="uk-text-center">"Andrew has a warm professionalism that puts you at ease. I am never fully comfortable having my picture taken, but he made the experience fun and helped direct me into natural, flattering poses. I have always admired Andrew's work and was thrilled to have an opportunity to work with him. He truly loves what he does and it shows in his work. I couldn't be happier with my experience."</p>
                            </div>
                        </li>

                    </ul>

                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>

                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

            </div>

        </div>

    </section>


    <!-- Connect -->
    <section class="connect uk-section">
        <div class="uk-container">
            <img src="img/paper-plane.svg" width="69" height="50"  class="uk-align-center" uk-svg>
            <h2 class="uk-text-center">Interested in Connecting?</h2>
            <div class="uk-flex uk-flex-center">
                <a href="mailto:xandrewxvonxhadenx@gmail.com" onmouseover="this.href=this.href.replace(/x/g,'');" class="uk-button uk-button-default button button-teal">Send Email</a>
            </div>
        </div>
    </section>
</main>


<?php
include "includes/footer.php";
include "includes/scripts.php";
include "includes/analytics.php";
include "includes/close.php";
?>
