<?php
$To = intval($_GET['ToBar']);
$conn = mysqli_connect('localhost','root','#DogLover69');
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}

mysqli_select_db($conn,"Hanoi_Tower");

$sql = "INSERT INTO Main (ToBar)
        VALUES ($To)";
mysqli_query($conn,$sql);

?>