<?php
function ADD_DAT($DATA) {
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = 'W';  
      
    $conn = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }else{
		echo "OkKKK";
		
	}
	$sql = "INSERT INTO t1(email,password) VALUES ($DATA, 'GIBI')";
  
    if ($conn->query($sql) === TRUE) {
      echo "record inserted successfully";
    }   
    else {
     echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();    

  } 

echo $_REQUEST["fname"]."<br>";
if(is_numeric($_REQUEST["fname"])){
    echo "IT IS OK";
    ADD_DAT($_REQUEST["fname"]);
}else {
    echo "EKA HENA AUL";
}

?>