<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
    <?php

$connection = mysqli_connect("localhost","root","kavindu@123K");
$db = mysqli_select_db($connection,'phpcrud');


    $id =$_POST['id'];
    
    $query= "SELECT * FROM student WHERE id = '$id' ";
    $query_run = mysqli_query($connection,$query);

    if ($query_run) {
        while ($row = mysqli_fetch_array($query_run)) {
            ?>

            <div class="container">
                <div class="jumbotron">
                    <h2>
                        edit dashbord
                    </h2>
                     
                    <hr>
                      <form action="" method="post">
                        <input type="hidden" name="id"  value="<?php echo $row['id'] ?>">

                      <div class="form-group">
                    <label for=""> fist name </label>
                    <input type ="text" name ="fname" class="form-control" value="<?php echo $row['fname'] ?>" placeholder="Enter first Name" required >
                      </div>

                       <div class="form-group">
                    <label for=""> last name </label>
                    <input type ="text" name ="lname" class="form-control" value="<?php echo $row['lname'] ?>" placeholder="Enter Last Name" required >
                      </div>

                     <div class="form-group">
                    <label for=""> Contact </label>
                    <input type ="text" name ="contact" class="form-control"  value="<?php echo $row['contact'] ?>" placeholder="Contact" required>
                      </div>

                <button type="submit" name="update" class="btn btn-primary">updatedata</button>

                <a href="index.php" class="btn btn-danger"> CANCEL  </a>

                <a href="delete.php" class="btn btn-warning">home page</a>

              </form>  
                    
                    <?php

                if (isset($_POST['update'])) {
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $contact = $_POST['contact'];

                    $query = "UPDATE student SET fname = '$fname', lname ='$lname' , content ='$contact' WHERE id ='$id' ";
                    $query_run = mysqli_query($connection, $query);

                    if ($query_run) 
                    {
                        echo '<script> alert("updated") </script>';

                        header("location:phpcrud/index.php");
                    } else {
                        echo '<script> alert(" notupdated") </script>';
                    }
                } 
                ?>
                </div>
            </div>
            <?php
        }
    }
        ?>
     </body>
</html>

                
            
                
            
               

