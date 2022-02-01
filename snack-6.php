<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/snack-6.css">
    <title>Document</title>
</head>
<body>
    <?php 
    $class = "grey";
    foreach ($db as $key => $all) {
      
        if ($key == 'teachers') {
            ?>
            <div class="<?php echo $class ?>">
            <?php foreach ($all as $key => $teacher) {
                ?>
                <div>
                    <?php
                    echo $teacher["name"];
                    echo $teacher["lastname"];
                    ?>
                </div>
            <?php
            }
            ?>
            </div>
            <?php
        } else {
            $class = "green";
            ?>
            <div class="<?php echo $class ?>">
                <?php
                foreach ($all as $key => $alunni) {
                    ?>
                    <div>
                        <?php
                        echo $alunni["name"];
                        echo $alunni["lastname"];
                        ?>
                    </div>
                <?php
                }
                ?>
            </div>
            <?php
        }
    }
    ?>
  
</body>
</html>