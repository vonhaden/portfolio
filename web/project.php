<?php
// Project Title
$projectTitle = 'Project Title';
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
    'HTML',
    'SCSS',
    'Vue',
    'JavaScript',
    'Bootstrap'
];


// Feature Image
$projectImage = '../img/projects/';
$projectImageAlt = '';


// Gallery
// each array is an individual thumbnail item
$filePath = '../img/projects/project/';
$galleryPath = 'gallery/';
$thumbnailPath = 'thumb/';
$projectGallery = [
    array(
        'href' => $filePath . $galleryPath . '',
        'caption' => '',
        'alt' => '',
        'thumbnail' => $filePath . $thumbnailPath . ''
    ),
];


// includes
include "../includes/head.php";
include "../includes/nav.php";
?>

<main>
    <div class="project">
        <?php include '../includes/project-header.php'; ?>
        <section class="project-body uk-section">
            <div class="uk-container" uk-scrollspy="target: > div; cls: uk-animation-slide-left; offset-top: -150">

                <img class="full-width-image uk-margin-large-bottom" data-src="../img/laptop.png" alt="" uk-img>

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
</main>

<?php
include "../includes/footer.php";
include "../includes/scripts.php";
include "../includes/analytics.php";
include "../includes/close.php";
?>
