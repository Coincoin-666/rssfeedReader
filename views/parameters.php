<?php
require "../controllers/parameters-controller.php";
include "includes/header.php";
?>



<!-- Main Content -->
<main class="container">
    <h1 class="fs-4 m-3">Paramètres</h1>
    <div class="row">
        <form action="" method="POST">

            <!-- Darkmode -->

            <div class="col-sm-12">
                <div class="form-group form-check mb-3">
                    <h2 class="fs-4 m-3">Luminosité</h2>
                    <label for="enableDarkmode" class="form-check-label"><i class="fas fa-moon fs-4 ms-3"></i></label>
                    <input type="radio" name="enableDarkmode" id="enableDarkmode" value="1" class="form-check-input">
                </div>
                <div class="form-group form-check mb-3">
                    <label for="disableDarkmode" class="form-check-label"><i class="fas fa-sun fs-4 ms-3"></i></label>
                    <input type="radio" name="disableDarkmode" id="disableDarkmode" value="0" class="form-check-input">
                </div>
            </div>

            <!-- Nbre d'éléments Accueil -->

            <div class="col-sm-12">
                <h2 class="fs-4 m-3">Affichage</h2>
            </div>

            <!-- Favoris -->

            <div class="col-md-4 col-sm-12">
                <h2 class="fs-4 m-3">Favoris</h2>
            </div>
        </form>
    </div>
</main>
<!-- END: Main Content -->



<?php
include "includes/footer.php";
?>