<?php

session_start();

$user = $_REQUEST["txtUser"];
$pwd = $_REQUEST["txtPwd"];
$hash = hash("sha256", $pwd);

// if ($hash == "8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92"){
// 	echo "<h1>Hello, $user</h1>";
// }
// else {
// 	echo "<h1> Sorry, wrong password!</h2>";
// }

//1. slabiy parol
//2. narushen princip naimenshih privilegiy
//3. Sekret v kode
//$conn = mysqli_connect("localhost:3306","root","","cyb4");

//4. Possible SQL injection:
// $sql = "SELECT * FROM users WHERE Login='$user' AND PwdHash='$hash'";
// //$sql = "SELECT * FROM users WHERE Login='' OR 1=1 #' AND PwdHash='$hash'";

// //echo $sql;
// $query = mysqli_query($conn, $sql);
// $result = mysqli_fetch_all($query);
// //echo $result;
// // var_dump($result);
// $numRows = count($result);
// //echo($numRows);

//Ustranyaem problemu sekreta v kode
//Tem samym, problema slabogo parolya i prevyshennogo logina delegiruetsyaadministratoru proizvodstvennogo servera
$server = getenv("cyb4_db_server");
$login = getenv("cyb4_db_user");
$pwd = trim(getenv("cyb4_db_pwd"));
$conn = mysqli_connect($server,$login,$pwd,"cyb4");

// Ustranyaem SQL-injection:
$sql = "SELECT * FROM users WHERE Login=? AND PwdHash=? ";
$stat = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stat, "ss", $user, $hash);
mysqli_stmt_execute($stat);
$result = mysqli_stmt_get_result($stat);
$numRows = mysqli_num_rows($result);


if($numRows == 0) {echo "<h1> Sorry, wrong login/password!</h1>";}

else {
	echo "<h1>Здравствуйте, $user</h1>!";
	echo "<a>Перенаправление на гравную страницу</a>!";
	$_SESSION["user"] = $user;
	echo '<meta http-equiv="refresh" content= "2; url=index.html" />';
}


mysqli_close($conn);