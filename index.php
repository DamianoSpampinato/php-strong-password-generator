<?php
require_once __DIR__ . '/functions.php'; 
?>

<?php
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
        <h1>Strong password generator</h1>
        <h2>Genera una password sicura</h2>
        <?php if(!number_format($QLength)){?>
            <div class="alert">
                <div>
                    Nessun Parametro Valido Inserito
                </div>
                
            </div>
        <?php } ?>
        <div class="container">
                <form action="" method="GET">
                    <input type="text" name="ReqLength" placeholder="inserisci lunghezza password" value="<?php echo $QLength != 0 ? $QLength : ''?>">
                    <div class="buttons">
                        <button class="bg-blue" type="submit">Invia richiesta</button>
                        <button name="ReqLength" <?php clear($QLength, $_GET['ReqLength']) ?> type="submit">Annulla</button>
                    </div>
        </form>
        <div class="password-box">
            <p>La tua password è : <?php echo getPassword($QLength, $passwordChar) ?></p>
        </div>
        
        
    </div>
</body>
</html>


        <style >
            body{
                background-color: #1e2c66;
                }
                h1,h2{
                    text-align:center
                }
                h1{
                    color:gray;
                }
                h2{
                    color:darkgray;
                }
        
        button, input{
            padding: 10px;
            border-radius: 10px
        }
        .buttons{
            margin-top:10px
        }

        .bg-blue{
            background-color: #0d6efd;
        }

        
        .alert{
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: lightblue;
            color:green;
            }
        .container{
            text-align:center;
            padding: 20px;
            width: 500px;
            margin:15px auto;
            background-color: white;
            border-radius: 10px ;
        }
        </style>