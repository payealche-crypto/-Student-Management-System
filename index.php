<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Student Management System</h1>

    <a href="add_student.php" class="btn">+ Add Student</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <?php
        $query = "SELECT * FROM students";
        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)) {
        ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="delete">Delete</a>
            </td>
        </tr>

        <?php } ?>

    </table>
</div>

</body>
</html>
