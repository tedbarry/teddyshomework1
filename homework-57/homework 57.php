<?php
$headers =["President" , "Years in office", "age"];
$Trump = ["Donald J Trump", "2017-", "67"]; 

    $Barack = ["Barack H Obama", "2009-2016", "55"];

    $George = ["George W Bush", "2001-2008", "70"];

    $Presidents = [$Trump, $Barack, $George];
    
//////////////////////////////////////////////////

    $Trump2 = ["name" => "Donald J Trump",
    "date" => "2017-"]; 

    $Barack2 = ["name" => "Barack H Obama", "date" =>  "2009-2016"];

    $George2 = ["name" => "George W Bush", "date" =>  "2001-2008"];

    $Presidents2 = [$Trump2, $Barack2, $George2];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <div class="jumbotron">
            <h1>US Presidents</h1>
        </div>

        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                <?php
                $length3 = count($headers);
                for($i=0; $i<$length3; $i++)
                {
                  echo  "<th>" . $headers[$i] . "</th>";
                }
                    
                    ?>
                </tr>
            </thead>
            <tbody>
            <?php 
            $length1 = count($Presidents);
            $length2 = count($Presidents[0]);
            echo "length = " . $length1;
            echo "length = " . $length2;
            for($i=0; $i<$length1; $i++)
            {
                echo "<tr>";
                for($j=0; $j<$length2; $j++)
                {
                    echo "<td>" . $Presidents[$i][$j] . "</td>"; 
                }
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <br>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>President</th>
                    <th>Years in office</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            for($i=0; $i<3; $i++)
            {
                echo "<tr><td>" . $Presidents2[$i]['name'] . "</td>";
                echo "<td>" . $Presidents2[$i]['date'] . "</td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
    <script src="/jquery-1.12.4.min.js"></script>
    <script src="/bootstrap-3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>