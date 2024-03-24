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
            $stopper = rand(pow(10, $digits-1), pow(10, $digits)-1);
            $counter = 0;
            $ran =  rand(pow(10, $digits-1), pow(10, $digits)-1);

                while ($stopper != $ran) {
                global $counter;
              
                $counter++;
                $ran =  rand(pow(10, $digits-1), pow(10, $digits)-1);

             }
            
             echo "found ", $stopper,  " as ", $ran, " afer : ", $counter, " tries <br>" ;



     
    ?>
</body>
</html>