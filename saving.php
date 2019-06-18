<?php

$n1 = intval($_GET['n1']);
// $FromBar = intval($GET['fromBar']);
// $ToBar = intval(GET['toBar']);
// $DiscIndex = intval(GET['rect[upar]']);


$conn = mysqli_connect('localhost','root','#DogLover69');
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}

mysqli_select_db($conn,"Hanoi_Tower");

$sql = "INSERT INTO Data (No_of_plates)
        VALUES ($n1)";
mysqli_query($conn,$sql);

// $sql = "INSERT INTO Main (Disc_no, From_bar, To_bar)
// VALUES ($DiscIndex, $FromBar, $ToBar)";
// mysqli_close($conn);

?>