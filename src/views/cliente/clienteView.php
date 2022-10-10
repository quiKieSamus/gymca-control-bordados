<table class="table table-bordered table-hover ">
    <thead>
        <tr>
            <th>Cédula/RIF</th>
            <th>Nombre</th>
            <th>Cantidad de Trabajos Realizados</th>
            <th>Dirección</th>

        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = $clienteData->fetch_assoc()) {
            echo "
            <tr>
                <td class=success>$row[documento]</td>
                <td>$row[nombre]</td>
                <td>$row[cantidad_trabajo]</td>
                <td>$row[direccion]</td>
            </tr>
            ";
        }


        ?>
    </tbody>
</table>