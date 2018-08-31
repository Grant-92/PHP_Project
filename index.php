<?php
session_start();
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

            <a href="about.php">
                <div class="item">
                    <i class="question circle icon"></i>About
                </div>
            </a>

            <div class="right menu">
                <a href=""> <!--TODO-->
                    <div class="item">
                        <i class="address card icon"></i>
                        <?php
                        if (isset($_SESSION['username'])) {
                            $_SESSION['username'];
                        } else {
                            echo "Account";
                        } ?>
                    </div>
                </a>


                <?php //show/hide depending on signin or not
                if (isset($_SESSION['username'])) {
                    //cart
                    include 'template/dropdown.php';

                    //loggout btn
                    echo '<form action="scripts/logout.php" method="post"> 
                            <div class="item">
                                <i class="sign out alternate icon"></i><button type="submit" name="submit">Log Out</button>
                            </div>
                          </form>';
                } else {
                    echo " ";
                }

                ?>

            </div>
        </div>

</nav>

<div class="ui container">

    <?php //Display messages
    if (isset($_SESSION['success_message'])) {
        echo "<div class= 'ui green message''>";
        echo $_SESSION['success_message'];
        echo "</div>";
    } elseif (isset($_SESSION['failure_message'])) {
        echo "<div class= 'ui red message''>";
        echo $_SESSION['failure_message'];
        echo "</div>";
    }
    ?>

    <?php //show/hide depending on signin or not
                if (isset($_SESSION['username'])) { }else{ ?>

    <section id="homesec" class="ui raised center aligned middle aligned two column grid segment">
        <!-- col 1 content -->
        <div class="column">
            <h1 class="ui huge header ">Ultimate PC</h1>
            <p>Welcome to Ultimate PC</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum. </p>
        </div>
        <!-- col 2 content -->
        <div class="column">
            <div class=" ui raised segment">
                <h1 class="ui medium header ">Sign In</h1>
                <form method="post" action="scripts/login.php" class="ui form">   <!-- TODO Adjust this when needed -->
                    <div class="field">
                        <label>UserName</label>
                        <input type="text" name="usernameIn" placeholder="Your UserName" required>
                    </div>
                    <div class="field">
                        <label>Password</label>
                        <input type="password" name="passwordIn" placeholder="Your Password" required>
                    </div>
                    <button type="submit" name="submit" class="ui big inverted red button">Sign-In</button>
                    <br/>
                    <br/>
                </form>

                <a href="reg.php" class="ui large inverted blue button">Register</a>

            </div>
        </div>
    </section>
    <?php } ?>
</div>
<div class="ui container">
    <div class="ui top attached segment">
        <div class='ui top attached label'>
            <h1 class="ui large header">Products</h1>
        </div>


        <div class="ui cards">

            <!--generate cards from DB-->
            <?php include 'scripts/product_display.php'; ?>


            <div class="ui container">
                <footer>
                    <div class="container">
                        <div class="ui raised three column grid segment">
                            <div class="column">
                                <div class="ui  raised segment">
                                    <div class="ui red ribbon label">
                                        <h3>Address</h3>
                                    </div>
                                    <p>Cork Road,</p>
                                    <p>Waterford City</p>
                                    <p>Co.Waterford</p>
                                    <p>Ireland</p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="ui  raised segment">
                                    <div class="ui blue ribbon label">
                                        <h3>Contact</h3>
                                    </div>
                                    <br/>
                                    <br/>
                                    <p><strong>Phone:</strong> 088-55588833</p>
                                    <p><strong>General Email:</strong> Info@Example.com</p>
                                    <p><strong>Site Email:</strong> maintenance@Example.com </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="ui  raised segment">
                                    <div class="ui green ribbon label">
                                        <h3>Connect with us</h3>
                                    </div>
                                    <br/>
                                    <br/>
                                    <a href="https://github.com/">
                                        <i class="github icon">Github</i><br/>
                                    </a>
                                    <a href="https://www.facebook.com/">
                                        <i class="facebook icon">Facebook</i><br/>
                                    </a>
                                    <a href="https://twitter.com/?lang=en">
                                        <i class="twitter icon">Twitter</i><br/>
                                    </a>

                                    <a href="https://www.reddit.com/">
                                        <i class="reddit icon">Reddit</i>
                                    </a>


                                </div>

                            </div>
                        </div>
                    </div>
                </footer>

            </div>

            <script>
                function openWin() {
                    window.open("product_page.php");
                }
            </script>


</body>

</html>

