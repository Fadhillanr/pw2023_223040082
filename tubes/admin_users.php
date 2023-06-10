<?php

@include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `users` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_users.php');
}

if(isset($_GET['search_user'])){

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php @include 'admin_header.php'; ?>

<section class="users">

   <h1 class="title">users account</h1>
  
   <section class="add-products">

   <form action="" method="GET" enctype="multipart/form-data">
      <h3>Searc Users</h3>
      <input type="text" class="box" required placeholder="enter user name" name="keyword" id="keyword">
   </form>

</section>

<div id="search-container">
   <div class="box-container">
      <?php
         $select_users = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
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
</div>
</section>

<script src="js/admin_script.js"></script>
<script>
   const keyword = document.getElementById('keyword');
   const searchContainer = document.getElementById('search-container');

   // Event ketika kita mengetikan keyword pencarian
   keyword.onkeyup = function(){
      fetch('ajax/admin_users.php?keyword=' + keyword.value)
         .then(response => response.text())
         .then(text => searchContainer.innerHTML = text)
   }
</script>
</body>
</html>