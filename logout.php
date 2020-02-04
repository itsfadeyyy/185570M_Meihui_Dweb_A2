<?php

session_start();
unset($_SESSION["id"]);
session_unset();
session_destroy();
echo "You have logged out<br/>";

?>
<a href="regislogin.html">Login</a>