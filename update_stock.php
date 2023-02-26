<?php
	include("dbconnect.php");


	if (count($_POST) > 0) {
	
	mysqli_query($db,"UPDATE stock set Producto='" . $_POST['Producto'] . "', Upc='" . $_POST['Upc'] . "', Distribuidor='" . $_POST['Distribuidor'] . "' ,Unidades='" . $_POST['Unidades'] . "', Cantidad='" . $_POST['Cantidad'] . "', Fecha='" . $_POST['Fecha'] . "', Departamento='" . $_POST['Departamento'] . "' WHERE StockID= '" . $_POST['StockID'] . "'");

	echo '<script>alert("Informacion Editada Exitosamente!");</script>';
		// Prompts the user_error
	echo '<script>window.location.assign("index.php?page=updateform.php");</script>';
	}
	
	$result = mysqli_query($db,"SELECT * FROM stock WHERE StockID='" . $_GET['StockID'] . "'");
	$row=mysqli_fetch_array($result);
?>
	
<html>
	<head>
		<title>TopShelf</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css">
	</head>
	
<body>
	<br>
	<h2 class="add_data">Editar Producto</h2>
	<br>
	<hr class="break">
	<br>
	<br>
	
	<div class="form">
	<form name="frmUser" method="post" action="">
	
	<h3>StockID:</h3> 
	<input type="hidden" name="StockID" class="txtField" value="<?php echo $row['StockID']; ?>">     
	<input type="text" name="StockID" value="<?php echo $row['StockID']; ?>" readonly>     
	<br/>

	<h3>Producto:</h3>
	<input type="text" name="Producto" class="txtField" value="<?php echo $row['Producto']; ?>">
	<br/>
	<h3>Upc:</h3>
	<input type="text" name="Upc" class="txtField" value="<?php echo $row['Upc']; ?>">
	<br/>
	<h3>Distribuidor:</h3>
	<input type="text" name="Distribuidor" class="txtField" value="<?php echo $row['Distribuidor']; ?>">
	<br/>
	<h3>Unidades:</h3>
	<input type="text" name="Unidades" class="txtField" value="<?php echo $row['Unidades']; ?>">
	<br/>
	<h3>Cantidad:</h3>
	<input type="text" name="Cantidad" class="txtField" value="<?php echo $row['Cantidad']; ?>">
	<br/>
	<h3>Fecha:</h3>
	<input type="text" name="Fecha" class="txtField" value="<?php echo $row['Fecha']; ?>">
	<br/>
	<h3>Departamento:</h3>
	
	<select name="Departamento" required value="<?php echo $row['Departamento']; ?>">
		<option>Lácteos</option> 
		<option>Frutas y Verduras</option>
		<option>Carnes</option>
		<option>Misceláneos</option>
		<option>Licores</option>
		<option>Comestibles</option>
	</select>
	<br/>
	<button class="submit" name="submit" type="submit" value="Submit">SUBMIT</button>
	</form>
	</div>
	
<?php
$imagen = "EditarProductoFormHelp";
	include("help.php");
?>
	
</body>
</html>