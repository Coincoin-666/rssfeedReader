<?php
require "../controllers/parameters-controller.php";
include "includes/header.php";
?>
<main class="container">
    <form action="/rssFeedReader/parametres" method="GET" class="row">

        <!-- Color Mode -->
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <button class="btn btn-dark btn-outline-dark me-4" name="darkMode" id="darkMode"><i class="fas fa-moon grey-text"></i></button>
                <label class="form-label" for="darkMode">Activer le mode Sombre</label>
                <button class="btn btn-light btn-outline-light me-4" name="lightMode" id="lightMode"><i class="fas fa-sun grey-text"></i></button>
                <label class="form-label" for="lightMode">Activer le mode Lumineux</label>
            </div>
        </div>

        <!-- Thumbnails number -->
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="settings" class="form-label">Nombres de vignettes:</label>
                <select name="settings" class="form-select">
                    <option value="6">6</option>
                    <option value="9" selected>9</option>
                    <option value="12">12</option>
                </select>
            </div>
        </div>

        <!-- Favorites -->
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="user_fav" class="form-label">Vos sujets favoris (3):</label>
                <div class="form-check">
                    <input class="form-check-input user_favorites" type="checkbox" name="user_fav[]" value="actusJeuxVideos" id="actusJeuxVideos">
                    <label class="form-check-label" for="actusJeuxVideos">
                        Actus Générales
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input user_favorites" type="checkbox" name="user_fav[]" value="actusPS4" id="actusPS4">
                    <label class="form-check-label" for="actusPS4">
                        Actus PlayStation4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input user_favorites" type="checkbox" name="user_fav[]" value="actusPS5" id="actusPS5">
                    <label class="form-check-label" for="actusPS5">
                        Actus PlayStation5
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input user_favorites" type="checkbox" name="user_fav[]" value="actusXboxOne" id="actusXboxOne">
                    <label class="form-check-label" for="actusXboxOne">
                        Actus X-BoxOne
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input user_favorites" type="checkbox" name="user_fav[]" value="actusXBoxSeriesX" id="actusXBoxSeriesX">
                    <label class="form-check-label" for="actusXBoxSeriesX">
                        Actus X-BoxSeriesX
                    </label>
                </div>
            </div>
            <button class="btn btn-dark btn-outline-light mt-3 ms-2" type="submit">Valider</button>
    </form>
</main>
<?php
include "includes/footer.php";
?>