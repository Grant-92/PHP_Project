<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <title>ULT PC Register</title>
    <link rel='stylesheet' href='stylesheets/style.css'/>

    <!-- Links for semantic ui -->
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.min.css"/>
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                        <i class="address card icon"></i>Account
                    </div>
                </a>
                <a href=""> <!--TODO-->
                    <div class="item">
                        <i class="sign out alternate icon"></i>Log out
                    </div>
                </a>
            </div>
        </div>

</nav>

<br/>


<div class="ui container">
    <div class="ui top attached segment">
        <div class="ui top attached label">
            <h1 class="ui large header">Registration</h1>
        </div>

        <!-- TODO  Style below message -->

        <?php
        if(isset($_SESSION['success_message'])){
            echo '<div class= "ui green message">';
              echo $_SESSION['success_message'];
               echo '</div>';
        }elseif (isset($_SESSION['failure_message'])){
            echo '<div class= "ui red message">';
            echo $_SESSION['failure_message'];
            echo '</div>';
        }
        ?>



        <br/>
        <div class=" ui  raised segment">
            <h1 class="ui medium header ">Your details</h1><br/>

            <!-- Form runs signup.php -->
            <form method="post" action="scripts/signup.php" class="ui form"">
                <div class="field">
                    <label>UserName</label>
                    <input type="text" name="username" placeholder="Choose a unique UserName">
                </div>
                <div class="field">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Name" required>
                </div>
                <div class="field">
                    <label>Address</label>
                    <input type="text" name="address" placeholder="Address" required>
                </div>
                <div class="field">
                    <label>E-mail</label>
                    <input type="email" name="email" placeholder="Your E-Mail" required>
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Your Password" required>
                </div>
                <div class="field">
                    <label>Confirm Password</label>
                    <input type="password" name="password2" placeholder="Confirm Password" required>
                </div>


                <button type="submit" name="submit" class="ui  big inverted red button">Register</button>
                <br/>
                <br/>
            </form>
        </div>

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
    </div>
</body>
</html>