<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$servername = "localhost";
$username = "webaruhaz_pr";
$password = "&rsuzu(%K%x!fn^D";
$dbname = "webaruhaz_pr";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Kapcsolódási hiba: " . mysqli_connect_error());
}

$sql = "SELECT * FROM cards WHERE 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
 

  while($row = mysqli_fetch_assoc($result)) {
  
    echo "<tr>" ;
    echo 
     "<td>" .$row["cardname"]."</td>" .
     "<td>" .$row["carddescription"]."</td>" .
     "<td> <button class='btn btn-outline-success'> ".$row["cardindexlink"]."</button> €</td>" ;
     echo "</tr>" ;
  }
} else {
  echo "A hiba nem az Ön készülékében van!";
}
mysqli_close($conn);
?>
</body>
</html>