<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <button class="btn btn-primary"><a href="index.php" style="text-decoration: none;" class="text-light">ADD
                USER</a></button><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S.NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Langauge</th>
                    <th scope="col">Date of birth</th>
                    <th scope="col">Address</th>
                    <th scope="col">OPTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connection.php");
                $display = "SELECT * FROM `demo`;";
                $result = mysqli_query($con, $display);

                if ($result) {
                    while ($rows = mysqli_fetch_assoc($result)) {
                        $id = $rows['id'];
                        $name = $rows['name'];
                        $email = $rows['email'];
                        $language =  $rows['langauge'];
                        $gender = $rows['gender'];
                        $date_of_birth = $rows['date'];
                        $address = $rows['address'];

                        echo '<tr>
        <th scope="row">' . $id . '</th>
        <td>' . $name . '</td>
        <td>' . $email . '</td>
        <td>' . $gender . '</td>
        <td>' . $language . '</td>
        <td>' . $date_of_birth . '</td>
        <td>' . $address . '</td>
        <td>
        <button class="btn btn-primary"><a style="text-decoration: none;" class="text-light" href="update.php?updateid='.$id.'">UPDATE</a></button>
        <button class="btn btn-danger"><a style="text-decoration: none;" class="text-light" href="delete.php?deleteid='.$id.'">DELETE</a></button>
    </td>
    </tr>
    <tr>';
                    }
                }

                ?>
            </tbody>
            </thead>
    </div>
</body>

</html>