<?php
    $pageTitle = "Assignment 3";
    require_once "includes/header.php";
    require_once "database/connection.php";
    $dbc = db_connect();

    if(isset($_POST['submit'])){
        
        $errors = [];
        //name
        if(empty($_POST['name'])){
            $errors[] = "name cannot be empty";
        }
        else{
            $name = trim($_POST['name']);
        }
        //email
        if(empty($_POST['email'])){
            $errors[] = "email cannot be empty";
        }
        else{
            $email = trim($_POST['email']);
        }
        //username
        if(empty($_POST['username'])){
            $errors[] = "username cannot be empty";
        }
        else{
            $username = trim($_POST['username']);
        }
        //phone
        if(empty($_POST['phone'])){
            $errors[] = "phone number cannot be empty";
        }
        else{
            $phone = trim($_POST['phone']);
        }
        //address
        if(empty($_POST['address'])){
            $errors[] = "address cannot be empty";
        }
        else{
            $address = trim($_POST['address']);
        }
        //permanent address
        if(empty($_POST['paddress'])){
            $errors[] = "permanent address cannot be empty";
        }
        else{
            $paddress = trim($_POST['paddress']);
        }
        //cnic
        if(empty($_POST['cnic'])){
            $errors[] = "cnic cannot be empty";
        }
        else{
            $cnic = trim($_POST['cnic']);
        }
        //dob
        if(empty($_POST['dob'])){
            $errors[] = "dob cannot be empty";
        }
        else{
            $dob = trim($_POST['dob']);
        }

        if(empty($errors)){
           $dbc = db_connect();
           $sql = "INSERT INTO users VALUES(NULL,'$name','$email','$username','$phone',
           '$address','$paddress','$cnic','$dob')";
           $result = mysqli_query($dbc,$sql);
           if($result){
               echo "<div class='alert alert-success'>Data Entered Successfully!</div>";
           }
           else {
            echo "<div class='alert alert-danger'>Data cannot be Entered!</div>";
           }
           db_close($dbc);
        }
        else{
            foreach($errors as $error){
                echo "<div class='alert alert-danger'>$error</div>";
            }
        }
    }
    else{
        echo "<div class='alert alert-danger'>Form is not submitted! </div>";
    }
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center">Registration Form</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form action="" method="post">
                <div class="form-group">
                    <label for="name">Full Name: </label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email Address: </label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="username">Username: </label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Phone number: </label>
                    <input type="tel" name="phone" id="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Present Address: </label>
                    <input type="text" name="address" id="address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="paddress">Permanent Address: </label>
                    <input type="text" name="paddress" id="paddress" class="form-control">
                </div>
                <div class="form-group">
                    <label for="cnic">CNIC: </label>
                    <input type="text" name="cnic" id="cnic" class="form-control">
                </div>
                <div class="form-group">
                    <label for="dob">Date of birth: </label>
                    <input type="date" name="dob" id="dob" class="form-control">
                </div>
                <input type="submit" name="submit" value="Register" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
    <?php require_once "includes/footer.php"; ?>
</body>
</html>