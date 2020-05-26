<?php
// Project Title
$projectTitle = 'Costog';
// Page Title
$pageTitle = 'Andrew Von Haden | ' . $projectTitle;


// Project Type
$projectType = 'web';


// Project Description
$projectDescription = 'Costog is a site with the purpose of providing cosplay photographers a platform to have their work critiqued. Members can leave feedback on other’s work as well as upload their own photos. As users add more photos and critiques, they will earn points which will increase their rank. The site was built entirely in Vue and uses Firebase for its database.';
// set meta description
$metaDescription = 'Costog is a website where cosplay photographers can upload their photos and have them critiqued. The site was built in Vue with Firebase by Andrew Von Haden.';


// Tags
$projectTags = [
    'Vue',
    'BootstrapVue',
    'SCSS',
    'JavaScript',
    'Firebase',
    'HTML'
];


// Feature Image
$projectImage = '../img/projects/costog/feature.webp';
$projectImageAlt = '';


// Gallery
// each array is an individual thumbnail item
$filePath = '../img/projects/costog/';
$galleryPath = 'gallery/';
$thumbnailPath = 'thumb/';
$projectGallery = [
    array(
        'href' => $filePath . $galleryPath . 'Costog-Home-Desktop-1280p.webp',
        'caption' => 'Costog - Home',
        'alt' => 'Costog home page.',
        'thumbnail' => $filePath . $thumbnailPath . 'Costog-Home-Desktop-1280p.webp'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Costog-Home-Tablet.webp',
        'caption' => 'Costog - Home - Tablet',
        'alt' => 'Costog home page on a tablet.',
        'thumbnail' => $filePath . $thumbnailPath . 'Costog-Home-Tablet.webp'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Costog-Home-Phone.webp',
        'caption' => 'Costog - Home - Mobile',
        'alt' => 'Costog home page on mobile.',
        'thumbnail' => $filePath . $thumbnailPath . 'Costog-Home-Phone.webp'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Costog-Photo.webp',
        'caption' => 'Costog - Photo Page',
        'alt' => 'Costog photo page example.',
        'thumbnail' => $filePath . $thumbnailPath . 'Costog-Photo.webp'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Costog-Upload.webp',
        'caption' => 'Costog - Photo Upload',
        'alt' => 'Costog photo upload page example.',
        'thumbnail' => $filePath . $thumbnailPath . 'Costog-Upload.webp'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Costog-Photo-Details.webp',
        'caption' => 'Costog - Photo Upload Details',
        'alt' => 'Costog photo details page example.',
        'thumbnail' => $filePath . $thumbnailPath . 'Costog-Photo-Details.webp'
    ),
    array(
        'href' => $filePath . $galleryPath . 'Costog-Profile.webp',
        'caption' => 'Costog - Profile Page',
        'alt' => 'Costog profile page example.',
        'thumbnail' => $filePath . $thumbnailPath . 'Costog-Profile.webp'
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

<!--            <img class="full-width-image uk-margin-large-bottom" data-src="../img/projects/costog/highlight-1.webp" alt="" uk-img>-->

            <div class="body-section uk-margin-medium-bottom">
                <h2>Development</h2>
                <p>Costog is a single page application that was originally built with the CDN version of Vue. It was recently rebuilt in the CLI version of Vue to make the project more modular and allow for easier continued development.</p>
                <p>The app has several plugins and dependencies that it utilizes. Vue Router was used for the managing of pages, Bootstrap Vue handles a majority of the styles on the site, and Vee Validate 3 was implemented to validate all form submissions.</p>
            </div>

            <div class="body-section uk-margin-medium-bottom" uk-scrollspy-class="uk-animation-slide-right">
                <h2>Firebase</h2>
                <p>Costog uses the Cloud Firestore NoSQL database by Firebase for storing both data and images.  User signup and login is also handled Firebase’s authentication system. Because of the database’s real time data syncing, content can be updated in real time without the user needing to refresh.</p>
            </div>

            <div class="body-section uk-margin-medium-bottom">
                <h2>Photo Uploading</h2>
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-width-1-2@m uk-width-2-3@l uk-margin-bottom">
                        <p>Once a user is logged in, they can upload a photo to the site. The image is validated for mime type and file size. After they upload an image, they are automatically redirected to the photo details page. If the image that is being uploaded has shutter speed, aperture, or ISO metadata attached to it, it will automatically be scrapped from the image and added to the form.</p>
                        <p>After the photo is submitted, the user will be redirected to the photo’s page where other users can leave critiques. If the photo uploader would like to delete their photo, they can click delete and the image will be removed from the site database and storage.</p>
                    </div>
                    <div class="uk-width-1-1 uk-width-1-2@m uk-width-1-3@l">
                        <img class="full-width-image" data-src="../img/projects/costog/highlight-1.jpg" alt="photo upload." uk-img>

                    </div>
                </div>
            </div>

            <a href="https://costog.co/" target=”_blank” class="uk-button uk-button-default button button-teal-on-white uk-margin-small-right ">Visit Site</a>
            <a href="https://github.com/vonhaden/Cosplay-Photo-Critique" target=”_blank” class="uk-button uk-button-default button button-teal-on-white">View on GitHub</a>

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
