<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <table class="table table-black table-hover">
            <thead class="">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Username</th>
                    <th scope="col">image</th>
                    <th colspan="2" align="center">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                include('db.php');
                $select = "SELECT * FROM folder";
                $result = mysqli_query($connect, $select);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><img src="<?php echo $row['image_dr']; ?>" width="100px" height="100px"></td>
                        <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">update</a></td>
                        <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">delete</a></td>
                    </tr>
                <?php
                } ?>

            </tbody>
        </table>
    </div>
</body>

</html>