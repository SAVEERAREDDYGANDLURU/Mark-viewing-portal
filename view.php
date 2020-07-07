<html>
<head>
 <link rel="stylesheet" type="text/css" href="new.css">
</head>
<body>
<pre><div class="head"><h1>  VIT</h1>                                                              <h1 class="a">V-TOP</h1>
</div></pre>
   <form class="form" action="process.php" method="get"> 
<?php

if(isset($_GET['reg']))
{
    $reg_No = $_GET['reg'];
    $course=$_GET['c'];
    echo "<h2 id='z'>".$course."</h2>";
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "project";
    $conn = mysqli_connect($server,$username,$password,$db);
    $query = "select ".$course." from cat_one where REG_NO = ?";
    $stm = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stm,'s',$reg_No);
mysqli_stmt_execute($stm);
 $result = mysqli_stmt_get_result($stm);
if(mysqli_num_rows($result)){
    $row = mysqli_fetch_array($result);
    echo "<table id='a'>";
    echo "<tr><th>CAT-1</th><td>".$row[$course]."</td></tr>";
}
$query = "select ".$course." from cat_two where REG_NO = ?";
$stm = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stm,'s',$reg_No);
mysqli_stmt_execute($stm);
$result = mysqli_stmt_get_result($stm);
if(mysqli_num_rows($result)){
$row = mysqli_fetch_array($result);
echo "<tr><th>CAT-2</th><td>".$row[$course]."</td></tr>";
}
$query = "select ".$course." from cat_three where REG_NO = ?";
$stm = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stm,'s',$reg_No);
mysqli_stmt_execute($stm);
$result = mysqli_stmt_get_result($stm);
if(mysqli_num_rows($result)){
$row = mysqli_fetch_array($result);
echo "<tr><th>CAT-3</th><td>".$row[$course]."</td></tr>";
echo "</table>"; 
}
}
?>
<input type="submit" value="Back" name="Back_2" id="b">
</form>
</body>
    </html>