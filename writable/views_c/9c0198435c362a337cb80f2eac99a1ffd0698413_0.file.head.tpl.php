<?php
/* Smarty version 4.2.0, created on 2022-08-04 21:04:21
  from '/var/www/html/tripsafer/app/src/views/incl/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_62ec1835c5c4d7_80890614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c0198435c362a337cb80f2eac99a1ffd0698413' => 
    array (
      0 => '/var/www/html/tripsafer/app/src/views/incl/head.tpl',
      1 => 1659639859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec1835c5c4d7_80890614 (Smarty_Internal_Template $_smarty_tpl) {
?>    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/bootstrap.min.css">
    <?php ob_start();
if ((isset($_smarty_tpl->tpl_vars['data']->value['title']))) {
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

    <title>Trip Safer | <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['title'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</title>
    <?php ob_start();
} else {
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

    <title>Trip Safer</title>
    <?php ob_start();
}
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;
}
}
