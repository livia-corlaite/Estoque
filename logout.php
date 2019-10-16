<?php

session_start();
// deslogando o usuario
session_destroy();
header("Location: logiiin.php");

?>