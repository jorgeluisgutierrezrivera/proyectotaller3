<label for="codprod_id">Código de Producto:</label>
        <input type="number" name="codprod_id" placeholder="Codigo de Producto" id="codprod_id" value="<?=$producto['codprod_id'] ?>">
        <label for="nombre_producto">Nombre:</label>
        <input type="text" name="nombre_producto" placeholder="Nombre del Cliente" id="nombre_producto" value="<?=$producto['nombre_producto'] ?>">
        <label for="descripcion_producto">Descripción:</label>
        <input type="text" name="descripcion_producto" placeholder="Descripcion del Producto" id="descripcion_producto" value="<?=$producto['descripcion_producto'] ?>"> 
        <label for="categoria_producto">Categoría:</label>
        <input type="text" name="categoria_producto" placeholder="Categoria del Producto" id="categoria_producto" value="<?=$producto['categoria_producto'] ?>">
        <label for="precio_producto">Precio:</label>
        <input type="number" name="precio_producto" placeholder="Precio del Producto" id="precio_producto" value="<?=$producto['precio_producto'] ?>">
        <label for="cantidad_producto">Cantidad:</label>
        <input type="number" name="cantidad_producto" placeholder="Cantidad de Producto" id="cantidad_producto" value="<?=$producto['cantidad_producto'] ?>">
        <button type="submit"><?=$op ?></button>