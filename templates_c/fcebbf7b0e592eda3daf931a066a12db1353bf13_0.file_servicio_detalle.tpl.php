<?php
/* Smarty version 5.4.2, created on 2024-11-21 15:54:06
  from 'file:servicio_detalle.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_673f498e971df8_91111085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcebbf7b0e592eda3daf931a066a12db1353bf13' => 
    array (
      0 => 'servicio_detalle.tpl',
      1 => 1732200833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_673f498e971df8_91111085 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\web\\templates\\views';
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->getValue('servicio')['nombre'];?>
</title>
</head>
<body>
    <h1><?php echo $_smarty_tpl->getValue('servicio')['nombre'];?>
</h1>
    <p><strong>Fecha:</strong> <?php echo $_smarty_tpl->getValue('servicio')['fecha'];?>
</p>
    <p><strong>Descripción:</strong> <?php echo $_smarty_tpl->getValue('servicio')['descripcion'];?>
</p>
    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/servicios">Volver a la lista de servicios</a>
</body>
</html>
<?php }
}
