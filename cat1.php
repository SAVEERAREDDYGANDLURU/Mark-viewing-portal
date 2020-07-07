<html>
<head>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<pre><div class="head"><h1>  VIT</h1>                                                              <h1 class="a">V-TOP</h1>
</div></pre>
   <form class="form" action="process.php" method="get"> 
<?php

if(isset($_GET['reg']))
{
    $reg_No = $_GET['reg'];
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "project";
    $conn = mysqli_connect($server,$username,$password,$db);
    $query = "select * from cat_one where REG_NO = ?";
    $stm = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stm,'s',$reg_No);
mysqli_stmt_execute($stm);
 $result = mysqli_stmt_get_result($stm);
if(mysqli_num_rows($result)){
    $row = mysqli_fetch_array($result);
    echo "<table id='t'><tr><th>REG NO</th><td>".$row['REG_NO']."</td></tr>";
    echo "<tr><th>CSE4004</th><td>".$row['CSE4004']."</td></tr>";
    echo "<tr><th>CSE3004</th><td>".$row['CSE3004']."</td></tr>";
    echo "<tr><th>CSE3003</th><td>".$row['CSE3003']."</td></tr>";
    echo "<tr><th>CSE2013</th><td>".$row['CSE2013']."</td></tr>";
    echo "<tr><th>CSE1005</th><td>".$row['CSE1005']."</td></tr>";
    echo "<tr><th>MGT1008</th><td>".$row['MGT1008']."</td></tr>";
    echo "</table>"; 
}else{
    echo "<h2><pre>    Marks not available</pre></h2>";
}
}
?>
<input type="submit" value="Back" name="Back_1" id="b">
</form>
</body>
    </html>