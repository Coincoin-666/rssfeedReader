<?php
include "includes/header.php";
require "../controllers/parameters-controller.php";
?>
<main class="container">
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="row">

        <!-- Color Mode -->
        <div class="col-lg-4 col-sm-12 gap-2">
            <div class="form-group">
                <label for="darkMode" class="form-label">Mode Sombre</label>
                <button type="button" class="btn btn-dark btn-sm btn-outline-light text-secondary" id="darkMode"><i class="fas fa-moon"></i></button>
            </div>
            <div class="form-group">
                <label for="lightMode" class="form-label">Mode Lumineux</label>
                <button type="button" class="btn btn-light btn-sm btn-outline-dark text-secondary" id="lightMode"><i class="fas fa-sun"></i></button>
            </div>
        </div>

        <!-- Thumbnails number -->
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="settings" class="form-label">Nombres de vignettes:</label>
                <select class="form-select">
                    <option value="6">6</option>
                    <option value="9" selected>9</option>
                    <option value="12">12</option>
                </select>
            </div>
        </div>

        <!-- Favorites -->
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="favorites" class="form-label">Vos sujets favoris (3):</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="actusJeuxVideos" id="actusJeuxVideos">
                    <label class="form-check-label" for="actusJeuxVideos">
                        Actus Générales
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="actusPS4" id="actusPS4">
                    <label class="form-check-label" for="actusPS4">
                        Actus PlayStation4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="actusPS5" id="actusPS5">
                    <label class="form-check-label" for="actusPS5">
                        Actus PlayStation5
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="actusXboxOne" id="actusXboxOne">
                    <label class="form-check-label" for="actusXboxOne">
                        Actus X-BoxOne
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="actusXBoxSeriesX" id="actusXBoxSeriesX">
                    <label class="form-check-label" for="actusXBoxSeriesX">
                        Actus X-BoxSeriesX
                    </label>
                </div>
            </div>
    </form>
</main>
<?php
include "includes/footer.php";
?>