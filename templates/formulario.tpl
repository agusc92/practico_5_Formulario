{* variables:
    {ruta} -> es la ruta a la que se envia el formulario
*}

<form action={$ruta} method="post">
    <div>
        <label for="nombre">introduzca su nombre</label>
        <input type="text" id="nombre" name="nombre" required value='{$nombre}'>
    </div>
    <div>
        <label for="mail">introduzca su mail</label>
        <input type="text" name="mail" id="mail" required value='{$mail}'>
    </div>
    <div>
        <label for="pass">introduzca su contraseña</label>
        <input type="text" id="pass" name="pass" required value='{$pass}'>
    </div>
    <div>
        <label for="repitPass">reintroduzca su contraseña</label>
        <input type="text" id="rePass" required name="rePass">
    </div>

    <button type="submit">enviar</button>
    {if !empty($nombre)}
        {include file="error.tpl"}
    {/if}
</form>