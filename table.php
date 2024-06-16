<?php
    include_once('query.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users' Information</title>
    <link rel="stylesheet" href="./table.css">
</head>
<body>
    <table>
        <tr>
            <th id="main_header" colspan="8">Users' Information</th>
        </tr>
        <tr id="days">
            <th>user_id</th>
            <th>password</th>
            <th>file</th>
            <th>email</th>
            <th>gender</th>
            <th>region</th>
            <th>language</th>
        </tr>
        <?php
            while($rows = mysqli_fetch_assoc($result)){
        ?>  
            <tr>
                <td><?php echo $rows['user_id'] ?></td>
                <td><?php echo $rows['password'] ?></td>
                <td><?php echo $rows['file'] ?></td>
                <td><?php echo $rows['email'] ?></td>
                <td><?php echo $rows['gender'] ?></td>
                <td><?php echo $rows['region'] ?></td>
                <td><?php echo $rows['language'] ?></td>
            </tr>
        <?php
        }   
        ?>  
    </table>
</body>
</html>