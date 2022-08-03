<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>

<body>
    <div id="container">
        <form action="register.php" method="post">
            <h1>Enregistrement</h1>

            <label for="lastname">Nom</label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="lastname" id="lastname" required>

            <label for="firstname">Prénom</label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="firstname" id="firstname" required>

            <label for="username">Nom d'utilisateur</label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" id="username" required>

            <label for="email">E-mail</label>
            <input type="text" placeholder="Entrer l'e-mail" name="email" id="email" required>

            <label for="password">Mot de Passe</label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" id="password" required>

            <input type="submit" id="submit" value="LOGIN">
            <?php
            if (isset($_GET['erreur'])) {
                $err = $_GET['erreur'];
                if ($err == 1) {
                    echo "<p style='color:red'>Veuiller insérer des informations valides</p>";
                }
            }
            ?>
        </form>
    </div>
</body>

</html>