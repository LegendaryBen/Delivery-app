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
                    <a href="index.html">Home</a>
                    <a href="">Track</a>
                    <a href="">Ship Item</a>
                    <a href="">Services</a>
                    <a href="">About Us</a>
                    <a href="">Contact Us</a>
                </div>
                <div>
                    <div></div>
                    <span class="material-symbols-outlined ham">menu</span>
                </div>
            </div>
        </div>
        <form action="submit-details.php" method="POST" class="section2">
            <div class="form-details first">
                <div class="back-btn b1">
                    <span class="material-symbols-outlined">arrow_back</span>
                    <div>Ship an Item</div>
                </div>
                <div class="user-container">
                    <div class="info">
                        Sender’s details
                    </div>
                    <div class="user-input">
                        <div class="user-box">
                            <label>Sender’s name</label><br>
                            <input type="text" name="" id="" class="sender-name">
                        </div>
                        <div class="user-box">
                            <label>Address</label><br>
                            <input type="text" name="" id="" class="sender-add">
                        </div>
                    </div>
                    <div class="user-input">
                        <div class="user-box">
                            <label>Phone Number <span>(start with country code)</span></label><br>
                            <input type="text" name="" id="" class="sender-num">
                        </div>
                        <div class="user-box"></div>
                    </div>
                </div>
                <div class="user-container">
                    <div class="info">
                        Receiver’s details
                    </div>
                    <div class="user-input">
                        <div class="user-box">
                            <label>Receiver’s name</label><br>
                            <input type="text" name="" id="" class="receiver-name">
                        </div>
                        <div class="user-box">
                            <label>Pick-up address</label><br>
                            <input type="text" name="" id="" class="receiver-add">
                        </div>
                    </div>
                    <div class="user-input">
                        <div class="user-box">
                            <label>Phone Number <span>(start with country code)</span></label><br>
                            <input type="text" name="" id="" class="receiver-num">
                        </div>
                        <div class="user-box"></div>
                    </div>
                </div>
                <div class="proceed f1">
                    Proceed
                </div>
            </div>
            <div class="form-details second">
                <div class="back-btn b2">
                    <span class="material-symbols-outlined">arrow_back</span>
                    <div>Ship an Item</div>
                </div>
                <div class="user-container">
                    <div class="info">
                        Item details
                    </div>
                    <div class="user-input">
                        <div class="user-box">
                            <label>Item name</label><br>
                            <input type="text" name="" id="" class="item-name">
                        </div>
                        <div class="user-box">
                            <label>Weight(KG)</label><br>
                            <input type="text" name="" id="" class="item-weight">
                        </div>
                    </div>
                    <div class="user-input">
                        <div class="user-box">
                            <label>Value ($)</label><br>
                            <input type="text" name="" id="" placeholder="eg. $10500" class="item-val">
                        </div>
                        <div class="user-box"></div>
                    </div>
                </div>
                <div class="proceed s1">
                    Proceed
                </div>
            </div>
            <div class="form-details third">
                <div class="back-btn b3">
                    <span class="material-symbols-outlined">arrow_back</span>
                    <div>Ship an Item</div>
                </div>
                <div class="user-container">
                    <div class="info">
                        Sender’s details
                    </div>
                    <div class="user-input">
                        <div class="user-box">
                            <label>Sender’s name</label><br>
                            <input type="text" name="sender-name" id="" class="sender-name">
                        </div>
                        <div class="user-box">
                            <label>Address</label><br>
                            <input type="text" name="sender-address" id="" class="sender-add">
                        </div>
                    </div>
                    <div class="user-input">
                        <div class="user-box">
                            <label>Phone Number <span>(start with country code)</span></label><br>
                            <input type="text" name="sender-phone" id="" class="sender-num">
                        </div>
                        <div class="user-box"></div>
                    </div>
                </div>
                <div class="user-container">
                    <div class="info">
                        Receiver’s details
                    </div>
                    <div class="user-input">
                        <div class="user-box">
                            <label>Receiver’s name</label><br>
                            <input type="text" name="receiver-name" id="" class="receiver-name">
                        </div>
                        <div class="user-box">
                            <label>Pick-up address</label><br>
                            <input type="text" name="receiver-address" id="" class="receiver-add">
                        </div>
                    </div>
                    <div class="user-input">
                        <div class="user-box">
                            <label>Phone Number <span>(start with country code)</span></label><br>
                            <input type="text" name="receiver-phone" id="" class="receiver-num">
                        </div>
                        <div class="user-box"></div>
                    </div>
                </div>
                <div class="user-container">
                    <div class="info">
                        Item details
                    </div>
                    <div class="user-input">
                        <div class="user-box">
                            <label>Item name</label><br>
                            <input type="text" name="item-name" id="" class="item-name">
                        </div>
                        <div class="user-box">
                            <label>Weight(KG)</label><br>
                            <input type="text" name="item-weight" id="" class="item-weight">
                        </div>
                    </div>
                    <div class="user-input">
                        <div class="user-box">
                            <label>Value ($)</label><br>
                            <input type="text" name="item-value" id="" placeholder="eg. $10500" class="item-val">
                        </div>
                        <div class="user-box"></div>
                    </div>
                </div>
                <input type="submit" value="Submit order" class="submit proceed" name="submit">
            </div>
        </form>
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
                <a href="">Home</a>
            </div>
            <div class="sidemenu-change">
                <a href="">Track</a>
            </div>
            <div class="sidemenu-change">
                <a href="">Ship Item</a>
            </div>
            <div class="sidemenu-change">
                <a href="">Services</a>
            </div>
            <div class="sidemenu-change">
                <a href="">About us</a>
            </div>
            <div class="sidemenu-change">
                <a href="">Contact us</a>
            </div>
        </div>

        <?php if(isset($_GET['error'])) :?>
            <div class="error">
                <div>
                    <?php echo htmlentities($_GET['error']) ?>
                </div>
                <span class="material-symbols-outlined">close</span>
            </div>
        <?php endif ?>

        <script src="scripts/ship.js"></script>

        <?php if(isset($_GET['error'])) :?>
            <script src="scripts/error.js"></script>
        <?php endif ?>

    </div>
</body>
</html>