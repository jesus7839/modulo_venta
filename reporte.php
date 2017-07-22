<?php
include 'php/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 2</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="logo.png">
      </div>
      <div id="company">
        <h2 class="name">FARMACIA</h2>
      </div>
      </div>
    </header>
    <main>
        <?php
        if(isset($_GET["reporte"])){
            if (!empty($_GET["id"])) $id = $_GET["id"];
            else $id = null;
            $continuar = false;
            $totalpedido = "";
            $totaldescuento = "";
            $totalpago = "";

            $sql = "SELECT *
                    FROM ven_comprobante1 vc 
                    INNER JOIN ven_pedido1 vp 
                    ON vc.`ped_id` = vp.`ped_id`
                    INNER JOIN `ven_caja1` vcj
                    ON vc.`caja_id` = vcj.`caja_id`
                    INNER JOIN `glb_persona` gp
                    ON vp.`perso_id` = gp.`perso_id` WHERE vc.`comp_id` =".$id." AND vc.comp_estado=1";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $continuar = true;
                    $totalpedido = $row["comp_totalped"];
                    $totaldescuento = $row["comp_totaldesc"];
                    $totalpago = $row["comp_totalpago"];
                    ?>
                    <div id="details" class="clearfix">
                        <div id="client">
                            <div class="to">A nombre:</div>
                            <h2 class="name"><?php echo $row["perso_nom"]." ".$row["perso_app"]." ".$row["perso_apm"]; ?></h2>
                        </div>
                        <div id="invoice">
                            <h1>Caja</h1>
                            <h2 class="name"><?php echo $row["caja_num"]; ?></h2>

                            <div class="date">Fecha Emision: <?php
                            date_default_timezone_set('America/Lima');
                            $date = date('d/m/Y h:i a');
                            echo $date;
                            ?></div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "No hay resultados";
            }
            ?>

            <table border="0" cellspacing="0" cellpadding="0">
                <thead>
                <tr>
                    <th class="no">#</th>
                    <th class="desc">Producto</th>
                    <th class="qty">Cantidad</th>
                    <th class="unit">Precio por Unidad</th>
                    <th class="desc">Precio por mayor</th>
                </tr>
                </thead>
                <tbody>


                <?php
                if ($continuar){
                    $sql2 = "SELECT * 
                    FROM ven_detalle_comprobante1 vdc
                    INNER JOIN glb_producto gp
                    ON vdc.`prod_id` = gp.`prod_id`
                     WHERE comp_id =".$id;
                    $result2 = mysqli_query($con, $sql2);
                    if (mysqli_num_rows($result2) > 0) {
                        $contador=0;
                        while($row2 = mysqli_fetch_assoc($result2)) {
                            $contador++;
                            ?>
                            <tr>
                                <td class="no"><?php echo $contador; ?></td>
                                <td class="desc"><h3><?php echo $row2["prod_Nom"]; ?></h3></td>
                                <td class="qty"><?php echo $row2["detcomp_cantidad"]; ?></td>
                                <td class="unit"><?php echo $row2["detcomp_precunidad"]; ?></td>
                                <td class="desc"><?php echo $row2["detcomp_precmayor"]; ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "No hay resultados";
                    }
                }

                ?>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">Total Pedido</td>
                    <td>$<?php echo $totalpedido; ?></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">Total Descuentos</td>
                    <td><?php echo $totaldescuento; ?></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">TOTAL</td>
                    <td><?php echo $totalpago; ?></td>
                </tr>
                </tfoot>
            </table>

            <?php

        }else{
            echo "ERROR! Verifique la solicitud nuevamente";
        }
        ?>

      <div id="thanks">Gracias!</div>
        <div id="notices">
            <div>NOTA:</div>
            <div class="notice">Impuestos aplicados al monto final</div>
        </div>
    </main>
  </body>
</html>