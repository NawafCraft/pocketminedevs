<!--
Need to create system for displaying database panel
like phpmyadmin
-->
<?
require_once("../src/fg.php");
require_once("../src/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>PocketDev Database Console</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/database.css"
</head>
<body>
<div id="leftPanel" class="left-panel">
<?
 $sql = "SHOW TABLES";
 $query = mysql_query($sql);
 
 while($row = mysql_fetch_row($query)){
  echo "<a href='?table=$row[0]'>" . $row[0] . "</a><br>";
 }
?>
</div>

<div id="rightPanel" class="right-panel">
<?
if(isset($_GET['table'])){
	$tableName = $_GET['table'];
    
    $sql = "SELECT * FROM $tableName";
    $query = mysql_query($sql);
    
    //Create system for getting table fields,rows,columns and displaying
}
?>
testing
</div>
</body>
</html>
