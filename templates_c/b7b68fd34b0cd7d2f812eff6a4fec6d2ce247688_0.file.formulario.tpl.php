<?php
/* Smarty version 4.3.1, created on 2023-05-17 21:23:24
  from 'C:\xampp\htdocs\practico_5_Formulario\templates\formulario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646529ac2764c7_30722138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7b68fd34b0cd7d2f812eff6a4fec6d2ce247688' => 
    array (
      0 => 'C:\\xampp\\htdocs\\practico_5_Formulario\\templates\\formulario.tpl',
      1 => 1684351318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:error.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_646529ac2764c7_30722138 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action=<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
 method="post">
    <div>
        <label for="nombre">introduzca su nombre</label>
        <input type="text" id="nombre" name="nombre" required value='<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
'>
    </div>
    <div>
        <label for="mail">introduzca su mail</label>
        <input type="text" name="mail" id="mail" required value='<?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
'>
    </div>
    <div>
        <label for="pass">introduzca su contraseña</label>
        <input type="text" id="pass" name="pass" required value='<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
'>
    </div>
    <div>
        <label for="repitPass">reintroduzca su contraseña</label>
        <input type="text" id="rePass" required name="rePass">
    </div>

    <button type="submit">enviar</button>
    <?php if (!empty($_smarty_tpl->tpl_vars['nombre']->value)) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
