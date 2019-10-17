<?php

session_start();

if(isset($_SESSION['views']))
    unset($_SESSION['views']);

echo "<script> window.location='http://localhost/musicplayer/index.php'; </script>";

?>