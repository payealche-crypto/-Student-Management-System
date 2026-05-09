<?php
include 'db.php';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $course = $_POST['course'];
    $email = $_POST['email'];

    $query = "INSERT INTO students(name, course, email)
              VALUES('$name', '$course', '$email')";

    mysqli_query($conn, $query);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Add Student</h1>

    <form method="POST">
        <input type="text" name="name" placeholder="Enter Name" required>
        <input type="text" name="course" placeholder="Enter Course" required>
        <input type="email" name="email" placeholder="Enter Email" required>

        <button type="submit" name="submit" class="btn">Save Student</button>
    </form>
</div>

</body>
</html>
