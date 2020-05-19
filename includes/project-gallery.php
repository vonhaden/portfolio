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
