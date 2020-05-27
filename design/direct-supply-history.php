<?php
// Project Title
$projectTitle = 'Direct Supply History';
// Page Title
$pageTitle = 'Andrew Von Haden | ' . $projectTitle;

// Project Type
$projectType = 'design';

// Project Description
$projectDescription = 'This video was created for visitors to Direct Supply\'s campus to get a short look at the history of the company. It covers the 35+ year history of the company and how it has evolved.';
// set meta description
$metaDescription = 'A video of Direct Supply\'s history created by Andrew Von Haden';


// Tags
$projectTags = [
    'Video'
];


// Feature Image
$projectImage = '../img/projects/direct-supply-history/feature.webp';
$projectImageAlt = 'The Direct Supply history video displayed on a TV';


// includes
include "../includes/head.php";
include "../includes/nav.php";
?>




<div class="project">
    <?php include '../includes/project-header.php'; ?>
    <section class="project-body uk-section">
        <div class="uk-container">
            <iframe src="https://www.youtube-nocookie.com/embed/4iURQ5pvgF8" width="1200" height="675" frameborder="0" allowfullscreen uk-responsive uk-video></iframe>
        </div>
    </section>
</div>

<?php
include "../includes/footer.php";
include "../includes/scripts.php";
include "../includes/analytics.php";
include "../includes/close.php";
?>
