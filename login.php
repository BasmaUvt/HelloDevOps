<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <div id="container">
            <!--formilaire connexion-->
            <form action="connexion.php"method="POST">
                <h1>connexion</h1>
                <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholde="Entrer le nom d'utilisateur" name="username">
            <label><b>Mot de passe</b></label>
            <input type="password" placeholde="Entrer le mot de passe" name="password">
            <input type="submit" id="submit" value="login">    
        </form>
        </div>
    </body>
</html>