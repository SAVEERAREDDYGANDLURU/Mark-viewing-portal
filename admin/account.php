<?php
$error3='';
if(isset($_GET['err3']))
{
        $error3 = $_GET['err3'];
}
?>
<html>
    <head><link rel="stylesheet" type="text/css" href="style.css"></head>
    <body>
    <body>
    <pre><div class="head"><h1>  VIT</h1>                                                              <h1 class="a">V-TOP</h1>
</div></pre>
    
        <form class="form1" action="process.php" method="GET">
        <input type="text" placeholder="Registration number" name="reg">
        <input type="text" placeholder="Name" name="name"> <br>
        <input type="text" placeholder="Password" name="pass"> <br>   
        <select id="m" name="branch"><option>CSE</option><option>ECE</option><option>MECH</option></select>
        <select id="y" name="year"><option>1</option><option>2</option><option>3</option><option>4</option></select>  
        <input type="submit" value="CREATE" name="create" id="a"><br>  
        <input type="submit" value="BACK" name="back" id="b"><br> 
        <span  id="e3"><?php echo $error3;?></span>
</form>
        
        
</body>
    </html>