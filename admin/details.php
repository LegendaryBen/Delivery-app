<?php
    require_once 'fetch-details.php';
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
    <link rel="stylesheet" href="../css/ship.css">
    <link rel="shortcut icon" href="images/sle.svg" type="image/x-icon">
    <title>SureLinkExpress</title> 
</head>
<body>
    <form action="" class="section2 reset">
        <div class="form-details third">
            <div class="user-container">
                <div class="info">
                    Sender’s details
                </div>
                <div class="user-input">
                    <div class="user-box">
                        <label>Sender’s name</label><br>
                        <div class="inputspecial"><?= $result[0]['sender-name']  ?></div>
                    </div>
                    <div class="user-box">
                        <label>Address</label><br>
                        <div class="inputspecial"><?= $result[0]['sender-address']  ?></div>
                    </div>
                </div>
                <div class="user-input">
                    <div class="user-box">
                        <label>Phone Number <span>(start with country code)</span></label><br>
                        <div class="inputspecial"><?= $result[0]['sender-phone']  ?></div>
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
                        <div class="inputspecial"><?= $result[0]['receiver-name'] ?></div>
                    </div>
                    <div class="user-box">
                        <label>Pick-up address</label><br>
                        <div class="inputspecial"><?= $result[0]['receiver-address'] ?></div>
                    </div>
                </div>
                <div class="user-input">
                    <div class="user-box">
                        <label>Phone Number <span>(start with country code)</span></label><br>
                        <div class="inputspecial"><?= $result[0]['receiver-phone']  ?></div>
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
                        <div class="inputspecial"><?= $result[0]['item-name']?></div>
                    </div>
                    <div class="user-box">
                        <label>Weight(KG)</label><br>
                        <div class="inputspecial"><?= $result[0]['item-weight']  ?></div>
                    </div>
                </div>
                <div class="user-input">
                    <div class="user-box">
                        <label>Value ($)</label><br>
                        <div class="inputspecial"><?= $result[0]['item-value']  ?></div>
                    </div>
                    <div class="user-box"></div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>