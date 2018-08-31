<?php


if (isset($_POST['submit'])) {
    include_once 'dbh.php';

    $username = mysqli_escape_string($conn, $_POST['username']);
    $name = mysqli_escape_string($conn, $_POST['name']);
    $address = mysqli_escape_string($conn, $_POST['address']);
    $email = mysqli_escape_string($conn, $_POST['email']);
    $password = mysqli_escape_string($conn, $_POST['password']);



    // cccheck if username is already in db
    $query = "SELECT * FROM users WHERE username='$username'";
    $res = mysqli_query($conn, $query);
    $rescheck = mysqli_num_rows($res);

    //if the query returns a row or multiple
    if ($rescheck > 0) {
        $_SESSION['failure_message'] = "Username: $username Taken";
        header("Location: ../reg.php?reg=usernamesame");
        exit();

    } else {

        //password hashing
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);


        //write user too db
        $sql_insert = "INSERT INTO users (username, name1, address, email, pass) VALUES ('$username','$name','$address','$email','$hashed_password')";
        $results = mysqli_query($conn, $sql_insert);
        $_SESSION['success_message'] = "$username registration success";
        header("Location: ../reg.php?reg=success");
        exit();
    }

} else {
    header("Location: ../reg.php?reg=Error");
    exit();
}