<!DOCTYPE html>

<head>
	<title>Add Data</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">	
</head>

<body class="maincontent">
	
<br>

	<h2 class="add_data">Añadir Suplidor</h2>
	<br>
	<hr class="break">
	<br>
	<br>
	<!-- DIV CLASS FOR ALIGNMENT-->
	<div class="form">
	
		<!--FIRST HALF OF FORM, CLASS NAME = 'form_1'-->
	<form action="insertsupplier.php" method="post" autocomplete="off">
		<h3 class="form_labels">Nombre:</h3>
		<input type="text" name="Nombre" required>
		<h3 class="form_labels">Telefono:</h3>
		<input type="text" name="Telefono" required>
		<h3 class="form_labels">Compañia:</h3>
		<input type="text" name="Compania" required>
		<h3 class="form_labels">Producto:</h3>
		<input type="text" name="Producto" required>
		
        <br/><br/>
		
<br>
<br>
<br>
		<!--SUBMIT BUTTON-->
		  <button class="submit" type="submit" name="save">SUBMIT</button>
		
		
		<br>
		<br>
	</form>
</div>

<?php
$imagen = "AñadirSuplidorHelp";
	include("help.php");
?>

</body>
</html>	