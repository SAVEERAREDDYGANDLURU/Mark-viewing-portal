<?php
$error1 ='';
$error2 ='';
$error3='';
if(isset($_GET['err1']))
{
        $error1 = $_GET['err1'];
    
        $error2 = $_GET['err2'];
       
}
if(isset($_GET['err3']))
{
        $error3 = $_GET['err3'];
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <pre><div class="head"><h1>  VIT</h1>                                                              <h1 class="a">V-TOP</h1>
</div></pre>
<form action="update.php" method="post" class="form">
<input type="password" placeholder="Enter new password" name="pass1"><span class="err1"><?php echo $error1;?></span><br><br>
<input type="password" placeholder="Re-enter new password" name="pass2"><span class="err2"><?php echo $error2;?></span><br><br>
<input type="submit" value="UPDATE" name="up"><br>
<input type="submit" value="BACK" name="back"><br>
<span class="err3"><?php echo $error3;?></span>
</form>
</body>
</html>
