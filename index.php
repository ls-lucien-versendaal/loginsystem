<?php
    require_once 'includes/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>
<body>
    <h1>Welcome</h1>

    <?php 
        
        $sql = "SELECT * FROM users";
        //Check if query can be performed in DB
        $result = mysqli_query($conn,$sql);
        //Count the rows when getting back results
        $rowCount = mysqli_num_rows($result);

        if ($rowCount > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['name'] . "<br>";
            }
        }else{
            echo "No results found";
        }
    ?>
</body>
</html>