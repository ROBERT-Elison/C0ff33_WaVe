<?php
            if (isset($_POST['pseudo']) & isset($_POST['email'])) {
                $bdd = new PDO('mysql:host=localhost;dbname=cofeewave;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $reponse = $bdd->query('SELECT * FROM users');

                $requete = 'INSERT INTO users VALUES(NULL, "' . $_POST['pseudo'] . '", "' . $_POST['mail'] . '")';
                $resultat = $bdd->query($requete);
               
            }

        header('location:index.php')
            
?>
