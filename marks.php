<?php
session_start();
if(isset($_GET['reg']))
{
    $reg_No = $_GET['reg'];
    $_SESSION['reg_no']=$reg_No;
}
?>
<html>
    <head><link rel="stylesheet" type="text/css" href="style.css"></head>
    <body>
    <body>
    <pre><div class="head"><h1>  VIT</h1>                                                              <h1 class="a">V-TOP</h1>
</div></pre>
    <h1 class="wel">WELCOME <?php echo $reg_No;?> </h1>
        <form class="form" action="process.php" method="GET">
        
            <input type="submit" value="CAT-1" name="CAT_1"><br><br>
            <input type="submit" value="CAT-2" name="CAT_2"><br><br>
            <input type="submit" value="CAT-3" name="CAT_3"><br>
            <input type="submit" value="Back" name="back"><br>
            
</form>
</body>
    </html>