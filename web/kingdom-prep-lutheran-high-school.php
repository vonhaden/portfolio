<?php
// Project Title
$projectTitle = 'Kingdom Prep Lutheran High School';
// Page Title
$pageTitle = 'Andrew Von Haden | ' . $projectTitle;


// Project Type
$projectType = 'web';


// Project Description
$projectDescription = 'Kingdom Prep Lutheran High School was looking to redesign their website. Their previous site was very basic and lacked information that both students and parents were looking for. Under our team at Tripwire Creative, we fully redesigned Kingdom Prep’s website from the ground up. WordPress was used to build a dynamic site that easily will fit the school’s growing needs for years to come.';
// set meta description
$metaDescription = 'Kingdom Prep Lutheran High School’s website was fully redesigned from the ground up by the team at Tripwire Creative.';


// Tags
$projectTags = [
    'WordPress',
    'PHP',
    'UI Design',
    'SCSS'
];


// Feature Image
$projectImage = '../img/projects/kingdom-prep/feature.webp';
$projectImageAlt = 'Kingdom Prep High School\'s website';


// Gallery
// each array is an individual thumbnail item
$filePath = '../img/projects/kingdom-prep/';
$galleryPath = 'gallery/';
$thumbnailPath = 'thumb/';
$projectGallery = [
    array(
        'href' => $filePath . $galleryPath . 'kp-home-desktop.jpg',
        'caption' => 'Home Page - Desktop',
        'alt' => 'The home page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-home-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-home-tablet.jpg',
        'caption' => 'Home Page - Tablet',
        'alt' => 'The home page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-home-tablet.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-home-phone.jpg',
        'caption' => 'Home Page - Mobile',
        'alt' => 'The home page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-home-phone.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-about-desktop.jpg',
        'caption' => 'About Page',
        'alt' => 'The about page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-about-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-brotherhood-desktop.jpg',
        'caption' => 'Brotherhood Page',
        'alt' => 'The Brotherhood page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-brotherhood-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-news-desktop.jpg',
        'caption' => 'Kingdom Prep News Page',
        'alt' => 'The news page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-news-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-exploration-desktop.jpg',
        'caption' => 'Exploration Thursday Page',
        'alt' => 'The Exploration Thursday page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-exploration-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-packs-desktop.jpg',
        'caption' => 'Packs Page',
        'alt' => 'The Packs page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-packs-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-directory-desktop.jpg',
        'caption' => 'Staff Directory Page',
        'alt' => 'The staff directory page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-directory-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-directory-single-desktop.jpg',
        'caption' => 'Staff Member Page',
        'alt' => 'An example of a staff member page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-directory-single-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-calendar-list-desktop.jpg',
        'caption' => 'Calendar Page',
        'alt' => 'The calendar page in list view on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-calendar-list-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-enroll-desktop.jpg',
        'caption' => 'Enrollment Page',
        'alt' => 'The enrollment page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-enroll-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'kp-athletics-desktop.jpg',
        'caption' => 'Athletics Page',
        'alt' => 'The athletics page on kplhs.org.',
        'thumbnail' => $filePath . $thumbnailPath . 'kp-athletics-desktop.jpg'
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
            <div class="uk-container" uk-scrollspy="target: > div; cls: uk-animation-slide-left; offset-top: -150">

                <img class="full-width-image uk-margin-large-bottom uk-box-shadow-medium" data-src="../img/projects/kingdom-prep/highlight-1.webp" alt="" uk-img>

                <div class="body-section uk-margin-medium-bottom">
                    <h2>Tripwire Creative</h2>
                    <p class="uk-margin-bottom">The Tripwire team that worked on this project was made up of 4 members:</p>

                    <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-4@l">
                        <div class="uk-margin-bottom">
                            <h4 class="uk-margin-small-bottom">Lauren Zache</h4>
                            <ul class="uk-margin-remove-top">
                                <li>Project Manager</li>
                                <li>Business Analyst</li>
                                <li>Information Architect</li>
                            </ul>
                        </div>

                        <div class="uk-margin-bottom">
                            <h4 class="uk-margin-small-bottom">Alex Meillier</h4>
                            <ul class="uk-margin-remove-top">
                                <li>Content Strategist</li>
                                <li>Interaction Designer</li>
                            </ul>
                        </div>

                        <div class="uk-margin-bottom">
                            <h4 class="uk-margin-small-bottom">Stephany Reynolds</h4>
                            <ul class="uk-margin-remove-top">
                                <li>User Researcher</li>
                                <li>Brand Strategist</li>
                                <li>Visual Designer</li>
                            </ul>
                        </div>

                        <div class="uk-margin-bottom">
                            <h4 class="uk-margin-small-bottom">Andrew Von Haden</h4>
                            <ul class="uk-margin-remove-top">
                                <li>Front End Developer</li>
                                <li>Back End Developer</li>
                                <li>Copywriter</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="body-section uk-margin-medium-bottom" uk-scrollspy-class="uk-animation-slide-right">
                    <h2>Project Proposal</h2>
                    <p>The team at Tripwire thoroughly examined Kingdom Prep’s previous site and considered the school’s business goals while developing a project proposal. The proposal outlined an overview of the project as well at the approach tripwire was taking in building the site. It also walked through the scope of work, what plugins would be needed, and a collection of other information.</p>
                </div>

                <div class="body-section uk-margin-medium-bottom">
                    <h2>Development</h2>
                    <p>Kingdom Prep’s site was developed in WordPress using Divi. The site was fully mockup up in Adobe XD and then created in Divi’s visual builder. What could not be created using Divi was done a child theme by to add custom styles (written in SCSS).</p>
                    <p>Several plugins were created to extend the base functionality of the site. These include Modern Events Calendar, WP Forms, and Staff List. Custom post types were created in the child theme to further expand the functionality of the site. Styles had to be written for all of the plugins to blend them seamlessly in to the site’s look and feel.</p>
                </div>

                <a href="https://kplhs.org/" target=”_blank” class="uk-button uk-button-default button button-teal-on-white">Visit Site</a>

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
