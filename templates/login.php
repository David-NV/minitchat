<?php 
    session_start();
    $_SESSION['CONNEXION']="";
?>
<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8" />
    	<title>Mini Tchat</title>
    	
	</head>

	<body>
        <br/>
        <section>
        	<p>Veuillez vous connecter</p>
            <form method="post" action="/src/controllers/connexion.php">
                <p>
                    <label for="pseudo"> pseudo : </label>
                    <input type="text" name="pseudo" id="pseudo" autofocus/>
                    <br />
                    <label for="mdp"> mot de passe : </label>
                    <input type="password" name="mdp" id="mdp" />
                    <br />
                    <input type="submit" Value="Valider"/>
                    
                </p>
            </form>
        </section>
        <?php
                if ($_SESSION['CONNEXION']!="") echo ($_SESSION['ERROR_MESSAGE']);
                $_SESSION['CONNEXION']=""; 
        ?>
	</body>
</html>