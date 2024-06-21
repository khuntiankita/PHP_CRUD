<?php
$connect = mysqli_connect("localhost", "root", "", "Person");
$username = $_POST['user'];
$password = $_POST['password'];
$query = "INSERT INTO `PersonDetails` (`Username`,`Password`) VALUES('$username','$password')";
$row = mysqli_query($connect, $query);
if ($row == 0) {
    echo "query not inserted";
}
header("location:form.php");
