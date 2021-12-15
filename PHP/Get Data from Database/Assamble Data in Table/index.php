<!DOCTYPE html>
<html>
<body>
        <table border="1">
        <tr>
                <th>email</th>
                <th>password</th>
        </tr>
        <?php

                $servername = "localhost";
                $username = "root";
                $password = '';
                $dbname = 'W';

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT email, password FROM t1";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                // output data of each row
                
                while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>{$row['email']}";
                        echo "<td>{$row['password']}";
        
                }
                } else {
                echo "0 results";
                }

                mysqli_close($conn);

        ?>
        </table>

</body>
</html>