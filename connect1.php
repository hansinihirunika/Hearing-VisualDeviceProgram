<?php

$servername="localhost";
$username="root";
$password="";
$dbname="w1714916";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if (!$conn){
	die ("Connection Failed...".mysqli_connect_error());
}


$DeviceCatelogId = $_POST['w1714916_DeviceCatelogId'];
$DeviceCatelogName = $_POST['w1714916_DeviceCatelogName'];
$FrameBrand = $_POST['w1714916_FrameBrand'];
$FrameModel = $_POST['w1714916_FrameModel'];
$LensSerialNumber = $_POST['w1714916_LensSerialNumber'];
$LensVisionType = $_POST['w1714916_LensVisionType'];
$LensTint = $_POST['w1714916_LensTint'];
$LensThinessLevel= $_POST['w1714916_LensThinessLevel'];
$Discription= $_POST['w1714916_Discription'];
$AvailabilityStatus = $_POST['w1714916_AvailabilityStatus'];


$sql = "INSERT INTO w1714916_device (w1714916_DeviceCatelogId,w1714916_DeviceCatelogName,w1714916_Discription,w1714916_AvailabilityStatus) 
VALUES ('$DeviceCatelogId','$DeviceCatelogName','$Discription','$AvailabilityStatus')";

if (mysqli_query($conn,$sql)){
	echo "New Record Added Sucsessfully to the Device Tabel";
}else {
	echo "Record to the Device Tabel is Unsucsessful" .$sql. "<br>" .mysqli_error($conn);
}

$sql = "INSERT INTO w1714916_visualDevice (w1714916_DeviceCatelogId,w1714916_DeviceCatelogName,w1714916_FrameBrand,w1714916_FrameModel,w1714916_LensSerialNumber,w1714916_LensVisionType,w1714916_LensTint,w1714916_LensThinessLevel,w1714916_Discription,w1714916_AvailabilityStatus) 
VALUES ('$devicecatelogid','$DeviceCatelogName','$FrameBrand','$FrameModel','$LensSerialNumber','$LensVisionType','$LensTint','$LensThinessLevel','$Discription','$AvailabilityStatus')";

if (mysqli_query($conn,$sql)){
	echo " and Visual Device Tabel !!!";
}else {
	echo " and Record to the Visual Device Tabel is Unsucsessful" .$sql. "<br>" .mysqli_error($conn);
}


mysqli_close($conn);

?>