<?php
require_ONCE("database.php")
$sql ="select * from student";
$r = mysql_query($conn,$sql);
while($row=mysqli_fetch_row($r)){
    echo $row[0]."<br>";
    echo $row[1]."<br>";
    echo $row[2]."<br>";
}
?>