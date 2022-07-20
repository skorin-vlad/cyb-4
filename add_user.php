<?php
session_start();

$newname = $_REQUEST["newName"];
$newemail = $_REQUEST["newEmail"];
$newuser = $_REQUEST["newUser"];
$newpwd = $_REQUEST["newPwd"];
$chkpwd = $_REQUEST["chkPwd"];


$newhash = hash("sha256", $newpwd);

$server = getenv("cyb4_db_server");
$login = getenv("cyb4_db_user");
$pwd = trim(getenv("cyb4_db_pwd"));
$conn = mysqli_connect($server,$login,$pwd,"cyb4");

if($newpwd != $chkpwd) {echo "<h1> Введённые пароли не совпадают!</h1>";}

else {


$sql = "INSERT INTO `users` (Login, PwdHash, Email, Name) VALUES (?,?,?,?)";

 $stat = mysqli_prepare($conn, $sql);
 mysqli_stmt_bind_param($stat, "ssss", $newuser, $newhash, $newemail, $newname);
 mysqli_stmt_execute($stat);
 $result = mysqli_stmt_get_result($stat);

	echo "<h1>Здравствуйте, $newname! Вы зарегистрированы!</h1>";
	//$_SESSION["newuser"] = $newuser;

	echo '<meta http-equiv="refresh" content= "3; url=login.php" />';
	die("Вы будете перенаправлены на страницу авторизации.");

}

mysqli_close($conn);