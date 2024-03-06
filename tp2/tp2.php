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

        function detectWord($word){
            global $zut;
            global $merde;
            if (strpos($word,$merde) !== false) {
              if(strpos($word,$zut) !== false){
                $newString = str_replace($zut,"***",$word);
                $newStrin = str_replace($merde,"***",$word);

                echo $newString . $newStrin;
              }else{
                $newString = str_replace($merde,"***",$word);
                echo $newString;              }
          }else if(strpos($word,$zut) !== false){
            $newString = str_replace($zut,"***",$word);
            echo $newString;
          }else{
            echo $word;

          }
        }


        detectWord("merde-zut");
     
    ?>
</body>
</html>