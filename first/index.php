<?php
require_once('connect.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Information about Users</title>
    </head>
    <body>
        <header style="padding: 10px 0;background-color: blue">
            <div>
                <p style="text-align: center; color: white;font-size: 40px; font-weight: bold">CHELSEA ONE LOVE</p>
            </div>
        </header>
        <form action="add.php" method="POST" enctype="multipart/form-data" style="display: flex; justify-content: center; margin-top: 30px;">
            <div class="form-group">
                <input name="name" type="text" class="form-control" placeholder="Name" style="margin-left: 10px;">
            </div>		
            <div class="form-group">
                <input name="surname" type="text" class="form-control" placeholder="Surname" style="margin-left: 10px;">
            </div>
            <div class="form-group">
                <input name="email" type="text" class="form-control" placeholder="Email" style="margin-left: 10px;">
            </div>
            <button type="submit" style="cursor: pointer;background-color: green; color: white; border: 0; border-radius: 10px;padding: 0px 20px;margin-left: 30px;">ADD</button>
            </div>
        </form>

        <div class="items-list" style="margin-top: 30px;">
            <?php 
                $request = "SELECT * FROM list_of_users";
                $result = $db->query($request);
                $products = $result->fetchAll(PDO::FETCH_ASSOC);

                foreach ($products as $product) {
                    echo '<div class="items-list" style="display: flex;justify-content: space-around; text-align: center;">';
                    include 'list.php';
                    echo "</div>";
                }
            ?>
        </div>
    </body>
</html>
