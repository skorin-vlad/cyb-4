<?php

session_start();
unset($_SESSION["user"]);
echo '<meta http-equiv="refresh" content= "2; url=index.html" />';
die("Вы вышли. Идёт перенаправление на главную страницу.");