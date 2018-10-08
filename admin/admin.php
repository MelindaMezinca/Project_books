<?php

session_start();
if($_SESSION['accesAdmin'] != "true")
{
	
 header("location: index.php"); 
        
}else{
	

$conn = mysqli_connect("localhost", "root", "", "books") or die("nu se poate conecta la baza de date");

$query = mysqli_query($conn,"Select * from categorie") or die("nu merge");
}

?>

<html>
<head>
<title> This is my admin page </title>
</head>
<body>

<center> Welcome Admin </center>

<form method="post" action="insert.php">

   <table border=”3” align=”center” BGCOLOR="Silver">

<tr>
<td>Titlu:</td>
<td><input type="text" name="titlu"></td>
</tr>
<tr>
<td>Descriere:</td>
<td><input type="text" name="descriere"></td>
</tr>
<tr>
<td>Categorie:</td>

<td>

<select name="categorie">
<?php
while($row=mysqli_fetch_row($query))
{
?>
	<option value='<?php echo $row[0];?>'> <?php echo $row[1]; ?> </option>
	<?php
}

?>
</select>


</td>
</tr>
<tr>
<td>Rating:</td>
<td>
<select name="rating">
<option value="1">1 stea</option>
<option value="2">2 stele</option>
<option value="3">3 stele</option>
<option value="4">4 stele</option>
<option value="5">5 stele</option>
</select>
</td>
</tr>
<tr>
<td colspan=”2” align=”center”>
<input type="SUBMIT" value="Add">
<input type="RESET" value="Reset">
</td>
</tr>
</table>
</form> 
	
</form>
</body>
</html>