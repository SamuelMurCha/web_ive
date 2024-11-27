<?php
/* Smarty version 5.4.2, created on 2024-11-27 21:23:01
  from 'file:equipos.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67477fa5338b54_41818974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acd543d10d65b09b280bb4446a0e99d26260dca9' => 
    array (
      0 => 'equipos.tpl',
      1 => 1732738806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/components/nav.tpl' => 1,
  ),
))) {
function content_67477fa5338b54_41818974 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\web\\templates\\views';
?><!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos</title>
    <!-- Estilos -->
    <link rel="stylesheet" href="css/equipos.css">
</head>

<body>

    <?php $_smarty_tpl->renderSubTemplate('file:templates/components/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <main>
        <section class="section__intro__top">
            <div class="intro__text">
                <h1>Equipos</h1>
                <small>Conoce más sobre nuestros equipos</small>
            </div>
        </section>

        <section class="section__teams">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('equipos'), 'equipo');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('equipo')->value) {
$foreach0DoElse = false;
?>
                <div class="card__team">
                    <div class="card__image">
                        <img src="images/portadas/<?php echo $_smarty_tpl->getValue('equipo')['slug'];?>
.jpg" alt="<?php echo $_smarty_tpl->getValue('equipo')['nombre'];?>
">
                    </div>
                    <div class="card__content">
                        <h5><?php echo $_smarty_tpl->getValue('equipo')['nombre'];?>
</h5>
                        <!-- Cortar la descripción si es mayor a 100 caracteres -->
                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('equipo')['descripcion'],200,'...',true);?>
</small>
                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/equipos/<?php echo $_smarty_tpl->getValue('equipo')['slug'];?>
">Conocer más</a>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </section>
    </main>

    <!-- Jquery -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"><?php echo '</script'; ?>
>

       <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('base_url');?>
/js/main.js"><?php echo '</script'; ?>
>


</body>

</html><?php }
}
