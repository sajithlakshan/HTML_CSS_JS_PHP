<?php
function Create_Table($DATA_BASE){

    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = 'tq';  
    // Create connection
    $conn = mysqli_connect($host,  $user, $password, $db_name);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    // sql to create table
    $sql = 'CREATE TABLE'." ".$DATA_BASE." ".'(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Gross_Profit VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    SUNIMAL VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )';

    if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
    } else {
    echo "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);

}
Create_Table("Rooooms");
?>
