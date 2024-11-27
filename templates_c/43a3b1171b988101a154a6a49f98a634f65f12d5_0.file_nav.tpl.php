<?php
/* Smarty version 5.4.2, created on 2024-11-27 21:11:32
  from 'file:templates/components/nav.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67477cf4351487_45155323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43a3b1171b988101a154a6a49f98a634f65f12d5' => 
    array (
      0 => 'templates/components/nav.tpl',
      1 => 1732738289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67477cf4351487_45155323 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\web\\templates\\components';
?><nav>
    <div class="nav__logo">
        <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
/images/logos/Logo.png" alt="Logo" />
    </div>

    <ul class="nav__menu">
        <li class="nav__item">
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
">Inicio</a>
        </li>
        <li class="nav__item">
            <a href="#about">Nosotros</a>
            <ul class="nav__submenu">
                <li class="nav__submenu-item"><a href="#team">Contáctanos</a></li>
                <li class="nav__submenu-item"><a href="#mission">Soy nuevo</a></li>
                <li class="nav__submenu-item"><a href="#vision">Lo que creemos</a></li>
                <li class="nav__submenu-item"><a href="#vision">Bautismos</a></li>
                <li class="nav__submenu-item"><a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/membresia">Membresía</a></li>
            </ul>
        </li>
        <li class="nav__item">
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/equipos">Equipos</a>
            <ul class="nav__submenu">
                <?php if ((null !== ($_smarty_tpl->getValue('equipos') ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('equipos')) > 0) {?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('equipos'), 'equipo');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('equipo')->value) {
$foreach0DoElse = false;
?>
                        <li class="nav__submenu-item"><a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/equipos/<?php echo $_smarty_tpl->getValue('equipo')['slug'];?>
"><?php echo $_smarty_tpl->getValue('equipo')['nombre'];?>
</a></li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php } else { ?>
                    <li>No hay equipos disponibles</li>
                <?php }?>
            </ul>
        </li>
        <li class="nav__item">
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/eventos">Eventos</a>
        </li>
        <li class="nav__item">
            <a href="#services">Servicios</a>
            <ul class="nav__submenu">
                <li class="nav__submenu-item"><a href="#design">Servicios en Línea</a></li>
                <li class="nav__submenu-item"><a href="#design">Series de Sermones</a></li>
                <li class="nav__submenu-item"><a href="#development">Podcasts</a></li>
                <li class="nav__submenu-item"><a href="#marketing">Devocionales</a></li>
            </ul>
        </li>
        <li class="nav__item">
            <a href="#contact">Ofrendas</a>
        </li>
        <li class="nav__item">
            <a href="#contact">Contáctanos</a>
        </li>
    </ul>

   <i class='bx bx-menu nav__button'></i>
</nav>

<?php }
}
