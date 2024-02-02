<?php
include('db.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $file_name = $_FILES['image']['name'];
    $file_temp = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "images/" . $file_name;
    $insert = "INSERT INTO folder (name, image_dr) VALUES ('$name', '$folder')";
    
    mysqli_query($connect, $insert);

    if (move_uploaded_file($file_temp, $folder)) {
        header('location: read.php');
    } else {
        echo "<script>alert('image not uploaded')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="name">name</label>
            <input type="text" name="name"><br>
            <input type="file" name="image">
            <button type="submit" name="submit" value="submit">Submit</button>
        </form>
    </div>
</body>

</html>