<?php
    $pageTitle = "Assignment 3";
    require_once "includes/header.php";
    require_once "database/connection.php";
    $dbc = db_connect();

    if(isset($_POST['submit'])){
        
        $errors = [];
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
        }
        else{
            $name = $_POST['name'];
        }
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
                    <label for="name">Fullname: </label>
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