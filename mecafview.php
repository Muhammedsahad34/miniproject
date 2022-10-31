<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $database = "signup";

     $connection = mysqli_connect($servername, $username, $password, $database);

     if (isset($_GET['id'])){
        $id=$_GET['id'];
        $delete=mysqli_query($connection,"DELETE FROM registration WHERE `registration`.`id` = $id");
    }

     $sql = "SELECT * FROM `registration`";
     $query = mysqli_query($connection,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mea engineering college</title>
<link href="mecafview.css" rel="stylesheet" type="text/css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <h1>List of candidates for Events</h1>
    <br>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Full name</th>
                <th scope="col">Register Number</th>
                <th scope="col">Year</th>
                <th scope="col">Class</th>
                <th scope="col">Event-1</th>
                <th scope="col">Event-2</th>
                <th scope="col">Event-3</th>
                <th scope="col">Participation Status</th>
                
            </tr>
           
        </thead>
        <tbody>
            <?php

            $num=mysqli_num_rows($query);

           if($num>0){
            while($result=mysqli_fetch_assoc($query)){

            
            echo "<tr>
                <td>".$result['id'] ."</td>
                <td>".$result['full_name'] ."</td>
                <td>".$result['register_number'] ."</td>
                <td>".$result['year'] ."</td>
                <td>".$result['class'] ."</td>
                <td>".$result['event1']."</td>
                <td>".$result['event2']."</td>
                <td>".$result['event3']."</td>
                <td><a href='status.php?id=".$result['id']."'  class='btn btn-primary'>Participated </a>
                <a href='mecafview.php?id=".$result['id']."' onclick='return confirm()' class='btn btn-danger'>Not Participated </a></td>
                </tr>";
            }}
            ?>

        </tbody>
    </table>

    
</body>
</html>