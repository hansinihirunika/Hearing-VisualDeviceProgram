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
$HdMake = $_POST['w1714916_HdMake'];
$HdModel = $_POST['w1714916HdModel'];

$Discription = $_POST['w1714916_Discription'];
$AvailabilityStatus= $_POST['w1714916_AvailabilityStatus'];

$sql = "INSERT INTO w1714916_device (w1714916_DeviceCatelogId,w1714916_DeviceCatelogName,w1714916_Discription,w1714916_AvailabilityStatus) 
VALUES ('$DeviceCatelogId','$DeviceCatelogName','$Discription','$AvailabilityStatus')";

if (mysqli_query($conn,$sql)){
	echo "New Record Added Sucsessfully to the Device Tabel";
}else {
	echo "Record to the Device Tabel is Unsucsessful" .$sql. "<br>" .mysqli_error($conn);
}

$sql = "INSERT INTO w1714916_hearingDevice (w1714916_DeviceCatelogId,w1714916_HdMake,w1714916_HdModel) 
VALUES ('$devicecatelogid','$HdMake','$HdModel')";

if (mysqli_query($conn,$sql)){
	echo " and Hearing Device Tabel !!!";
}else {
	echo " and Record to the Hearing Device Tabel is Unsucsessful" .$sql. "<br>" .mysqli_error($conn);
}

mysqli_close($conn);

?>