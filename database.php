<?php 
include('config.php');
class Database {
	// private $host = $DATABASE_HOST;
	// private $user = $DATABASE_USERNAME;
	// private $password = $DATABASE_PASSWORD;
	// private $database = $DATABASE_NAME;
	
	function runQuery($sql) {
		$conn = new mysqli($DATABASE_HOST,$DATABASE_USERNAME,$DATABASE_PASSWORD,$DATABASE_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          $resultset[] = $row;
      }
    }
    $conn->close();

		if(!empty($resultset))
			return $resultset;
	}
}
?>