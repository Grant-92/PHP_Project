<?php
include 'scripts/dbh.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ultimate PC</title>
    <link rel='stylesheet' href='stylesheets/style.css'/>


    <!-- Cdn Links for semantic ui -->
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.min.js"></script>

</head>
<body>

<nav>
    <div class="ui container">
        <div class="ui  menu">

            <a href="index.php">
                <div class="item">
                    <i class="sign in alternate icon"></i>Welcome\Sign In
                </div>
            </a>

            <a href="reg.php">
                <div class="item">
                    <i class="sign in alternate icon"></i>Register
                </div>
            </a>

            <a href="/about">
                <div class="item">
                    <i class="question circle icon"></i>About
                </div>
            </a>

            <div class="right menu">
                <a href=""> <!--TODO-->
                    <div class="item">
                        <i class="address card icon"></i>
                    </div>
                </a>
                <form action="scripts/logout.php" method="post">
                    <div class="item">
                        <i class="sign out alternate icon"></i>
                        <button type="submit" name="submit">Log Out</button>
                    </div>
                </form>

            </div>
        </div>

</nav>
<div class="ui container">
    <section id="homesec" class="ui raised center aligned middle aligned two column grid segment">
        <!-- col 1 content -->
        <div class="column">
            <h1 class="ui huge header "><?= $_GET['name'] ?></h1>
            <p><?= $_GET['des'] ?>
            </p>

        </div>
        <!-- col 2 content -->
        <div class="column">
            <div class=" ui raised segment">
                <h1> €<?= $_GET['price'] ?></h1>
                <div class="ui fluid image">
                <img src= <?= $_GET['img'] ?> >
            </div>
            </div>
        </div>

</div>

