<?php
// set page title
$pageTitle = 'Andrew Von Haden | About';

// set meta description
$metaDescription = 'Andrew Von Haden\'s web and graphic design portfolio.';

// includes
include "includes/head.php";
include "includes/nav.php";
?>



<!--<section class="uk-section about">-->
<!--    <div class="uk-container">-->
<!--        <div class="uk-grid">-->
<!--            <div class="uk-width-1-2@m">-->
<!--                <img data-src="img/andrew-camera.jpg" height="" width="" alt="Andrew with Camera" uk-img>-->
<!--            </div>-->
<!--            <div class="uk-width-1-2@m">-->
<!--                <h1>About Andrew</h1>-->
<!--                <p>Hailing from Southeastern Wisconsin, I am a designer and photographer who loves channeling myself into all things visual.</p>-->
<!--                <p>That passion for design started early in 2004 during my sophomore year of high school when I opened Photoshop for the first time. After playing around with the "render clouds" filter for a few hours, I was hooked. Creating visual things was always something I was interested in, but Photoshop made it click. By the time I graduated high school, I knew that I wanted to spend my life exploring the world of design. I went on to graduate magna cum laude from the University of Wisconsin-Whitewater with a BA in Multimedia Design.</p>-->
<!--                <p>My interests outside of design also greatly affect my work. Action sports are one of those key influences, specifically skiing and aggressive inline skating. The freedom of those sports is something incredibly appealing; they are not bound by the rules that are found in the traditional world of sports. The style in these sports is such a huge part of it, where how you looked when doing something is just as important as what was done. This visual aspect elevates it to less sport and more of an art form. That sense of freedom, along with the working to make every movement look simple but beautiful, are concepts that directly influence how I approach my work as well as my outlook on the world.</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<section class="uk-section about">
    <div class="uk-container">
        <h1>About Andrew</h1>
        <p>Hi! I’m Andrew, a full stack web developer and graphic designer from Southeastern Wisconsin. I love creating beautiful applications, both inside and out. </p>
        <p>My passion for design started in 2004, during my sophomore year of high school, when I opened Photoshop for the first time. After playing around with the "render clouds" filter for a few hours, I was hooked. Creating visual things was always something I was interested in, but Photoshop made it click. By the time I graduated high school, I knew that I wanted to dive deeper into the world of design. I went on to graduate magna cum laude from the University of Wisconsin-Whitewater with a BA in Multimedia Design.</p>
        <p>My enjoyment of web development and design was found a little later in life. After deciding that I wanted to move towards the web and learning how to write HTML, I applied to Waukesha County Technical College’s web program. It was under the excellent tutelage of my professors at WCTC that I discovered my love of development. That beautiful mix of problem solving and visual designing just felt right. I was awarded the Web & Digital Media Design Program Award as the top student in my class and graduated in spring 2020.</p>
    </div>
</section>


<section class="uk-section resume bg-teal">
    <div class="uk-container">
        <h2 class="uk-text-center">Download my Resume</h2>
        <div class="uk-flex uk-flex-center">
            <a href="/files/AndrewVonHaden_Resume.pdf" target=”_blank” class="uk-button uk-button-default button button-white" download>Download</a>
        </div>
    </div>
</section>


<section class="uk-section programs bg-grey-white">
    <div class="uk-container">
        <h2 class="uk-margin-large-bottom">Programs & Languages</h2>

        <div class="uk-flex uk-flex-wrap program-list">
            <?php
            $folder = 'img/skills-logos/';
            $logos = [
                array(
                    'src' => $folder . 'html5.svg',
                    'alt' => 'HTML5'
                ),
                array(
                    'src' => $folder . 'css3.svg',
                    'alt' => 'CSS3'
                ),
                array(
                    'src' => $folder . 'sass.svg',
                    'alt' => 'Sass'
                ),
                array(
                    'src' => $folder . 'php.svg',
                    'alt' => 'PHP'
                ),
                array(
                    'src' => $folder . 'wordpress.svg',
                    'alt' => 'WordPress'
                ),
                array(
                    'src' => $folder . 'javascript.svg',
                    'alt' => 'JavaScript'
                ),
                array(
                    'src' => $folder . 'jquery.svg',
                    'alt' => 'jQuery'
                ),
                array(
                    'src' => $folder . 'vue.svg',
                    'alt' => 'Vue'
                ),
                array(
                    'src' => $folder . 'bootstrap.svg',
                    'alt' => 'Bootstrap'
                ),
                array(
                    'src' => $folder . 'git.svg',
                    'alt' => 'Git'
                ),
                array(
                    'src' => $folder . 'github.svg',
                    'alt' => 'Github'
                ),
                array(
                    'src' => $folder . 'firebase.svg',
                    'alt' => 'Firebase'
                ),
                array(
                    'src' => $folder . 'mysql.svg',
                    'alt' => 'MySQL'
                ),
                array(
                    'src' => $folder . 'adobe-photoshop-square.svg',
                    'alt' => 'Adobe Photoshop'
                ),
                array(
                    'src' => $folder . 'adobe-illustrator-square.svg',
                    'alt' => 'Adobe Illustrator'
                ),
                array(
                    'src' => $folder . 'adobe-indesign-square.svg',
                    'alt' => 'Adobe InDesign'
                ),
                array(
                    'src' => $folder . 'adobe-xd-square.svg',
                    'alt' => 'Adobe XD'
                ),
                array(
                    'src' => $folder . 'premiere.svg',
                    'alt' => 'Adobe Premiere'
                ),
                array(
                    'src' => $folder . 'lightroom.svg',
                    'alt' => 'Adobe Lightroom'
                ),
                array(
                    'src' => $folder . 'microsoft-powerpoint.svg',
                    'alt' => 'Microsoft PowerPoint'
                ),
            ];

//            foreach ($logos as $logo) {
//                echo '<div class="program uk-margin-bottom uk-cover-container">';
//                echo '<img src="' . $logo['src'] . '"';
//                echo 'alt="' . $logo['alt'] . '"';
//                echo 'class="uk-preserve"';
//                echo 'uk-svg>';
//                echo '</div>';
//            }

            foreach ($logos as $logo) {
                echo '<div class="program uk-margin-large-bottom uk-cover-container">';
                echo '<img src="' . $logo['src'] . '"';
                echo 'alt="' . $logo['alt'] . '"';
                echo 'uk-img>';
                echo '</div>';
            }
        ?>
        </div>
    </div>
</section>




<section class="connect uk-section">
    <div class="uk-container">
        <img src="img/paper-plane.svg" width="69" height="50"  class="uk-align-center" uk-svg>
        <h2 class="uk-text-center">Send me a Message</h2>
        <div class="uk-flex uk-flex-center">
            <a href="mailto:xandrewxvonxhadenx@gmail.com" onmouseover="this.href=this.href.replace(/x/g,'');" class="uk-button uk-button-default button button-teal">Email</a>
        </div>
    </div>
</section>


<?php
include "includes/footer.php";
include "includes/scripts.php";
include "includes/analytics.php";
include "includes/close.php";
?>
