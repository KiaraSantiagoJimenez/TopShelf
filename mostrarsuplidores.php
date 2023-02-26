<?php
    include("dbconnect.php");


    $query = "SELECT * FROM suplidor";
    $result = mysqli_query($db, $query);
    $num = mysqli_num_fields($result);

    if (mysqli_num_rows($result) > 0) {
?>

	<br>
	<h2 class="add_data">Suplidores</h2>
	<br>
	<hr class="break">

	<div class="values">
	<div class="board">
	<div class="dbtables">
	<table border="2" class="tablasAdjust"> 
		<thead>
			<tr>
				<td>Nombre</td>
				<td>Número de teléfono</td>
				<td>Compañía</td>
				<td>Producto</td>
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

