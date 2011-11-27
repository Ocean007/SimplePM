<?php
include 'config.php';
$user = $_POST["user"];
    mysql_connect("$host", "$username", "$password");
    mysql_select_db("$db_name");
    
$sql = mysql_query("SELECT * FROM `Book` WHERE `Owner` = '$user' ");
while($row = mysql_fetch_array($sql)){
$var1 = $row["one"];
$var2 = $row["two"];
$var3 = $row["three"];
$var4 = $row["four"];
}
?>
<html>
<head id="Contacts">
<p id="P1"> <?php echo $var1 ?> </p>
<p id="P1"> <?php echo $var2 ?> </p>
<p id="P1"> <?php echo $var3 ?> </p>
<p id="P1"> <?php echo $var4 ?> </p>
</head>
</html>
