<?php
// Project Details
$projectTitle = 'Project Title';

// Tags
$projectTags = [
    'HTML',
    'SCSS',
    'Vue',
    'JavaScript',
    'Bootstrap'
];

// Feature Image
$projectImage = '../img/laptop.png';
$projectImageAlt = '';

// Project Description
$projectDescription = 'Lorem Ipsum';

// Gallery
// each array is an individual thumbnail item
$projectGallery = [
    array(
        'href' => '../img/cover-bg.jpg',
        'caption' => 'Caption',
        'alt' => 'Image.',
        'thumbnail' => '../img/thumbnails/datamed-thumb.jpg'
    ),
];


// set page title
$pageTitle = 'Andrew Von Haden | ' . $projectTitle;

// set meta description
$metaDescription = '';

// includes
include "../includes/head.php";
include "../includes/nav.php";
?>


<div class="project">

    <section class="project-header uk-section">
        <div class="uk-container">

            <ul class="breadcrumbs uk-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="/web.php">Web</a></li>
                <li><span><?= $projectTitle ?></span></li>
            </ul>

            <h1>
                <?= $projectTitle ?>
            </h1>

            <div class="tags">
                <ul>
                    <?php
                        foreach ($projectTags as $tag) {
                            echo '<li>' . $tag . '</li>';
                        }
                    ?>
                </ul>
            </div>

            <div class="feature-image">
                <img data-src="<?= $projectImage ?>" width="" height="" alt="<?= $projectImageAlt ?>" uk-img>
            </div>

            <div class="project-description">
                <p>
                    <?= $projectDescription ?>
                </p>

            </div>


        </div>
    </section>


    <section class="project-body uk-section">
        <div class="uk-container" uk-scrollspy="target: > div; cls: uk-animation-slide-left; offset-top: -150">

            <img class="full-width-image uk-margin-large-bottom" data-src="../img/laptop.png" alt="" uk-img>

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


    <section class="project-gallery uk-section">
        <div class="uk-container">
            <h2>Gallery</h2>

            <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-child-width-1-4@l" uk-grid uk-lightbox>
                <?php
                foreach ($projectGallery as $galleryItem) {
                    echo '<div class="gallery-link">';
                    echo '<a class="uk-inline" href="' .
                        $galleryItem['href'] .
                        '" data-caption="' .
                        $galleryItem['caption'] .
                        '"data-alt="' .
                        $galleryItem['alt'] .
                        '">';
                    echo '<div class="overlay"></div>';
                    echo '<img src="' .
                        $galleryItem['thumbnail'] .
                        '" alt="Open gallery lightbox.">';
                    echo '</a></div>';
                }
                ?>
            </div>

        </div>
    </section>

</div>



<?php
include "../includes/footer.php";
include "../includes/scripts.php";
include "../includes/analytics.php";
include "../includes/close.php";
?>
