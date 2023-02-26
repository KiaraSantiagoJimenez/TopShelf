<?php
include("dbconnect.php");



$query = "SELECT * FROM stock";
$result = mysqli_query($db, $query);
$num = mysqli_num_fields($result);
?>


<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Shelf</title>

    <!-- Font-awesome for icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css">
	</head>

<body>

    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>


        <br>
        <h2 class="add_data">Dashboard</h2>
        <br>
        <hr class="break">
        <section>
            <!-- CARDS -->
            <div class="values">

                <div class="val-box">
                    <i class="fas fa-users"></i>
                    <div>
                        <h3>
                            <?php
                            $count = mysqli_num_rows(mysqli_query($db, "SELECT * FROM suplidor"));
                            echo $count ?>
                        </h3>
                        <span>Distribuidores</span>
                    </div>
                </div>

                <div class="val-box">
                    <i class="fas fa-shopping-cart"></i>
                    <div>
                        <h3>
                            <?php
                            $count = mysqli_num_rows(mysqli_query($db, "SELECT * FROM stock"));
                            echo $count ?>
                        </h3>
                        <span>Productos</span>
                    </div>
                </div>
                <!-- Table -->
                <div class="board">
                    <div class="dbtables">
                        <table border="2" class="tablasAdjust">
                            <thead>
                                <tr>
                                    <td>Producto</td>
                                    <td> Distribuidores </td>
                                    <td> Upc </td>
                                    <td> Unidades </td>
                                    <td> Cantidad </td>
                                    <td> Departamento </td>
                                    <td> Estatus </td>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>

                                        <td><?php echo $row["Producto"]; ?></td>
                                        <td><?php echo $row["Distribuidor"]; ?></td>
                                        <td><?php echo $row["Upc"]; ?></td>
                                        <td><?php echo $row["Unidades"]; ?></td>
                                        <td><?php echo $row["Cantidad"]; ?></td>
                                        <td><?php echo $row["Departamento"]; ?></td>


                                        <!-- Verifies if stock is lower than 20 -->


                                        <td>
                                            <?php

                                            if ($row["Cantidad"] < 20) {
                                                echo "<span style='color:red;'>Bajo suministros </span>";
                                            } else {
                                                echo "Niveles adecuados de suministros";
                                            }

                                            ?>
                                        </td>
                                    </tr>
                            </tbody>
                        <?php
                                    $i++;
                                }
                        ?>
                        </table>
                    </div>
                </div>
            <?php
        } else {
            echo "404";
        }
            ?>



            </div>

        </section>

<?php
$imagen = "DashboardHelp";
	include("help.php");
?>

</body>

</html>