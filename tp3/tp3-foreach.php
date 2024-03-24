<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Create a multidimensional associative array whose keys are person names and whose
     values are indexed arrays containing the person's first name, city of residence and age.
    */
        $array1 = ["John Mark" => ["John","Douala",26],"Tangwe Marino"=>["Tangwe","Bamenda",24]];        
        foreach ($array1 as $key => $value) {
           echo "Name: " . $key . "<br>" ;
           echo "First Name: " . $value[0] . "<br>" ;
           echo "City: " . $value[1] . "<br>" ;
           echo "Age: " . $value[2] . "<br>" ;
           echo  "<hr></hr>";

        }

        /*
            Create a multidimensional associative array whose keys are person names and
             associative array values whose keys are the person's first name, city 
            of residence and age, with a series of associated values.
        */
       echo  "<h1>start of array 2</h1>";
        $array2 = ["John Mark" => ["First Name"=>"john","city of residence"=> "Douala","age"=>26],"Tangwe Marino"=>["first name"=>"Tangwe","city of residence"=>"Bamenda","age"=>24]];        
         
            foreach ($array2 as $key => $value) {
                echo "Name: " . $key . "<br>" ;
                foreach($value as $key1=>$value1) {
                        echo "$key1 : $value1" . "<br>" ;
                        echo  "<hr></hr>";   
                }
 
         }
    ?>
</body>
</html>