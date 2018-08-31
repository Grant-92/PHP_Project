<?php
session_start();


if(isset($_POST['submit'])){
    include 'dbh.php';

    $usernameIn = mysqli_real_escape_string($conn, $_POST['usernameIn']);
    $passwordIn = mysqli_real_escape_string($conn, $_POST['passwordIn']);


    $login_sql = "SELECT * FROM users WHERE username= '$usernameIn'";
    $login_result= mysqli_query($conn, $login_sql);
    $row_check= mysqli_num_rows($login_result);

    if($row_check < 1 ){
        header("Location: ../index.php?login=row");
        exit();
    }else{
        if($row = mysqli_fetch_assoc($login_result)){
            //check hashed password
            $hashed = password_verify($passwordIn, $row['pass']);

            if($hashed == false){
                header("Location: ../index.php?login=hashed");
                exit();
            }else{
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name1'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['email'] = $row['email'];

                $_SESSION['success_message'] = "logged In as " . $usernameIn;

                header("Location: ../index.php?login=success");
                exit();
            }
        }
    }




}else{
    header("Location: ../index.php?login=isset");
    exit();
}