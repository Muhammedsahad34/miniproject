<?php
  $email = $_POST['email'];
  $password = $_POST['password'];

  $con = new mysqli("localhost","root","","signup");
  if($con->connect_error){
    die("Failed to connect : ".$con->connect_error);
  }else{
    $stmt = $con->prepare("select * from details where email = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
      $data = $stmt_result->fetch_assoc();
      if($data['password'] === $password){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert(' login successfull ');
        window.location.href='innerpage.html';
        </script>");
      }else{
        echo ("<script LANGUAGE='JavaScript'>
        window.alert(' Invalid email or password ');
        window.location.href='candidate.html';
        </script>");
      }
    }else{
      echo ("<script LANGUAGE='JavaScript'>
      window.alert(' Invalid email or password ');
      window.location.href='candidate.html';
      </script>");
    }
  }
  ?>