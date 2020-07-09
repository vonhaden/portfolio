<?php
// set page title
$pageTitle = 'Andrew Von Haden | Web Portfolio';

// set meta description
$metaDescription = 'Andrew Von Haden\'s portfolio of web development projects.';

// Thumbnail filepath
$thumbnailPath = '../img/thumbnails/';

$projects = [
    array(
        'name' => 'Midwest Connection',
        'tags' => 'php db ui css',
        'src' => $thumbnailPath . 'midwest.jpg',
        'link' => 'web/midwest-connection.php'
    ),
    array(
        'name' => 'Kingdom Prep',
        'tags' => 'wp php ui sass',
        'src' => $thumbnailPath . 'kp.jpg',
        'link' => 'web/kingdom-prep-lutheran-high-school.php'
    ),
    array(
        'name' => 'Costog',
        'tags' => 'vue boot sass js db',
        'src' => $thumbnailPath . 'costog.jpg',
        'link' => 'web/costog.php'
    ),
    array(
        'name' => 'Books Plugin',
        'tags' => 'wp php sass',
        'src' => $thumbnailPath . 'books.jpg',
        'link' => 'web/books-plugin.php'
    ),
    array(
        'name' => 'DataMed',
        'tags' => 'ui',
        'src' => $thumbnailPath . 'datamed.jpg',
        'link' => 'web/datamed.php'
    ),
    array(
        'name' => 'WCTC',
        'tags' => 'ui',
        'src' => $thumbnailPath . 'wctc.jpg',
        'link' => 'web/wctc.php'
    ),
    array(
        'name' => 'Yale School of Art',
        'tags' => 'ui php sass boot',
        'src' => $thumbnailPath . 'yale.jpg',
        'link' => 'web/yale-school-of-art.php'
    ),
    array(
        'name' => 'OSBD',
        'tags' => 'sass boot',
        'src' => $thumbnailPath . 'osbd.jpg',
        'link' => 'web/milwaukee-office-of-small-business-development.php'
    ),
    array(
        'name' => 'Rock Paper Scissors',
        'tags' => 'js jq css',
        'src' => $thumbnailPath . 'rps.jpg',
        'link' => 'web/rock-paper-scissors-lizard-spock.php'
    ),
    array(
        'name' => 'Tozai Hotel',
        'tags' => 'ui css',
        'src' => $thumbnailPath . 'tozai.jpg',
        'link' => 'web/tozai-hotel.php'
    ),
    array(
        'name' => 'Seating Chart Generator',
        'tags' => 'js jq css',
        'src' => $thumbnailPath . 'seating.jpg',
        'link' => 'web/seating-chart-generator.php'
    ),
];


// includes
include "includes/head.php";
include "includes/nav.php";
?>

<main>
    <div class="portfolio uk-section">
        <div class="uk-container">
            <h1>Web Projects</h1>
            <div uk-filter="target: .js-filter">

                <ul class="uk-subnav filter-links" uk-margin>
                    <li class="uk-active" uk-filter-control>
                        <a href="#">All</a>
                    </li>
                    <li uk-filter-control="[data-tags*='css']">
                        <a href="#">CSS</a>
                    </li>
                    <li uk-filter-control="[data-tags*='sass']">
                        <a href="#">SCSS</a>
                    </li>
                    <li uk-filter-control="[data-tags*='boot']">
                        <a href="#">Bootstrap</a>
                    </li>
                    <li uk-filter-control="[data-tags*='js']">
                        <a href="#">JavaScript</a>
                    </li>
                    <li uk-filter-control="[data-tags*='jq']">
                        <a href="#">jQuery</a>
                    </li>
                    <li uk-filter-control="[data-tags*='vue']">
                        <a href="#">Vue</a>
                    </li>
                    <li uk-filter-control="[data-tags*='php']">
                        <a href="#">PHP</a>
                    </li>
                    <li uk-filter-control="[data-tags*='wp']">
                        <a href="#">Wordpress</a>
                    </li>
                    <li uk-filter-control="[data-tags*='ui']">
                        <a href="#">UI Design</a>
                    </li>
                    <li uk-filter-control="[data-tags*='db']">
                        <a href="#">Database</a>
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
