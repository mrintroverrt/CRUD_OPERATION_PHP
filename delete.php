<?php
include("connection.php");
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $deletesql = "DELETE FROM demo WHERE id = $id;";
    
    if (mysqli_query($con,$deletesql)) {
        header("Location: display.php");
    }else{
        echo "Unable to delete".mysqli_error($con);
    }
    
}