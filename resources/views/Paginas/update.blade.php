<!doctype html>
<html>
<!--<meta name="csrf-token" content="{{ csrf_token() }}">
 <div>
        <input type="hidden" name="token" value="<?php echo csrf_token(); ?>">
    </div>
-->
<form action="{{route('actualizado')}}" method="post" >
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <div>
        <label for="id_platillo">id platillo:</label>
        <input type="text" id="id_platillo" name="id_platillo" />
    </div>
    <div>
        <label for="nombrePlatillo">nuevo Nombre Platillo:</label>
        <input type="text" id="nombrePlatillo" name="nombrePlatillo" />
    </div>
    <div>
        <label for="descripcion">Descripción:</label>
        <input type="text" id="descripcion" name="descripcion" />
    </div>
    <div>
        <label for="tipo">Tipo:</label>
        <input type="text" id="tipo" name="tipo" />
    </div>
    <div>
        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio" />
    </div>
    <div>
        <label for="imagen">Imagen:</label>
        <input type="text" id="imagen" name="imagen" />
    </div>
    
    <div class="button">
        <button type="submit">enviar</button>
    </div>
</form>
</html>
