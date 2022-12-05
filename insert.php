<form action="" method="post">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="pword"><br>
    Comment: <input type="text" name="comment"><br>
    <input type="submit" name="submit" value="Submit">
    
</form>
    
</body>
</html>


<?php

        $server="localhost";
        $db_username="root";
        $db_password="1234";
        $db_name="exam";

        $conn = new mysqli($server, $db_username, $db_password, $db_name) or die(mysqli_error($con));

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

             
            $data1=$_POST['username'];
            $data2 = $_POST['pword'];  
            $data3 = $_POST['comment']; 

            $sql = "INSERT INTO post (username, pword, comment) VALUES ('$data1', '$data2', '$data3')";

            $results = $conn->query($sql); 

            if (mysqli_query($conn, $sql) == true) {
                echo "New record has been added successfully !";
            } else {
                echo "Error: ".mysqli_error($conn);
            }
       } 
      // mysql_close($conn);
?>


