<?php
require "controllers/parameters-controller.php";
require "controllers/index-controller.php";

include "views/includes/header.php";
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
    <section class="row w-60">
        <h1 class="fs-2 text-uppercase">last news!</h1>
        <?php
        if (isset($_COOKIE["display_mode"])) {
            if ($_COOKIE["display_mode"] == 6) {
                for ($i = 1; $i < 7; $i++) {
        ?>
                    <article class="card mb-3">
                        <div class="card-body">
                            <p class="card-title"><?= $xml_actusJeuxVideos->channel->item[$i]->title ?></p>
                            <p class="card-text"><?= $xml_actusJeuxVideos->channel->item[$i]->description ?></p>
                        </div>
                    </article>
                <?php
                }
            } elseif ($_COOKIE["display_mode"] == 12) {
                for ($i = 1; $i < 13; $i++) {
                ?>
                    <article class="card mb-3">
                        <div class="card-body">
                            <p class="card-title"><?= $xml_actusJeuxVideos->channel->item[$i]->title ?></p>
                            <p class="card-text"><?= $xml_actusJeuxVideos->channel->item[$i]->description ?></p>
                        </div>
                    </article>
                <?php
                }
            } else {
                for ($i = 1; $i < 10; $i++) {
                ?>
                    <article class="card mb-3">
                        <div class="card-body">
                            <p class="card-title"><?= $xml_actusJeuxVideos->channel->item[$i]->title ?></p>
                            <p class="card-text"><?= $xml_actusJeuxVideos->channel->item[$i]->description ?></p>
                        </div>
                    </article>
        <?php
                }
            }
        }
        ?>
    </section>
</main>

<!-- END Main Content -->



<?php
include "views/includes/footer.php";
?>