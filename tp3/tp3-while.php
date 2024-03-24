<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
                $array1 = ["John Mark" => ["John","Douala",26],"Tangwe Marino"=>["Tangwe","Bamenda",24]];   
                  $index = 0;  
                  $i = 0;
                  $indexes = array_keys($array1);
                  $values = array_values($array1);

                while($index<count($array1)){
                    echo "Name: " . $indexes[$index]  . "<br>" ;
                    echo "First Name: " .$values[$index][0] . "<br>" ;
                    echo "City: " . $values[$index][1] . "<br>" ;
                    echo "Age: " . $values[$index][2] . "<br>";
                  echo  "<hr></hr>";
                    $index++;
                }

 /*
    Create a multidimensional associative array whose keys are person names and
    associative array values whose keys are the person's first name, city 
    of residence and age, with a series of associated values.
*/

    echo  "<h1>start of array 2</h1>";
    $array2 = ["John Mark" => ["First Name"=>"john","city of residence"=> "Douala","age"=>26],"Tangwe Marino"=>["first name"=>"Tangwe","city of residence"=>"Bamenda","age"=>24]];  
    $indexes1 = array_keys($array2);
    $values1 = array_values($array2);

             while($i<count($array2))    {

                while($i<count($values1)){
                  echo "Name: " . $indexes1[$i]  . "<br>" ;

                  $values2 = array_values($values1);
                  $values3 = array_values($values2[$i]);
                  // print_r($values3[2]) .  "<br>" ;
                  echo "First Name: " .$values3[0] . "<br>" ;
                  echo "City: " . $values3[1] . "<br>" ;
                  echo "Age: " . $values3[2] . "<br>";
                  echo  "<hr></hr>";
                  echo "<br>";
                  $i++;
                }

                $i++; 
                         
              }
    ?>
</body>
</html>