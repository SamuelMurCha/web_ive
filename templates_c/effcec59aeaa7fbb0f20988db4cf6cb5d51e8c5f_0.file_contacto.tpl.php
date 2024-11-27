<?php
/* Smarty version 5.4.2, created on 2024-11-21 15:44:51
  from 'file:contacto.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_673f4763d6f977_14641369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'effcec59aeaa7fbb0f20988db4cf6cb5d51e8c5f' => 
    array (
      0 => 'contacto.tpl',
      1 => 1732200286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_673f4763d6f977_14641369 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\web\\templates\\views';
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->getValue('title');?>
</title>
</head>
<body>
    <h1><?php echo $_smarty_tpl->getValue('content');?>
</h1>
    <!-- Usar la variable de la URL base para los enlaces -->
    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/">Inicio</a>
    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/equipos">Equipos</a>
</body>
</html>
<?php }
}
