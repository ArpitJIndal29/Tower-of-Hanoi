<?php
$To = intval($_REQUEST['To']);
$From = intval($_REQUEST['From']);
$upar = intval($_REQUEST['upar']);
$n = intval($_REQUEST['n']);
$conn = mysqli_connect('localhost','root','#DogLover69');
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}

mysqli_select_db($conn,"Hanoi_Tower");
if($From==1)$F="A";
if($From==2)$F="B";
if($From==3)$F="C";
if($To==1)$T="A";
if($To==2)$T="B";
if($To==3)$T="C";
$sql = "INSERT INTO Data (No_of_Discs,Disc_Index,FromBar,ToBar)
        VALUES ($n,$upar+1,'$F','$T')";
mysqli_query($conn,$sql);
?>
