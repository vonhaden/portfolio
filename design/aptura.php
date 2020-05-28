<?php
// Project Title
$projectTitle = 'Aptura Rebranding';
// Page Title
$pageTitle = 'Andrew Von Haden | ' . $projectTitle;

// Project Type
$projectType = 'design';

// Project Description
$projectDescription = 'This PowerPoint deck was created for the rebranding of Direct Supply\'s Aptura brand. The presentation uses the Aptura PowerPoint template that I designed. The deck gives a high level overview of the business as well as showcases Aptura\'s high quality design.';
// set meta description
$metaDescription = 'This PowerPoint deck was designed and created by Andrew Von Haden for the rebranding of Direct Supply\'s Aptura brand.';


// Tags
$projectTags = [
    'Presentation Design'
];


// Feature Image
$projectImage = '../img/projects/aptura/feature.png';
$projectImageAlt = 'A collection of slides from the Aptura rebrand deck.';


// Gallery
// each array is an individual thumbnail item
$filePath = '../img/projects/aptura/';
$galleryPath = 'gallery/';
$thumbnailPath = 'thumb/';
$projectGallery = [
    array(
        'href' => $filePath . $galleryPath . '1-Cover.jpg',
        'caption' => 'Cover Slide',
        'alt' => 'The cover slide from the Aptura rebranding deck.',
        'thumbnail' => $filePath . $thumbnailPath . '1-Cover.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . '2-BER.jpg',
        'caption' => 'Build, Equip, Run Slide',
        'alt' => 'The Build, Equip, Run slide from the Aptura rebranding deck.',
        'thumbnail' => $filePath . $thumbnailPath . '2-BER.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . '4-Aptura-Overview.jpg',
        'caption' => 'Development Services Slide',
        'alt' => 'The development services slide from the Aptura rebranding deck.',
        'thumbnail' => $filePath . $thumbnailPath . '4-Aptura-Overview.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . '5-Strategic-Planning.jpg',
        'caption' => 'Strategic Planning Slide',
        'alt' => 'The strategic planning slide from the Aptura rebranding deck.',
        'thumbnail' => $filePath . $thumbnailPath . '5-Strategic-Planning.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . '6-Design.jpg',
        'caption' => 'Award Winning Design Slide',
        'alt' => 'The award winning design slide from the Aptura rebranding deck.',
        'thumbnail' => $filePath . $thumbnailPath . '6-Design.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . '7-Procurement.jpg',
        'caption' => 'Procurement Slide',
        'alt' => 'The procurement slide from the Aptura rebranding deck.',
        'thumbnail' => $filePath . $thumbnailPath . '7-Procurement.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . '8-Project-Management.jpg',
        'caption' => 'Project Management Slide',
        'alt' => 'The project management slide from the Aptura rebranding deck.',
        'thumbnail' => $filePath . $thumbnailPath . '8-Project-Management.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . '9-Portfolio-Exterior.jpg',
        'caption' => 'Building Portfolio Exterior Example Slide',
        'alt' => 'An example of a building exterior shot from the Aptura Portfolio.',
        'thumbnail' => $filePath . $thumbnailPath . '9-Portfolio-Exterior.jpg'
    ),array(
        'href' => $filePath . $galleryPath . '10-Portfolio-Data.jpg',
        'caption' => 'Building Portfolio Statistics Slide',
        'alt' => 'An example of a build\'s data slide from the Aptura rebranding deck.',
        'thumbnail' => $filePath . $thumbnailPath . '10-Portfolio-Data.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . '11-Portfolio-Lobby.jpg',
        'caption' => 'Building Portfolio Interior Example Slide',
        'alt' => 'An example of a building interior shot from the Aptura Portfolio.',
        'thumbnail' => $filePath . $thumbnailPath . '11-Portfolio-Lobby.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . '12-Portfolio-Cafe.jpg',
        'caption' => 'Building Portfolio Interior Example Slide',
        'alt' => 'An example of a building interior shot from the Aptura Portfolio.',
        'thumbnail' => $filePath . $thumbnailPath . '12-Portfolio-Cafe.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . '13-Portfolio-Multiple.jpg',
        'caption' => 'Building Portfolio Interior Example Slide',
        'alt' => 'An example of several building interior shots from the Aptura Portfolio.',
        'thumbnail' => $filePath . $thumbnailPath . '13-Portfolio-Multiple.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . '14-Team.jpg',
        'caption' => 'The Aptura Team Slide',
        'alt' => 'The Aptura team slide from the Aptura rebranding deck.',
        'thumbnail' => $filePath . $thumbnailPath . '14-Team.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . '15-Map.jpg',
        'caption' => 'Aputa\'s Development Map',
        'alt' => 'The development map slide from the Aptura rebranding deck.',
        'thumbnail' => $filePath . $thumbnailPath . '15-Map.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . '16-Aptura.jpg',
        'caption' => 'Closing Slide',
        'alt' => 'The closing slide from the Aptura rebranding deck.',
        'thumbnail' => $filePath . $thumbnailPath . '16-Aptura.jpg'
    )
];


// includes
include "../includes/head.php";
include "../includes/nav.php";
?>

<main>
    <div class="project">
        <?php include '../includes/project-header.php'; ?>
        <?php include '../includes/project-gallery.php'; ?>
    </div>
</main>

<?php
include "../includes/footer.php";
include "../includes/scripts.php";
include "../includes/analytics.php";
include "../includes/close.php";
?>
