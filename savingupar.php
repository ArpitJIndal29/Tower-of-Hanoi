<?php
$upar1 = intval($_GET['upar1']);
$conn = mysqli_connect('localhost','root','#DogLover69');
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}

mysqli_select_db($conn,"Hanoi_Tower");

$sql = "INSERT INTO Main (upar)
        VALUES ($upar1s)";
mysqli_query($conn,$sql);

?>