<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>C0ff33 WaVe</title>
    <script src="javascript.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php include('navbar.php'); ?>

    <div class="field">
        <p class="control has-icons-left">
            <input class="input" type="text" placeholder="Pseudo">
            <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
        </p>
    </div>
    <div class="field">
        <p class="control has-icons-left has-icons-right">
            <input class="input" type="email" placeholder="Email">
            <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
            </span>
        </p>
    </div>

    <div class="field">
        <p class="control">
                <button class="button is-link">
                    Ajouter un Utilisateur
                </button>
        </p>
        <?php
        if (isset($_POST['pseudo']) & isset($_POST['email'])) {
            $bdd = new PDO('mysql:host=localhost;dbname=cofeewave;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $reponse = $bdd->query('SELECT * FROM users');

            $requete = 'INSERT INTO users VALUES(NULL, "' . $_POST['pseudo'] . '", "' . $_POST['mail'] . '")';
            $resultat = $bdd->query($requete);
        }


        ?>
    </div>
</body>

</html>