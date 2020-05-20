<?php
// Project Title
$projectTitle = 'DataMed';
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
    'UI Design'
];


// Feature Image
$projectImage = '../img/projects/datamed/feature.webp';
$projectImageAlt = 'DataMed homepage displayed on a laptop.';


// Gallery
// each array is an individual thumbnail item
$filePath = '../img/projects/datamed/';
$galleryPath = 'gallery/';
$thumbnailPath = 'thumb/';
$projectGallery = [
    array(
        'href' => $filePath . $galleryPath . 'home-desktop.jpg',
        'caption' => 'DataMed - Home Page Mockup - Desktop View',
        'alt' => 'Home page mockup for the DataMed website.',
        'thumbnail' => $filePath . $thumbnailPath . 'home-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'home-desktop-images.jpg',
        'caption' => 'DataMed - Desktop Mockup with Images',
        'alt' => 'Home page mockup with images ',
        'thumbnail' => $filePath . $thumbnailPath . 'home-desktop-images.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'home-tablet.jpg',
        'caption' => 'DataMed - Home Page Mockup - Tablet View',
        'alt' => 'Home page mockup for the DataMed website.',
        'thumbnail' => $filePath . $thumbnailPath . 'home-tablet.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'home-phone.jpg',
        'caption' => 'DataMed - Home Page Mockup - Mobile View',
        'alt' => 'Home page mockup for the DataMed website.',
        'thumbnail' => $filePath . $thumbnailPath . 'home-phone.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'collect.jpg',
        'caption' => 'DataMed - Collect Page Mockup',
        'alt' => 'Collect page mockup for the DataMed website.',
        'thumbnail' => $filePath . $thumbnailPath . 'collect.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'collection-manager.jpg',
        'caption' => 'DataMed - Collection Manager Page Mockup',
        'alt' => 'Collection Manager page mockup for the DataMed website.',
        'thumbnail' => $filePath . $thumbnailPath . 'collection-manager.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'megamenu.jpg',
        'caption' => 'DataMed - Megamenu Mockup',
        'alt' => 'Megamenu mockup for the DataMed website.',
        'thumbnail' => $filePath . $thumbnailPath . 'megamenu.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'products.jpg',
        'caption' => 'DataMed - Products Page Mockup',
        'alt' => 'Products page mockup for the DataMed website.',
        'thumbnail' => $filePath . $thumbnailPath . 'products.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'search.jpg',
        'caption' => 'DataMed - Search Page Mockup',
        'alt' => 'Search page mockup for the DataMed website.',
        'thumbnail' => $filePath . $thumbnailPath . 'search.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'profile.jpg',
        'caption' => 'DataMed - Profile Page Mockup',
        'alt' => 'Profile page mockup for the DataMed website.',
        'thumbnail' => $filePath . $thumbnailPath . 'profile.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'order-1.jpg',
        'caption' => 'DataMed - Order Page 1 Mockup',
        'alt' => 'Order page mockup for the DataMed website.',
        'thumbnail' => $filePath . $thumbnailPath . 'order-1.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'order-2.jpg',
        'caption' => 'DataMed - Order Page 2 Mockup',
        'alt' => 'Order page mockup for the DataMed website.',
        'thumbnail' => $filePath . $thumbnailPath . 'order-2.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'order-3.jpg',
        'caption' => 'DataMed - Order Page 3 Mockup',
        'alt' => 'Order page mockup for the DataMed website.',
        'thumbnail' => $filePath . $thumbnailPath . 'order-3.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'order-4.jpg',
        'caption' => 'DataMed - Order Page 4 Mockup',
        'alt' => 'Order page mockup for the DataMed website.',
        'thumbnail' => $filePath . $thumbnailPath . 'order-4.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'intranet.jpg',
        'caption' => 'DataMed - Intranet Mockup',
        'alt' => 'Intranet mockup for the DataMed website.',
        'thumbnail' => $filePath . $thumbnailPath . 'intranet.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'download.jpg',
        'caption' => 'DataMed - Download Mockup',
        'alt' => 'Download mockup for the DataMed website.',
        'thumbnail' => $filePath . $thumbnailPath . 'download.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'datamed-style-tile.jpg',
        'caption' => 'DataMed - Style Tile',
        'alt' => 'Style tile for the DataMed website.',
        'thumbnail' => $filePath . $thumbnailPath . 'datamed-style-tile.jpg'
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

            <img class="full-width-image uk-margin-large-bottom" data-src="../img/projects/datamed/highlight-1.webp" alt="" uk-img>

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
