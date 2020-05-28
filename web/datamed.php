<?php
// Project Title
$projectTitle = 'DataMed';
// Page Title
$pageTitle = 'Andrew Von Haden | ' . $projectTitle;


// Project Type
$projectType = 'web';


// Project Description
$projectDescription = 'DataMed is a medical technology company that develops software for displaying and sharing electronic medical health records. This project involved creating a new interface design for their website to provide a clearer experience to their clients and users. Wireframes and mockups were developed in Adobe XD to create the structure and look and feel of the new site. A large collection of page designs were created in order to span the breadth of the site.';
// set meta description
$metaDescription = 'This project for DataMed involved creating wireframes and mockup for a new interface design on their website. The wireframes and mockups were created by Andrew Von Haden in Adobe XD.';


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

<main>
    <div class="project">
        <?php include '../includes/project-header.php'; ?>

        <section class="project-body uk-section">
            <div class="uk-container uk-clearfix" uk-scrollspy="target: > div; cls: uk-animation-slide-left; offset-top: -150">
                <img class="uk-box-shadow-medium
                            uk-float-right
                            uk-width-medium@m
                            uk-width-small
                            uk-visible@s
                            uk-margin-large-left
                            uk-margin-bottom
                            "
                     data-src="../img/projects/datamed/highlight-1.webp"
                     alt="Datamed homepage."
                     uk-img>

                <div class="body-section uk-margin-medium-bottom">
                    <h2>Home Page</h2>
                    <p>The home page wireframe was developed first to serve as the backbone of the site. The design is bright and modern to invoke the feeling of cleanliness, using the red for DataMed’s logo highlight areas of importance. The top-level navigation was built to give users a clear path to finding anything they might need on the site, with sections that drop down in the form of a well-organized megamenu.</p>
                    <p>A heavy emphasis was placed on the call to action with a jumbotron slider being the first thing users see in the page content. The rest of the page highlights many areas of the site that a variety of users are likely to access. The fat footer serves the purpose of breaking up all the content links of the site in an organized fashion, so that if a user manages to not find what they are looking for on the page, the footer will solve that issue.</p>
                </div>

                <div class="body-section uk-margin-medium-bottom" uk-scrollspy-class="uk-animation-slide-right">
                    <h2>Development</h2>
                    <p>The pages were designed in Adobe XD and made to live in a middle group between mockup and wireframe. They have more color and design choices that you would normally find in a wireframe, but without fully adding all of the design element and images you would find in a mockup. This allowed for a strong focus on the base UI and UX, but without foregoing aesthetics. The focus was aimed at creating a great experience at the desktop view, so all of the pages were created using a 12-column grid at a 1080p resolution (other than the home page, which has tablet and mobile wireframes).</p>
                </div>



                <a href="../files/DataMed.xd" target=”_blank” class="uk-button uk-button-default button button-teal-on-white" download>View the Project in XD</a>

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
