<?php
	include 'dbconnect.php';
	$result = mysqli_query($db,"SELECT * FROM stock");
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Remover Producto</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="tableDesign.css">
	</head>	
<body>
	<br>
	<h2 class="add_data">Remover Producto</h2>
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
	while($row = mysqli_fetch_array($result)) {
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
		<?php echo '<td><a href="#" onclick="myFunction('.$row['StockID'].')">Remover</a> </td>';?>
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
	function myFunction(StockID)
	{
	var r=confirm("¿Estas seguro que quieres remover este producto?");
	if (r==true) //Ensures the user does not delete an item by mistake
		{
			window.location.assign("delete.php?StockID=" + StockID);
		}
	}
</script>

<?php
$imagen = "RemoverProductoHelp";
	include("help.php");
?>

</body>
</html>