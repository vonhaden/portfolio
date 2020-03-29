<?php
// set page title
$pageTitle = 'Andrew Von Haden';

// set meta description
$metaDescription = '';

// includes
include "includes/head.php";
include "includes/nav-transparent.php";
?>


<!-- BANNER -->
<div class="banner uk-background-fixed uk-background-cover uk-background-center-center uk-light uk-flex"
     uk-height-viewport="offset-top: true"
     style="background-image: url('img/cover-bg.jpg');"
>
    <div class="uk-container uk-text-center uk-margin-auto uk-margin-auto-vertical">
        <img src="img/AVH-Logo.svg" height="200" alt="logo" class="uk-animation-scale-up" uk-svg>
        <h2 class="uk-animation-fade">I am a designer and photographer located in Southeast Wisconsin.</h2>
    </div>
</div>


<!-- Who am I -->
<div class="uk-section bg-grey-white">
    <div class="uk-container">
        <h2>Who am I?</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
</div>


<!-- Web -->
<div class="portfolio-showcase web-showcase uk-section">
    <div class="uk-container">

        <h2>Web</h2>

        <div class="links uk-child-width-1-3@m" uk-grid>

            <a href="#">
                <div class="link-box-outer uk-height-medium">
                    <div class="link-box-inner uk-background-cover" data-src="img/cover-bg.jpg" uk-img></div>
                    <div class="link-text">Link Text</div>
                </div>
            </a>

            <a href="#">
                <div class="link-box-outer uk-height-medium">
                    <div class="link-box-inner uk-background-cover" data-src="img/cover-bg.jpg" uk-img></div>
                    <div class="link-text">Link Text</div>
                </div>
            </a>

            <a href="#">
                <div class="link-box-outer uk-height-medium">
                    <div class="link-box-inner uk-background-cover" data-src="img/cover-bg.jpg" uk-img></div>
                    <div class="link-text">Link Text</div>
                </div>
            </a>

        </div>

        <a href="#" class="uk-margin-top uk-button uk-button-default uk-align-right@m button button-teal">See More</a>

    </div>
</div>



<!-- Testimonials -->
<div class="testimonials uk-section bg-grey-white">
    <div class="uk-container">
        <h2 class="uk-text-center">Testimonials</h2>
        <div class="uk-position-relative uk-visible-toggle"
             tabindex="-1"
             uk-slideshow="min-height: 300; max-height: 500">

            <ul class="uk-slideshow-items">

                <li class="testimonial-slide">
                    <div class="testimonial-slide-content uk-position-center">
                        <img class="uk-align-center uk-border-circle" data-src="img/adam.jpg" width="100" height="100" alt="" uk-img>
                        <h3 class="uk-text-center">Adam Derus</h3>
                        <h4 class="uk-text-center">Senior Strategic Marketer, Direct Supply</h4>
                        <p class="uk-text-center">"I worked with Andrew quite a bit in my role as strategic and content direction, while Andrew's role was to make it come to life. He was always great with creative ideas and there was no project too large for his creative eye. It was also great being able to have him consult on projects I was doing."</p>
                    </div>
                </li>
                <li class="testimonial-slide">
                    <div class="testimonial-slide-content uk-position-center">
                        <img class="uk-align-center uk-border-circle" data-src="img/adam.jpg" width="100" height="100" alt="" uk-img>
                        <h3 class="uk-text-center">Adam Derus</h3>
                        <h4 class="uk-text-center">Senior Strategic Marketer, Direct Supply</h4>
                        <p class="uk-text-center">"I worked with Andrew quite a bit in my role as strategic and content direction, while Andrew's role was to make it come to life. He was always great with creative ideas and there was no project too large for his creative eye. It was also great being able to have him consult on projects I was doing."</p>
                    </div>
                </li>
                <li class="testimonial-slide">
                    <div class="testimonial-slide-content uk-position-center">
                        <img class="uk-align-center uk-border-circle" data-src="img/adam.jpg" width="100" height="100" alt="" uk-img>
                        <h3 class="uk-text-center">Adam Derus</h3>
                        <h4 class="uk-text-center">Senior Strategic Marketer, Direct Supply</h4>
                        <p class="uk-text-center">"I worked with Andrew quite a bit in my role as strategic and content direction, while Andrew's role was to make it come to life. He was always great with creative ideas and there was no project too large for his creative eye. It was also great being able to have him consult on projects I was doing."</p>
                    </div>
                </li>


            </ul>

            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

            <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
        </div>


    </div>
</div>


<!-- Connect -->
<div class="connect uk-section">
    <div class="uk-container">
        <img src="img/paper-plane.svg" height="50"  class="uk-align-center" uk-svg>
        <h2 class="uk-text-center">Interested in Connecting?</h2>
        <div class="uk-flex uk-flex-center">
            <a href="#" class="uk-button uk-button-default button button-teal">Send Email</a>
        </div>
    </div>
</div>


<?php
include "includes/footer.php";
include "includes/scripts.php";
include "includes/analytics.php";
include "includes/close.php";
?>
