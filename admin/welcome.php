<?php
session_start();
if(isset($_GET['un']))
{
    $un = $_GET['un'];
    $_SESSION['un']=$un;
}
?>
<html>
    <head><link rel="stylesheet" type="text/css" href="style.css"></head>
    <body>
    <body>
    <pre><div class="head"><h1>  VIT</h1>                                                              <h1 class="a">V-TOP</h1>
</div></pre>
        <form class="form" action="process.php" method="GET">
        
            <input type="submit" value="CREATE ACCOUNT" name="account"><br><br>
            <input type="submit" value="CHANGE PASSWORD" name="change"><br><br>
            <input type="submit" value="LOGOUT" name="logout"><br>
            
</form>
</body>
    </html>