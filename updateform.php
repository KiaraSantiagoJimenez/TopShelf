<?php
	
	include("dbconnect.php");
	

	$result = mysqli_query ($db, "SELECT * FROM stock");

	if (mysqli_num_rows($result) > 0) {	
?>

	<br>
	<h2 class="add_data">Editar Producto</h2>
	<br>
	<hr class="break">

<div class="values">
<div class="board">
<div class="dbtables">
<table border= "2" class="tablasAdjust"> 
<thead>
	<tr>
		<td> Producto </td>
		<td> Upc</td>
		<td> Distribuidor</td>
		<td> Unidades </td>
		<td> Cantidad</td>
		<td> Fecha </td>
		<td> Departamento</td>
		<td> Acción </td>
	</tr>
</thead>
<?php
	$i=0;
	while ($row = mysqli_fetch_array($result)) {
?>
<tbody>
	<tr>	
		<td><?php echo $row["Producto"]; ?></td>
		<td><?php echo $row["Upc"]; ?></td>
		<td><?php echo $row["Distribuidor"]; ?></td>
		<td><?php echo $row["Unidades"]; ?></td>
		<td><?php echo $row["Cantidad"]; ?></td>
		<td><?php echo $row["Fecha"]; ?></td>
		<td><?php echo $row["Departamento"]; ?></td>

		<td><a href="index.php?page=update_stock.php&StockID=<?php echo $row["StockID"]; ?>">Editar</a></td>
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
<?php
	}
	else { 
		echo "No result found";
	}
?>

<?php
$imagen = "EditarProductoHelp";
	include("help.php");
?>
