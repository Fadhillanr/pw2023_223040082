<?php

    require('../config.php');

    $keyword = $_GET['keyword'];

?>
<div class="box-container">
    <?php
        $select_users = mysqli_query($conn, "SELECT * FROM `users`
        WHERE name LIKE '%$keyword%' ") or die('query failed');
        if(mysqli_num_rows($select_users) > 0){
        while($fetch_users = mysqli_fetch_assoc($select_users)){
    ?>
    <div class="box">
        <p>user id : <span><?php echo $fetch_users['id']; ?></span></p>
        <p>username : <span><?php echo $fetch_users['name']; ?></span></p>
        <p>email : <span><?php echo $fetch_users['email']; ?></span></p>
        <p>user type : <span style="color:<?php if($fetch_users['user_type'] == 'admin'){ echo 'var(--orange)'; }; ?>"><?php echo $fetch_users['user_type']; ?></span></p>
        <a href="admin_users.php?delete=<?php echo $fetch_users['id']; ?>" onclick="return confirm('delete this user?');" class="delete-btn">delete</a>
    </div>
    <?php
        }
    }
    ?>
</div>