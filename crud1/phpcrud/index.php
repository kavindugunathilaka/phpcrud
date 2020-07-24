<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">"
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h2>PHP - CRUD :Display data in php </h2>
            <hr>
   <div class="row">
        <a href="insertdata.php" class="btn btn-success" style="margin-left: 80%;"> ADD DATA </a>
    </div>
<br>
<?php
$connection = mysqli_connect("localhost","root","kavindu@123K");
$db = mysqli_select_db($connection,'phpcrud');

$query= "SELECT * FROM student";
$query_run = mysqli_query($connection,$query);

?>

<table class ="table table-bordered" style="background-color: white;"> 
    <thead class="table-dark">
        <tr>  
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Contect</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>


 

<?php 

    if ($query_run) {
        while ($row = mysqli_fetch_array($query_run)) { 
            
            ?>
                <tbody>
                    <tr>
                <th><?php echo $row['id']; ?></th>
                <th><?php   echo $row['fname']; ?></th>
                <th><?php echo $row['lname']; ?></th>
                <th><?php echo $row['contact'];?></th>


                <form action="updatedata.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $row['id']?>">
                      <th> <input type="submit" name="update2" class="btn btn-success" value="update"></th>
                </form> 


                <form action="delete.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                      <th><input type="submit" name="delete" class="btn btn-danger" value="delete"></th>
                 </form>

                </tbody>
             <?php
         }
    }
    else
    {
        echo "no record found";
    }
?>
</table>

        </div>
    </div>


    
</body>
</html>