<?php
	include("dbconnect.php");


	if (count($_POST) > 0) {
	
	mysqli_query($db,"UPDATE suplidor set Nombre='" . $_POST['Nombre'] . "', Telefono='" . $_POST['Telefono'] . "', Compania='" . $_POST['Compania'] . "' ,Producto='" . $_POST['Producto'] . "' WHERE IdSuplidor= '" . $_POST['IdSuplidor'] . "'");

	echo '<script>alert("Informacion Editada Exitosamente!");</script>';
		// Prompts the user_error
	echo '<script>window.location.assign("index.php?page=editarsuplidoresform.php");</script>';
	}
	
	$result = mysqli_query($db,"SELECT * FROM suplidor WHERE IdSuplidor='" . $_GET['IdSuplidor'] . "'");
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
	<h2 class="add_data">Editar Suplidor</h2>
	<br>
	<hr class="break">
	<br>
	<br>
	
	<div class="form">
	<form name="frmUser" method="post" action="">
	
	<h3>Id Suplidor:</h3> 
	<input type="hidden" name="IdSuplidor" class="txtField" value="<?php echo $row['IdSuplidor']; ?>">     
	<input type="text" name="IdSuplidor" value="<?php echo $row['IdSuplidor']; ?>" readonly>     
	<br/>

	<h3>Nombre:</h3>
	<input type="text" name="Nombre" class="txtField" value="<?php echo $row['Nombre']; ?>">
	<br/>
	<h3>Telefono:</h3>
	<input type="text" name="Telefono" class="txtField" value="<?php echo $row['Telefono']; ?>">
	<br/>
	<h3>Compania:</h3>
	<input type="text" name="Compania" class="txtField" value="<?php echo $row['Compania']; ?>">
	<br/>
	<h3>Producto:</h3>
	<input type="text" name="Producto" class="txtField" value="<?php echo $row['Producto']; ?>">
	<br/>
	
	</select>
	<br/>
	<button class="submit" name="submit" type="submit" value="Submit">SUBMIT</button>
	</form>
	</div>

<?php
$imagen = "EditarSuplidorFormHelp";
	include("help.php");
?>
	
</body>
</html>