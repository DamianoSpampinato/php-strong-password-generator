<?php
require_once __DIR__ . '/functions.php'; 



$QLength = isset($_GET['ReqLength']) ? intVal($_GET['ReqLength']): '';

$passwordChar = [
    
        
        '1' => range('A','z'),
        '2' => range(1 , 9),
        '3' => ["@","!", "?", "."]
    ];

    
//variabile password



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Password Generator</title>
</head>
<body>
    <div class="container">
        <?php if(!number_format($QLength)){?>
            <div>
                Nessun Parametro Valido Inserito
            </div>
        <?php } ?>
        <form action="" method="GET">
            <input type="text" name="ReqLength" value="<?php echo $QLength ?>">
            <button type="submit">Invia richiesta</button>
        </form>
        <div class="password-box">
            <p>La tua password è <?php echo getPassword($QLength, $passwordChar) ?></p>
        </div>
        
        
    </div>
</body>
</html>