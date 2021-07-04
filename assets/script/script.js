// Initialize JS Library:
AOS.init();

// DarkMode Switcher
if ($("#darkMode").checked) {
    $("body").toggleClass("darkmode");
    // $("body").removeClass("lightmode");
    $("nav").toggleClass("navbar-dark");
    // $("nav").removeClass("navbar-light");
} else {
    $("body").toggleClass("lightmode");
    // $("body").removeClass("darkmode");
    $("nav").toggleClass("navbar-light");
    // $("nav").removeClass("navbar-dark");
}
// Dynamic Carousel Setting:
// Le but serait de faire en sorte que chaque <carousel-item> soit 1 <card>
// // Pour l'instant c'est manuel quand même.
// $("#actus_JV_card_01").appendTo("#carouselThumb_01");
// $("#actus_JV_card_02").appendTo("#carouselThumb_02");
// $("#actus_JV_card_03").appendTo("#carouselThumb_03");


// Max Fav = 3
// Sur les 5 checkboxes proposées, l'utilisateur ne doit pouvoir en sélectionner que 3.
$(".user_favorites").change(function (e) {
    e.preventDefault();
    var count = $(".user_favorites:checked").length; // Merci BizzyBob: On créé une variables pour stocker le nombre de checkboxes cochées.
    if (count > 3) {
        alert("3 favoris maximum! ;)");
        $(this).prop("checked", false); // Et ça c'est pour l'arrêter..? (https://stackoverflow.com/questions/37503301/how-to-limit-checkbox-selection-in-php#37503456)
    }
});