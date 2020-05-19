<?php
// Project Details
$projectTitle = 'Rock Paper Scissors Lizard Spock';

// Project Type
$projectType = 'web';

// Tags
$projectTags = [
    'JavaScript',
    'jQuery',
    'HTML',
    'CSS'
];

// Feature Image
$projectImage = '../img/projects/rock-paper-scissors/feature.png';
$projectImageAlt = 'Rock Paper Scissors Lizard Spock displayed on a laptop.';

// Project Description
$projectDescription = 'Rock Paper Scissors Lizard Spock is a slightly more complicated variation on the classic game of Rock Paper Scissors. In this app you can play out a simple 3 round game against the computer. The game was written in JavaScript using jQuery.';

// Gallery
// each array is an individual thumbnail item
$filePath = '../img/projects/rock-paper-scissors/';
$galleryPath = 'gallery/';
$thumbnailPath = 'thumb/';
$projectGallery = [
    array(
        'href' => $filePath . $galleryPath . 'Home.jpg',
        'caption' => 'Rock Paper Scissors Lizard Spock',
        'alt' => 'A screenshot of the Rock Paper Scissors Lizard Spock app.',
        'thumbnail' => $filePath . $thumbnailPath . 'Home.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Pick.jpg',
        'caption' => 'Picking an option',
        'alt' => 'Picking an option in the Rock Paper Scissors Lizard Spock app.',
        'thumbnail' => $filePath . $thumbnailPath . 'Pick.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Result.jpg',
        'caption' => 'Round result',
        'alt' => 'Winning a round in the Rock Paper Scissors Lizard Spock app.',
        'thumbnail' => $filePath . $thumbnailPath . 'Result.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Win.jpg',
        'caption' => 'Win State',
        'alt' => 'Winning in the Rock Paper Scissors Lizard Spock app.',
        'thumbnail' => $filePath . $thumbnailPath . 'Win.jpg'
    ),
];


// set page title
$pageTitle = 'Andrew Von Haden | ' . $projectTitle;

// set meta description
$metaDescription = 'This version of Rock Paper Scissors Lizard Spock was created by Andrew Von Haden and written in jQuery.';

// includes
include "../includes/head.php";
include "../includes/nav.php";
?>


<div class="project">
    <?php include '../includes/project-header.php'; ?>
    <section class="project-body uk-section">
        <div class="uk-container" uk-scrollspy="target: > div; cls: uk-animation-slide-left; offset-top: -150">

            <img class="full-width-image uk-margin-large-bottom" data-src="../img/projects/rock-paper-scissors/highlight-1.jpg" alt="" uk-img>

            <div class="body-section uk-margin-medium-bottom">
                <h2>Rules</h2>
                <ul>
                    <li>Scissors cuts Paper</li>
                    <li>Paper covers Rock</li>
                    <li>Rock crushes Lizard</li>
                    <li>Lizard poisons Spock</li>
                    <li>Spock smashes Scissors</li>
                    <li>Scissors decapitates Lizard</li>
                    <li>Lizard eats Paper</li>
                    <li>Paper disproves Spock</li>
                    <li>Spock vaporizes Rock</li>
                    <li>Rock crushes Scissors</li>
                </ul>
            </div>


            <a href="#" target=”_blank” class="uk-button uk-button-default button button-teal-on-white">Visit Site</a>

        </div>
    </section>
    <?php include '../includes/project-gallery.php'; ?>
</div>

<?php
include "../includes/footer.php";
include "../includes/scripts.php";
include "../includes/analytics.php";
include "../includes/close.php";
?>
