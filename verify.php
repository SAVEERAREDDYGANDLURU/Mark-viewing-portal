<?php
$error1 = $error2 ='';
if(isset($_POST["login"])){
    $un = $_POST['user'];
    $ps=$_POST["pass"];
    if (empty($un)) {
        $error1="*Please enter username";
    } 
     if(empty($ps)){
        $error2="*Please enter password";
    }
    if(empty($un) || empty($ps)){
        header("Location:login.php?err1=$error1&err2=$error2");
    }
    else{
$server = "localhost";
$username = "root";
$password = "";
$db = "project";
$conn = mysqli_connect($server,$username,$password,$db);
$query = "select * from student_details where REG_NO = ? and PASSWORD=?";
$stm = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stm,'ss',$un,$ps);
mysqli_stmt_execute($stm);
 $result = mysqli_stmt_get_result($stm);
if(mysqli_num_rows($result)){
    $row = mysqli_fetch_array($result);
    
        $reg =$row['REG_NO'];
       
        header("Location:welcome.php?reg=$reg");  
    
    
}
else{
    $error3='INVALID CREDENTIALS';
    header("Location:login.php?err3=$error3");
}}}
?>