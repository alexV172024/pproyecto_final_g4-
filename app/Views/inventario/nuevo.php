<!-- app/Views/inventario/nuevo.php -->
<h2>Nuevo Inventario</h2>

<form method="post" action="<?= site_url('inventario/guardar'); ?>">
    <div class="form-group">
        <label for="accesorio">Accesorio</label>
        <input type="text" class="form-control" id="accesorio" name="accesorio" required>
    </div>
    <div class="form-group">
        <label for="cantidad">Cantidad</label>
        <input type="number" class="form-control" id="cantidad" name="cantidad" required>
    </div>
    <div class="form-group">
        <label for="precio">Precio</label>
        <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
    </div>
    <div class="form-group">
        <label for="ubicacion">Ubicación</label>
        <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
    </div>
    <button type="submit" class="btn btn-success">Guardar Inventario</button>
</form>
