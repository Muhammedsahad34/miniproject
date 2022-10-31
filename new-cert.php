<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "signup";
$name = $_POST["full_name"];

$connection = mysqli_connect($servername, $username, $password, $database);
$sql = "SELECT * FROM `registration` where 'register_number'=$name";
$query = mysqli_query($connection,$sql);



 
 
 


$conn = new mysqli('localhost','root','','signup');



$stmt = $conn->prepare("select * from registration where register_number=?");
$stmt->bind_param("s",$name);
$stmt->execute();
$user= $stmt->get_result();
$result = $user->fetch_assoc();
$namee=$result['full_name'] ;
$event=$result['event1'];
$status=$result['status'];
if($status==="participated"){




if($user->num_rows > 0) {
  require("fpdf/fpdf.php");
header('content-type:image/jpeg');
$sql = "select * from registration";
$font = "C:/xampp/htdocs/Test/arial.ttf";
    
$image = imagecreatefromjpeg("certificate.jpg");
$color = imagecolorallocate($image,19,21,22);
imagettftext($image,80,0,1600,2250,$color,$font,$namee);
imagettftext($image,60,0,800,2400,$color,$font,"participated");

imagettftext($image,80,0,1800,2400,$color,$font,$event);


imagejpeg($image,"outputs/sahad.jpg");
imagedestroy($image);

$pdf = new FPDF();
$pdf->AddPage(L,A5);
$pdf->Image("outputs/sahad.jpg",0,0,210,148);
ob_end_clean();
$pdf->Output();
    
}else{
    echo "<script LANGUAGE='JavaScript'>
    window.alert('User not registered');
    window.location.href='view_certificate.html';
    </script>";

}
}else{
  echo "<script LANGUAGE='JavaScript'>
    window.alert('User not Particpated');
    window.location.href='view_certificate.html';
    </script>"; 
}


 
?>
