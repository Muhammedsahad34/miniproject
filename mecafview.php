<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mea engineering college</title>
<link href="mecafview.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>List of candidates for duffmuttu</h1>
    <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full name</th>
                <th>Register Number</th>
                <th>Year</th>
                <th>Class</th>
                
            </tr>
           
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "signup";

            $connection = new mysqli($servername, $username, $password, $database);

            if($connection->connect_error){
                die("connection failed: ".$connection->connect_error);
            }

            $sql = "SELECT * FROM `registration` WHERE event1='duffmuttu' OR event2='duffmuttu' OR event3='duffmuttu'";
            $result = $connection->query($sql);

            if(!$result){
                die("Invalid query: " .$connection->error);
            }

            while($row = $result->fetch_assoc()){

            
            echo "<tr>
                <td>".$row["id"] ."</td>
                <td>".$row["full_name"] ."</td>
                <td>".$row["register_number"] ."</td>
                <td>".$row["year"] ."</td>
                <td>".$row["class"] ."</td>
                </tr>";
            }
            ?>

        </tbody>
    </table>

    <h1>List of candidates for vattapattu</h1>
    <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full name</th>
                <th>Register Number</th>
                <th>Year</th>
                <th>Class</th>
                
            </tr>
           
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "signup";

            $connection = new mysqli($servername, $username, $password, $database);

            if($connection->connect_error){
                die("connection failed: ".$connection->connect_error);
            }

            $sql = "SELECT * FROM `registration` WHERE event1='vattapattu' OR event2='vattapattu' OR event3='vattapattu'";
            $result = $connection->query($sql);

            if(!$result){
                die("Invalid query: " .$connection->error);
            }

            while($row = $result->fetch_assoc()){

            
            echo "<tr>
                <td>".$row["id"] ."</td>
                <td>".$row["full_name"] ."</td>
                <td>".$row["register_number"] ."</td>
                <td>".$row["year"] ."</td>
                <td>".$row["class"] ."</td>
                </tr>";
            }
            ?>

        </tbody>
    </table>

    <h1>List of candidates for kolkali</h1>
    <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full name</th>
                <th>Register Number</th>
                <th>Year</th>
                <th>Class</th>
                
            </tr>
           
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "signup";

            $connection = new mysqli($servername, $username, $password, $database);

            if($connection->connect_error){
                die("connection failed: ".$connection->connect_error);
            }

            $sql = "SELECT * FROM `registration` WHERE event1='kolkali' OR event2='kolkali' OR event3='kolkali'";
            $result = $connection->query($sql);

            if(!$result){
                die("Invalid query: " .$connection->error);
            }

            while($row = $result->fetch_assoc()){

            
            echo "<tr>
                <td>".$row["id"] ."</td>
                <td>".$row["full_name"] ."</td>
                <td>".$row["register_number"] ."</td>
                <td>".$row["year"] ."</td>
                <td>".$row["class"] ."</td>
                </tr>";
            }
            ?>

        </tbody>
    </table>

    <h1>List of candidates for Group Song</h1>
    <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full name</th>
                <th>Register Number</th>
                <th>Year</th>
                <th>Class</th>
                
            </tr>
           
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "signup";

            $connection = new mysqli($servername, $username, $password, $database);

            if($connection->connect_error){
                die("connection failed: ".$connection->connect_error);
            }

            $sql = "SELECT * FROM `registration` WHERE event1='groupsong' OR event2='groupsong' OR event3='groupsong'";
            $result = $connection->query($sql);

            if(!$result){
                die("Invalid query: " .$connection->error);
            }

            while($row = $result->fetch_assoc()){

            
            echo "<tr>
                <td>".$row["id"] ."</td>
                <td>".$row["full_name"] ."</td>
                <td>".$row["register_number"] ."</td>
                <td>".$row["year"] ."</td>
                <td>".$row["class"] ."</td>
                </tr>";
            }
            ?>

        </tbody>
    </table>

    <h1>List of candidates for Group Dance</h1>
    <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full name</th>
                <th>Register Number</th>
                <th>Year</th>
                <th>Class</th>
                
            </tr>
           
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "signup";

            $connection = new mysqli($servername, $username, $password, $database);

            if($connection->connect_error){
                die("connection failed: ".$connection->connect_error);
            }

            $sql = "SELECT * FROM `registration` WHERE event1='groupdance' OR event2='groupdance' OR event3='groupdance'";
            $result = $connection->query($sql);

            if(!$result){
                die("Invalid query: " .$connection->error);
            }

            while($row = $result->fetch_assoc()){

            
            echo "<tr>
                <td>".$row["id"] ."</td>
                <td>".$row["full_name"] ."</td>
                <td>".$row["register_number"] ."</td>
                <td>".$row["year"] ."</td>
                <td>".$row["class"] ."</td>
                </tr>";
            }
            ?>

        </tbody>
    </table>
</body>
</html>