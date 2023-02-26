<?php

    

    if (isset($_POST['search'])) {
        $connection = new mysqli("localhost", "root", "", "topshelf3");
        $valueToSearch = $connection->real_escape_string($_POST['valueToSearch']);
        $column = $connection->real_escape_string($_POST['column']);

        
            if ($column == "" || $valueToSearch == "" ){
				$sql = $connection->query("SELECT * FROM stock");
				$query = "SELECT * FROM stock";
                $search_result = filterTable($query);
			}else{

            $sql = $connection->query("SELECT * FROM stock WHERE ". $column ." LIKE '%". $valueToSearch ."%' ");
            if (mysqli_num_rows($sql)){
                    $query = "SELECT * FROM stock WHERE ". $column ." LIKE '%". $valueToSearch ."%' ";
                    $search_result = filterTable($query);
            }else{
				echo "Your search query doesn't match any data!";
				$sql = $connection->query("SELECT * FROM stock");
				$query = "SELECT * FROM stock";
                $search_result = filterTable($query);
			}
	}
    }else{
            $query = "SELECT * FROM stock";
            $search_result = filterTable($query);
    }

    function filterTable($query){

    $connect = mysqli_connect("localhost", "root", "", "topshelf3");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
    }
?>
<form action="index.php?page=findproduct.php" method="post">
    <input type="text" name="valueToSearch" placeholder="Value To Search" style= "margin: 10px;"><br><br>
	<select name="column" style= "margin: 10px;">
                <option value="">Select Filter</option>
                <option value="Producto">Producto</option>
                <option value="Upc">UPC</option>
				<option value="Distribuidor">Distribuidor</option>
				<option value="Departamento">Departamento</option>
    </select>
    <input type="submit" name="search" value="Filter"><br><br>
<div class="values">
<div class="board">
<div class="dbtables">
<table border= "2" class="tablasAdjust">
<thead>
	<tr>
		<td>Producto</td>
		<td>Upc</td>
		<td>Distribuidor</td>
		<td>Unidades</td>
		<td>Cantidad</td>
		<td>Fecha</td>
		<td>Departamento</td>
	</tr>
</thead>
<?php
while($row = mysqli_fetch_array($search_result)):
echo"<tbody>
	<tr>
		<td>",  $row["Producto"]  ,"</td>
		<td>",  $row["Upc"]  ,"</td>
		<td>",  $row["Distribuidor"]  ,"</td>
		<td>",  $row["Unidades"]  ,"</td>
		<td>",  $row["Cantidad"]  ,"</td>
		<td>",  $row["Fecha"]  ,"</td>
		<td>",  $row["Departamento"]  ,"</td>
	</tr>
</tbody>";
endwhile;
?>
</table>
</div>
</div>
</div>
</form>

<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Help <i class="fa fa-question-circle"></i></button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Help</h4>
        </div>
        <div class="modal-body">
          <p><img src="images/BuscarProductoHelp.png" alt="Help Image" height = 100% width = 100% /></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
	