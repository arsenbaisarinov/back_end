
<div style="display: flex">
    <form action="update.php" method="POST" >
        <input type="text" name="user_id" style="display: none;" value="<?php echo $product['id']; ?>">
        <input type="text" name="user_name" value="<?php echo $product['name']; ?>">
        <input type="text" name="user_surname" value="<?php echo $product['surname']; ?>">
        <input type="text" name="user_email" value="<?php echo $product['email']; ?>">
        <button type="submit" style="cursor: pointer;background-color: blue; text-decoration: none;border: 1px solid white; border-radius: 10px; color: white; margin-left: 10px;">
            <p style="margin: 5px">UPDATE</p>
        </button> 
    </form>

    <form action="delete.php" method="POST" style="height: 20px;">
        <input type="text" value="<?php echo $product['id']; ?>" name="user_id" style="display: none;">

        <button type="submit" style="cursor: pointer;background-color: red; text-decoration: none;border: 1px solid white;border-radius: 10px;color: white;margin-left: 10px;">
            <p style="margin: 5px">DELETE</p>
        </button> 
    </form>
</div>