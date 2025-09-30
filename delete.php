<?php 
include('db_con.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    

        $query = "delete from `student_data` where `id` = '$id'";

        $result = mysqli_query($connection, $query);

            if(!$result){
                die("Query Failed".mysqli_error());
            }
            else{
                header("Location: index.php");
        }
    }
?>