<?php
/* Smarty version 5.4.2, created on 2024-11-22 19:28:56
  from 'file:equipo_detalle.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6740cd68d75715_30076020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9f2c30f05abfccc134a7d2e09595aa652d90d86' => 
    array (
      0 => 'equipo_detalle.tpl',
      1 => 1732300129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/components/nav.tpl' => 1,
  ),
))) {
function content_6740cd68d75715_30076020 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\web\\templates\\views';
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->getValue('equipo')['nombre'];?>
</title>
    <!-- Estilos -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('base_url');?>
/css/detalle.css">
</head>

<body>

    <?php $_smarty_tpl->renderSubTemplate('file:templates/components/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <section class="section__intro__top" style="background-image: url('<?php echo $_smarty_tpl->getValue('base_url');?>
/images/portadas/<?php echo $_smarty_tpl->getValue('equipo')['slug'];?>
.jpg');">
        <div class="intro__text">
            <h1><?php echo $_smarty_tpl->getValue('equipo')['nombre'];?>
</h1>
            <small>Iglesia Vida Eterna</small>
        </div>
    </section>


    <!-- Jquery -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(document).ready(function() {
            $('.nav__item > a, .nav__submenu-item > a').click(function(e) {
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
