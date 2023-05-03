<?php 
    session_start();
    require('../model.php');
    testLogin(($_POST['pseudo']),($_POST['mdp']));
    switch($_SESSION['CONNEXION'])
    {
        case "OK":
            $_SESSION['LOGGED_USER']=htmlspecialchars($_POST['pseudo']);
            setStatus($_SESSION['LOGGED_USER'],"ONLINE");
            header('Location:home.php');
            break;
        case "WRONGPASS":
            $_SESSION['ERROR_MESSAGE']="utilisateur ou mot de passe incorrect";
            header('Location:../../templates/login.php');
            break;
        case "WRONGLOGIN":
            $_SESSION['ERROR_MESSAGE']="erreur utilisateur ou utilisateur inconnu";
            header('Location:../../templates/login.php');
            break;
        case "":
            $_SESSION['ERROR_MESSAGE']="merci de remplir tous les champs pour valider le formulaire.";
            header('Location:../../templates/login.php');
            break;

    }
