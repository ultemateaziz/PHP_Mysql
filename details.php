<?php require 'php database connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $id = $_GET['e_id'];
    $sql = "SELECT * FROM employee WHERE e_id = '$id'";
    $reqult = mysqli_query($conn,$sql);
?>
<table border="1">


<ul>
<?php

    if( mysqli_num_rows($reqult) > 0)
    {
        while($employee = mysqli_fetch_assoc($reqult))
        {
            ?>
        
            <li><strong>Name:</strong> <?php echo $employee['e_name']; ?> </li>
            <li><strong>Mail:</strong> <?php echo $employee['e_email']; ?> </li>
            <li><strong>Phone:</strong> <?php echo $employee['e_phone']; ?> </li>

            <?php
        }
    }

    else
    {
        echo 'o result';
    }

    ?>
</ul>
</body>
</html>