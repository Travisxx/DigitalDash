<?php  
session_start();
include ('serverlogin.php');
if(!isset($_SESSION['logged_in']) && !isset($_SESSION['userlevel'])) {
    header("Location: login.php");
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
        <li role="presentation" class="active"><a href="#info" aria-controls="info" role="tab" data-toggle="tab">Information</a></li>
        <li role="presentation"><a href="#orders" aria-controls="orders" role="tab" data-toggle="tab">Orders</a></li>
        <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>
    </ul>
      <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="info">
            <div class="adminmargin">
            <div class="pure-g">
                <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2" id="personalinformation">
                    <div class="lbox">
                        <h2>Current Info</h2>
                        <ul>
                            <?php  
                                $userstable = "SELECT * FROM users WHERE username='".$_SESSION['username']."' ";

                                $userstableresults = $conn->query($userstable);   
                            
                                while ($row = $userstableresults->fetch_assoc() ) {
                                    echo  "<li>First Name: ".$row['first_name']." </li>";
                                    echo  "<li>Last Name: ".$row['last_name']." </li>";
                                    echo  "<li>Email: ".$row['email']." </li>";
                                    echo  "<li>Username: ".$row['username']." </li>";
                                    echo  "<li>Address: <br>".$row['address_1']."<br>".$row['address_2']."<br>".$row['city']."".", "."".$row['state'].""." "."".$row['zipcode']." </li>";
                                   
                                }
                            ?>  
                        </ul>
                    </div>
                </div>
                <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2" id="editinformation">
                    <div class="newproduct">
                        <div class="lbox">
                            <div class="newproductheader">
                                <h2>Update Info</h2>
                            </div>
                            <div class="pure-u-1">
                                <form method="POST" action="clientprocess.php">
                                    <input type="text" name="email" placeholder="@email">
                                    <input type="text" name="firstname" placeholder="first name">
                                    <input type="text" name="lastname" placeholder="last name">
                                    <input type="text" name="address_1" placeholder="address 1">
                                    <input type="text" name="address_2" placeholder="address 2">
                                    <input type="text" name="city" placeholder="city">
                                    <input type="text" name="state" placeholder="state">
                                    <input type="text" name="zip" placeholder="zip">
                                    <input type="submit" name="update" value="submit">
                                </form>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="orders">
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
                $orderstable = "SELECT * FROM orders WHERE username='".$_SESSION['username']."' ";

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
                $reviewstable = "SELECT * FROM reviews WHERE user='".$_SESSION['username']."'";

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
    </div>
</div>  
</div>
<?php include ('footer.php'); ?>
</body> 
</html>
<?php $conn->close(); ?>