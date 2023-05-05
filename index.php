<!-- Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale 
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente. -->


<?php

if(isset($_GET['lenght'])){
    $lenght = $_GET['lenght'];
}
else{
    $lenght = 0;
}

function randomPassword($lenght) {
    if((!is_numeric($lenght)))
    {
        return "You need to use numbers, you madman";
    }
    elseif($lenght > 0){
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789~`!@#$%^&*{}[]()\|/:;<>.?/";
        $password = [];
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < $lenght; $i++) {
            $letter = rand(0, $alphaLength);
            $password[] = $alphabet[$letter];
        }
        return implode($password);
    }
    elseif($lenght <= 0)
    {
        return "Use a number higher than 0";
    }
}?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  </head>

  <body class="bg-secondary">
    <div class="container my-5 p-5 bg-light rounded">
        <div class="text-center">
            <h1>
                Password Generator X-2000
            </h1>
            <div class="d-flex justify-content-center my-4">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="GET">
                    <label for="lenght"> Password's lenght desired </label>
                    <input type="text" name="lenght" id="lenght">
                    <input type="submit" name="submit" value="Generate">
                </form>
            </div>
        </div>
        <div class="text-center">
            <h3>
                <?php   echo "You've typed: $lenght"?>
            </h3>
            <h3>
                <?php  echo randomPassword($lenght);?>
            </h3>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>