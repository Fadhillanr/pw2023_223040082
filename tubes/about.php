<<<<<<< HEAD
<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="index.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Blooming is proud to offer beautiful flowers that are always 100% arranged and delivered by expert local florists! We make it easy to order flowers online and get flower delivery right to your loved one’s door. </p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>Blooming has the best local flower delivery because we work with over 10,000 local florists all around the country to bring you local flower delivery. So, know that every bouquet you order from us supports a small business near you or your loved one. We couldn’t do it without our amazing florists!</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>From bouquets to stand-alone wreaths, from flower delivery to sprucing up event venues, The Flower Farm has the experience and expertise to make it happen.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.jpeg" alt="">
            <p>baru pertama kali order dsini direkomendasiin temen,bunganya bagus bgt sesuai keinginan wangi jugaa  adminnya fast respon pokoknya pelayanan nya mantul mantap betul bakal repurchase sih ini👍🏻🤩🤩</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>olga fryadis</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.jpg" alt="">
            <p>udah sering order bunga disinii, soalnya bungannya cantik dan fresh ngga layu😻😻, trus adminnya pelayanan nya prima bgt jempoll👍🏻👍🏻👍🏻, jangann lupa order bungaa disinii yaa😻🤚🏻🤚🏻</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>lahya juwita</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.jpeg" alt="">
            <p>kemarin beliin bunga buat pacarku di website ini dan akhirnya beli bunga mawar, ternyata dia sukaa sama bunganya. katanya cantik dan fresh. terima kasih, next bakal beli bunga disini lagi deh👍🏻</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>rizky dipa</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.jpeg" alt="">
            <p>Kemaren beli bunga disini, awalnya ragu tapi pas udh nyoba beli malah keterusan beli disini, apalagi pacarku suka banget sama bunga di toko ini ditambah websitenya gampang, thank you 😘🤡</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>imam santoso</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.jpeg" alt="">
            <p>jujurly worth it banget beli bunga disini, pengeriman nyaa terjamin, respon penjual jugaaa cepett bangettt, di jaminnn deh, bungaa nya juga wangi banget, bakal beli disini lagi sih pasti, worth to buy deh pokoknya!! 😍🫶🏻</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>putri dwi</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.jpeg" alt="">
            <p>aku pesen bucket untuk graduation temenku dan ternyata dia sukaa!! 🥰 emang secantik dan se rapi itu sih bucketnya. udah gitu bunganya fresh banget dan wangii 🤩 thanks seller nanti aku order lagii 👍🏻</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>natania putri</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
=======
<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="index.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odit voluptatum alias sed est in magni nihil nisi deleniti nostrum.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odit voluptatum alias sed est in magni nihil nisi deleniti nostrum.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odit voluptatum alias sed est in magni nihil nisi deleniti nostrum.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.jpeg" alt="">
            <p>baru pertama kali order dsini direkomendasiin temen,bunganya bagus bgt sesuai keinginan wangi jugaa  adminnya fast respon pokoknya pelayanan nya mantul mantap betul bakal repurchase sih ini👍🏻🤩🤩</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>olga fryadis</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.jpg" alt="">
            <p>udah sering order bunga disinii, soalnya bungannya cantik dan fresh ngga layu😻😻, trus adminnya pelayanan nya prima bgt jempoll👍🏻👍🏻👍🏻, jangann lupa order bungaa disinii yaa😻🤚🏻🤚🏻</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>lahya juwita</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.jpeg" alt="">
            <p>kemarin beliin bunga buat pacarku di website ini dan akhirnya beli bunga mawar, ternyata dia sukaa sama bunganya. katanya cantik dan fresh. terima kasih, next bakal beli bunga disini lagi deh👍🏻</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>rizky dipa</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.jpeg" alt="">
            <p>Kemaren beli bunga disini, awalnya ragu tapi pas udh nyoba beli malah keterusan beli disini, apalagi pacarku suka banget sama bunga di toko ini ditambah websitenya gampang, thank you 😘🤡</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>imam santoso</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.jpeg" alt="">
            <p>jujurly worth it banget beli bunga disini, pengeriman nyaa terjamin, respon penjual jugaaa cepett bangettt, di jaminnn deh, bungaa nya juga wangi banget, bakal beli disini lagi sih pasti, worth to buy deh pokoknya!! 😍🫶🏻</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>putri dwi</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.jpeg" alt="">
            <p>aku pesen bucket untuk graduation temenku dan ternyata dia sukaa!! 🥰 emang secantik dan se rapi itu sih bucketnya. udah gitu bunganya fresh banget dan wangii 🤩 thanks seller nanti aku order lagii 👍🏻</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>natania putri</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
>>>>>>> f327e519a49df2bfd446fb810f73f9a43233d5f2
</html>