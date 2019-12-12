<!DOCTYPE html>
<html>
    <head>
        <title>Quiniela</title>
        <style>
            
        </style>
    </head>
    <body>
        <h1>Quiniela La Liga Santander</h1>
        <?php
            $i=0;
            $local=0;
            $empate=0;
            $visit=0;
            $partidos = array(
            "     Quiniela jornada 10 <br>",
            "     Villareal-Alavés <br>",
            "     Valladolid-Eibar <br>",
            "     Celta-Real Sociedad <br>",
            "     Levante-Español <br>",
            "     Osasuna-Valencia <br>",
            "     Leganés-Mallorca <br>",
            "     Atlético-Atletic <br>",
            "     Granada-Real Betis <br>",
            "     Sevilla-Getafe <br>",
            "     Cadiz-Sporting <br>",
            "     Oviedo-Almeria <br>",
            "     Ponferradina-Málaga <br>",
            "     Fuenlabrada-Deportivo <br>",
            "     Alcorcón-Racing Santander <br>",
            "     Numancia-Albacete <br>");
            
            while($i<=15)
            {
                $ale=rand(1, 3);
                if($ale==1) $local++;
                if($ale==2) $empate++;
                if($ale==3) $visit++;
                if($local>=7)
                {
                    while($ale==1) $ale=rand(1, 3);                   
                }
                if($empate>=3)
                {
                    while($ale==2) $ale=rand(1, 3); 
                }
                if($visit>=5)
                {
                    while($ale==3) $ale=rand(1, 3); 
                }
                switch ($ale)
                {
                    case 1:
                        $res="1";
                        break;
                    case 2:
                        $res="x";
                        break;
                    default:
                        $res="2";
                        break;
                }
                echo $res. "" .$partidos[$i];
                $i++;
            }
        ?>
    </body>
</html>