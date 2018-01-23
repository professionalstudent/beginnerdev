<?php
    if( (isset($_POST['v1']) && !empty($_POST['v1'])) && (isset($_POST['v2']) && !empty($_POST['v2'])) )
    {
        $numero1 = $_POST['v1'];
        $numero2 = $_POST['v2'];
        $calc = $numero1 + $numero2;
        echo "A soma de $numero1 + $numero2 = $calc<br/>";
        switch ($calc) 
        {
            case 25:
                echo "Você acertou exatamente o valor chave do sistema, parabéns.";
                //header("Location: ../../index.php");
                break;
            
            default:
                echo "Tente novamente.";
                //header("Location: ../../index.php");
                break;
        }        
        
    }
    
        
        
        //header("Location: ../../index.html");
?>