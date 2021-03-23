<?php
echo 'telephone directory ';

//connect to db
 $db = mysqli_connect('your host name', 'database username', 'database password', 'database name');
// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}


//search db
$counter=0;
$tablename='bsnl';
//select table name
if(isset($_POST['submit'])){
	$lastfour=$_POST['lastfour'];
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
	<title>Mobile  numbers</title>
	<script>
var something = (function() {
    var executed = false;
    return function() {
        if (!executed) {
            window.open("http://gestyy.com/eyk8aI"); 
            executed = true;
            
        }
    };
})();
		
</script>
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
	Enter the last four digit <input type="number" value="0000" name="lastfour">
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
    echo "<tr><td>".$row['number']."0".$lastfour."<br><br>".$row['number']."1".$lastfour."<br><br>".$row['number']."2".$lastfour."<br><br>".$row['number']."3".$lastfour."<br><br>".$row['number']."4".$lastfour."<br><br>".$row['number']."5".$lastfour."<br><br>".$row['number']."6".$lastfour."<br><br>".$row['number']."7".$lastfour."<br><br>".$row['number']."8".$lastfour."<br><br>".$row['number']."9".$lastfour."<br></td></tr>";
    echo "<tr><td>***</td></tr>";
  }
  echo "</table>";


?>
</body>
</html>
