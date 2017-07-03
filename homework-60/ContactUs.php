<?php 
$color = "green";
$stylesheets = ["a.css", "b.css"];
include "top.php" ?>
    <?php
    $name  = "";
    $email = "";
    $age ="";

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        if(isset($_POST['name'])) {
        #if(!empty($_POST['name'])) { // empty checks that exists and is 0 or empty string
            $name = $_POST['name'];
        } else {
            #exit
            $errors[] = "Name is a required field";
        }

        if(isset($_POST['email'])) {
        #if(!empty($_POST['email'])) { // empty checks that exists and is 0 or empty string
            $email = $_POST['email'];
        } else {
            #exit
            $errors[] = "Email is a required field";
        }

        if(isset($_POST['age'])) {
        #if(!empty($_POST['age'])) { // empty checks that exists and is 0 or empty string
            if(! is_numeric($_POST['age']) || $_POST['age'] < 1) {
                $errors[] = "Age must be a number greater than 0";
            }
            $age = $_POST['age'];
        } else {
            #exit
            $errors[] = "Age is a required field";
        }

        if(empty($errors)) {
            $emailToUse = $email;
            $result = $name;
            echo "name = " . $name . "<br>";
            echo "age = " . $age . "<br>";
            echo "email = " . $email . "<br>";
            exit;
        }
    }
?>


    <div class="container">     

        <form class="form-horizontal" method="post">
            <?php if (isset($errors)) : ?>
            <div class="well text-danger">
                <ul>
                    <?php foreach($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
            <?php endif ?>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="xnumber" min=".01" step=".01" class="form-control" id="name" name="name" placeholder="Name" xrequired
                        value="<?= $name ?>"
                    >
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="xnumber" min=".01" step=".01" class="form-control" id="email" name="email" placeholder="email" xrequired
                        value="<?= $email ?>"
                    >
                </div>
            </div>
            <div class="form-group">
                <label for="age" class="col-sm-2 control-label">Age</label>
                <div class="col-sm-10">
                    <input type="xnumber" min="1" step="1" class="form-control" id="age" name="age" placeholder="age" xrequired
                        value="<?= $age ?>"
                    >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

    </div>
    <script src="/jquery-1.12.4.min.js"></script>
    <script src="/bootstrap-3.3.7/js/bootstrap.min.js"></script>
</body>

</html> 