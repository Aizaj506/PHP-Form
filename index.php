<?php
$insert = false;
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // echo "Connected successfully to the database.";  

    $name = $_POST['name'];

    $age = $_POST['age'];

    $gender = $_POST['gender'];

    $email = $_POST['email'];

    $phone = $_POST['phone'];

    $address = $_POST['address'];

    $query = $_POST['query'];


    $sql = "INSERT INTO `m&nm_trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `address`, `query`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$address', '$query', current_timestamp())";

    if ($con->query($sql) === TRUE) {
        // echo "New record created successfully";
        $insert = true;
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}


?>

<!-- HTML Code Start Here... -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Welcome To Mumbai & Navi Mumbai Trip.</h1>
        <p>Enter your details and submit the form to confirm your participation in the trip.</p>

        <?php
        if ($insert == true) {
            echo "<p class='submitMsg'>Thanks for submmiting your form. We are happy to see you joining for the M&NM Trip.</p>";
        }
        ?>

        <form action="index.php" method="post">

            <input type="text" id="name" name="name" placeholder="Enter Your Name">

            <input type="text" id="age" name="age" placeholder="Enter Your Age">

            <input type="text" id="gender" name="gender" placeholder="Enter Your Gender">

            <input type="email" id="email" name="email" placeholder="Enter Your Email">


            <input type="phone" id="phone" name="phone" placeholder="Enter Your Phone">


            <input type="text" id="address" name="address" placeholder="Enter Your Address">

            <textarea name="query" id="query" placeholder="Enter Your Queries..."></textarea>


            <button type="submit" class="btn" value="Submit">Submit</button>
        </form>

    </div>

    <!-- INSERT INTO `trip` (`srno`, `name`, `age`, `gender`, `email`, `phone`, `address`, `desc`, `dt`) VALUES ('1', 'Aizaj', '22', 'Male', 'aizaj64@gmail.com', '9833489185', '175,Yadav Nagar', 'No Queries', current_timestamp()); -->
</body>

</html>