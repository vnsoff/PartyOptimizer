<?php 
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
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
    $textStr = isset($_POST['textStr']) ? $_POST['textStr'] : '';
    $textDef = isset($_POST['textDef']) ? $_POST['textDef'] : '';
    $textMag = isset($_POST['textMag']) ? $_POST['textMag'] : '';
    $textSpi = isset($_POST['textSpi']) ? $_POST['textSpi'] : '';
    $textSpd = isset($_POST['textSpd']) ? $_POST['textSpd'] : '';
    $textLuk = isset($_POST['textLuk']) ? $_POST['textLuk'] : '';

    echo "Data received successfully!";

    $sql = "INSERT INTO stats (textStr, textDef, textMag, textSpi, textSpd, textLuk )" . "VALUES ('$textStr', '$textDef', '$textMag', '$textSpi', '$textSpd', '$textLuk')";

    //Sends data into the database
    $result = $connection->query($sql);  
  }  else {
    echo "Data wasn't received!";
  }
?>
