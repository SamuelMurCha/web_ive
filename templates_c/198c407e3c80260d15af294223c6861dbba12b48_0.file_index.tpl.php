<?php
/* Smarty version 5.4.2, created on 2024-11-27 21:20:27
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67477f0b78bb99_90884241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '198c407e3c80260d15af294223c6861dbba12b48' => 
    array (
      0 => 'index.tpl',
      1 => 1732738812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/components/nav.tpl' => 1,
  ),
))) {
function content_67477f0b78bb99_90884241 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\web\\templates\\views';
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iglesia Vida Eterna</title>
    <!-- Estilos -->
    <link rel="stylesheet" href="css/inicio.css">
</head>

<body>

    <?php $_smarty_tpl->renderSubTemplate('file:templates/components/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <main>
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


        <section class="section__upcoming__events">
            <div class="events__title">
                <h2>Próximos eventos</h2>
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
             <div class="events__buttons">
                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/">Ver todos los eventos</a>
            </div>
        </section>

        <section class="section__last__service">
            <div class="service__video">
                <iframe src="https://www.youtube.com/embed/j8Ed9mR4qzI?si=vdqmvvuLrXGWWRbU" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="service__content">
                <h2>Servicio Dominical</h2>
                <span>
                    En este último mensaje de la serie <strong>"Escogidos"</strong>, reflexionamos sobre el propósito y
                    el llamado que Dios tiene para nuestras vidas.
                    Si te lo perdiste o quieres volver a vivirlo, aquí tienes la oportunidad de conectarte con esta
                    enseñanza que nos recuerda que hemos sido escogidos para algo más grande.
                    <br><br>
                    <em>¡Dios te ha escogido para ser luz en el mundo!</em>
                </span>
            </div>
        </section>


        <section class="section__teams">
          <div class="events__title">
                <h2>Conoce nuestros equipos</h2>
            </div>
           <div class="teams__list">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('equipos'), 'equipo', false, NULL, 'equipoLoop', array (
  'index' => true,
));
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('equipo')->value) {
$foreach0DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_equipoLoop']->value['index']++;
?>
                    <?php if (($_smarty_tpl->getValue('__smarty_foreach_equipoLoop')['index'] ?? null) < 3) {?>
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
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
           </div>
            <div class="teams__buttons">
                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/equipos">Ver todos los equipos</a>
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
