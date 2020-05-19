<?php
// Project Title
$projectTitle = 'Rock League Baseball Brochure';
// Page Title
$pageTitle = 'Andrew Von Haden | ' . $projectTitle;

// Project Type
$projectType = 'design';

// Project Description
$projectDescription = 'This brochure was created to advertise the new baseball league run by The Rock Sports Complex in Franklin, Wisconsin.';
// set meta description
$metaDescription = '';


// Tags
$projectTags = [
    'Print Design',
];


// Feature Image
$projectImage = '../img/projects/rock-league/feature.png';
$projectImageAlt = 'The Rock League Baseball brochure.';


// Gallery
// each array is an individual thumbnail item
$filePath = '../img/projects/rock-league/';
$galleryPath = 'gallery/';
$thumbnailPath = 'thumb/';
$projectGallery = [
    array(
        'href' => $filePath . $galleryPath . '1.jpg',
        'caption' => 'Cover',
        'alt' => 'The cover of the Rock League Baseball brochure.',
        'thumbnail' => $filePath . $thumbnailPath . '1.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . '2.jpg',
        'caption' => 'Brochure Page 1',
        'alt' => 'Page 1 of the Rock League Baseball brochure.',
        'thumbnail' => $filePath . $thumbnailPath . '2.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . '3.jpg',
        'caption' => 'Brochure Page 2',
        'alt' => 'Page 2 of the Rock League Baseball brochure.',
        'thumbnail' => $filePath . $thumbnailPath . '3.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . '4.jpg',
        'caption' => 'Brochure Page 3',
        'alt' => 'Page 3 of the Rock League Baseball brochure.',
        'thumbnail' => $filePath . $thumbnailPath . '4.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . '5.jpg',
        'caption' => 'Brochure Page 4',
        'alt' => 'Page 4 of the Rock League Baseball brochure.',
        'thumbnail' => $filePath . $thumbnailPath . '5.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . '6.jpg',
        'caption' => 'Back',
        'alt' => 'The back of the Rock League Baseball brochure.',
        'thumbnail' => $filePath . $thumbnailPath . '6.jpg'
    ),
];


// includes
include "../includes/head.php";
include "../includes/nav.php";
?>




<div class="project">
    <?php include '../includes/project-header.php'; ?>
    <section class="project-body uk-section">
        <div class="uk-container">
            <img class="full-width-image uk-margin-large-bottom" data-src="../img/projects/rock-league/highlight-1.jpg" alt="The exterior of the Rock League Baseball brochure." uk-img>
            <img class="full-width-image" data-src="../img/projects/rock-league/highlight-2.jpg" alt="The interior of the Rock League Baseball brochure." uk-img>
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
