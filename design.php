<?php
// set page title
$pageTitle = 'Andrew Von Haden | Design Portfolio';

// set meta description
$metaDescription = '';

// includes
include "includes/head.php";
include "includes/nav.php";
?>


<div class="portfolio uk-section">
    <div class="uk-container">
        <h1>Web Projects</h1>
        <div uk-filter="target: .js-filter">

            <ul class="uk-subnav filter-links" uk-margin>
                <li class="uk-active" uk-filter-control>
                    <a href="#">All</a>
                </li>
                <li uk-filter-control="[data-tags*='css']">
                    <a href="#">CSS</a>
                </li>
                <li uk-filter-control="[data-tags*='sass']">
                    <a href="#">SCSS</a>
                </li>
                <li uk-filter-control="[data-tags*='boot']">
                    <a href="#">Bootstrap</a>
                </li>
                <li uk-filter-control="[data-tags*='js']">
                    <a href="#">JavaScript</a>
                </li>
                <li uk-filter-control="[data-tags*='jq']">
                    <a href="#">jQuery</a>
                </li>
                <li uk-filter-control="[data-tags*='vue']">
                    <a href="#">Vue</a>
                </li>
                <li uk-filter-control="[data-tags*='php']">
                    <a href="#">PHP</a>
                </li>
                <li uk-filter-control="[data-tags*='wp']">
                    <a href="#">Wordpress</a>
                </li>
                <li uk-filter-control="[data-tags*='ui']">
                    <a href="#">UI Design</a>
                </li>
            </ul>

            <div class="js-filter uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center" uk-grid>

                <!-- Photo Critique -->
                <a href="#" class="image-link" data-tags="js vue sass boot">
                    <div class="link-box-outer uk-height-medium">
                        <div class="link-box-inner uk-background-cover" data-src="img/thumbnails/photo-critique-thumb.jpg" uk-img></div>
                        <div class="link-text">Photo Critique</div>
                    </div>
                </a>

                <!-- Data Med -->
                <a href="#" class="image-link" data-tags="ui">
                    <div class="link-box-outer uk-height-medium">
                        <div class="link-box-inner uk-background-cover" data-src="img/thumbnails/datamed-thumb.jpg" uk-img></div>
                        <div class="link-text">Data Med</div>
                    </div>
                </a>

                <!-- Milwaukee OSBD -->
                <a href="#" class="image-link" data-tags="sass bootstrap js">
                    <div class="link-box-outer uk-height-medium">
                        <div class="link-box-inner uk-background-cover" data-src="img/thumbnails/osbd-thumb.jpg" uk-img></div>
                        <div class="link-text">Milwaukee OSBD</div>
                    </div>
                </a>

                <!-- Midwest Connection -->
                <a href="#" class="image-link" data-tags="ui php css">
                    <div class="link-box-outer uk-height-medium">
                        <div class="link-box-inner uk-background-cover" data-src="img/thumbnails/midwest-connection-thumb.jpg" uk-img></div>
                        <div class="link-text">Midwest Connection</div>
                    </div>
                </a>

                <!-- Rock Paper Scissors Lizard Spock -->
                <a href="#" class="image-link" data-tags="js jq css">
                    <div class="link-box-outer uk-height-medium">
                        <div class="link-box-inner uk-background-cover" data-src="img/thumbnails/photo-critique-thumb.jpg" uk-img></div>
                        <div class="link-text">Rock Paper Scissors Lizard Spock</div>
                    </div>
                </a>

                <!-- Seating Chart Generator -->
                <a href="#" class="image-link" data-tags="js jq css">
                    <div class="link-box-outer uk-height-medium">
                        <div class="link-box-inner uk-background-cover" data-src="img/thumbnails/datamed-thumb.jpg" uk-img></div>
                        <div class="link-text">Seating Chart Generator</div>
                    </div>
                </a>

                <!-- Tozai Hotel -->
                <a href="#" class="image-link" data-tags="css js jq">
                    <div class="link-box-outer uk-height-medium">
                        <div class="link-box-inner uk-background-cover" data-src="img/thumbnails/osbd-thumb.jpg" uk-img></div>
                        <div class="link-text">Tozai Hotel</div>
                    </div>
                </a>

                <!-- WCTC -->
                <a href="#" class="image-link" data-tags="ui">
                    <div class="link-box-outer uk-height-medium">
                        <div class="link-box-inner uk-background-cover" data-src="img/thumbnails/midwest-connection-thumb.jpg" uk-img></div>
                        <div class="link-text">WCTC</div>
                    </div>
                </a>

                <!-- MKE Airport Report  -->
                <a href="#" class="image-link" data-tags="js jq sass bootstrap">
                    <div class="link-box-outer uk-height-medium">
                        <div class="link-box-inner uk-background-cover" data-src="img/thumbnails/midwest-connection-thumb.jpg" uk-img></div>
                        <div class="link-text">MKE Airport Report </div>
                    </div>
                </a>

                <!-- Yale School of Arts -->
                <a href="#" class="image-link" data-tags="ui sass bootstrap php">
                    <div class="link-box-outer uk-height-medium">
                        <div class="link-box-inner uk-background-cover" data-src="img/thumbnails/midwest-connection-thumb.jpg" uk-img></div>
                        <div class="link-text">Yale School of Arts</div>
                    </div>
                </a>

                <!-- Brandon Sanderson Site -->
                <a href="#" class="image-link" data-tags="wp php">
                    <div class="link-box-outer uk-height-medium">
                        <div class="link-box-inner uk-background-cover" data-src="img/thumbnails/midwest-connection-thumb.jpg" uk-img></div>
                        <div class="link-text">Brandon Sanderson</div>
                    </div>
                </a>

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
