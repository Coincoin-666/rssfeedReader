<?php
require "controllers/index-controller.php";

include "views/includes/header.php";
session_start();
?>


<!-- Main Content -->
<main class="container lg-w-60 sm-w-100">

    <!-- Carousel -->
    <div class="row">
        <div id="lastNewsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/404.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>First slide label</p>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/404.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Second slide label</p>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/404.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Third slide label</p>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Carousel -->

    <!-- News Feed -->

    <div class="container">
        <section class="col-lg-4 col-sm-12 justify-content-center">
            <article class="card mb-3">
                <div class="card-body">
                    <!-- Là, à mon avis, faudra un if(isset(favorite)echo$favorite else actusmachintruc) -->
                    <p class="card-title"><?= $actusJV_TITLE_firstThumb ?></p>
                    <p class="card-subtitle"><?= $actusJV_SUBTITLE_firstThumb ?></p>
                    <p class="card-text"><?= $actusJV_TEXT_firstThumb ?></p>
                </div>
            </article>
            <article class="card mb-3">
                <div class="card-body">
                    <p class="card-title"><?= $actusJV_TITLE_firstThumb ?></p>
                    <p class="card-subtitle"><?= $actusJV_SUBTITLE_firstThumb ?></p>
                    <p class="card-text"><?= $actusJV_TEXT_firstThumb ?></p>
                </div>
            </article>
            <article class="card mb-3">
                <div class="card-body">
                    <p class="card-title"><?= $actusJV_TITLE_firstThumb ?></p>
                    <p class="card-subtitle"><?= $actusJV_SUBTITLE_firstThumb ?></p>
                    <p class="card-text"><?= $actusJV_TEXT_firstThumb ?></p>
                </div>
            </article>
            <article class="card mb-3">
                <div class="card-body">
                    <p class="card-title"><?= $actusJV_TITLE_firstThumb ?></p>
                    <p class="card-subtitle"><?= $actusJV_SUBTITLE_firstThumb ?></p>
                    <p class="card-text"><?= $actusJV_TEXT_firstThumb ?></p>
                </div>
            </article>
            <article class="card mb-3">
                <div class="card-body">
                    <p class="card-title"><?= $actusJV_TITLE_firstThumb ?></p>
                    <p class="card-subtitle"><?= $actusJV_SUBTITLE_firstThumb ?></p>
                    <p class="card-text"><?= $actusJV_TEXT_firstThumb ?></p>
                </div>
            </article>
        </section>

        <section class="col-lg-4 col-sm-12 justify-content-center">
            <article class="card mb-3">
                <div class="card-body">
                    <!-- Là, à mon avis, faudra un if(isset(favorite)echo$favorite else actusmachintruc) -->
                    <p class="card-title"><?= $actusJV_TITLE_firstThumb ?></p>
                    <p class="card-subtitle"><?= $actusJV_SUBTITLE_firstThumb ?></p>
                    <p class="card-text"><?= $actusJV_TEXT_firstThumb ?></p>
                </div>
            </article>
            <article class="card mb-3">
                <div class="card-body">
                    <p class="card-title"><?= $actusJV_TITLE_firstThumb ?></p>
                    <p class="card-subtitle"><?= $actusJV_SUBTITLE_firstThumb ?></p>
                    <p class="card-text"><?= $actusJV_TEXT_firstThumb ?></p>
                </div>
            </article>
            <article class="card mb-3">
                <div class="card-body">
                    <p class="card-title"><?= $actusJV_TITLE_firstThumb ?></p>
                    <p class="card-subtitle"><?= $actusJV_SUBTITLE_firstThumb ?></p>
                    <p class="card-text"><?= $actusJV_TEXT_firstThumb ?></p>
                </div>
            </article>
            <article class="card mb-3">
                <div class="card-body">
                    <p class="card-title"><?= $actusJV_TITLE_firstThumb ?></p>
                    <p class="card-subtitle"><?= $actusJV_SUBTITLE_firstThumb ?></p>
                    <p class="card-text"><?= $actusJV_TEXT_firstThumb ?></p>
                </div>
            </article>
            <article class="card mb-3">
                <div class="card-body">
                    <p class="card-title"><?= $actusJV_TITLE_firstThumb ?></p>
                    <p class="card-subtitle"><?= $actusJV_SUBTITLE_firstThumb ?></p>
                    <p class="card-text"><?= $actusJV_TEXT_firstThumb ?></p>
                </div>
            </article>
        </section>

        <section class="col-lg-4 col-sm-12 justify-content-center">
            <article class="card mb-3">
                <div class="card-body">
                    <!-- Là, à mon avis, faudra un if(isset(favorite)echo$favorite else actusmachintruc) -->
                    <p class="card-title"><?= $actusJV_TITLE_firstThumb ?></p>
                    <p class="card-subtitle"><?= $actusJV_SUBTITLE_firstThumb ?></p>
                    <p class="card-text"><?= $actusJV_TEXT_firstThumb ?></p>
                </div>
            </article>
            <article class="card mb-3">
                <div class="card-body">
                    <p class="card-title"><?= $actusJV_TITLE_firstThumb ?></p>
                    <p class="card-subtitle"><?= $actusJV_SUBTITLE_firstThumb ?></p>
                    <p class="card-text"><?= $actusJV_TEXT_firstThumb ?></p>
                </div>
            </article>
            <article class="card mb-3">
                <div class="card-body">
                    <p class="card-title"><?= $actusJV_TITLE_firstThumb ?></p>
                    <p class="card-subtitle"><?= $actusJV_SUBTITLE_firstThumb ?></p>
                    <p class="card-text"><?= $actusJV_TEXT_firstThumb ?></p>
                </div>
            </article>
            <article class="card mb-3">
                <div class="card-body">
                    <p class="card-title"><?= $actusJV_TITLE_firstThumb ?></p>
                    <p class="card-subtitle"><?= $actusJV_SUBTITLE_firstThumb ?></p>
                    <p class="card-text"><?= $actusJV_TEXT_firstThumb ?></p>
                </div>
            </article>
            <article class="card mb-3">
                <div class="card-body">
                    <p class="card-title"><?= $actusJV_TITLE_firstThumb ?></p>
                    <p class="card-subtitle"><?= $actusJV_SUBTITLE_firstThumb ?></p>
                    <p class="card-text"><?= $actusJV_TEXT_firstThumb ?></p>
                </div>
            </article>
        </section>
    </div>

</main>

<!-- END Main Content -->



<?php
include "views/includes/footer.php";
?>