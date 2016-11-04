<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$connection = mysqli_connect($hostname,$username,$password);

if ($connection===FALSE)
{
   die("<strong>Conection failed: </strong>");
}
$dbSelect = mysqli_select_db($connection, $dbname);
/*
$sql = "SELECT * FROM salon WHERE capacidad = 200";
$result = mysqli_query($connection, $sql);

if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result)){
    echo "id: " . $row["id"]. " - Capacidad: " . $row["capacidad"]. " - Aula:" . $row["aula"]. "<br>";
  }
}
else {
    echo "0 results";
}
*/
?>
