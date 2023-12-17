<?php
    require_once "get-locations.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="css/ship.css">
    <link rel="stylesheet" href="css/success.css">
    <link rel="stylesheet" href="css/track.css">
    <link rel="shortcut icon" href="images/sle.svg" type="image/x-icon">
    <title>SureLinkExpress</title>
</head>
<body>
    <div class="body-container">
        <div class="section1">
            <div class="header">
                <div class="logo">
                    <img src="images/logo2.png" alt="">
                    <span>SureLinkExpress</span>
                </div>
                <div class="links">
                    <a href="index.php">Home</a>
                    <a href="index.php#track">Track</a>
                    <a href="ship.php">Ship Item</a>
                    <a href="index.php#service">Services</a>
                    <a href="index.php#about">About Us</a>
                    <a href="mailto:surelinkexpres@gmail.com">Contact Us</a>
                </div>
                <div>
                    <div></div>
                    <span class="material-symbols-outlined ham">menu</span>
                </div>
            </div>
        </div>
        <?php if(count($result['res1']) == 0): ?>
        <div class="success-img">
            <img src="images/error.jpg" alt="">
        </div>
        <div class="thanks">
            No Record!
        </div>
        <div class="thanks-msg">
            We did not find any item with that tracking ID on our database
        </div>
        <div class="go-home">
            <a href="index.php">Go back</a>
        </div>
        <?php else : ?>
        <div class="track-history">
            <div class="track-number">
                <img src="images/lolly.svg" alt="">
                <div class="number">
                    <?= $result['res1'][0]['tracking-code'] ?>
                </div>
            </div>
            <div class="item-name">
                Item name
            </div>
            <div class="name-block">
            <?= $result['res1'][0]['item-name'] ?>
            </div>
            <a class="arrow" href="index.php">
                <span class="material-symbols-outlined">arrow_back</span>
                <div>
                    Tracking history
                </div>
            </a>
            <?php foreach($result['res2'] as $key => $value) :?>

            <?php if($value['held'] == "false"): ?>
                <div class="tracks">
                    <div class="track-route">
                        <?= $value['shipping-title'] ?>
                    </div>
                    <div class="track-city">
                        <?= $value['location'] ?>
                    </div>
                    <div class="track-time">
                        <?= $value['date'] ?> at <?= $value['time'] ?>
                    </div>
                    <?php if($value['current'] == "true"): ?>
                        <div class="track-status"></div>
                    <?php endif; ?>
                </div>
            <?php else: ?>

                <div class="tracks">
                    <div class="track-route held">
                        <?= $value['shipping-title'] ?>
                    </div>
                    <div class="track-city">
                        <?= $value['location'] ?>
                    </div>
                    <div class="track-time track-message">
                        <?= $value['message'] ?> 
                    </div>
                    <div class="track-time">
                        <?= $value['date'] ?> at <?= $value['time'] ?>
                    </div>
                    <?php if($value['current'] == "true"): ?>
                        <div class="track-status"></div>
                    <?php endif; ?>
                </div>
            <?php endif ; ?>

            <?php endforeach; ?>

            <?php if($result['res1'][0]['status'] == "complete"): ?>
            <a class="pick-up" href="">
                Availaible for pick-up
            </a>
            <?php else :?>
            <div class="pick-up dull">
                Availaible for pick-up
            </div>
            <?php endif;?>
        </div>
    </div>
    <?php endif; ?>
    <div class="sidemenu">
        <div class="head">
            <div class="head-logo">
                <img src="images/sle.svg" alt="">
                <div class="exp">
                    SureLinkExpress
                </div>
            </div>
            <span class="material-symbols-outlined cancle">close</span>
        </div>
        <div class="sidemenu-change">
            <a href="index.php">Home</a>
        </div>
        <div class="sidemenu-change">
            <a href="index.php#track">Track</a>
        </div>
        <div class="sidemenu-change">
            <a href="ship.php">Ship Item</a>
        </div>
        <div class="sidemenu-change">
            <a href="index.php#service">Services</a>
        </div>
        <div class="sidemenu-change">
            <a href="index.php#about">About us</a>
        </div>
        <div class="sidemenu-change">
            <a href="mailto:surelinkexpres@gmail.com">Contact Us</a>
        </div>
    </div>
    <script src="scripts/track.js"></script>
</body>
</html>