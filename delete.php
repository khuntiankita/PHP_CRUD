<?php
$id=$_GET['id'];
$connect=mysqli_connect("localhost","root","","Person");  
$query="DELETE FROM `PersonDetails` WHERE Id=$id";                   
$row=mysqli_query($connect,$query);
if
($row==0){
    echo "query not inserted";
}
else{
    header("location:form.php");
}
