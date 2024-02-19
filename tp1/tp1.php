<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp1</title>
</head>
<body>
    <?php
          $digits= 3;
          $stopper = 147;
    function waiter($timeInMillisecs){
        $standardTime = (int)$timeInMillisecs/1000;
        while (true) {
          random();
          sleep($standardTime);
        }
    }

    function random(){
        global $digits;

        $ran =  rand(pow(10, $digits-1), pow(10, $digits)-1);
        echo $ran, "from random", "\n";
        return $ran;
    } 
      

         while ($stopper != random()) {
                echo    random(), "\n";
            echo "No correspondence";
            return;
            // $rand++;
         }
          
    ?>
</body>
</html>