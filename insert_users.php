<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WaVe C0ff33D</title>
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
    </div>
</body>

</html>