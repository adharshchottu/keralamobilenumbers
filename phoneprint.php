<?php
echo 'telephone directory ';

//connect to db
 $db = mysqli_connect('localhost', 'augu', '12345', 'ria');
// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}


//search db
$counter=0;
$tablename='bsnl';
//select table name
if(isset($_POST['submit'])){
$tablename = $_POST['isp'];  // Storing Selected Value In Variable
echo "You have selected :" .$tablename;  // Displaying Selected Value
}
$sql = "SELECT * FROM ".$tablename."  ";
$result = $db->query($sql);






//$db->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ria number</title>
</head>
<body>
<form action="#" method="post">
<select class="dropdown" name="isp"> 
<option value = "airtel"  class="sbg">Airtel</option>
<option value = "bsnl" class="sbg">BSNL</option>
<option value = "idea" class="sbg">Idea</option>
<option value = "others" class="sbg">Others</option>
<option value = "vodafone" class="sbg">Vodafone</option>
</select>
<button type="submit"  name="submit" >Submit
</button>
</form> 

<br>

<?php

//search results	
//<td>".++$counter."</td>
//<th>Sl no.</th>
  echo "<table><tr><th>Number</th></tr>";
  // output data of each row
  while( $row = $result->fetch_assoc()) {
    echo "<tr><td>wa.me/91".$row["number"]."08063<br><br>wa.me/91".$row["number"]."18063<br><br>wa.me/91".$row["number"]."28063<br><br>wa.me/91".$row["number"]."38063<br><br>wa.me/91".$row["number"]."48063<br><br>wa.me/91".$row["number"]."58063<br><br>wa.me/91".$row["number"]."68063<br><br>wa.me/91".$row["number"]."78063<br><br>wa.me/91".$row["number"]."88063<br><br>wa.me/91".$row["number"]."98063<br></td></tr>";
    echo "<tr><td>***</td></tr>";
  }
  echo "</table>";


?>
</body>
</html>