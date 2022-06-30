<?php

session_start();
unset($_SESSION["user"]);
die("You've loged out");