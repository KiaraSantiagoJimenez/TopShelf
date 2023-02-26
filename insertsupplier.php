<?php

include 'dbconnect.php';
if(isset($_POST['save']))
{	 
	 $Nombre = $_POST['Nombre'];
	 $Telefono = $_POST['Telefono'];
	 $Compania = $_POST['Compania'];
	 $Producto = $_POST['Producto'];
	 
	 
    $sql = "INSERT INTO suplidor(Nombre, Telefono, Compania, Producto) VALUES 
     ('$Nombre','$Telefono','$Compania','$Producto')";
	if (mysqli_query($db,$sql)) {
		mysqli_close($db);
		echo '<script>alert ("El nuevo articulo fue anadido exitosamente"); </script>'; // Avisa al usuario 
		
		echo '<script>window.location.assign("index.php");</script>'; // Vuelve al 'Index'
	}
		else {
			echo '<script>alert("Error: " . $sql . " " . mysqli_error($db)"); </script>';
			mysqli_close($db);
			echo '<script>window.location.assign("addsupplier.php");</script>';
		}
}
?>