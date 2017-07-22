<table class="table datatable-basic table-bordered" id="tabla-categoria">
<thead>
    <tr>
        <th>#</th>
        <th>Categoria</th>
        <th>Accion</th>
    </tr>
</thead>
<tbody>
<?php
    $sql2 = "SELECT * FROM alm_categoria";
    $result2 = $con->query($sql2);

    if ($result2->num_rows > 0) {
        // output data of each row
        while($row2 = $result2->fetch_array()) {
            echo "<tr>
            <td>".$row2['cate_id']."</td>
            <td>".$row2['cate_desc']."</td>
            <td>
                <button class='btn btn-seleccionar-pedido btn-sm btn-info btn-labeled'>
                    <b><i class='icon-add'></i></b>
                    Agregar
                </button>
            </td>
            </tr>";
        }
    } else {
        echo "0 results";
    }
    
?>
</tbody>		
</table>