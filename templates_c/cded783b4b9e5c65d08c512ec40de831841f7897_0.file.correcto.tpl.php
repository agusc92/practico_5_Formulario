<?php
/* Smarty version 4.3.1, created on 2023-05-13 22:34:15
  from 'C:\xampp\htdocs\practico_5_Formulario\templates\correcto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645ff447dcf243_91713910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cded783b4b9e5c65d08c512ec40de831841f7897' => 
    array (
      0 => 'C:\\xampp\\htdocs\\practico_5_Formulario\\templates\\correcto.tpl',
      1 => 1684010048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645ff447dcf243_91713910 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <h2>Bienvenido!!</h2>

    <p>usuario: <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</p>
    <p>mail:<?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
</p>

</div><?php }
}
