<?php
$connect = mysqli_connect("localhost", "root", "", "Person");
$query = "SELECT * FROM `PersonDetails`";
$row = mysqli_query($connect, $query);
$data = mysqli_fetch_all($row, MYSQLI_ASSOC);
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
    <form action="./process.php" method="post">
        <input type="text" placeholder="enter username" name="user"><br><br>
        <input type="password" placeholder="enter password" name="password"><br><br>
        <input type="submit" value="submit">
    </form>
    <table border="1">
        <thead>
            <th>username</th>
            <th>password</th>
            <th>Delete</th>
            <th>Update</th>
        </thead>
        <tbody>

            <?php foreach ($data as $pdata) { ?>
                <tr>
                    <td><?=$pdata['Username'] ?></td>
                    <td><?=$pdata['Password'] ?></td>
                    <td><a href="./delete.php?id=<?=$pdata['Id'] ?>">Delete</a></td>
                    <td><a href="./updatedata.php?id=<?=$pdata['Id']?>">Update</a></td>
                    <?php } ?>
                </tr>
        </tbody>
    </table>
</body>

</html>