<?php
if(isset($_SESSION['CONNEXION'])&&$_SESSION['CONNEXION']==="OK") 
{?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>Mini Tchat</title>
                
        </head>
        <body>
            <div class="bandeau">
                <h1>BONJOUR <?php echo ($_SESSION['LOGGED_USER']); ?> !</h1>
                <form method="post" action="/src/controllers/Disconnect.php">
                    <input type="submit" Value="Déconnexion"/>
                </form>    

            <?php
            foreach ($posts as $post) {
            ?>
                <div class="message">
                    <p>
                        <?php
                        // We display the post content.
                        echo nl2br($post['pseudo'])." : ".nl2br($post['message']);
                        ?>
                        
                    </p>
                </div>
            <?php
            } // The end of the posts loop.
            ?>
            <form method="post" action="/src/controllers/NewMessage.php">
                <p>
                    <input type="text" name="newMessage" id="newMessage" autofocus/>
                    <br />
                    <input type="submit" Value="Envoyer"/>
                </p>
            </form>    
        </body>
    </html>
<?php
}
else 
{
    header('Location:login.php');
}