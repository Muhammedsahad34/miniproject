<?php
$full_name = $_POST['full_name'];
  $register_number = $_POST['register_number'];
  $year = $_POST['year'];
  $class = $_POST['class'];
  $event1 = $_POST['event1'];
  $event2 = $_POST['event2'];
  $event3 = $_POST['event3'];

  $conn = new mysqli('localhost','root','','signup');
  if($conn->connect_error){
    die('connection failed'.$conn->connect_error);
  }else{ 
    $stm = $conn->prepare("select * from registration where register_number=?");
    $stm->bind_param("s",$register_number);
    $stm->execute();
    $user= $stm->get_result();
    if($user->num_rows > 0){
        echo ("<script LANGUAGE='JavaScript'>
    window.alert(' register number already exist');
    window.location.href='mecaf.html';
    </script>");
    }
    else{
        $stmt = $conn->prepare("insert into registration(full_name, register_number, year, class, event1, event2, event3)values(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssissss",$full_name, $register_number,$year, $class, $event1, $event2, $event3);
        $stmt->execute();
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Succesfully registered');
        window.location.href='innerpage.html';
        </script>");
        $stmt->close();
        $conn->close();
      }

  }
    
