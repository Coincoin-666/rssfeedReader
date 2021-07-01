<?php
include "includes/header.php";
require "../controllers/parameters-controller.php";
?>
<main class="container">
    <div class="row">
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="form">
            <div class="row col-lg-4 col-sm-12">
                <div class="col-6">
                    <label for="darkMode">Mode Sombre</label>
                    <button type="button" class="btn btn-dark btn-sm btn-outline-light text-secondary" id="darkMode"><i class="fas fa-moon"></i></button>
                </div>
                <div class="col-6">
                    <label for="lightMode">Mode Lumineux</label>
                    <button type="button" class="btn btn-light btn-sm btn-outline-dark text-secondary" id="lightMode"><i class="fas fa-sun"></i></button>
                </div>
            </div>
            <div class="row col-12">

            </div>

        </form>
    </div>
</main>
<?php
include "includes/footer.php";
?>