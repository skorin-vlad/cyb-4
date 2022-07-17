<?php
session_start();

$newname = $_REQUEST["newName"];
$newemail = $_REQUEST["newEmail"];
$newuser = $_REQUEST["newUser"];
$newpwd = $_REQUEST["newPwd"];
$chkpwd = $_REQUEST["chkPwd"];


$newhash = hash("sha256", $newpwd);

// if ($hash == "8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92"){
// 	echo "<h1>Hello, $user</h1>";
// }
// else {
// 	echo "<h1> Sorry, wrong password!</h2>";
// }


// //echo $sql;
// $query = mysqli_query($conn, $sql);
// $result = mysqli_fetch_all($query);
// //echo $result;
// // var_dump($result);
// $numRows = count($result);
// //echo($numRows);

$server = getenv("cyb4_db_server");
$login = getenv("cyb4_db_user");
$pwd = trim(getenv("cyb4_db_pwd"));
$conn = mysqli_connect($server,$login,$pwd,"cyb4");

if($newpwd != $chkpwd) {echo "<h1> Введённые пароли не совпадают!</h1>";}

else {


$sql = "INSERT INTO `users` (Login, PwdHash, Email, Name) VALUES (?,?,?,?)";

 $stat = mysqli_prepare($conn, $sql);
 mysqli_stmt_bind_param($stat, "ssss", $newuser, $newpwd, $newemail, $newname);
 mysqli_stmt_execute($stat);
 $result = mysqli_stmt_get_result($stat);
// $numRows = mysqli_num_rows($result);

	echo "<h1>Здравствуйте, $newname! Вы зарегистрированы!</h1>";
	$_SESSION["newuser"] = $newuser;
    
}



mysqli_close($conn);