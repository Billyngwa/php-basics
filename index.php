<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first php script</title>
</head>
<body>
    <h1>My first php script </h1>
   <?php
        echo "Hello world!";

        // Ici je cree une fonction qui prend en compte toute les taches.
        // cette fonction est responsable de gerer les tableaux.

        $numberArray = array("numberOne"=>1,"numberTwo"=>2, "numberThree"=>3,"numberFour"=>4,"numberFive"=>5, "numberSix"=>6, "numberSeven"=>7);

        function weekDays(){

            global $numberArray;
            foreach($numberArray as $index => $value){
                echo "[Key = \n " . $index , "\n"  . ", Value = " . $value . "] , ";
            }

            return ;

        }

        weekDays();
   ?>
</body>
</html>