 <?php
 // DB connection info
  $host = "tcp:fauzanwebserver.database.windows.net,1433";
    $user = "fauzanweb";
    $pwd = "SepatuEiger42";
    $db = "fauzanweb";

 try{
 	$conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
 	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
 	$sql = "CREATE TABLE Registration(
 	id INT NOT NULL IDENTITY(1,1) 
 	PRIMARY KEY(id),
 	name VARCHAR(30),
 	email VARCHAR(30),
 	date DATE)";
 	$conn->query($sql);
 }
 catch(Exception $e){
 	die(print_r($e));
 }
 echo "<h3>Table created.</h3>";
 ?>