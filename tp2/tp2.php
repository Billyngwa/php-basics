<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp2</title>
</head>
<body>
    <?php
    
        $words = ["zut","merde"];

        function detectWord($phrase){
            global $words;
            foreach($words as $word){
              $phrase = str_replace($word,"***",$phrase);

            }
          echo $phrase;
        }


        detectWord("merde-zut");
     
    ?>
</body>
</html>