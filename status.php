<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "signup";

 $connection = mysqli_connect($servername, $username, $password, $database);
 $status=$_POST['status'];

 if (isset($_GET['id'])){
    $id=$_GET['id'];
    $sql=mysqli_query($connection,"UPDATE registration SET `status` = 'participated' WHERE `registration`.`id`=$id");
}
echo ("<script LANGUAGE='JavaScript'>
window.alert(' successfully updated ');
window.location.href='mecafview.php';
</script>");
?>