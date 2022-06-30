<?php

$x = $_REQUEST["x"];
$y = $_REQUEST["y"];
$z = $x + $y;
sleep(1); //latency simulation

//1. slabiy parol
//2. narushen princip naimenshih privilegiy
//3. Sekret v kode
$conn = mysqli_connect("localhost:3306","root","","cyb4");

//4. Possible SQL-injextion
$sql = "INSERT INTO calcs(Num1,Num2,User) VALUES($x,$y,'Anonym') ";
mysqli_query($conn,$sql);
mysqli_close($conn);

echo $z;