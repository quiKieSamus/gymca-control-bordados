<div class="container bg-info">
    <h1>Ingrese al cliente nuevo</h1>
    <form action="../src/views/cliente/insertClienteCheck.php" method="post">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Ej: Rubén González; CORPOELEC">
        </div>

        <div class="form-group">
            <label for="doc">Cedula/RIF</label>
            <input class="form-control" type="text" name="doc" id="doc" placeholder="XXXXXXXX">
        </div>

        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input class="form-control" type="text" name="direccion" id="direccion" placeholder="Urb. La Victoria, 2da Etapa, Calle 69, Casa #68C-169">
        </div>
        
        <input type="submit" value="Ingresar" class="btn btn-block btn-warning">
    </form>
</div>