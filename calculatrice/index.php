<?php
    /**
     * 
     * @param string $type le type d'opération, soit "add", "sub", "mul" ou "div"
     */
    function operation($nb1, $nb2, $type) 
    {
        switch($type){
            case "add": 
                $result = $nb1+$nb2;
                break;
            case "sub":
                $result = $nb1-$nb2;
                break;
            case "mul":
                $result = $nb1*$nb2;
                break;
            case "div":
                $result = $nb1/$nb2;
                break;
            default:
                $result = "l'operateur n'est pas valide";
                break;
        }
        return $result;
    }

    $nb = "42";

    if(is_numeric($nb) == true){
        //for(start, through, increment)
        for($i = 1; $i <= 10; $i++){
            echo "<p>", 
                    $nb , " &times; ", $i, " &equals; ", 
                    operation($nb, $i, "mul"), 
                "</p>";
        }
    }
    else{
        echo "Tu m'expliques comment je multiplie ça, STP ?";
    }
?>
