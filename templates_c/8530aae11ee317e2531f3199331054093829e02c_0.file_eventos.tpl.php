<?php
/* Smarty version 5.4.2, created on 2024-11-27 21:23:03
  from 'file:eventos.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67477fa783f682_32580077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8530aae11ee317e2531f3199331054093829e02c' => 
    array (
      0 => 'eventos.tpl',
      1 => 1732738809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/components/nav.tpl' => 1,
  ),
))) {
function content_67477fa783f682_32580077 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\web\\templates\\views';
?><!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->getValue('title');?>
</title>
    <!-- Estilos -->
    <link rel="stylesheet" href="css/eventos.css">
</head>

<body>

    <?php $_smarty_tpl->renderSubTemplate('file:templates/components/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <main>
        <section class="section__intro__top">
            <div class="intro__text">
                <h1>Nuestros eventos</h1>
                <small>Conoce más sobre nuestros próximos eventos</small>
            </div>
        </section>

         <section class="section__upcoming__events">
            <div class="events__title">
                <h2>Eventos de esta semana</h2>
            </div>
            <div class="events__list">
                <div class="card__event">
                    <div class="card__image">
                        <img src="images/eventos/QUINTO-MISIONERO.jpg" alt="">
                    </div>
                    <div class="card__content">
                        <h5>Quinto Misionero</h5>
                        <small>Llevamos el amor de Dios más allá de nuestras fronteras, alcanzando a quienes necesitan
                            esperanza y apoyo. Este domingo se parte de compartir y transformar vidas a través de
                            proyectos locales e internacionales, con un enfoque en la compasión y el servicio.</small>
                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/">Conocer más</a>
                    </div>
                </div>

                <div class="card__event">
                    <div class="card__image">
                        <img src="images/eventos/navidad.webp" alt="">
                    </div>
                    <div class="card__content">
                        <h5>El Inicio de la Navidad</h5>
                        <small>Únete a nosotros en un evento especial para dar inicio a la temporada navideña, con
                            música, luces y un mensaje lleno de esperanza que nos recordará el verdadero significado de
                            la Navidad. Celebremos juntos el amor y la alegría que trae esta hermosa época.</small>
                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/">Conocer más</a>
                    </div>
                </div>

                <div class="card__event">
                    <div class="card__image">
                        <img src="images/eventos/AMANECER.jpg" alt="">
                    </div>
                    <div class="card__content">
                        <h5>Amaneceres con Dios</h5>
                        <small>Únete a nosotros para orar juntos y comenzar el día buscando a Dios. También nos reunimos
                            todos los lunes y viernes a la misma hora por Zoom. ¡No te lo pierdas!. No hay mejor forma
                            de empezar el día que en Su presencia.</small>
                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/">Conocer más</a>
                    </div>
                </div>

            </div>
        </section>

             <section class="section__upcoming__events">
            <div class="events__title">
                <h2>Eventos del mes</h2>
            </div>
            <div class="events__list">
                <div class="card__event">
                    <div class="card__image">
                        <img src="images/eventos/QUINTO-MISIONERO.jpg" alt="">
                    </div>
                    <div class="card__content">
                        <h5>Quinto Misionero</h5>
                        <small>Llevamos el amor de Dios más allá de nuestras fronteras, alcanzando a quienes necesitan
                            esperanza y apoyo. Este domingo se parte de compartir y transformar vidas a través de
                            proyectos locales e internacionales, con un enfoque en la compasión y el servicio.</small>
                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/">Conocer más</a>
                    </div>
                </div>

                <div class="card__event">
                    <div class="card__image">
                        <img src="images/eventos/navidad.webp" alt="">
                    </div>
                    <div class="card__content">
                        <h5>El Inicio de la Navidad</h5>
                        <small>Únete a nosotros en un evento especial para dar inicio a la temporada navideña, con
                            música, luces y un mensaje lleno de esperanza que nos recordará el verdadero significado de
                            la Navidad. Celebremos juntos el amor y la alegría que trae esta hermosa época.</small>
                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/">Conocer más</a>
                    </div>
                </div>

                <div class="card__event">
                    <div class="card__image">
                        <img src="images/eventos/AMANECER.jpg" alt="">
                    </div>
                    <div class="card__content">
                        <h5>Amaneceres con Dios</h5>
                        <small>Únete a nosotros para orar juntos y comenzar el día buscando a Dios. También nos reunimos
                            todos los lunes y viernes a la misma hora por Zoom. ¡No te lo pierdas!. No hay mejor forma
                            de empezar el día que en Su presencia.</small>
                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/">Conocer más</a>
                    </div>
                </div>

            </div>
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
