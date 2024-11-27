<?php
/* Smarty version 5.4.2, created on 2024-11-27 00:00:38
  from 'file:membresia_resultado.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6746531683f5f3_47351481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a0dcd39e124f317cc4f45f0bb04e5e9432124e7' => 
    array (
      0 => 'membresia_resultado.tpl',
      1 => 1732662036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/components/nav.tpl' => 1,
  ),
))) {
function content_6746531683f5f3_47351481 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\web\\templates\\views';
?><!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->getValue('title');?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('base_url');?>
/css/membresia.css">
    <style>
        .section__result {
            width: 100%;
            height: 40vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

    <?php $_smarty_tpl->renderSubTemplate('file:templates/components/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <main>
        <section class="section__intro__top">
            <div class="intro__text">
                <h1>Membresía</h1>
                <small>Te agradecemos por tomarte el tiempo de registrarte.</small>
            </div>
        </section>

        <section class="section__result">
            <h1><?php echo $_smarty_tpl->getValue('title');?>
</h1>

            <?php if ((null !== ($_smarty_tpl->getValue('errores') ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('errores')) > 0) {?>
                <div class="errores">
                    <ul>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('errores'), 'error');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('error')->value) {
$foreach0DoElse = false;
?>
                            <li><?php echo $_smarty_tpl->getValue('error');?>
</li>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            <?php } else { ?>
                <p><?php echo $_smarty_tpl->getValue('mensaje');?>
</p>
            <?php }?>
        </section>

    </main>

</body>

</html><?php }
}
