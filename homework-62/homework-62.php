   <?php  
    $thesefer = "";

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        if(isset($_POST['thesefer'])) {
        #if(!empty($_POST['thesefer'])) { // empty checks that exists and is 0 or empty string
            $thesefer = $_POST['thesefer'];
        } else {
            #exit
            $errors[] = "thesefer is a required field";
        }
    }
?>
   
   
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
        p {
            text-align: center;
        }
        form {
            text-align: center;
        }
    </style>
</head>

<body>
<p>Please Choose A Sefer</p>
<form class="form-horizontal" method="post">

    <?php

    $cs = "mysql:host=localhost;dbname=students";
    $user = "teddy";
    $password = '1234';

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);

        $query = "SELECT * FROM seforim";
        $results = $db->query($query);

        $sefer_name = $results->fetch();
        echo  "<div class='form-group'  >";
           echo "<select name = 'mysefer'";
           
        while($sefer_name) {
             echo "<option>" . $sefer_name['1'] . "</option>";
           $sefer_name = $results->fetch();
        }
        echo "</select></div>";
    } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
?>   

<div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
</body>
    
</html>