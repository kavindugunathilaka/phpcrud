<?php 
$connection = mysqli_connect("localhost","root","kavindu@123K");
$db = mysqli_select_db($connection,'phpcrud');
 

if(isset($_POST['delete']))
{
    $id = $_POST['id'];

    $query ="DELETE student WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

   
    if($query_run)
    {

        echo '<script> alert("data deleted");</script>';

        header("location:index.php");

    }
    
    else
    {
        echo '<script> alert("data not deleted");</script>';
    }

}


?>