<?php
// Project Title
$projectTitle = 'FSA Brew';
// Page Title
$pageTitle = 'Andrew Von Haden | ' . $projectTitle;

// Project Type
$projectType = 'design';

// Project Description
$projectDescription = 'Every year, Northwestern Mutual gives out their Financial Security Award to Financial Representatives who achieve very highly in the area of financial security. To celebrate their achievements, we created this custom beer label which with the help of the MKE Brewing Company was printed and put on their bottles. The beer was served during a cocktail hour at Northwestern Mutual\'s annual meeting.';
// set meta description
$metaDescription = 'The FSA Brew label, designed by Andrew Von Haden.';


// Tags
$projectTags = [
    'Print Design',
    'Package Design'
];


// Feature Image
$projectImage = '../img/projects/fsa-brew/label.jpg';
$projectImageAlt = 'FSA Brew label.';


// includes
include "../includes/head.php";
include "../includes/nav.php";
?>




<div class="project">
    <?php include '../includes/project-header.php'; ?>
    <section class="project-body uk-section">
        <div class="uk-container">
            <img class="full-width-image" data-src="../img/projects/fsa-brew/label.jpg" alt="FSA Brew label." uk-img>
        </div>
    </section>
</div>

<?php
include "../includes/footer.php";
include "../includes/scripts.php";
include "../includes/analytics.php";
include "../includes/close.php";
?>
