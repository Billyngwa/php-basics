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
                echo "<table>
                        <h1>Table Of No correspondence</h1>
                        <thead>
                            <tr>
                                <th>N<sup>o</sup></th>
                                <th>Generated Value</th>
                                <th>Compared Value</th>
                                <th>is equal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> $counter</td>
                                <td> $ran</td>
                                <td> $stopper</td>
                                <td> false</td>
                            </tr>
                        </tbody>
                    </table>", "<br>";
                $counter++;
                $ran =  rand(pow(10, $digits-1), pow(10, $digits)-1);
             }
             echo "<table>
             <hr>
             <h1>Table of correspondence</h1>
             <thead>
                 <tr>
                     <th>N<sup>o</sup></th>
                     <th>Generated Value</th>
                     <th>Compared Value</th>
                     <th>is equal</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <td> $counter</td>
                     <td> $ran</td>
                     <td> $stopper</td>
                     <td> true</td>
                 </tr>
             </tbody>
         </table>", "<br>";



          echo "Start of while loop <br>";

          for($counter; $stopper!=$ran;$counter++){
                echo "no match <br>";
              $ran =  rand(pow(10, $digits-1), pow(10, $digits)-1);

          }
          echo "found match afer : ", $counter, " tries";
    ?>
</body>
</html>