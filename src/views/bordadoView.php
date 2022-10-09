<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Documento</th>
            <th>Prendas Totales</th>
            <th>Bordados por Prenda</th>
            <th>Pago al bordador</th>
            <th>Descripción</th>
            <th>Tipo de Trabajo</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = $bordadoData->fetch_assoc()) {
            echo "
                <tr>
                    <td>$row[id]</td>
                    <td class=success>$row[documento]</td>
                    <td>$row[prenda_total]</td>
                    <td>$row[bordado_prenda]</td>
                    <td>$row[entrada]$</td>
                    <td>$row[descripcion]</td>
                    <td class=text-center>$row[tipo_trabajo]</td>
                    <td class=text-center>$row[estado]</td>
                </tr>
                ";
        }

        ?>
    </tbody>
</table>