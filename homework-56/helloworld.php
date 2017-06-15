<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <style type= "text/css">
        .mytable {
            border: 1px solid red;
             margin: auto;
        }
        .tr2 {
            border: 0px solid green;
        }
        .td2 {
            border: 1px solid black;
        }
        </style>
    </head>
    <body>
    <?= "Donald Trump"
     #hi
    //hello
    /**/?>
    <br/>
    <?= "2017" ?>
    <br/>
    <?php
        $president = "Donald Trump";
        $year = "2017";
        echo $president;
        echo "<br/>";
        echo $year;
        
    ?>
    <table class="mytable">
        <tr class="tr2">
            <td class="td2">
       
   
    <?php
        $president = "Donald Trump";
        $year = "2017";

        echo $president;
        echo "</td></tr> <tr class=\"tr2\"><td class=\"td2\">";
        echo $year;
        
    ?>
    </td>
     </tr>
     </table>
     <br>
    <table class="mytable">
        <tr class="tr2">
            <td class="td2">
         <?php
        $president = "Donald Trump";
        $president2 = "Barack Obama";
        $president3 = "George W. Bush";
        $year = "2017";
        $year2 = "2009";
        $year3 = "2001";
            

        echo $president;
        echo "</td> <td class=\"td2\">";
        echo $year;
        echo "</td></tr> <tr class=\"tr2\"><td class=\"td2\">";

        echo $president2;
        echo "</td> <td class=\"td2\">";
        echo $year2;
        echo "</td></tr> <tr class=\"tr2\"><td class=\"td2\">";

        echo $president3;
        echo "</td> <td class=\"td2\">";
        echo $year3;
        
    ?>
    </td>
     </tr>
     </table>
<br>
     <table class="mytable">
        <tr class="tr2">
            <td class="td2">
         <?php
        $president = "Donald Trump";
        $president2 = "Barack Obama";
        $president3 = "George W. Bush";
        $year = "2017";
        $year2 = "2009";
        $year3 = "2001";
            

        echo $president;
        echo "</td> <td class=\"td2\">";
        echo $year;
        echo "</td></tr> <tr class=\"tr2\"><td class=\"td2\">";

        echo $president2;
        echo "</td> <td class=\"td2\">";
        echo $year2;
        echo "</td></tr> <tr class=\"tr2\"><td class=\"td2\">";

        echo $president3;
        echo "</td> <td class=\"td2\">";
        echo $year3;
        
    ?>
    </td>
     </tr>
     </table>
    </body>
</html>
