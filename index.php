<?php
    session_start();
    $_SESSION['ERROR_MESSAGE']="";
    header('Location:templates/login.php');
