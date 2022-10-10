<form class="form bg-info" method="POST" action="">
    <div class="container-fluid">

        <div class="form-group">
            <label for="documento">Cédula/RIF</label>
            <input type="text" name="doc" class="form-control">
        </div>

        <div class="form-group">
            <label for="totalCloth">Prendas a bordar</label>
            <input type="number" name="totalCloth" min="0" class="form-control">
        </div>

        <div class="form-group">
            <label for="embByCloth">Cantidad de bordados por prenda</label>
            <input type="number" name="embByCloth" min="0" class="form-control">
        </div>

        <div class="form-group">
            <p class="lead">Lleva bordados en espalda?</p>
            <div class="radio">
                <label for="backTrue"><input type="radio" name="isBack" value="true" id="">Sí</label>
            </div>
            <div class="radio">
                <label for="backTrue"><input type="radio" name="isBack" value="false" id="">No</label>
            </div>

            <div class="container-fluid">
                <label for="backQty">¿Cuántos?</label>
                <input class="form-control" type="number" name="backQty" id="backQty">
        </div>

        <div class="form-group">
            <p class="lead">Tipo de Trabajo</p>
            <div class="radio">
                <label for="type"><input type="radio" name="type" value="x" id="">Externo</label>
            </div>
            <div class="radio">
                <label for="type"><input type="radio" name="type" value="i" id="">Interno</label>
            </div>


            <div class="form-group">
                <label for="desc">Descripción de trabajo</label>
                <textarea name="desc" id="desc" class="form-control"></textarea>
            </div>
        </div>

        <input type="submit" value="Enviar" class="btn btn-block btn-warning">

</form>