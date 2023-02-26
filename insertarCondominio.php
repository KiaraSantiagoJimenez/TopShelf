<?php

include 'dbconnect.php';
if(isset($_POST['save']))
{	 
	 $NombreCondominio = $_POST['NombreCondominio'];
	 $DireccionFisica = $_POST['DireccionFisica'];
	 $DireccionPostalCondominio = $_POST['DireccionPostalCondominio'];
	 $Telefono = $_POST['Telefono'];
	  $Logo = $_POST['Logo'];
	  	  $Webpage = $_POST['Webpage'];
	 
	 
    $sql = "INSERT INTO suplidor(NombreCondominio, DireccionFisica, DireccionPostalCondominio, Telefono,Logo) VALUES 
     ('$Nombre','$DireccionFisica','$DireccionPostalCondominio','$Telefono','$Logo','$')";
	if (mysqli_query($db,$sql)) {
		mysqli_close($db);
		echo '<script>alert ("El nuevo articulo fue anadido exitosamente"); </script>'; // Avisa al usuario 
		
		echo '<script>window.location.assign("home.php");</script>'; // Vuelve al 'Index'
	}
		else {
			echo '<script>alert("Error: " . $sql . " " . mysqli_error($db)"); </script>';
			mysqli_close($db);
			echo '<script>window.location.assign("anadirCondominio.php");</script>';
		}
}
?>