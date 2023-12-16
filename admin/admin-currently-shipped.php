<?php
 require_once "fetch-accepted.php";
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
    <link rel="stylesheet" href="../css/admin-home.css">
    <link rel="stylesheet" href="../css/admin-currently-shipped.css">
    <link rel="shortcut icon" href="../images/sle.svg" type="image/x-icon">
    <title>SureLinkExpress</title>
</head>
<body>
    <div class="section1">
        <div class="block1">
            <img src="../images/Logo.svg" alt="">
            <span>SureLinkExpress</span>
        </div>
        <div class="block2">
            <a href="">Clich here to go to website’s Home page</a>
            <span class="material-symbols-outlined">navigate_next</span>
        </div>
    </div>
    <div class="section2">
        <span class="admin">Admin Dashboard</span>
        <form action="admin-currently-shipped.php" method="GET">
            <input type="text" name="search" id="" placeholder="search...">
            <button type="submit"><span class="material-symbols-outlined">search</span></button>
        </form>
    </div>
    <div class="section3">
        <a href="" >Submitted applications</a>
        <a href="" class="submitted">Currently shipped</a>
        <a href="">Completed</a>
    </div>
    <div class="section4">
        <div>
            <img src="../images/circle.svg" alt="">
            <span>After generating a tracking code, the application will be moved to the “currently shipped section”</span>
        </div>
    </div>

    <?php if(count($result['res']) !== 0):?>


    <?php if(!isset($_GET['search'])) : ?>
    <div class="sectionSpecial">
        <?php foreach($result['res'] as $key => $value):?>
        <div class="special1-container">
            <div class="special-1">
                <div class="special-owner">
                    <span><?=$result['count']?>.</span>
                    <?= $value['sender-name'] ?>
                </div>
                <div class="special-name"><span>Item name:</span><?= $value['item-name'] ?></div>
            </div>
            <div class="special-1">
                <div class="special-owner">
                    <?= $value['receiver-name'] ?>
                </div>
                <div class="special-name"><span>Address:</span><?= $value['receiver-address'] ?></div>
            </div>
            <div class="tracking-id">
                <div><?= $value['tracking-code'] ?></div>
            </div>
            <div class="links">
                <?php if($value['held'] == "false"):?>
                <a href="update-location.php?id=<?= $value['tracking-code'] ?>">Update location</a>
                <a href="details.php?id=<?= $value['id'] ?>">Details</a>
                <a href="update-hold.php?id=<?= $value['id'] ?>" class="hold">Hold</a>
                <?php else: ?>
                <a href="update-unhold.php?id=<?= $value['id'] ?>" class="unhold">Unhold</a>
                <?php endif;?>
            </div>
            <div class="item-status">
                <span>Status:</span>
                <?php if($value['held'] !== "false"):?>
                <div>Held</div>
                <?php else: ?>
                <div class="green">shipping</div>
                <?php endif;?>
            </div>
            <?php $result['count'] += 1 ?>
        </div>
        <?php endforeach;?>
    </div>
    <div class="paginate">
        <?php if($result['check']>1): ?>
            <a href="admin-currently-shipped.php?num=<?= $result['check']-1 ?>" class="diff">Previous</a>
        <?php else: ?>
            <div class="previous diff">Previous</div>
        <?php endif; ?>
        <div class="numbers">
            <?php for($i = 1;$i<=$result['num'];$i++): ?>
                <a href="admin-currently-shipped.php?num=<?= $i; ?>" class="active <?= $i; ?>"><?= $i; ?></a>
            <?php endfor; ?>
        </div>
        <?php if($result['check'] < $result['num']):?>
            <a href="admin-currently-shipped.php?num=<?= $result['check']+1 ?>" class="diff">Next</a>
        <?php else: ?>
            <div class="next diff">Next</div>
        <?php endif;?>
    </div>
    <?php endif;?>

    <?php if(isset($_GET['search'])) : ?>
    <div class="sectionSpecial">
        <?php foreach($result['res'] as $key => $value):?>
        <div class="special1-container">
            <div class="special-1">
                <div class="special-owner">
                    <span><?=$result['count']?>.</span>
                    <?= $value['sender-name'] ?>
                </div>
                <div class="special-name"><span>Item name:</span><?= $value['item-name'] ?></div>
            </div>
            <div class="special-1">
                <div class="special-owner">
                    <?= $value['receiver-name'] ?>
                </div>
                <div class="special-name"><span>Address:</span><?= $value['receiver-address'] ?></div>
            </div>
            <div class="tracking-id">
                <div><?= $value['tracking-code'] ?></div>
            </div>
            <div class="links">
                <?php if($value['held'] == "false"):?>
                <a href="update-location.php?id=<?= $value['tracking-code'] ?>&search=<?= htmlentities($_GET['search']) ?>">Update location</a>
                <a href="details.php?id=<?= $value['id'] ?>&search=<?= htmlentities($_GET['search']) ?>">Details</a>
                <a href="update-hold.php?id=<?= $value['id'] ?>&search=<?= htmlentities($_GET['search']) ?>" class="hold">Hold</a>
                <?php else: ?>
                <a href="update-unhold.php?id=<?= $value['id'] ?>&search=<?= htmlentities($_GET['search']) ?>" class="unhold">Unhold</a>
                <?php endif;?>
            </div>
            <div class="item-status">
                <span>Status:</span>
                <?php if($value['held'] !== "false"):?>
                <div>Held</div>
                <?php else: ?>
                <div class="green">shipping</div>
                <?php endif;?>
            </div>
            <?php $result['count'] += 1 ?>
        </div>
        <?php endforeach;?>
    </div>
    <div class="paginate">
        <?php if($result['check']>1): ?>
            <a href="admin-currently-shipped.php?num=<?= $result['check']-1 ?>&search=<?= htmlentities($_GET['search']) ?>" class="diff">Previous</a>
        <?php else: ?>
            <div class="previous diff">Previous</div>
        <?php endif; ?>
        <div class="numbers">
            <?php for($i = 1;$i<=$result['num'];$i++): ?>
                <a href="admin-currently-shipped.php?num=<?= $i; ?>&search=<?= htmlentities($_GET['search']) ?>" class="active <?= $i; ?>"><?= $i; ?></a>
            <?php endfor; ?>
        </div>
        <?php if($result['check'] < $result['num']):?>
            <a href="admin-currently-shipped.php?num=<?= $result['check']+1 ?>&search=<?= htmlentities($_GET['search']) ?>" class="diff">Next</a>
        <?php else: ?>
            <div class="next diff">Next</div>
        <?php endif;?>
    </div>
    <?php endif;?>


    <?php endif;?>
</body>
</html>