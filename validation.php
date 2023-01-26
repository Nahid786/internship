<?php
session_start();

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


//check validation
$q="SELECT * FROM `register` WHERE Email = '$email' && Password = '$password' ";
$result = mysqli_query($conn,$q);
$num = mysqli_num_rows($result);

if($num==1){
    $_SESSION['email']=$email;
    header('location:home.php');
    
}
else{
    //if login not successful
    header('location:login.php');
    
}

?>
