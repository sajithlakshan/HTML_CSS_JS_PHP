<html>
    <head>

    </head>
    <body>
    <?php      
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
	$sql = "INSERT INTO t1(email,password) VALUES ('John', 'Doe')";
  
    if ($conn->query($sql) === TRUE) {
      echo "record inserted successfully";
    }   
    else {
     echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

?>
        
    </body>
</html>