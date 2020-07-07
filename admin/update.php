<?php
session_start();
$un=$_SESSION['un'];
$one=$_POST['pass1'];
$two=$_POST['pass2'];
if(isset($_POST["up"])){
    if (empty($one)) {
        $error1="*Required Field";
    } 
     if(empty($two)){
        $error2="*Required Field";
    }
    if(empty($one) || empty($two)){
        header("Location:change.php?err1=$error1&err2=$error2");
    }
    elseif($one!=$two){
        $error3="*Both fields are not matching";
        header("Location:change.php?err3=$error3");
    }
    else{
        $server = "localhost";
$username = "root";
$password = "";
$db = "project";
$conn = mysqli_connect($server,$username,$password,$db);
$query = "UPDATE admin SET password=? WHERE username = ?";
$stm = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stm,'ss',$one,$un);
mysqli_stmt_execute($stm);
$error3="UPDATED SUCCESSFULLY";
header("Location:change.php?err3=$error3");
    }
}
if(isset($_POST["back"])){
    header("Location:welcome.php"); 
}
?>