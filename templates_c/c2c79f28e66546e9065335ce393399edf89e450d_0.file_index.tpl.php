<?php
/* Smarty version 5.4.2, created on 2024-11-22 19:28:37
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6740cd55eeb153_71607727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2c79f28e66546e9065335ce393399edf89e450d' => 
    array (
      0 => 'index.tpl',
      1 => 1732300116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/components/nav.tpl' => 1,
  ),
))) {
function content_6740cd55eeb153_71607727 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\web\\templates\\views';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Estilos -->
     <link rel="stylesheet" href="css/inicio.css">
</head>
<body>

    <?php $_smarty_tpl->renderSubTemplate('file:templates/components/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <section class="section__intro__top">
       <div class="intro__text">
            <h1>Bienvenido a casa</h1>
            <small>Iglesia Vida Eterna</small>
       </div>
       <div class="intro__acctions">
            <a href="">Soy nuevo</a>
            <a href="" class="white">Servicio ONLINE</a>
       </div>
    </section>
    

    <!-- Jquery -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $('.nav__item > a, .nav__submenu-item > a').click(function (e) {
                // Quitar la clase 'active' de todos los elementos
                $('.nav__item, .nav__submenu-item').removeClass('active');
    
                // Agregar la clase 'active' al elemento padre del enlace clicado
                $(this).parent().addClass('active');
            });
        });
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(document).ready(function() {
            // Ajusta este valor al punto donde quieres que el efecto se active
            var scrollOffset = 100;

            $(window).on('scroll', function() {
                if ($(this).scrollTop() > scrollOffset) {
                    $('nav').addClass('fixed');
                } else {
                    $('nav').removeClass('fixed');
                }
            });
        });
    <?php echo '</script'; ?>
>


    

</body>
</html><?php }
}
