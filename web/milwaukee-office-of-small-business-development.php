<?php
// Project Details
$projectTitle = 'Milwaukee Office of Small Business Development';

// Project Type
$projectType = 'web';

// Tags
$projectTags = [
    'HTML',
    'SCSS',
    'Bootstrap'
];

// Feature Image
$projectImage = '../img/projects/osbd/feature.png';
$projectImageAlt = 'The Milwaukee Office of Small Business Development site displayed on a laptop, tablet, and phone';

// Project Description
$projectDescription = 'This layout for the Milwaukee Office of Small Business Development was created during my internship at 2-story Creative. The mockup was created by a Beki Clark González, the Senior Art Director at 2-Story. I took that mockup and translated it in responsive web layout using Bootstrap. These files were then sent over to the Titan CMS to be implemented into their system.';

// Gallery
// each array is an individual thumbnail item
$filePath = '../img/projects/osbd/';
$galleryPath = 'gallery/';
$thumbnailPath = 'thumb/';
$projectGallery = [
    array(
        'href' => $filePath . $galleryPath . 'OSBD-Home-Desktop.jpg',
        'caption' => 'Office of Small Business Development - Desktop View',
        'alt' => 'Screenshot of the Office of Small Business Development website.',
        'thumbnail' => $filePath . $thumbnailPath . 'OSBD-Home-Desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'OSBD-Home-Tablet.jpg',
        'caption' => 'Office of Small Business Development - Tablet View',
        'alt' => 'Screenshot of the Office of Small Business Development website.',
        'thumbnail' => $filePath . $thumbnailPath . 'OSBD-Home-Tablet.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'OSBD-Home-Phone.jpg',
        'caption' => 'Office of Small Business Development - Mobile View',
        'alt' => 'Screenshot of the Office of Small Business Development website.',
        'thumbnail' => $filePath . $thumbnailPath . 'OSBD-Home-Phone.jpg'
    ),
];


// set page title
$pageTitle = 'Andrew Von Haden | ' . $projectTitle;

// set meta description
$metaDescription = 'This layout for the Milwaukee Office of Small Business Development was created during Andrew Von Haden’s internship at 2-story Creative. It was built using HTML, Bootstrap, and SCSS.';

// includes
include "../includes/head.php";
include "../includes/nav.php";
?>


<div class="project">
    <?php include '../includes/project-header.php'; ?>
    <section class="project-body uk-section">
        <div class="uk-container" uk-scrollspy="target: > div; cls: uk-animation-slide-left; offset-top: -150">

            <img class="full-width-image uk-margin-large-bottom uk-box-shadow-medium" data-src="../img/projects/osbd/highlight-1.jpg" alt="" uk-img>

            <div class="body-section uk-margin-medium-bottom">
                <h2>Project Goals</h2>
                <p>The City of Milwaukee uses that Titan CMS for all of their websites, which is a proprietary content management system. It was my job to take the design that 2-Story had created and turn it in to clean and well documented code that Titan could be handed off to Titan to be implemented.</p>
            </div>
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
