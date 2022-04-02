<html>
    <head>
        <meta charset="UTF-8">
        <title> Curso PHP Fundamental</title>
    </head>
    <body>
        <?php
            $_megasena = array();
            $_contador = 1;

            while ($_contador < 7) {
                $_sorteio = rand(1,60);
                if(!in_array($_sorteio, $_megasena) ) {
                    $_megasena[] = $_sorteio;
                    $_contador ++;
                }
            }
        
            log()      
            
        
        ?>
    </body>
</html>