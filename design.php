<?php
// set page title
$pageTitle = 'Andrew Von Haden | Design Portfolio';

// set meta description
$metaDescription = 'Andrew Von Haden\'s portfolio of design projects.';

$projects = [
    array(
        'name' => 'Rushing Past Willow',
        'tags' => 'print package',
        'src' => '../img/projects/rushing-past-willow/thumb/cover.jpg',
        'link' => 'design/rushing-past-willow.php'
    ),
    array(
        'name' => 'Rock Bike Park',
        'tags' => 'print',
        'src' => '../img/projects/rock-bike/thumb/cover-picture.jpg',
        'link' => 'design/rock-bike-park.php'
    ),
    array(
        'name' => 'Designer Link',
        'tags' => 'presentation',
        'src' => '../img/projects/designer-link/thumb/1.jpg',
        'link' => 'design/designer-link.php'
    ),
    array(
        'name' => 'Aptura',
        'tags' => 'presentation',
        'src' => '../img/projects/aptura/thumb/1-Cover.jpg',
        'link' => 'design/aptura.php'
    ),
    array(
        'name' => 'Direct Supply Events',
        'tags' => 'presentation',
        'src' => '../img/projects/direct-supply-events/thumb/dssi-forum-2016-1.JPG',
        'link' => 'design/direct-supply-events.php'
    ),
    array(
        'name' => 'Direct Supply History',
        'tags' => 'video',
        'src' => '../img/projects/direct-supply-history/thumb/screen-cap.jpg',
        'link' => 'design/direct-supply-history.php'
    ),
    array(
        'name' => 'Rock League Baseball',
        'tags' => 'print',
        'src' => '../img/projects/rock-league/thumb/1.jpg',
        'link' => 'design/rock-league-baseball.php'
    ),
    array(
        'name' => 'FSA Brew',
        'tags' => 'print package',
        'src' => '../img/projects/fsa-brew/thumb/label.jpg',
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
                    <?php
                    foreach ($projects as $project) {
                        echo '<a href="';
                        echo $project['link'];
                        echo '" class="image-link" data-tags="';
                        echo $project[tags];
                        echo '"><div class="link-box-outer uk-height-medium"><div class="link-box-inner uk-background-cover" data-src="';
                        echo $project['src'];
                        echo '" uk-img></div><div class="link-text">';
                        echo $project['name'];
                        echo '</div></div></a>';
                    }
                    ?>
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
