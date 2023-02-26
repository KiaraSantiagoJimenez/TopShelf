<?php

include 'dbconnect.php';
if(isset($_POST['save']))
{	 
	 $Producto = $_POST['Producto'];
	 $Upc = $_POST['Upc'];
	 $Distribuidor = $_POST['Distribuidor'];
	 $Unidades = $_POST['Unidades'];
	 $Cantidad = $_POST['Cantidad'];
	 $Fecha = $_POST['Fecha'];
	 $Departamento = $_POST['Departamento'];
	 
	 $sql = "INSERT INTO stock (Producto,Upc,Distribuidor,Unidades,Cantidad,Fecha,Departamento)
		VALUES ('$Producto','$Upc','$Distribuidor','$Unidades','$Cantidad','$Fecha','$Departamento')";
	 
	if (mysqli_query($db,$sql)) {
		mysqli_close($db);
		echo '<script>alert ("El nuevo articulo fue anadido exitosamente"); </script>'; // Avisa al usuario 
		
		echo '<script>window.location.assign("index.php");</script>'; // Vuelve al 'Index'
	}
		else {
			echo '<script>alert("Error: " . $sql . " " . mysqli_error($db)"); </script>';
			mysqli_close($db);
			echo '<script>window.location.assign("addform.php");</script>';
		}
}
?>