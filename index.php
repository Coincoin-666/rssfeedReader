<?php
require "controllers/index-controller.php";
include "views/includes/header.php";
session_start();
?>


<!-- Main Content -->
<main class="container">
    <div class="row">
        <div class="col-lg-4 col-sm-12 justify-content-center">
            <p class="text-center">A</p>
            <p class="text-center">B</p>
            <p class="text-center">C</p>
        </div>

        <div class="col-lg-4 col-sm-12 justify-content-center">
            <p class="text-center">D</p>
            <p class="text-center">E</p>
            <p class="text-center">F</p>
        </div>

        <div class="col-lg-4 col-sm-12 justify-content-center">
            <p class="text-center">G</p>
            <p class="text-center">H</p>
            <p class="text-center">I</p>
        </div>
    </div>

    <!-- Carousel -->

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

    <!-- END Carousel -->

</main>

<!-- END Main Content -->



<?php
var_dump($xml_actusJeuxVideos->channel->item[0]);
echo $xml_actusJeuxVideos->channel->item[0]->title;
echo $xml_actusJeuxVideos->channel->item[0]->description;

include "views/includes/footer.php";
?>