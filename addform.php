
<!DOCTYPE html>

<head>
	<title>Añadir Producto</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">	
</head>

<body class="maincontent">

	<?php
include("dbconnect.php");
?>

	<br>
	<h2 class="add_data">Añadir Producto</h2>
	<br>
	<hr class="break">
	<br>
	<br>
	<!-- DIV CLASS FOR ALIGNMENT-->
	<div class="form">
	
		<!--FIRST HALF OF FORM, CLASS NAME = 'form_1'-->
	<form action="insert.php" method="post" autocomplete="off">
		<h3 class="form_labels">Producto:</h3>
		<input type="text" name="Producto" required>
		<h3 class="form_labels">Upc:</h3>
		<input type="text" name="Upc" required>
		<h3  class="form_labels">Distribuidor:</h3>
	    <input type="text" name="Distribuidor" required> 
		<h3 class="form_labels">Unidades:</h3>
		<input type="text" name="Unidades" required>
		<h3 class="form_labels">Cantidad:</h3>
		<input type="text" name="Cantidad" required>
		<h3 class="form_labels">Fecha:</h3>
		<input type="text" name="Fecha" required>
		<h3 class="form_labels">Departamento:</h3>
		
		<select name="Departamento" required>
		<option value="none" selected disabled hidden>Selecciona Opción</option>
		<option>Lácteos</option> 
		<option>Frutas y Verduras</option>
		<option>Carnes</option>
		<option>Misceláneos</option>
		<option>Licores</option>
		<option>Comestibles</option>
		
		
		</select>

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
$imagen = "AñadirProductoHelp";
	include("help.php");
?>

</body>
</html>		