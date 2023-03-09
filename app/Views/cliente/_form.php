<label for="cicli_id">Cédula de Identidad:</label>
        <input type="number" name="cicli_id" placeholder="Cédula de Identidad" id="cicli_id" value="<?=$cliente['cicli_id'] ?>">
        <label for="nombre_cliente">Nombre:</label>
        <input type="text" name="nombre_cliente" placeholder="Nombre del Cliente" id="nombre_cliente" value="<?=$cliente['nombre_cliente'] ?>">
        <label for="apellido_cliente">Apellido:</label>
        <input type="text" name="apellido_cliente" placeholder="Apellido del Cliente" id="apellido_cliente" value="<?=$cliente['apellido_cliente'] ?>"> 
        <label for="direccion_cliente">Direccion:</label>
        <input type="text" name="direccion_cliente" placeholder="Direccion del Cliente" id="direccion_cliente" value="<?=$cliente['direccion_cliente'] ?>">
        <label for="celular_cliente">Celular:</label>
        <input type="text" name="celular_cliente" placeholder="Celular del Cliente" id="celular_cliente" value="<?=$cliente['celular_cliente'] ?>">
        <label for="correo_cliente">Correo:</label>
        <input type="text" name="correo_cliente" placeholder="Correo del Cliente" id="correo_cliente" value="<?=$cliente['correo_cliente'] ?>">
        <button type="submit"><?=$op ?></button>