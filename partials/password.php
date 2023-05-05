

<?php
    //viene inclusa la pagina functions.php all'interno di questa pagina
    include 'functions.php';
    //all'avvio della pagina
    if(isset($_GET['lenght'])){
        $_SESSION['lenght'] =  $_GET['lenght'];
    }
    else{
        $_SESSION['lenght'] = 0;
    }
    randomPassword($_SESSION['lenght']);
?>

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
            Here's your super duper password
        </h1>
        <div class="my-4">
            <h3>
                <?php echo 'Password lenght: '.$_SESSION['lenght'] ?>
            </h3>
            <h3 class="text-break">
                <?php  echo 'Password: '?> <br> <?php echo $_SESSION['password'];?>
            </h3>
            <form class="py-5" action="../index.php">
                <input type="submit" name="submit" value="Go back">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>