<?php
	
	include("dbconnect.php");
	

	$result = mysqli_query ($db, "SELECT * FROM suplidor");

	if (mysqli_num_rows($result) > 0) {	
?>

	<br>
	<h2 class="add_data">Editar Suplidor</h2>
	<br>
	<hr class="break">

<div class="values">
<div class="board">
<div class="dbtables">
<table border= "2" class="tablasAdjust"> 
<thead>
	<tr>
		<td> Nombre </td>
		<td> Numero de telefono</td>
		<td> Compañia </td>
		<td> Producto </td>
		<td> Acción </td>
	</tr>
</thead>
<?php
	$i=0;
	while ($row = mysqli_fetch_array($result)) {
?>
<tbody>
	<tr>	
		<td><?php echo $row["Nombre"]; ?></td>
		<td><?php echo $row["Telefono"]; ?></td>
		<td><?php echo $row["Compania"]; ?></td>
		<td><?php echo $row["Producto"]; ?></td>

		<td><a href="index.php?page=editarsuplidores.php&IdSuplidor=<?php echo $row["IdSuplidor"]; ?>">Editar</a></td>
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
$imagen = "EditarSuplidorHelp";
	include("help.php");
?>
