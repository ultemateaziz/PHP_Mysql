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

    $sql = "SELECT * FROM employee";
    $reqult = mysqli_query($conn,$sql);
?>
<table border="1">

<tr>
    <td>ID</td>
    <td>Name</td>
    <td> Email </td>
    <td> Phone </td>
    <td> Details </td>
</tr>

<?php

    if( mysqli_num_rows($reqult) > 0)
    {
        while($employee = mysqli_fetch_assoc($reqult))
        {
            ?>
            <tr>
            <td> <?php echo $employee['e_id']; ?> </td>
            <td> <?php echo $employee['e_name'] ?> </td>
            <td> <?php echo $employee['e_email'] ?> </td>
            <td> <?php echo $employee['e_phone'] ?> </td>
            <td> <a href="details.php?e_id=<?php echo $employee['e_id'];?>"> Details</a></td> 
            </tr>
            <?php
        }
    }

    else
    {
        echo 'o result';
    }

    ?>
</table>
</body>
</html>