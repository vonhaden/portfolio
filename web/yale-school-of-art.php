<?php
// Project Title
$projectTitle = 'Yale School of Art Redesign';
// Page Title
$pageTitle = 'Andrew Von Haden | ' . $projectTitle;


// Project Type
$projectType = 'web';


// Project Description
$projectDescription = 'Yale School of Art was looking to update their web presence, as their current website both visually and organizational did not reflect the Ivy League education quality of Yale School of Art and Yale as a whole. Tripwire Creative took on the task of redesign the site and a restructuring of the content from the ground up. The project was taken from proposal to concept to testing prototype.';
// set meta description
$metaDescription = 'Yale School of Art website redesign by Tripwire Creative.';


// Tags
$projectTags = [
    'UI Design',
    'PHP',
    'Bootstrap',
    'SCSS',
    'HTML'
];


// Feature Image
$projectImage = '../img/projects/yale/feature.webp';
$projectImageAlt = 'The Yale School of Art website displayed on a laptop.';


// Gallery
// each array is an individual thumbnail item
$filePath = '../img/projects/yale/';
$galleryPath = 'gallery/';
$thumbnailPath = 'thumb/';
$projectGallery = [
    array(
        'href' => $filePath . $galleryPath . 'Yale-Home.jpg',
        'caption' => 'Yale School of Art - Home Page',
        'alt' => 'The home page of the Yale School of Art redesign.',
        'thumbnail' => $filePath . $thumbnailPath . 'Yale-Home.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Yale-Programs.jpg',
        'caption' => 'Yale School of Art - Programs',
        'alt' => 'The programs page of the Yale School of Art redesign.',
        'thumbnail' => $filePath . $thumbnailPath . 'Yale-Programs.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Yale-Courses.jpg',
        'caption' => 'Yale School of Art - Courses',
        'alt' => 'The courses page of the Yale School of Art redesign.',
        'thumbnail' => $filePath . $thumbnailPath . 'Yale-Courses.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Yale-Student-Work.jpg',
        'caption' => 'Yale School of Art - Student Work',
        'alt' => 'The student work page of the Yale School of Art redesign.',
        'thumbnail' => $filePath . $thumbnailPath . 'Yale-Student-Work.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Yale-Submit-Art.jpg',
        'caption' => 'Yale School of Art - Upload Art',
        'alt' => 'Uploading art to the Yale School of Art redesign.',
        'thumbnail' => $filePath . $thumbnailPath . 'Yale-Submit-Art.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Yale-Calendar.jpg',
        'caption' => 'Yale School of Art - Calendar',
        'alt' => 'The calendar page of the Yale School of Art redesign.',
        'thumbnail' => $filePath . $thumbnailPath . 'Yale-Calendar.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Yale-Add-Event.jpg',
        'caption' => 'Yale School of Art - Add an Event',
        'alt' => 'Adding an event to the calendar on the Yale School of Art redesign.',
        'thumbnail' => $filePath . $thumbnailPath . 'Yale-Add-Event.jpg'
    )
];


// includes
include "../includes/head.php";
include "../includes/nav.php";
?>

<main>
    <div class="project">
        <?php include '../includes/project-header.php'; ?>
        <section class="project-body uk-section">
            <div class="uk-container" uk-scrollspy="target: > div; cls: uk-animation-slide-left; offset-top: -150">

                <img class="full-width-image uk-margin-large-bottom" data-src="../img/projects/project/yale/highlight-1.webp" alt="" uk-img>

                <div class="body-section uk-margin-medium-bottom">
                    <h2>Tripwire Creative</h2>
                    <p class="uk-margin-bottom">The Tripwire team that worked on this project was made up of:</p>

                    <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-3@m">
                        <div class="uk-margin-bottom">
                            <h4 class="uk-margin-small-bottom">Lauren Zache</h4>
                            <ul class="uk-margin-remove-top">
                                <li>Project Manager</li>
                                <li>User Researcher</li>
                                <li>Information Architect</li>
                                <li>Content Strategist</li>
                            </ul>
                        </div>

                        <div class="uk-margin-bottom">
                            <h4 class="uk-margin-small-bottom">Stephany Reynolds</h4>
                            <ul class="uk-margin-remove-top">
                                <li>Interaction Designer</li>
                                <li>Brand Strategist</li>
                                <li>Business Analyst</li>
                            </ul>
                        </div>

                        <div class="uk-margin-bottom">
                            <h4 class="uk-margin-small-bottom">Andrew Von Haden</h4>
                            <ul class="uk-margin-remove-top">
                                <li>Visual Designer</li>
                                <li>Front End Developer</li>
                                <li>Back End Developer</li>
                                <li>Copywriter</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="body-section uk-margin-medium-bottom uk-clearfix" uk-scrollspy-class="uk-animation-slide-right">
                    <img class="uk-box-shadow-medium
                                uk-float-right
                                uk-width-small
                                uk-width-medium@m
                                uk-visible@s
                                uk-margin-large-left
                                uk-margin-bottom"
                         data-src="../img/projects/yale/proposal.jpg"
                         alt="Project proposal.."
                         uk-img>

                    <h2 class="uk-margin-remove-top">Project Proposal</h2>
                    <p class="uk-margin-bottom">The team at Tripwire thoroughly examined Yale School of Art’s previous site and considered the school’s business goals while developing a project proposal. The proposal outlined an overview of the project as well at the approach Tripwire was taking in building the site. A detailed explanation of the scope of work explained all of the work that would be preformed in the process of creating the site. Click the below to view the proposal.</p>
                    <a href="../files/Yale-Proposal.pdf" target=”_blank” class="uk-button uk-button-default button button-teal-on-white" download>View the Proposal</a>


    <!--                <img class="full-width-image" data-src="../img/projects/yale/proposal.jpg" alt="photo upload." uk-img>-->

                </div>

                <div class="body-section uk-margin-medium-bottom">
                    <h2>Mockup</h2>
                    <p>After careful planning of the content and the structure of the site, mockups were created to show how all of the pages of the site would look and function. These mockups were created for desktop, tablet, and mobile views so that every viewer of the site would receive an optimal experience regardless of platform.</p>
                </div>

                <div class="body-section uk-margin-medium-bottom" uk-scrollspy-class="uk-animation-slide-right">
                    <h2>Prototype and Testing</h2>
                    <p>A functional prototype of the site was developed in order to perform user testing. The site was built out with only the needed functionality for testing, so some pages have been left out and some features are only representations of actual functionality. Since the site was only tested on desktop, that view of the site was the only one built out. Subjects were brought in to perform various tasks on the site while being observed and to provide feedback. Those observations and user feedback were taken and used to modify the site to better serve the users.</p>
                </div>

                <a href="http://www.yale.andrewvonhaden.com/" target=”_blank” class="uk-button uk-button-default button button-teal-on-white uk-margin-small-right uk-margin-bottom">View Prototype</a>
                <a href="https://github.com/vonhaden/Yale-School-of-Art-Website" target=”_blank” class="uk-button uk-button-default button button-teal-on-white uk-margin-bottom">View on GitHub</a>

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
