<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="color:teal;text-align:center">Generating Statistics for emails passed into an array</h1>
<?php
        $emailArray = ["billytatangwa@gmail.com","willsmanngaffison@yahoo.com","willsmanngaffison@yahoo.com","e.njifanda@commonfactor.tech","e.njifanda@commonfactor.tech"];
       
?>
   <table>
         <tbody>
            <?php
                $domainNames = [];
                $userNames = [];
                $companyNames = [];
                $count=[];
                // function emailStatistics($arrayName = array()){
                    foreach ($emailArray as $value) {
                        $domainAndUsername = preg_split("/\@/", $value);
                        $company = preg_split("/\./", $domainAndUsername[1]);
                        array_push($domainNames,$domainAndUsername[1]);
                        array_push($userNames,$domainAndUsername[0]);
                            if(str_contains($company[0],"mail")){
                            $company[0] = "Google";
                            }
                        array_push($companyNames,$company[0]);
                    
                    }
                    foreach($companyNames as $companyName){
                        if($count){
                            $count[$companyName] =  $count[$companyName]+1;
                        }else{
                            $count[$companyName]= 1;
                        }

                    }
                 $companies = array_keys($count);
                   
                // };
                   

            ?>
            <tr>
                    <?php
                        foreach($count as $key => $val){
                            if($val===1){
                                echo "<td style ='color:teal;'> $key => $val occurence </td>" . "<br>";

                            }else{

                                echo "<td style ='color:teal;'> $key => $val occurences </td>" . "<br>";
                            }
                         
                        }
                    ?>
            </tr>
         </tbody>
     </table>
</body>
</html>