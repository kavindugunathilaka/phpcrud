<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>CRUD-PHP</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h2>PHP - CRUD : ADD DATA</h2>
            <hr>
            <form action="" method="post">

                <div class="form-group">
                    <label for=""> fist name </label>
                    <input type ="text" name ="fname" class="form-control" placeholder="Enter first Name" required>
                </div>

                <div class="form-group">
                    <label for=""> last name </label>
                    <input type ="text" name ="lname" class="form-control" placeholder="Enter Last Name" required>
                </div>
                
                <div class="form-group">
                    <label for=""> Contact </label>
                    <input type ="text" name ="contact" class="form-control"  placeholder="Contact" required>
                </div>

                <button type="submit" name="insert" class="btn btn-primary">save data</button>

                <a href="index.php" class="btn btn-danger"> CANCEL  </a>

                <a href="" class="btn btn-warning">home page</a>

            </form> 
         </div>
     </div>

</body>
</html>

<?php
$connection = mysqli_connect("localhost","root","kavindu@123K");
$db = mysqli_select_db($connection,'phpcrud');

if(isset($_POST['insert']))
 {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];

    $query = "INSERT INTO student(fname,lname,contact) VALUES ('$fname','$lname','$contact')";
    $query_run = mysqli_query($connection,$query);

    // if($query){
    //     echo '<script>aletr ("data saved")</script>';
    // }
    

    if($query_run)
    {
        echo '<script> alert ("data saved");</script>';
    }
    else
    {
        echo '<script> alert ("data not saved");</script>';

    }


}










