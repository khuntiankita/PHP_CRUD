<?php
$id = $_POST['id'];
$user = $_POST['user'];
$password = $_POST['password'];
$connect = mysqli_connect("localhost", "root", "", "Person");
$row = mysqli_query($connect, "UPDATE PersonDetails SET Username = '$user', Password = '$password' WHERE Id = $id");
if ($row == 0) {
    echo "query not inserted";
} else {
    header("location:form.php");
}
