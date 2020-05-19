<section class="project-header uk-section">
    <div class="uk-container">

        <?php
        $projectTypeText = null;
        $projectTypePath = null;

        if ($projectType == 'web'){
            $projectTypeText = 'Web';
            $projectTypePath = '/web.php';
        } else {
            $projectTypeText = 'Design';
            $projectTypePath = '/design.php';
        }

        ?>

        <ul class="breadcrumbs uk-breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="<?= $projectTypePath ?>"><?= $projectTypeText ?></a></li>
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
