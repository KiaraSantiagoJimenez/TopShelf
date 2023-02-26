<?php
    include 'dbconnect.php';
    $sql = "DELETE FROM suplidor WHERE IdSuplidor='" . $_GET["IdSuplidor"] . "'";
    //This sends the SQL command to the database to be able to delete a given item.

if (mysqli_query($db, $sql)) 
    {
    echo '<script>alert("Removido exitosamente!");</script>';

    echo '<script>window.location.assign("index.php?page=removesupplierform.php");</script>';
    } //Returns the user back to the deletion page 
else 
    {
    echo '<script>alert("Borando...: " . mysqli_error($db)!");</script>';
    }
mysqli_close($db);
?> 