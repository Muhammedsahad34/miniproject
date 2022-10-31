<?php
require('mecafview.php');

if (isset($_GET['id'])){
    $id=$_GET['id'];
    $delete=mysqli_query($connection,"DELETE FROM 'registration' WHERE 'id'=$id");
}
?>