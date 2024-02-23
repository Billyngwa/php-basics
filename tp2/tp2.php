<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp2</title>
</head>
<body>
    <?php
        $zut = "zut";
        $merde = "merde";
        $words = ["guazuti","Markzukerbeg","Bob-loco","Zutugil"
        ,"Noumboussie","Etiendem","Zutuhil","tzuts","merde!! am tired","she is bad merde!","zut-merde"];

        foreach($words as $value){
            if(str_contains($value,$zut) || str_contains($value,$merde)){

                echo "string present $value <br>";
                $outPutString = str_replace($zut, "***",$value);
                $outPutStrin= str_replace($merde, "***",$value);

                echo $outPutString, "<br>";
                echo $outPutStrin, "<br>";
            }
        }
    ?>
</body>
</html>