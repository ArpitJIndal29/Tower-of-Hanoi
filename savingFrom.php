<?php
$From = intval($_GET['From']);
$conn = mysqli_connect('localhost','root','#DogLover69');
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}

mysqli_select_db($conn,"Hanoi_Tower");

$sql = "INSERT INTO Main (FromBar)
        VALUES ($From)";
mysqli_query($conn,$sql);

?>