<?php
// Project Title
$projectTitle = 'Kingdom Prep Lutheran High School';
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
    'WordPress',
    'PHP',
    'UI Design',
    'SCSS'
];


// Feature Image
$projectImage = '../img/projects/kingdom-prep/feature.webp';
$projectImageAlt = '';


// Gallery
// each array is an individual thumbnail item
$filePath = '../img/projects/kingdom-prep/';
$galleryPath = 'gallery/';
$thumbnailPath = 'thumb/';
$projectGallery = [
    array(
        'href' => $filePath . $galleryPath . 'kp-home-desktop.jpg',
        'caption' => 'Home Page - Desktop',
        'alt' => 'The home page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-home-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-home-tablet.jpg',
        'caption' => 'Home Page - Tablet',
        'alt' => 'The home page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-home-tablet.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-home-phone.jpg',
        'caption' => 'Home Page - Mobile',
        'alt' => 'The home page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-home-phone.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-about-desktop.jpg',
        'caption' => 'About Page',
        'alt' => 'The about page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-about-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-brotherhood-desktop.jpg',
        'caption' => 'Brotherhood Page',
        'alt' => 'The Brotherhood page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-brotherhood-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-news-desktop.jpg',
        'caption' => 'Kingdom Prep News Page',
        'alt' => 'The news page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-news-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-exploration-desktop.jpg',
        'caption' => 'Exploration Thursday Page',
        'alt' => 'The Exploration Thursday page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-exploration-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-packs-desktop.jpg',
        'caption' => 'Packs Page',
        'alt' => 'The Packs page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-packs-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-directory-desktop.jpg',
        'caption' => 'Staff Directory Page',
        'alt' => 'The staff directory page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-directory-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-directory-single-desktop.jpg',
        'caption' => 'Staff Member Page',
        'alt' => 'An example of a staff member page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-directory-single-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-calendar-list-desktop.jpg',
        'caption' => 'Calendar Page',
        'alt' => 'The calendar page in list view on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-calendar-list-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-enroll-desktop.jpg',
        'caption' => 'Enrollment Page',
        'alt' => 'The enrollment page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-enroll-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-athletics-desktop.jpg',
        'caption' => 'Athletics Page',
        'alt' => 'The athletics page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-athletics-desktop.jpg'
    ),

];


// includes
include "../includes/head.php";
include "../includes/nav.php";
?>


<div class="project">
    <?php include '../includes/project-header.php'; ?>
    <section class="project-body uk-section">
        <div class="uk-container" uk-scrollspy="target: > div; cls: uk-animation-slide-left; offset-top: -150">

            <img class="full-width-image uk-margin-large-bottom" data-src="../img/projects/kingdom-prep/highlight-1.webp" alt="" uk-img>

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
