<?php
include 'dbh.php';

$sql = "SELECT * FROM products";
$product_result = $conn->query($sql);
while ($row = $product_result->fetch_assoc()) {
    echo "<div class='ui  centered card'>
                <div class='image'>
                
                    <img src='$row[pimage]'>
                </div>
                <div class='content'>
                    <div class='header'>
                        $row[pname]
                    </div>
                    <div class='price'>
                       €$row[pprice]
                    </div>
                    <div class='description'>
                        $row[pdescription]
                    </div>
                </div>
                <div class='extra content'>
                
                    <div class='ui two buttons'>
                        <a href='product_page.php?id=$row[idproducts]&name=$row[pname]&price=$row[pprice]&des=$row[pdescription]&img=$row[pimage]' target='_blank'> <button type='submit' name='view' class='ui inverted green button'  >View product</button></a>
                        
                        <form action='scripts/additem.php'>
                        <button name='add' class='ui inverted red button' value='$row[idproducts]'>Add</button>
                        </form>
                    </div>
                </div>
            </div>";
};
