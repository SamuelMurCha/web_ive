$(document).ready(function () {
  $(".nav__item > a, .nav__submenu-item > a").click(function (e) {
    // Quitar la clase 'active' de todos los elementos
    $(".nav__item, .nav__submenu-item").removeClass("active");

    // Agregar la clase 'active' al elemento padre del enlace clicado
    $(this).parent().addClass("active");
  });
});

$("nav .nav__button").click(function (e) {
  $("nav .nav__menu").fadeToggle();
});
