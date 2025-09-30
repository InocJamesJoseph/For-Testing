<?php 
  include('db_con.php');
    
  if($_SERVER["REQUEST METHOD"]) == "POST" {
    $fname = mysqli_real_escape_string($connection, $_POST['first name']);
    $mname = mysqli_real_escape_string($connection, $_POST['middle name']);
    $lname = mysqli_real_escape_string($connection, $_POST['last name']);

    $query = "INSERT INTO student_data (first_name, middle_name, last_name)
                VALUES('$fname', '$mname', '$lname')";
    mysqli_query($connection, $query);

    header("Location: index.php");
    exit();
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <div class="form-container">
        <div class="form-title">Registration</div>
        <form action="" method="post">
            <label for="first name">First Name</label>
            <input type="text" name="first name"><br>

            <label for="middle name">Middle Name</label>
            <input type="text" name="middle name"><br>

            <label for="last name">Last Name</label>
            <input type="text" name="last name"><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>