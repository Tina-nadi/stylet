<?php
$servername = "fdb1032.awardspace.net";
$username = "4451235_design";
$password = "@P/Pm*vx3wrR[RDR";
$db_name = "4451235_design";


try {
  $conn = new PDO("mysql:host=$servername;dbname=".$db_name, $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
 
?>