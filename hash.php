<?php

$pwd = "123456";
$hash = hash("sha256",$pwd);
$newhash = hash("sha256",$newpwd);
echo $hash;
