<?php
/* Smarty version 4.3.1, created on 2023-05-13 21:20:46
  from 'C:\xampp\htdocs\practico_5_Formulario\templates\formulario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645fe30e129b01_56856812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0901d213e8a1f43a9ca043acf1938dc058cb0da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\practico_5_Formulario\\templates\\formulario.tpl',
      1 => 1684005058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645fe30e129b01_56856812 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action=<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
 method="post">
    <div>
        <label for="nombre">introduzca su nombre</label>
        <input type="text" id="nombre" name="nombre" value=''>
    </div>
    <div>
        <label for="mail">introduzca su mail</label>
        <input type="text" name="mail" id="mail" value='<?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
'>
    </div>
    <div>
        <label for="pass">introduzca su contraseña</label>
        <input type="text" id="pass" name="pass">
    </div>
    <div>
        <label for="repitPass">reintroduzca su contraseña</label>
        <input type="text" id="rePass" name="rePass">
    </div>

    <button type="submit">enviar</button>

</form><?php }
}
