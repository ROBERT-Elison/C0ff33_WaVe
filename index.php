<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WaVe C0ff33D</title>
    <link rel="stylesheet" href="style.css">
    <script src="javascript.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>

<body>
    <?php include('navbar.php'); ?>

    <section class="hero is-info is-small">
        <div class="hero-body">
            <div class="container has-text-centered">
                <p class="title">
                    BIENVENUE !!
                </p> <br>

                <p class="subtitle">
                    Ajoute un utilisateur et defini son temps d'utilisation pour sa machine
                </p>
            </div>
            <form action="" method="post">
                <div class="columns">
                    <div class="column is-4"></div>
                    <div class="column is-4">
                        <div class="column">
                            <form action="" method="post">
                                <input class="input" type="text" placeholder="Nom de l'utilisateur">
                        </div>
                        <div class="column">
                            <input class="input" type="time" placeholder="Temps de reservation">
                        </div>
                        <div class="column">
                            <input class="input" type="date" placeholder="Date de reservation">
                        </div>
                        <div class="column has-text-centered">
                            <a class="button is-danger">
                                <i class="fas fa-user-plus"></i>
                                Reserver
                            </a>
            </form>
        </div>

</body>

</html>