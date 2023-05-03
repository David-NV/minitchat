<?php
    session_start();
    require('../model.php');
    setStatus($_SESSION['LOGGED_USER'],"OFFLINE");
    $_SESSION['CONNEXION']="";
    $_SESSION['ERROR_MESSAGE']="";
    header('Location:../../templates/login.php');
    session_destroy();
