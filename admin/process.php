<?php
session_start();
if(isset($_GET["account"])){
    header("Location:account.php"); 
}
if(isset($_GET["logout"])){
    header("Location:login.php?"); 
    session_destroy();
}
if(isset($_GET["change"])){
    $un=$_SESSION['un'];
    header("Location:change.php?un=$un"); 
}
if(isset($_GET["back"])){
    header("Location:welcome.php"); 
}
if(isset($_GET["create"])){
    $reg=$_GET["reg"];
    $name=$_GET["name"];
    $pass=$_GET["pass"];
    $branch=$_GET["branch"];
    $year=$_GET["year"];
    if(empty($reg)||empty($name)||empty($pass)){
        $error3='Enter all details';
    header("Location:account.php?err3=$error3");
    }else{
    $server = "localhost";
$username = "root";
$password = "";
$db = "project";
$conn = mysqli_connect($server,$username,$password,$db);
$query = "select * from student_details where REG_NO = ?";
$stm = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stm,'s',$reg);
mysqli_stmt_execute($stm);
 $result = mysqli_stmt_get_result($stm);
if(mysqli_num_rows($result)){
    $error3='ALREADY EXISTS';
    header("Location:account.php?err3=$error3");
}
else{
    $stmt = $conn->prepare("INSERT INTO student_details (REG_NO, NAME,PASSWORD,BRANCH,YEAR)
VALUES (?,?,?,?,?)");
$stmt->bind_param("ssssi", $reg, $name, $pass,$branch,$year);
$stmt->execute();
$error3='CREATED SUCCESSFULLY';
    header("Location:account.php?err3=$error3");
}
}}
?>