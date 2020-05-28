<?php
// Project Details
$projectTitle = 'Midwest Connection';

// Project Type
$projectType = 'web';

// Tags
$projectTags = [
    'PHP',
    'MySQL',
    'UI Design',
    'HTML',
    'CSS'
];

// Feature Image
$projectImage = '../img/projects/midwest-connection/feature.png';
$projectImageAlt = 'Midwest Connection displayed on a laptop, tablet, and phone.';

// Project Description
$projectDescription =
    'The Midwest Connection website serves as a portal for members of the Midwest cosplay community more easily find and connect with photographers and vice versa. Members can create either a cosplayer or photographer profile, and their contact info, a description about themselves, and set what types of projects and events they are interested in. Users can find other members close to them by sorting by state.';

// Gallery
// each array is an individual thumbnail item
$filePath = '../img/projects/midwest-connection/';
$galleryPath = 'gallery/';
$thumbnailPath = 'thumb/';
$projectGallery = [
    array(
        'href' => $filePath . $galleryPath . 'midwest-home-desktop.jpg',
        'caption' => 'Home Page - Desktop View',
        'alt' => 'Screenshot of Midwest Connection\'s home page.' ,
        'thumbnail' => $filePath . $thumbnailPath . 'midwest-home-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'midwest-home-tablet.jpg',
        'caption' => 'Home Page - Tablet View',
        'alt' => 'Screenshot of Midwest Connection\'s home page.',
        'thumbnail' => $filePath . $thumbnailPath . 'midwest-home-tablet.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'midwest-home-phone.jpg',
        'caption' => 'Home Page - Mobile View',
        'alt' => 'Screenshot of Midwest Connection\'s home page.',
        'thumbnail' => $filePath . $thumbnailPath . 'midwest-home-phone.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'midwest-cosplayers-desktop.jpg',
        'caption' => 'Cosplayer Page - Desktop View',
        'alt' => 'Screenshot of Midwest Connection\'s cosplayer page.',
        'thumbnail' => $filePath . $thumbnailPath . 'midwest-cosplayers-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'midwest-cosplayers-tablet.jpg',
        'caption' => 'Cosplayer Page - Tablet View',
        'alt' => 'Screenshot of Midwest Connection\'s cosplayer page.',
        'thumbnail' => $filePath . $thumbnailPath . 'midwest-cosplayers-tablet.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'midwest-cosplayers-phone.jpg',
        'caption' => 'Cosplayer Page - Mobile View',
        'alt' => 'Screenshot of Midwest Connection\'s cosplayer page.',
        'thumbnail' => $filePath . $thumbnailPath . 'midwest-cosplayers-phone.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'midwest-profile-desktop.jpg',
        'caption' => 'Profile Page - Desktop View',
        'alt' => 'Screenshot of Midwest Connection\'s profile page.',
        'thumbnail' => $filePath . $thumbnailPath . 'midwest-profile-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'midwest-profile-tablet.jpg',
        'caption' => 'Profile Page - Tablet View',
        'alt' => 'Screenshot of Midwest Connection\'s profile page.',
        'thumbnail' => $filePath . $thumbnailPath . 'midwest-profile-tablet.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'midwest-profile-phone.jpg',
        'caption' => 'Profile Page - Mobile View',
        'alt' => 'Screenshot of Midwest Connection\'s profile page.',
        'thumbnail' => $filePath . $thumbnailPath . 'midwest-profile-phone.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'midwest-add-desktop.jpg',
        'caption' => 'Add Profile Page - Desktop View',
        'alt' => 'Screenshot of Midwest Connection\'s add profile page.',
        'thumbnail' => $filePath . $thumbnailPath . 'midwest-add-desktop.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'midwest-add-tablet.jpg',
        'caption' => 'Add Profile Page - Tablet View',
        'alt' => 'Screenshot of Midwest Connection\'s add profile page.',
        'thumbnail' => $filePath . $thumbnailPath . 'midwest-add-tablet.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'midwest-add-phone.jpg',
        'caption' => 'Add Profile Page - Mobile View',
        'alt' => 'Screenshot of Midwest Connection\'s add profile page.',
        'thumbnail' => $filePath . $thumbnailPath . 'midwest-add-phone.jpg'
    )
];


// set page title
$pageTitle = 'Andrew Von Haden | ' . $projectTitle;

// set meta description
$metaDescription = 'Midwest Connection is a site with the goal of bringing the Cosplay and Photography communities in the Midwest together. It was developed by Andrew Von Haden using PHP and MySQL.';

// includes
include "../includes/head.php";
include "../includes/nav.php";
?>

<main>
    <div class="project">
        <?php include '../includes/project-header.php'; ?>
        <section class="project-body uk-section">
            <div class="uk-container" uk-scrollspy="target: > div; cls: uk-animation-slide-left; offset-top: -150">

                <img class="full-width-image uk-margin-large-bottom uk-box-shadow-medium" data-src="../img/projects/midwest-connection/highlight-1.jpg" alt="Screenshot of Midwest Connection's homepage." uk-img>

                <div class="body-section uk-margin-medium-bottom">
                    <h2>UI Design</h2>
                    <p>Before any code was written, a mockup of Midwest Connection was created. The UI was created and iterated on in Adobe XD. A mockup of every page of the site was created in Adobe XD. Every aspect of the site’s design was created by Andrew, including the logo and photos.</p>
                </div>

                <div class="body-section uk-margin-medium-bottom" uk-scrollspy-class="uk-animation-slide-right">
                    <h2>Database Design</h2>
                    <p>The MySQL database that was create for this project was designed specifically for this project.</p>
                </div>

                <div class="body-section uk-margin-medium-bottom">
                    <h2>Development</h2>
                    <p>The Midwest Connection site was built with PHP and MySQL. All of the pages on the site include content that is dynamically generated based on the content that is stored the database. Users of the site can also add, remove, and delete information from the base using the respective forms. The site also implements different security measures like sanitization and tokens to prevent a wide range of potential hacks.</p>
                    <p>One of the major tasks of this project was to make the site fully responsive, but to do so without the use of a framework. All of the sites on the site were handwritten using media queries in order to properly display the site regardless of screen size. On top of that, a full set of print styles was created for the site.</p>
                    <p>Currently the site does not feature specific user accounts, so any use of the site can edit or delete a profile as the wish. Individual profiles with permissions will be implemented in a future update.</p>
                </div>


                <a href="http://www.midwest-connection.andrewvonhaden.com/" target=”_blank” class="uk-button uk-button-default button button-teal-on-white">Visit Site</a>

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
