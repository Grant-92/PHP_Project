<?php

include 'scripts/dbh.php';

$total = 0;
$_GET['check'] = true;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Checck out</title>
    <link rel='stylesheet' href='/stylesheets/style.css'/>

    <!-- Links for semantic ui -->
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.min.js"></script>
</head>

<body>
<div class="ui  container">
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
    <div class="ui top attached segment">
        <div class="ui top attached label">
            <h1 class="ui large header">Your cart</h1>

        </div>

        <div class='ui middle aligned divided list'>
            <?php
            $sql = "SELECT * FROM cart";
            $product_result = $conn->query($sql);

            while ($row = $product_result->fetch_assoc()) {
//output
                echo " 
    <div class='item'>
        <div class='right floated content'>
        <form action='scripts/remove.php'>
            <button name='cremove' value='$row[idproducts]' class='ui inverted red button'>Remove</button>
            </form>
        </div>
        <img class='ui avatar image' src='$row[pimage]'>
        <div class='content'>
            $row[pname]<br/>€ $row[pprice]
        </div>
    <hr/>";
                $total += $row['pprice'];

            };
            echo "Total Cost:   €" . $total . "<br/><br/>";
            ?>

            <form action="scripts/emptycart.php">
            <button class='ui inverted blue button'>Confirm</button>
            </form>



            <!-- TODO Add TOTAL and CCOnfirm button also  make remove buttons work -->
        </div>
    </div>

</body>
</html>



