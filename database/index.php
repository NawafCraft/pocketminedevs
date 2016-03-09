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
<link rel="stylesheet" href="../css/database.css">
<script src="../js/database.js"></script>
</head>
<body>
<header>
<!-- Create PocketDev Header -->
</header>
<div id="leftPanel" class="left-panel">
<?
 $sql = "SHOW TABLES";
 $query = mysql_query($sql);
 
 while($row = mysql_fetch_row($query)){
  echo "<a href='?table=$row[0]'>" . $row[0] . "</a><br>";
 }
?>
</div>
<!-- Possible add image to buttons -->
<div id="rightNavPanel" class="right-nav-panel">
	<input type="button" class="nav-button" onclick="showPanelByID(browseBtn)" name="browse" value="Browse">
	<input type="button" class="nav-button" onclick="showPanelByID(structureBtn)" name="structure" value="Structure">
	<input type="button" class="nav-button" onclick="showPanelByID(sqlBtn)" name="sql" value="SQL">
	<input type="button" class="nav-button" onclick="showPanelByID(searchBtn)" name="search" value="Search">
	<input type="button" class="nav-button" onclick="showPanelByID(insertBtn)" name="insert" value="Insert">
	<input type="button" class="nav-button" onclick="showPanelByID(exportBtn)" name="export" value="Export">
	<input type="button" class="nav-button" onclick="showPanelByID(importBtn)" name="import" value="Import">
	<input type="button" class="nav-button" onclick="showPanelByID(operationsBtn)" name="operations" value="Operations">

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
<div id="browseBtn" class="browse-panel">

</div>
<div id="structureBtn" class="structure-panel">

</div>
<div id="sqlBtn" class="sql-panel">

</div>
<div id="searchBtn" class="search-panel">

</div>
<div id="insertBtn" class="insert-panel">

</div>
<div id="exportBtn" class="export-panel">

</div>
<div id="importBtn" class="import-panel">

</div>
<div id="operationsBtn" class="operations-panel">

</div>
</div>
</body>
</html>
