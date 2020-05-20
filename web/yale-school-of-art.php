<?php
// Project Title
$projectTitle = 'Yale School of Art Redesign';
// Page Title
$pageTitle = 'Andrew Von Haden | ' . $projectTitle;


// Project Type
$projectType = 'web';


// Project Description
$projectDescription = 'Lorem Ipsum';
// set meta description
$metaDescription = '';


// Tags
$projectTags = [
    'UI Design',
    'PHP',
    'Bootstrap',
    'SCSS',
    'HTML'
];


// Feature Image
$projectImage = '../img/projects/yale/feature.webp';
$projectImageAlt = 'The Yale School of Art website displayed on a laptop.';


// Gallery
// each array is an individual thumbnail item
$filePath = '../img/projects/yale/';
$galleryPath = 'gallery/';
$thumbnailPath = 'thumb/';
$projectGallery = [
    array(
        'href' => $filePath . $galleryPath . 'Yale-Home.jpg',
        'caption' => 'Yale School of Art - Home Page',
        'alt' => 'The home page of the Yale School of Art redesign.',
        'thumbnail' => $filePath . $thumbnailPath . 'Yale-Home.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Yale-Programs.jpg',
        'caption' => 'Yale School of Art - Programs',
        'alt' => 'The programs page of the Yale School of Art redesign.',
        'thumbnail' => $filePath . $thumbnailPath . 'Yale-Programs.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Yale-Courses.jpg',
        'caption' => 'Yale School of Art - Courses',
        'alt' => 'The courses page of the Yale School of Art redesign.',
        'thumbnail' => $filePath . $thumbnailPath . 'Yale-Courses.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Yale-Student-Work.jpg',
        'caption' => 'Yale School of Art - Student Work',
        'alt' => 'The student work page of the Yale School of Art redesign.',
        'thumbnail' => $filePath . $thumbnailPath . 'Yale-Student-Work.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Yale-Submit-Art.jpg',
        'caption' => 'Yale School of Art - Upload Art',
        'alt' => 'Uploading art to the Yale School of Art redesign.',
        'thumbnail' => $filePath . $thumbnailPath . 'Yale-Submit-Art.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Yale-Calendar.jpg',
        'caption' => 'Yale School of Art - Calendar',
        'alt' => 'The calendar page of the Yale School of Art redesign.',
        'thumbnail' => $filePath . $thumbnailPath . 'Yale-Calendar.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Yale-Add-Event.jpg',
        'caption' => 'Yale School of Art - Add an Event',
        'alt' => 'Adding an event to the calendar on the Yale School of Art redesign.',
        'thumbnail' => $filePath . $thumbnailPath . 'Yale-Add-Event.jpg'
    )
];


// includes
include "../includes/head.php";
include "../includes/nav.php";
?>


<div class="project">
    <?php include '../includes/project-header.php'; ?>
    <section class="project-body uk-section">
        <div class="uk-container" uk-scrollspy="target: > div; cls: uk-animation-slide-left; offset-top: -150">

            <img class="full-width-image uk-margin-large-bottom" data-src="../img/projects/project/yale/highlight-1.webp" alt="" uk-img>

            <div class="body-section uk-margin-medium-bottom">
                <h2>Title</h2>
                <p>Lorem Ipsum.</p>
            </div>

            <div class="body-section uk-margin-medium-bottom" uk-scrollspy-class="uk-animation-slide-right">
                <h2>Title</h2>
                <p>Lorem Ipsum.</p>
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
