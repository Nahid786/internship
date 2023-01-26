<?php
session_start();
header('location:login.php');
$server="localhost";
$username="root";
$password="";
$dbname="intern";



$conn=new mysqli($server,$username,$password,$dbname); 
if($conn){
    echo "Successful";
}
else{
    echo "no connection";
}

$email=$_POST['email'];
$password=$_POST['password'];
$repassword=$_POST['retype_password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['sex'];
$country=$_POST['country'];

//check validation
$q="SELECT * FROM `register` WHERE Email = '$email' && Password = '$password' ";
$result = mysqli_query($conn,$q);
$num = mysqli_num_rows($result);

if($num==1){
    echo "Duplicate data";
}
else{
    $insert="INSERT INTO `register` (`ID`, `Email`, `Password`, `rePassword`, `fname`, `lname`, `gender`, `country`)
    VALUES (NULL, '$email', '$password', '$repassword', '$fname', '$lname', '$gender', '$country')";
    
    mysqli_query($conn,$insert);
    
}


/* $sql="INSERT INTO `register` (`ID`, `Email`, `Password`, `rePassword`, `fname`, `lname`, `gender`, `country`)
 VALUES (NULL, '$email', '$password', '$repassword', '$fname', '$lname', '$gender', '$country')";
  */
/* if($conn->query($sql)==True){
    echo "record added";
}
else{
    echo "Error";
}
$conn->close(); */
?>
