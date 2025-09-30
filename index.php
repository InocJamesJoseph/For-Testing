<?php include('db_con.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="main-container">
        <div class="title">Student Dashboard</div>
        <button onclick="window.location.href='form.php'">Add User</button>
        <div class="data-container">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = "select * from `student_data`";
                        $result = mysqli_query($connecion, $query);

                        if(!$result){
                            die("Query Failed".mysqli_error());
                        }
                        while($row = mysqli_fetch_assoc($result)){
                        ?>
                         <tr>
                            <td> <?php echo htmlspecialchars($row['id']); ?> </td>
                            <td> <?php echo htmlspecialchars($row['first_name']); ?> </td>
                            <td> <?php echo htmlspecialchars($row['middle_name']); ?> </td>
                            <td> <?php echo htmlspecialchars($row['last_name']); ?> </td>
                            <td> <a href="update.php?id=<?php $row['id']; ?>">Update</a></td>
                            <td> <a href="delete.php?id=<?php $row['id']; ?>">Delete</a></td>
                        </tr>
                <?php   } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>