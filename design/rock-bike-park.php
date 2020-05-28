<?php
// Project Title
$projectTitle = 'The Rock Bike Park Trail Map';
// Page Title
$pageTitle = 'Andrew Von Haden | ' . $projectTitle;

// Project Type
$projectType = 'design';

// Project Description
$projectDescription = 'This trail map was created for The Rock in Franklin, Wisconsin. The map was printed and placed at various points around the bike park. The inside of the map shows The Rock\'s downhill and cross country bike trails while the interior fold shows information about operating hours, ticket prices, and rentals.';
// set meta description
$metaDescription = 'The Rock Bike Park trail map designed by Andrew Von Haden.';


// Tags
$projectTags = [
    'Print Design',
];


// Feature Image
$projectImage = '../img/projects/rock-bike/feature.png';
$projectImageAlt = 'A picture of the of the Rock Bike Park trail map.';


// Gallery
// each array is an individual thumbnail item
$filePath = '../img/projects/rock-bike/';
$galleryPath = 'gallery/';
$thumbnailPath = 'thumb/';
$projectGallery = [
    array(
        'href' => $filePath . $galleryPath . 'trail-map.jpg',
        'caption' => 'The Rock Bike Park Trail Map',
        'alt' => 'The Rock Bike Park trail map.',
        'thumbnail' => $filePath . $thumbnailPath . 'trail-map.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'cover-picture.jpg',
        'caption' => 'Map Cover',
        'alt' => 'The cover of the Rock Bike Park trail map.',
        'thumbnail' => $filePath . $thumbnailPath . 'cover-picture.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'inside-picture.jpg',
        'caption' => 'Trail Map',
        'alt' => 'A photo of the Rock Bike Park trail map.',
        'thumbnail' => $filePath . $thumbnailPath . 'inside-picture.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'outside-fold.jpg',
        'caption' => 'Map Exterior',
        'alt' => 'The cover and back of the Rock Bike Park trail map. ',
        'thumbnail' => $filePath . $thumbnailPath . 'outside-fold.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'inside-fold.jpg',
        'caption' => 'Interior Fold',
        'alt' => 'The interior fold of the Rock Bike Park trail map.',
        'thumbnail' => $filePath . $thumbnailPath . 'inside-fold.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'outside.jpg',
        'caption' => 'Map Exterior',
        'alt' => 'The full exterior of the Rock Bike Park trail map.',
        'thumbnail' => $filePath . $thumbnailPath . 'outside.jpg'
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
            <div class="uk-container">
                <img class="full-width-image uk-margin-large-bottom" data-src="../img/projects/rock-bike/highlight-1.jpg" alt="The cover of the Rock Bike Park trail map." uk-img>
                <img class="full-width-image" data-src="../img/projects/rock-bike/highlight-2.jpg" alt="A photo of the Rock Bike Park trail map." uk-img>
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
