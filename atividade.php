<!DOCTYPE html>
<html>
    <body>
        <?php
        $nome = 'Fulano';

        switch($nome) {
            case 'Fulano':
                echo 'E si Fulano';
            break;

            case 'Sicrano':
                echo 'E ai Sicrano';
            break;
            
            case 'Beltrano':
                echo 'E ai Beltrano ';
            break;
            
            default:
            echo 'Qual é o sue nome?';
            break;
                
        }
                                  // Resultado é: É ai fulano 
                ?>
    </body>
</html>