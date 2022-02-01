<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php 

if (empty($_GET["name"]) || empty($_GET["mail"]) || empty($_GET["age"])) {
    $message = "scrivi qualcosa";
} else {
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];
    if (strlen($name) > 3 && strpos($mail,'@') != false && strpos($mail,'.') != false && is_numeric($age)) {
        // strpos($mail,'@') != false, dato che strpos non restituisce true
      $message = "Accesso Riuscito";
    } else {
        $message = "Accesso Negato";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo $message ?>
    </h1>
</body>
</html>