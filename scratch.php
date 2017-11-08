<?php 
        /*
        if ($_SESSION['user_level'] == 'review') {
            echo "<div id=\"newreview\">";
            echo    "<div id=\"formbody\">";
            echo        "<h2>Post New Review</h2>";
            echo        "<form action=\"\" method=\"post\">";
            echo            "<input type=\"text\" name=\"gamename\" placeholder=\"Game Name\">";
            echo            "<input type=\"text\" name=\"gamerating\" placeholder=\"Game Rating\">";
            echo            "<input type=\"text\" name=\"gameimageurl\" placeholder=\"Image URL\">";
            echo            "<textarea name=\"gamereview\" placeholder=\"Game Review\"></textarea>";
            echo            "<input type=\"submit\" name=\"submit\">";
            echo        "</form>";
            echo    "</div>";
            echo "</div>";
        }

        if (isset($_POST['submit'])) {
            echo "<div id=\"regex\">";
             if (empty($_POST['gamename']) && empty($_POST['gamerating']) && empty($_POST['gameimageurl']) && empty($_POST['gamereview']) ) {
                echo "<h2>Fields Cant Be Empty</h2>";
             } elseif (!preg_match("/\w/", $_POST['gamename'])) {
                 echo "<h2>Only word characters please</h2>";
             } elseif (!preg_match("/\d|[1][0]/", $_POST['gamerating'])) {
                 echo "<h2>Numbers only, please</h2>";
             } elseif (!preg_match("/\w/", $_POST['gameimageurl'])) {
                echo "<h2>Insert valid link</h2>";
             } elseif (!preg_match("/\w/", $_POST['gamereview'])) {
                 echo "<h2>Insert valid review</h2>";
             } else {
                $addreview = "INSERT INTO
                  a6_reviews (
                    review_creation_date,
                    game_name,
                    game_review,
                    game_rating,
                    game_image_url,
                    user_id )
                
                VALUES (CURRENT_TIMESTAMP, '".$_POST['gamename']."', '".$_POST['gamereview']."', '".$_POST['gamerating']."', '".$_POST['gameimageurl']."', '".$_SESSION['user_id']."')";

                $conn->query($addreview);
                unset($_POST['submit']);
                header("Location: admin.php");
             }
            echo "</div>"; 
        }
        */
        ?>  




        <?php 
                while ($row = $tableresults->fetch_assoc()) { 
                echo "<div id=\"reviews\">";  
                echo "<img src=\"".$row['game_image_url']."\" alt=\"".$row['game_name']."\">"; 
                echo "<div id=\"reviewcontent\""; 
                echo "<ul>";
                echo   "<li>Game Name: ".$row['game_name']."</li>";
                echo    "<li>Game Rating: ".$row['game_rating']."/10"."</li>";
                echo    "<li>User ID: ".$row['user_id']."</li>";
                echo    "<li>Review #: ".$row['review_id']."</li>";
                echo    "<li>Created On: ".$row['review_creation_date']."</li>";
                echo "</ul>";
                echo "<p> Review:"."<br>".$row['game_review']."</p>";
                echo "<a href=\"review.php?story_id=".$row['review_id']."\">View Comments</a>";
            ?>
            <?php 
                if ($_SESSION['user_level'] == 'admin') {  
                echo "<a href=\"delete.php?story_id=".$row['review_id']."\"> | Delete Review</a>";
                }
            ?>
            <?php     
                echo "</div>";
                echo "</div>";
                }
            ?>