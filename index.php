<?php
// set page title
$pageTitle = '';

// set meta description
$metaDescription = '';

// includes
include "includes/head.php";
include "includes/nav.php";
?>


<div class="uk-height-large uk-background-cover uk-light uk-flex"
     uk-parallax="bgy: -100"
     style="background-image: url('img/cover-bg.jpg');">
    <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
        <img src="img/vonhaden-logo-white.png" alt="logo">
        <h1>Headline</h1>
        <p>I am a designer and photographer located in Southeast Wisconsin. I have a passion for all things visual and I channel that into all that I do.</p>
    </div>
</div>

<!-- Placeholder Section -->
<div class="uk-section uk-section-muted">
    <div class="uk-container">
        <h3>Section</h3>
        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
        </div>
    </div>
</div>

<div class="uk-section">
    <div class="uk-container">
        <h2>This is some filler</h2>
        <p>How about that filler</p>
    </div>
</div>

<div class="uk-section uk-section-muted">
    <div class="uk-container">
        <h3>Section</h3>
        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
        </div>
    </div>
</div>


<?php
include "includes/footer.php";
include "includes/scripts.php";
include "includes/analytics.php";
include "includes/close.php";
?>