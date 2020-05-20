<?php
// Project Title
$projectTitle = 'WCTC';
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
];


// Feature Image
$projectImage = '../img/projects/wctc/feature.webp';
$projectImageAlt = 'The redesigned course search page on the WCTC web site.';


// Gallery
// each array is an individual thumbnail item
$filePath = '../img/projects/wctc/';
$galleryPath = 'gallery/';
$thumbnailPath = 'thumb/';
$projectGallery = [
    array(
        'href' => $filePath . $galleryPath . 'course-search-desktop.jpg',
        'caption' => 'Course Search - Desktop',
        'alt' => 'The redesigned course search page on the WCTC site.',
        'thumbnail' => $filePath . $thumbnailPath . 'course-search-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'course-search-tablet.jpg',
        'caption' => 'Course Search - Tablet',
        'alt' => 'The redesigned course search page on the WCTC site.',
        'thumbnail' => $filePath . $thumbnailPath . 'course-search-tablet.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'course-search-phone.jpg',
        'caption' => 'Course Search - Mobile',
        'alt' => 'The redesigned course search page on the WCTC site.',
        'thumbnail' => $filePath . $thumbnailPath . 'course-search-phone.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'search-results-desktop.jpg',
        'caption' => 'Search Results - Desktop',
        'alt' => 'The redesigned course search results page on the WCTC site.',
        'thumbnail' => $filePath . $thumbnailPath . 'search-results-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'search-results-tablet.jpg',
        'caption' => 'Search Results - Tablet',
        'alt' => 'The redesigned course search results page on the WCTC site.',
        'thumbnail' => $filePath . $thumbnailPath . 'search-results-tablet.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'search-results-phone.jpg',
        'caption' => 'Search Results - Mobile',
        'alt' => 'The redesigned course search results page on the WCTC site.',
        'thumbnail' => $filePath . $thumbnailPath . 'search-results-phone.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'course-details-desktop.jpg',
        'caption' => 'Course Details - Desktop',
        'alt' => 'The redesigned course details page on the WCTC site.',
        'thumbnail' => $filePath . $thumbnailPath . 'course-details-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'course-details-tablet.jpg',
        'caption' => 'Course Details - Tablet',
        'alt' => 'The redesigned course details page on the WCTC site.',
        'thumbnail' => $filePath . $thumbnailPath . 'course-details-tablet.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'course-details-phone.jpg',
        'caption' => 'Course Details - Mobile',
        'alt' => 'The redesigned course details page on the WCTC site.',
        'thumbnail' => $filePath . $thumbnailPath . 'course-details-phone.jpg'
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

            <img class="full-width-image uk-margin-large-bottom" data-src="../img/projects/wctc/highlight-1.webp" alt="" uk-img>

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
