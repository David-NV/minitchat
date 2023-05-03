<?php 
//session_start();
// We connect to the database.
function dbConnect()
{
    try {
        $database = new PDO('mysql:host=localhost;dbname=chat;charset=utf8', 'chat', 'chat');
        return $database;
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}

function getPosts()
{
    // We retrieve the 5 last blog posts.
    $statement = dbConnect()->query(
        "SELECT Pseudo, Messages FROM message ORDER BY heure  LIMIT 0, 20"
    );
    $posts = [];
    while (($row = $statement->fetch())) {
        $post = [
            'pseudo' => $row['Pseudo'],
            'message' => $row['Messages'],
        ];

        $posts[] = $post;

    }
    
    return $posts;
}

function testLogin(string $user,string $pass)
{

    if (($user) &&  ($pass))
    {
        $statement = dbConnect()->query(
            "SELECT Pseudo,Password FROM login" 
        );
        while (($row = $statement->fetch()))
        {
            if (($user==$row['Pseudo'])&&($pass==$row['Password'])) 
            {
                $_SESSION['CONNEXION']="OK";
                break;
            }
            if ($user!=$row['Pseudo']) $_SESSION['CONNEXION']="WRONGLOGIN";
            elseif ($pass!=$row['Password']) $_SESSION['CONNEXION']="WRONGPASS";
        }
    }    
    else
    {
        $_SESSION['CONNEXION']="";
    }
    
}

function addMessage(string $loggedUser,string $newMessage)
{
    if ($_SESSION['CONNEXION']==="OK")
    {
        $insertMessage=dbConnect()->prepare(
            'INSERT INTO message (Pseudo,Messages,heure)
            VALUES (?,?,NOW())'
        );
        $insertMessage->execute([$loggedUser,$newMessage]);
    }
}

function setStatus(string $userLogged,string $newStatus)
{
    if ($_SESSION['CONNEXION']==="OK")
    {
        $updateStatus=dbConnect()->prepare(
            'UPDATE login SET Status=?
            WHERE Pseudo=?'
        );
        $updateStatus->execute([$newStatus,$userLogged]);
    }   
}