<!-- ## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->


<?php
    $paragraph = " Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius velit, unde adipisci error magnam consequatur. nisi quo labore saepe autem enim iusto. temporibus earum laborum quidem mollitia, ut ipsum molestias.";

    $array = explode(". " , $paragraph);

    
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
    <ul>
        <?php
        foreach ($array as $value) {
            echo "<li>". $value ."</li>";
        }
        ?>
    </ul>
</body>
</html>