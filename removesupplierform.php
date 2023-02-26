<?php
    include 'dbconnect.php';
    $result = mysqli_query($db,"SELECT * FROM suplidor");
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Remover Distribuidor</title>

        <meta charset="utf-8">
        <link rel="stylesheet" href="tableDesign.css">
    </head>
<body>
    <br>
    <h2 class="add_data">Remover Distribuidor</h2>
    <br>
    <hr class="break">

<div class="values">
<div class="board">
<div class="dbtables">
<table border= "2" class="tablasAdjust"> 
<thead>
    <tr>
        <td> Nombre </td>
        <td> Telefono</td>
        <td> Compañia</td>
        <td> Producto </td>
		<td> Acción </td>
    </tr>
</thead>
<?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
?>
<tbody>
    <tr> 
        <td><?php echo $row["Nombre"]; ?></td>
        <td><?php echo $row["Telefono"]; ?></td>
        <td><?php echo $row["Compania"]; ?></td>
        <td><?php echo $row["Producto"]; ?></td>
        <?php echo '<td><a href="#" onclick="myFunction('.$row['IdSuplidor'].')">Remover</a> </td>';?>
    </tr> 
</tbody>
<?php
    $i++;
    }
?>

</table>
</div>
</div>
</div>
<script>
    function myFunction(IdSuplidor)
    {
    var r=confirm("¿Estás seguro de que quieres borrar este suplidor?");
    if (r==true) //Ensures the user does not delete an item by mistake
        {
            window.location.assign("removesupplier.php?IdSuplidor=" + IdSuplidor);
        }
    }
</script>

<?php
$imagen = "RemoverSuplidorHelp";
	include("help.php");
?>

</body>
</html>