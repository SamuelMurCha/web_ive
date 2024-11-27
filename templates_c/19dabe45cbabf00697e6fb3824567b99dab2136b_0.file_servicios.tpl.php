<?php
/* Smarty version 5.4.2, created on 2024-11-21 15:54:04
  from 'file:servicios.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_673f498c804268_50353300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19dabe45cbabf00697e6fb3824567b99dab2136b' => 
    array (
      0 => 'servicios.tpl',
      1 => 1732200821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_673f498c804268_50353300 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\web\\templates\\views';
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Servicios</title>
</head>
<body>
    <h1>Servicios (Cultos Grabados)</h1>
    <ul>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('servicios'), 'servicio');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('servicio')->value) {
$foreach0DoElse = false;
?>
            <li><a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/servicios/<?php echo $_smarty_tpl->getValue('servicio')['token'];?>
"><?php echo $_smarty_tpl->getValue('servicio')['nombre'];?>
 - <?php echo $_smarty_tpl->getValue('servicio')['fecha'];?>
</a></li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
</body>
</html>
<?php }
}
