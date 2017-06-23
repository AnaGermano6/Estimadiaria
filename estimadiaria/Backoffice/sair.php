<?php

session_destroy();
unset($_SESSION["utilizador"]);
setcookie("utilizador", "", time()-3600);
header('Location:index.php');

?>
