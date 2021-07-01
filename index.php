<?php
require "controllers/index-controller.php";

include "views/includes/header.php";
session_start();
?>


<!-- Main Content -->
<main class="container lg-w-60 sm-w-100">

    <!-- Carousel -->
    <section class="row">
        <div id="lastNewsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div id="carouselThumb_01">
                    </div>
                </div>
                <div class="carousel-item">
                    <div id="carouselThumb_02">
                    </div>
                </div>
                <div class="carousel-item">
                    <div id="carouselThumb_03">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Carousel -->

    <!-- News Feed -->

    <div class="container">
        <section class="justify-content-center">
            <article class="card mb-3" id="actus_JV_card_01">
                <div class="card-header blue_PS_BG"></div>
                <div class="card-body">
                    <!-- Là, à mon avis, faudra un if(isset(favorite)echo$favorite else actusmachintruc) -->
                    <p class="card-title"><?= $actusJV_TITLE_firstThumb ?></p>
                    <p class="card-subtitle"><?= $actusJV_SUBTITLE_firstThumb ?></p>
                    <p class="card-text"><?= $actusJV_TEXT_firstThumb ?></p>
                </div>
            </article>
            <article class="card mb-3" id="actus_JV_card_02">
                <div class="card-header green_XB_BG"></div>
                <div class="card-body">
                    <p class="card-title"><?= $actusJV_TITLE_secondThumb ?></p>
                    <p class="card-subtitle"><?= $actusJV_SUBTITLE_secondThumb ?></p>
                    <p class="card-text"><?= $actusJV_TEXT_secondThumb ?></p>
                </div>
            </article>
            <article class="card mb-3" id="actus_JV_card_03">
                <div class="card-header black_XB_BG"></div>
                <div class="card-body">
                    <p class="card-title"><?= $actusJV_TITLE_thirdThumb ?></p>
                    <p class="card-subtitle"><?= $actusJV_SUBTITLE_thirdThumb ?></p>
                    <p class="card-text"><?= $actusJV_TEXT_thirdThumb ?></p>
                </div>
            </article>
            <article class="card mb-3">
                <div class="card-body">
                    <p class="card-title"><?= $actusJV_TITLE_fourthThumb ?></p>
                    <p class="card-subtitle"><?= $actusJV_SUBTITLE_fourthThumb ?></p>
                    <p class="card-text"><?= $actusJV_TEXT_fourthThumb ?></p>
                </div>
            </article>
            <article class="card mb-3">
                <div class="card-body">
                    <p class="card-title"><?= $actusJV_TITLE_fifthThumb ?></p>
                    <p class="card-subtitle"><?= $actusJV_SUBTITLE_fifthThumb ?></p>
                    <p class="card-text"><?= $actusJV_TEXT_fifthThumb ?></p>
                </div>
            </article>
        </section>
    </div>

</main>

<!-- END Main Content -->



<?php
include "views/includes/footer.php";
?>