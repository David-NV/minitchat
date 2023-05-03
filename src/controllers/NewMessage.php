<?php 
session_start();
require('../model.php');
if (isset($_POST['newMessage'])&&($_POST['newMessage']!=""))
{
    addMessage($_SESSION['LOGGED_USER'],htmlspecialchars($_POST['newMessage']));
    $posts=getPosts();
    header('Location:home.php');
}