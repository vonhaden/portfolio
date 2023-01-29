<?php
// set page title
$pageTitle = 'Andrew Von Haden | Design Portfolio';

// set meta description
$metaDescription = 'Andrew Von Haden\'s portfolio of design projects.';

// Thumbnail filepath
$thumbnailPath = '../img/thumbnails/';

$projects = [
    array(
        'name' => 'Rushing Past Willow',
        'tags' => 'print package',
        'src' => $thumbnailPath . 'rpw.jpg',
        'link' => 'design/rushing-past-willow.php'
    ),
    array(
        'name' => 'Rock Bike Park',
        'tags' => 'print',
        'src' => $thumbnailPath . 'bike.jpg',
        'link' => 'design/rock-bike-park.php'
    ),
    array(
        'name' => 'Designer Link',
        'tags' => 'presentation',
        'src' => $thumbnailPath . 'designer-link.jpg',
        'link' => 'design/designer-link.php'
    ),
    array(
        'name' => 'Aptura',
        'tags' => 'presentation',
        'src' => $thumbnailPath . 'aptura.jpg',
        'link' => 'design/aptura.php'
    ),
    array(
        'name' => 'Direct Supply Events',
        'tags' => 'presentation',
        'src' => $thumbnailPath . 'ds-events.jpg',
        'link' => 'design/direct-supply-events.php'
    ),
    array(
        'name' => 'Direct Supply History',
        'tags' => 'video',
        'src' => $thumbnailPath . 'ds-history.jpg',
        'link' => 'design/direct-supply-history.php'
    ),
    array(
        'name' => 'Rock League Baseball',
        'tags' => 'print',
        'src' => $thumbnailPath . 'league.jpg',
        'link' => 'design/rock-league-baseball.php'
    ),
    array(
        'name' => 'FSA Brew',
        'tags' => 'print package',
        'src' => $thumbnailPath . 'fsa.jpg',
        'link' => 'design/fsa-brew.php'
    ),
];


// includes
include "includes/head.php";
include "includes/nav.php";
?>

<main>
    <div class="portfolio uk-section">
        <div class="uk-container">
            <h1>Design Projects</h1>
            <div uk-filter="target: .js-filter">

                <ul class="uk-subnav filter-links" uk-margin>
                    <li class="uk-active" uk-filter-control>
                        <a href="#">All</a>
                    </li>
                    <li uk-filter-control="[data-tags*='print']">
                        <a href="#">Print Design</a>
                    </li>
                    <li uk-filter-control="[data-tags*='presentation']">
                        <a href="#">Presentation Design</a>
                    </li>
                    <li uk-filter-control="[data-tags*='package']">
                        <a href="#">Package Design</a>
                    </li>
                    <li uk-filter-control="[data-tags*='video']">
                        <a href="#">Video Production</a>
                    </li>
                </ul>

                <div class="js-filter uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center" uk-grid>
                    <?php foreach ($projects as $project) : ?>
                        <a href="<?= $project['link'] ?>" class="image-link" data-tags="<?= $project['tags'] ?>">
                            <div class="link-box-outer uk-height-medium">
                                <div class="link-box-inner uk-background-cover" data-src="<?= $project['src'] ?>" uk-img>
                                </div>
                                <div class="link-text">
                                    <?= $project['name'] ?>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>
</main>

<?php
include "includes/footer.php";
include "includes/scripts.php";
include "includes/analytics.php";
include "includes/close.php";
?>
