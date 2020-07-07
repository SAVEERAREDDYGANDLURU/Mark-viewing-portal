<?php
session_start();
if(isset($_GET['reg']))
{
    $reg_No = $_GET['reg'];
    $_SESSION['reg_no']=$reg_No;
}
?>
<html>
    <head><link rel="stylesheet" type="text/css" href="new.css"></head>
    <body>
    <body>
    <pre><div class="head"><h1>  VIT</h1>                                                              <h1 class="a">V-TOP</h1>
</div></pre>
    <h1 class="wel">WELCOME <?php echo $reg_No;?> </h1>
        <form class="form" action="process.php" method="GET">
        
            <input type="submit" value="CAT MARKS" name="marks"><br><br>
            <input type="submit" value="SUBJECT MARKS" name="smarks"><br><br>
            <input type="submit" value="CHANGE PASSWORD" name="change"><br><br>
            <input type="submit" value="LOGOUT" name="logout"><br>
            
</form>
</body>
    </html>
    