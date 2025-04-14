<?php
$servername = "db";
$username = "root";
$password = "example";
$dbname = "";

$opts = array(
PDO::MYSQL_ATTR_SSL_CA => './nginx.crt',
PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false);

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, $opts);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->query("show session status like 'Ssl%'");

  foreach($stmt as $row){
    echo $row["Variable_name"] . ',' . $row["Value"] . '<br />';
  }  

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>