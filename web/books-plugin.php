<?php
// Project Title
$projectTitle = 'Books WordPress Plugin';
// Page Title
$pageTitle = 'Andrew Von Haden | ' . $projectTitle;


// Project Type
$projectType = 'web';


// Project Description
$projectDescription = 'This site, featuring the work of author Brandon Sanderson, was built to showcase the Books WordPress plugin. The plugin was created so that authors could easily build a dynamic site to showcase their work. Simply add a book in the WordPress backend like you would a normal post and it will display fully formatted on the front end.';
// set meta description
$metaDescription = 'This WordPress plugin was created so that authors could easily build a dynamic site to showcase their work. The Books plugin was created by Andrew Von Haden in PHP and can be easily implemented on any WordPress site.';


// Tags
$projectTags = [
    'PHP',
    'WordPress',
    'SCSS'
];


// Feature Image
$projectImage = '../img/projects/books/feature.webp';
$projectImageAlt = '';


// Gallery
// each array is an individual thumbnail item
$filePath = '../img/projects/books/';
$galleryPath = 'gallery/';
$thumbnailPath = 'thumb/';
$projectGallery = [
    array(
        'href' => $filePath . $galleryPath . 'home.jpg',
        'caption' => 'Home Page',
        'alt' => 'The home page of the Brandon Sanderson WordPress site.',
        'thumbnail' => $filePath . $thumbnailPath . 'home.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'books.jpg',
        'caption' => 'Books Page',
        'alt' => 'The books page of the Brandon Sanderson WordPress site.',
        'thumbnail' => $filePath . $thumbnailPath . 'books.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'book-no-reviews.jpg',
        'caption' => 'Single Book',
        'alt' => 'An example of a single book page on the Brandon Sanderson WordPress site.',
        'thumbnail' => $filePath . $thumbnailPath . 'book-no-reviews.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'book-reviews.jpg',
        'caption' => 'Book with Reviews',
        'alt' => 'An example of a book page with reviews on the Brandon Sanderson WordPress site.',
        'thumbnail' => $filePath . $thumbnailPath . 'book-reviews.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'backend-books-list.jpg',
        'caption' => 'WordPress Backend - Books Plugin - List',
        'alt' => 'The list view of the Books Plugin in the WordPress backend.',
        'thumbnail' => $filePath . $thumbnailPath . 'backend-books-list.jpg'
    ),
    array(
        'href' => $filePath . $galleryPath . 'backend-books-add.png',
        'caption' => 'WordPress Backend - Add Book',
        'alt' => 'Adding a book in the Books Plugin in the WordPress backend.',
        'thumbnail' => $filePath . $thumbnailPath . 'backend-books-add.png'
    ),
    array(
        'href' => $filePath . $galleryPath . 'backend-books-genres.png',
        'caption' => 'WordPress Backend - Books Plugin - Genres',
        'alt' => 'The genre list of the Books Plugin in the WordPress backend.',
        'thumbnail' => $filePath . $thumbnailPath . 'backend-books-genres.png'
    ),
    array(
        'href' => $filePath . $galleryPath . 'backend-books-series.png',
        'caption' => 'WordPress Backend - Books Plugin - Series',
        'alt' => 'The series list of the Books Plugin in the WordPress backend.',
        'thumbnail' => $filePath . $thumbnailPath . 'backend-books-series.png'
    ),
    array(
        'href' => $filePath . $galleryPath . 'backend-books-settings.png',
        'caption' => 'WordPress Backend - Books Plugin - Settings',
        'alt' => 'The settings of the Book Plugin in the WordPress backend.',
        'thumbnail' => $filePath . $thumbnailPath . 'backend-books-settings.png'
    ),
    array(
        'href' => $filePath . $galleryPath . 'backend-reviews-list.png',
        'caption' => 'WordPress Backend - Books Plugin - Reviews',
        'alt' => 'The reviews section of the Books WordPress Plugin.',
        'thumbnail' => $filePath . $thumbnailPath . 'backend-reviews-list.png'
    ),
    array(
        'href' => $filePath . $galleryPath . 'backend-reviews-add.png',
        'caption' => 'WordPress Backend - Books Plugin - Add Review',
        'alt' => 'Adding a review in the reviews section of the Books WordPress Plugin.',
        'thumbnail' => $filePath . $thumbnailPath . 'backend-reviews-add.png'
    ),
    array(
        'href' => $filePath . $galleryPath . 'backend-reviews-settings.png',
        'caption' => 'WordPress Backend - Books Plugin - Reviews Settings',
        'alt' => 'The settings of the reviews section of the Books WordPress Plugin.',
        'thumbnail' => $filePath . $thumbnailPath . 'backend-reviews-settings.png'
    ),
    array(
        'href' => $filePath . $galleryPath . 'backend-widgets.png',
        'caption' => 'WordPress Backend - Books Plugin - Recent Books Widget',
        'alt' => 'The most recent books widget of the Books WordPress Plugin.',
        'thumbnail' => $filePath . $thumbnailPath . 'backend-widgets.png'
    )
];


// includes
include "../includes/head.php";
include "../includes/nav.php";
?>


<div class="project">
    <?php include '../includes/project-header.php'; ?>
    <section class="project-body uk-section">
        <div class="uk-container" uk-scrollspy="target: > div; cls: uk-animation-slide-left; offset-top: -150">

            <img class="full-width-image uk-margin-large-bottom uk-box-shadow-medium" data-src="../img/projects/books/highlight-1.webp" alt="Brandon Sanderson website home page." uk-img>

            <div class="body-section uk-margin-medium-bottom">
                <h2>Books</h2>
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-width-1-2@m uk-margin-bottom">
                        <p>The books section of the Books WordPress plugin allows users to enter in individual books into WordPress on the backend. Along with entering a title and description of the book, every book can have a publisher, publish date, page count, and price. Books can also be assigned genres and series.</p>
                        <h3>Book Settings</h3>
                        <p>In the setting for the plugin any one of these custom fields can be disabled. The currency option for the price may also be changed in the setting. Additionally, if you would prefer to change the name of books to something else, this can be changed in the plugin settings.</p>
                    </div>
                    <div class="uk-width-1-1 uk-width-1-2@m">
                        <img class="full-width-image uk-box-shadow-medium" data-src="../img/projects/books/highlight-2.png" alt="Add a book." uk-img>
                    </div>
                </div>
            </div>

            <div class="body-section uk-margin-medium-bottom" uk-scrollspy-class="uk-animation-slide-right">
                <h2>Reviews</h2>
                <p>The Books plugin comes with a Reviews post type that is linked to books. This allows users to add reviews for specific books, which are then shown below the details on an individual book page. The average review score is calculated and shown before the list of individual reviews. Specific parts of the view can be turned off in the settings, such as the score or the reviewer location.</p>
                <p>The reviews also have a shortcode that can be added anywhere on the site. This code pulls a random review from all reviews that have been added to the site.</p>
            </div>

            <div class="body-section uk-margin-medium-bottom">
                <h2>Recent Books Widget</h2>
                <p>The plugin come with a recent books widget which can be added to a sidebar or a footer on the site. The widget displays the most recent books that have been added to the site, the number of which can be configured in the widget options.</p>
            </div>

            <a href="https://books.andrewvonhaden.com/" target=”_blank” class="uk-button uk-button-default button button-teal-on-white">Visit Site</a>

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
