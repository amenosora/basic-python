<?php
#$conn = mysqli_connect("localhost","root"," ","it" );
require_once("database.php");
$code = $_POST["code"];
$name = $_POST["name"];
$password = $_POST["password"];
$sql = "INSERT INTO `student` (`code`, `name`, `password`)
VALUES ('$code', '$name', '$password')";
$r = mysqli_query($sql);
if($r){
    echo "บันทึกข้อมูลเรียบร้อย";
}
?>