<pre>
<?php
include("connection.php");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    # code...

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $language = implode(" ", $_POST['language']);
    $date_of_birth = $_POST['date'];
    $address = $_POST['address'];

    $insertsql = "INSERT INTO `demo` (name,email,gender,langauge,date,address) VALUES ('$name','$email','$gender','$language','$date_of_birth','$address');";

    if (mysqli_query($con,$insertsql)) {
        header("Location: display.php");
    }else{
        echo "No Record Created";
    }
} else {
    echo "Record Not Created";
}
?>
</pre>