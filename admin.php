<?php  
session_start();
include ('serverlogin.php');
if(!isset($_SESSION['logged_in']) && !isset($_SESSION['userlevel'])) {
    header("Location: login.php");
} elseif (isset($_SESSION['logged_in']) && isset($_SESSION['userlevel'])) {
    if ( $_SESSION['userlevel'] === 'user') {
           header("Location: client.php");
    }
}

?> 

<!DOCTYPE html> 
<html> 
<head> 

<?php include 'meta-links.php'; ?>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head> 
<body> 
<?php include 'header.php'; ?> 

<div class="adminbody">
<div class="container">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified" role="tablist">
        <li role="presentation" class="active"><a href="#orders" aria-controls="orders" role="tab" data-toggle="tab">Orders</a></li>
        <li role="presentation"><a href="#products" aria-controls="products" role="tab" data-toggle="tab">Products</a></li>
        <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>
        <li role="presentation"><a href="#users" aria-controls="users" role="tab" data-toggle="tab">Users</a></li>
    </ul>
      <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="orders">
            <div class="adminmargin">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Cart ID</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>User type</th>
                        <th>Username</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
            <?php  
                $orderstable = "SELECT * FROM orders";

                $orderstableresults = $conn->query($orderstable);   
            
                while ($row = $orderstableresults->fetch_assoc() ) {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['cart_id']."</td>";
                    echo "<td>".$row['qty']."</td>";
                    echo "<td>".$row['total']."</td>";
                    echo "<td>".$row['usertype']."</td>";
                    echo "<td>".$row['username']."</td>";
                    echo "<td>".$row['first_name']."</td>";
                    echo "<td>".$row['last_name']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "</tr>";
                }
            ?>     
                </tbody>
            </table>   
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="products">
            <div class="newproduct">
               <div class="pure-g">

                    <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                        <div class="lbox">
                            <div class="newproductheader">
                                <h2>New Product</h2>
                            </div>
                            <div class="pure-u-1">
                                <form method="POST" action="adminprocess.php">
                                    <input type="text" name="sku" placeholder="sku">
                                    <input type="text" name="device" placeholder="device">
                                    <input type="text" name="productname" placeholder="product name">
                                    <input type="text" name="description" placeholder="description">
                                    <input type="text" name="category" placeholder="category">
                                    <input type="text" name="qty" placeholder="qty">
                                    <input type="text" name="cost" placeholder="cost">
                                    <input type="text" name="price" placeholder="price">
                                    <input type="text" name="image" placeholder="image url">
                                    <input type="text" name="size" placeholder="size">
                                    <input type="text" name="weight" placeholder="weight">
                                    <input type="text" name="color" placeholder="color">
                                    <input type="submit" name="addnew">
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                        <div class="lbox">
                            <div class="newproductheader">
                                <h2>Edit - Select SKU</h2>
                            </div>
                            <div class="pure-u-1">
                                <form method="POST" action="adminprocess.php">
                                    <select name="sku">
                                    <?php 
                                    
                                    $table = "SELECT SKU FROM products";
                                    $tableresults = $conn->query($table);   
                                    while ($row = $tableresults->fetch_assoc() ) {
                                    echo "<option value=\"".$row['SKU']."\">".$row['SKU']."</option>";
                                    }
                                    ?>
                                    </select>
                                    <input type="text" name="device" placeholder="device">
                                    <input type="text" name="productname" placeholder="product name">
                                    <input type="text" name="description" placeholder="description">
                                    <input type="text" name="category" placeholder="category">
                                    <input type="text" name="qty" placeholder="qty">
                                    <input type="text" name="cost" placeholder="cost">
                                    <input type="text" name="price" placeholder="price">
                                    <input type="text" name="image" placeholder="image url">
                                    <input type="text" name="size" placeholder="size">
                                    <input type="text" name="weight" placeholder="weight">
                                    <input type="text" name="color" placeholder="color">
                                    <input type="submit" name="edit" value="submit">
                                </form>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
            <div class="adminmargin">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>Item#</th>
                    <th>Rating</th>
                    <th>Image</th>
                    <th>Sku</th>
                    <th>Device</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Qty</th>
                    <th>Cost</th>
                    <th>Price</th>
                    <th>Color</th>
                    <th>Size</th>
                    <th>Weight</th>
                    </tr>
                </thead>
                <tbody>
                <?php  
                $table = "SELECT * FROM products";

                $tableresults = $conn->query($table);   
                while ($row = $tableresults->fetch_assoc() ) {
                    echo "<tr>";
                    echo "<td>".$row['Item_Number']."</td>";
                    echo "<td>".$row['rating']."</td>";
                    echo "<td><div class=\"cartimagecontainer\">
                            <div class=\"cartimage\">
                            <img src=\"".$row['Product_Image']."\">
                            </div>
                            </div>
                            </td>";
                    echo "<td>".$row['SKU']."</td>";
                    echo "<td>".$row['device']."</td>";
                    echo "<td>".$row['Category']."</td>";
                    echo "<td>".$row['Product_Name']."</td>";
                    echo "<td>".$row['Description']."</td>";
                    echo "<td>".$row['Stock']."</td>";
                    echo "<td>".$row['Cost']."</td>";
                    echo "<td>".$row['price']."</td>";
                    echo "<td>".$row['Color']."</td>";
                    echo "<td>".$row['Size']."</td>";
                    echo "<td>".$row['Weight']."</td>";
                    echo "</tr>";
                }  
                ?>
                </tbody>
            </table> 
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="reviews">
            <div class="adminmargin">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Review ID</th>
                        <th>Review Date</th>
                        <th>SKU</th>
                        <th>Rating</th>
                        <th>Review</th>
                        <th>User</th>
                    </tr>
                </thead>
                <tbody>
            <?php  
                $reviewstable = "SELECT * FROM reviews";

                $reviewstableresults = $conn->query($reviewstable);   
            
                while ($row = $reviewstableresults->fetch_assoc() ) {
                    echo "<tr>";
                    echo "<td>".$row['review_id']."</td>";
                    echo "<td>".$row['review_date']."</td>";
                    echo "<td>".$row['sku']."</td>";
                    echo "<td>".$row['rating']."</td>";
                    echo "<td>".$row['review']."</td>";
                    echo "<td>".$row['user']."</td>";
                    echo "</tr>";
                }
            ?>     
                </tbody>
            </table>   
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="users">
            <div class="adminmargin">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>User Level</th>
                                <th>Address 1</th>
                                <th>Address 2</th>
                                <th>City </th>
                                <th>State</th>
                                <th>Zip</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php  
                        $table = "SELECT * FROM users";

                        $tableresults = $conn->query($table);   
                    
                        while ($row = $tableresults->fetch_assoc() ) {
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['first_name']."</td>";
                            echo "<td>".$row['last_name']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['username']."</td>";
                            echo "<td>".$row['userlevel']."</td>";
                            echo "<td>".$row['address_1']."</td>";
                            echo "<td>".$row['address_2']."</td>";
                            echo "<td>".$row['city']."</td>";
                            echo "<td>".$row['state']."</td>";
                            echo "<td>".$row['zipcode']."</td>";
                            echo "</tr>";
                        }
                    ?>     
                        </tbody>
                    </table>
                </div>   
            </div>
        </div>
    </div>
</div>  
</div>
<?php include ('footer.php'); ?>
</body> 
</html>
<?php $conn->close(); ?>