<?php
require_once 'includes/header.php';
?>

    <h1>HOME</h1>

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
<?php
    require_once 'includes/footer.php';
?>