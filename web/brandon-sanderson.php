<?php
// Project Title
$projectTitle = 'Brandon Sanderson Site';
// Page Title
$pageTitle = 'Andrew Von Haden | ' . $projectTitle;


// Project Type
$projectType = 'web';


// Project Description
$projectDescription = 'Lorem Ipsum';
// set meta description
$metaDescription = '';


// Tags
$projectTags = [
    'PHP',
    'WordPress',
    'SCSS'
];


// Feature Image
$projectImage = '../img/projects/brandon-sanderson/feature.webp';
$projectImageAlt = '';


// Gallery
// each array is an individual thumbnail item
$filePath = '../img/projects/brandon-sanderson/';
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

            <img class="full-width-image uk-margin-large-bottom" data-src="../img/projects/brandon-sanderson/highlight-1.webp" alt="Brandon Sanderson website home page." uk-img>

            <div class="body-section uk-margin-medium-bottom">
                <h2>Title</h2>
                <p>Lorem Ipsum.</p>
            </div>

            <div class="body-section uk-margin-medium-bottom" uk-scrollspy-class="uk-animation-slide-right">
                <h2>Title</h2>
                <p>Lorem Ipsum.</p>
            </div>

            <a href="#" target=”_blank” class="uk-button uk-button-default button button-teal-on-white">Visit Site</a>

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
