<?php
// Project Details
$projectTitle = 'Seating Chart Generator';

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
$projectImage = '../img/projects/seating-chart-generator/feature.png';
$projectImageAlt = 'Seating chart generator displayed on a laptop.';

// Project Description
$projectDescription = 'Classroom seating charts are a huge pain to create. This web app built using jQuery aims to simplify this process for teachers. Student’s names are entered into the app using the entry form and are automatically sorted in the class list by alphabetical order (last name). Every time the generate button is clicked, a new seating chart is randomly created.';

// Gallery
// each array is an individual thumbnail item
$filePath = '../img/projects/seating-chart-generator/';
$galleryPath = 'gallery/';
$thumbnailPath = 'thumb/';
$projectGallery = [
    array(
        'href' => $filePath . $galleryPath . 'Seating-Empty.jpg',
        'caption' => 'No students entered',
        'alt' => 'The seating chart generator with no students entered.',
        'thumbnail' => $filePath . $thumbnailPath . 'Seating-Empty.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Seating-Full.jpg',
        'caption' => 'Students entered and Chart generated',
        'alt' => 'A seating chart created by the seating chart generator.',
        'thumbnail' => $filePath . $thumbnailPath . 'Seating-Full.jpg'
    ),
];


// set page title
$pageTitle = 'Andrew Von Haden | ' . $projectTitle;

// set meta description
$metaDescription = 'This seating chart generator, built with jQuery by Andrew Von Haden, can easily create endless seating charts for teachers.';

// includes
include "../includes/head.php";
include "../includes/nav.php";
?>


<div class="project">
    <?php include '../includes/project-header.php'; ?>
    <section class="project-body uk-section">
        <div class="uk-container" uk-scrollspy="target: > div; cls: uk-animation-slide-left; offset-top: -150">

            <img class="full-width-image uk-margin-large-bottom" data-src="../img/projects/seating-chart-generator/highlight-1.jpg" alt="" uk-img>

            <a href="https://seating-chart.andrewvonhaden.com/" target=”_blank” class="uk-button uk-button-default button button-teal-on-white">Try the App</a>

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
