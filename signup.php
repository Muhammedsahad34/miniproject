<?php
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];
  $mobilenumber = $_POST['mobilenumber'];

  if($_POST["password"] === $_POST["confirmpassword"]){

  $conn = new mysqli('localhost','root','','signup');
  if($conn->connect_error){
    die('connection failed'.$conn->connect_error);
  }else{
    $stm = $conn->prepare("select * from details where email=?");
    $stm->bind_param("s",$email);
    $stm->execute();
    $user= $stm->get_result();
    
    if($user->num_rows > 0){
      echo ("<script LANGUAGE='JavaScript'>
  window.alert(' email already exist');
  window.location.href='signup.html';
  </script>");
    }
    else{
    $stmt = $conn->prepare("insert into details(firstname, lastname, email, password, confirmpassword, mobilenumber)values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi",$firstname, $lastname, $email, $password, $confirmpassword, $mobilenumber);
    $stmt->execute();
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated');
    window.location.href='candidate.html';
    </script>");
    $stmt->close();
    $conn->close();
  }}
}else{
  echo ("<script LANGUAGE='JavaScript'>
  window.alert(' password not matching');
  window.location.href='signup.html';
  </script>");
}
  



  ?>
  