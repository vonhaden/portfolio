<?php
// Project Details
$projectTitle = 'Tozai Hotel';

// Project Type
$projectType = 'web';

// Tags
$projectTags = [
    'HTML',
    'CSS'
];

// Feature Image
$projectImage = '../img/projects/tozai-hotel/feature.png';
$projectImageAlt = 'The Tozai Hotel website displayed on a laptop, tablet, and phone.';

// Project Description
$projectDescription = 'Tozai Hotel’s website was built to be simple and attractive. The site is fully response with semantic HTML and hand coded media queries.  ';

// Gallery
// each array is an individual thumbnail item
$filePath = '../img/projects/tozai-hotel/';
$galleryPath = 'gallery/';
$thumbnailPath = 'thumb/';
$projectGallery = [
    array(
        'href' => $filePath . $galleryPath . 'Tozai-Home-Desktop.jpg',
        'caption' => 'Home - Desktop View',
        'alt' => 'Screenshot of Tozai Hotel\'s home page.' ,
        'thumbnail' => $filePath . $thumbnailPath . 'Tozai-Home-Desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Tozai-Home-Tablet.jpg',
        'caption' => 'Home - Tablet View',
        'alt' => 'Screenshot of Tozai Hotel\'s home page.',
        'thumbnail' => $filePath . $thumbnailPath . 'Tozai-Home-Tablet.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Tozai-Home-Phone.jpg',
        'caption' => 'Home - Mobile View',
        'alt' => 'Screenshot of Tozai Hotel\'s home page.',
        'thumbnail' => $filePath . $thumbnailPath . 'Tozai-Home-Phone.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Tozai-Garden-Desktop.jpg',
        'caption' => 'Garden - Desktop View',
        'alt' => 'Screenshot of Tozai Hotel\'s garden page.',
        'thumbnail' => $filePath . $thumbnailPath . 'Tozai-Garden-Desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Tozai-Garden-Tablet.jpg',
        'caption' => 'Garden - Tablet View',
        'alt' => 'Screenshot of Tozai Hotel\'s garden page.',
        'thumbnail' => $filePath . $thumbnailPath . 'Tozai-Garden-Tablet.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Tozai-Garden-Phone.jpg',
        'caption' => 'Garden - Mobile View',
        'alt' => 'Screenshot of Tozai Hotel\'s garden page.',
        'thumbnail' => $filePath . $thumbnailPath . 'Tozai-Garden-Phone.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Tozai-Reservations-Desktop.jpg',
        'caption' => 'Reservations - Desktop View',
        'alt' => 'Screenshot of Tozai Hotel\'s reservation page.',
        'thumbnail' => $filePath . $thumbnailPath . 'Tozai-Reservations-Desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Tozai-Reservations-Tablet.jpg',
        'caption' => 'Reservations - Tablet View',
        'alt' => 'Screenshot of Tozai Hotel\'s reservation page.',
        'thumbnail' => $filePath . $thumbnailPath . 'Tozai-Reservations-Tablet.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Tozai-Reservations-Phone.jpg',
        'caption' => 'Reservations - Mobile View',
        'alt' => 'Screenshot of Tozai Hotel\'s reservation page.',
        'thumbnail' => $filePath . $thumbnailPath . 'Tozai-Reservations-Phone.jpg'
    )
];


// set page title
$pageTitle = 'Andrew Von Haden | ' . $projectTitle;

// set meta description
$metaDescription = $projectDescription;

// includes
include "../includes/head.php";
include "../includes/nav.php";
?>

<main>
    <div class="project">
        <?php include '../includes/project-header.php'; ?>
        <section class="project-body uk-section">
            <div class="uk-container" uk-scrollspy="target: > div; cls: uk-animation-slide-left; offset-top: -150">

                <img class="full-width-image uk-margin-large-bottom" data-src="../img/projects/tozai-hotel/highlight-1.jpg" alt="Tozai Hotel homepage screenshot." uk-img>

                <a href="http://tozai.andrewvonhaden.com/" target=”_blank” class="uk-button uk-button-default button button-teal-on-white">Visit Site</a>

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
