<?php
$id = $_GET['id'];
$connect = mysqli_connect("localhost", "root", "", "Person");
$query = "SELECT * FROM `PersonDetails` WHERE `Id` = $id";
$row = mysqli_query($connect, $query);
$data = mysqli_fetch_assoc($row);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./update.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['Id'] ?>">
        <input type="text" placeholder="enter username" name="user" value="<?= $data['Username'] ?>"><br><br>
        <input type="password" placeholder="enter password" name="password" value="<?= $data['Password'] ?>">
        <input type="submit" value="submit">
    </form>

</body>

</html>