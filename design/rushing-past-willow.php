<?php
// Project Title
$projectTitle = 'Rushing Past Willow';
// Page Title
$pageTitle = 'Andrew Von Haden | ' . $projectTitle;

// Project Type
$projectType = 'design';

// Project Description
$projectDescription = 'This is the packaging design for Nick Zoulek\'s first studio album, Rushing Past Willow. The design features a painting created by Tim Zoulek as well as my photography.';
// set meta description
$metaDescription = '';


// Tags
$projectTags = [
    'Print Design',
    'Package Design',
    'Photography'
];


// Feature Image
$projectImage = '../img/projects/rushing-past-willow/feature.jpg';
$projectImageAlt = '';


// Gallery
// each array is an individual thumbnail item
$filePath = '../img/projects/rushing-past-willow/';
$galleryPath = 'gallery/';
$thumbnailPath = 'thumb/';
$projectGallery = [
    array(
        'href' => $filePath . $galleryPath . 'cover.jpg',
        'caption' => 'Cover',
        'alt' => 'The cover of Rushing Past Willow.',
        'thumbnail' => $filePath . $thumbnailPath . 'cover.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'back.jpg',
        'caption' => 'Back Cover',
        'alt' => 'The back cover of Rushing Past Willow.',
        'thumbnail' => $filePath . $thumbnailPath . 'back.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'back-and-cover.jpg',
        'caption' => 'Cover and Back',
        'alt' => 'The cover and back of Rushing Past Willow.',
        'thumbnail' => $filePath . $thumbnailPath . 'back-and-cover.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'portrait.jpg',
        'caption' => 'Portrait Page',
        'alt' => 'A portrait of Nick Zoulek playing the sax on Rushing Past Willow.',
        'thumbnail' => $filePath . $thumbnailPath . 'portrait.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'trifold.jpg',
        'caption' => 'Inside Trifold',
        'alt' => 'The interior trifold of Rushing Past Willow.',
        'thumbnail' => $filePath . $thumbnailPath . 'trifold.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'photo-cd.jpg',
        'caption' => 'Cover and CD',
        'alt' => 'A photo of the cover and CD of Rushing Past Willow.',
        'thumbnail' => $filePath . $thumbnailPath . 'photo-cd.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'photo-cover.jpg',
        'caption' => 'Cover',
        'alt' => 'A photo of the cover of Rushing Past Willow.',
        'thumbnail' => $filePath . $thumbnailPath . 'photo-cover.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'photo-spread.jpg',
        'caption' => 'Cover and Back',
        'alt' => 'A photo of the cover and back of Rushing Past Willow.',
        'thumbnail' => $filePath . $thumbnailPath . 'photo-spread.jpg'
    )
];


// includes
include "../includes/head.php";
include "../includes/nav.php";
?>




<div class="project">
    <?php include '../includes/project-header.php'; ?>
    <section class="project-body uk-section">
        <div class="uk-container">
            <img class="full-width-image" data-src="../img/projects/rushing-past-willow/highlight-1.jpg" alt="The cover of Rushing Past Willow." uk-img>
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
