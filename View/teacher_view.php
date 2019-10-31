<?php
require '../Model/Connection.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher Form</title>
</head>
<body>

<table>
    <tr>
        <th>ID :</th>
        <th>Name :</th>
        <th>Email :</th>
        <th>Classroom</th>
    </tr>
    <?php
    $sqlteacher = 'SELECT teacher_id, teacher_name, teacher_email, class FROM curd.teachers ';
    $con = openConnection();
    foreach ($con->query($sqlteacher)as $row):?>
        <tr>
            <td><?php echo $row['teacher_id'] ?></td>
            <td><?php echo $row['teacher_name'] ?></td>
            <td><?php echo $row['teacher_email'] ?></td>
            <td><?php echo $row['class']?></td>
        </tr>
    <?php endforeach;?>
    <table>
        <form method="post">
            <input type="text" name="Name" placeholder="Please Enter your Name">
            <br>
            <input type="text" name="Email" placeholder="Please Enter your Email">
            <br>
            <input type="text" name="Classroom" placeholder="Please Enter Your Clasroom.NB">
            <br>
            <input type="Submit" name="Submit new student" value="Submit New Student">
        </form>

</body>
</html>
