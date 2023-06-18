<?php 

  //Variables
  $textStr = "";
  $textDef = "";
  $textMag = "";
  $textSpi = "";
  $textSpd = "";
  $textLuk = "";

  //Parameters
  $hostname  = "localhost"; //A host name or an IP address
  $username = "root"; //MySQL username
  $password = ""; //MySQL password
  $database = "partopt"; //The default database to be used when performing queries

  //Opens a connection to the MySQL Server 
  $connection = new mysqli($hostname,$username,$password,$database);

  //Returns the error message from the last connection attempt 
  if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $textStr = $_POST['textStr'];
    $textDef = $_POST['textDef'];
    $textMag = $_POST['textMag'];
    $textSpi = $_POST['textSpi'];
    $textSpd = $_POST['textSpd'];
    $textLuk = $_POST['textLuk'];

    echo "Data received successfully!";

    $sql = "INSERT INTO stats (textStr, textDef, textMag, textSpi, textSpd, textLuk )" . "VALUES ('$textStr', '$textDef', '$textMag', '$textSpi', '$textSpd', '$textLuk')";

    //Sends data into the database
    $result = $connection->query($sql);  
  }  else {
    echo "Data wasn't received!";
  }
?>
