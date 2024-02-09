<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        print("hello world you are my boy\n\t");
        echo "hello world\n","How are you\n","I am fine\n";

        $integer = 23;
        $booleanVal = true || false;
        $doubleVal = 23.5;
        $string = "How are you";
        $array = array(1,2,3,4,5,6,34,"me");

        class Animal {
            const human  = false;
            function createSounds(){
                $bool = "bark";
                echo "This is a bull dog";
            }
        }

        $animalInstance = new Animal;

        if($integer>$doubleVal){
            echo "\nthis is true";
        }else{
            echo "you are a pa\n";
        }

        for($index = 0; $index<count($array);$index++){
            echo $array[$index], $string . "\n " . $array[7];
            
        }
    ?>
</body>
</html>