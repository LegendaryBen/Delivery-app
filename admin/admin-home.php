<?php
    require_once "./fetch-users.php";
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
            <a href="../index.php">Clich here to go to website’s Home page</a>
            <span class="material-symbols-outlined">navigate_next</span>
        </div>
    </div>
    <div class="section2">
        <span class="admin">Admin Dashboard</span>
        <form action="admin-home.php" method="GET">
            <input type="text" name="search" id="" placeholder="search...">
            <button type="submit"><span class="material-symbols-outlined">search</span></button>
        </form>
    </div>
    <div class="section3">
        <a href="admin-home.php" class="submitted">Submitted applications</a>
        <a href="admin-currently-shipped.php">Currently shipped</a>
        <a href="admin-completed.php">Completed</a>
    </div>
    <div class="section4">
        <div>
            <img src="../images/circle.svg" alt="">
            <span>After generating a tracking code, the application will be moved to the “currently shipped section”</span>
        </div>
    </div>

    <?php if(count($result['res']) !== 0):?>
    
    <?php if(!isset($_GET['search'])) : ?>
    <div class="section5">
        <?php foreach($result['res'] as $key => $value):?>
        <div class="items">
            <div class="item-children">
                <div class="item-owner">
                    <span><?=$result['count']?>.</span>
                    <?= $value['sender-name'] ?>
                </div>
                <div class="item-name"><span>Item name:</span><?= $value['item-name'] ?></div>
            </div>
            <div class="item-children">
                <div class="item-owner">
                    <?= $value['receiver-name'] ?>
                </div>
                <div class="item-name"><span>Address:</span><?= $value['receiver-address'] ?></div>
            </div>
            <div class="item-children links">
                <a href="generate-id.php?id=<?= $value['id'] ?>">Genetarate tracking ID</a>
                <a href="details.php?id=<?= $value['id'] ?>">Details</a>
                <a href="deleteproduct.php?id=<?= $value['id'] ?>" class="spec">Delete</a>
            </div>
            <div class="item-children item-status">
                <span>Status:</span>
                <div>pending approval</div>
            </div>
            <?php $result['count'] += 1 ?>
        </div>
        <?php endforeach;?>
    </div>
    <div class="paginate">
        <?php if($result['check']>1): ?>
            <a href="admin-home.php?num=<?= $result['check']-1 ?>" class="diff">Previous</a>
        <?php else: ?>
            <div class="previous diff">Previous</div>
        <?php endif; ?>
        <div class="numbers">
            <?php for($i = 1;$i<=$result['num'];$i++): ?>
                <a href="admin-home.php?num=<?= $i; ?>" class="active <?= $i; ?>"><?= $i; ?></a>
            <?php endfor; ?>
        </div>
        <?php if($result['check'] < $result['num']):?>
            <a href="admin-home.php?num=<?= $result['check']+1 ?>" class="diff">Next</a>
        <?php else: ?>
            <div class="next diff">Next</div>
        <?php endif;?>
    </div>
    <?php endif;?>
        
    <?php if(isset($_GET['search'])): ?>
    <div class="section5">
        <?php foreach($result['res'] as $key => $value):?>
        <div class="items">
            <div class="item-children">
                <div class="item-owner">
                    <span><?=$result['count']?>.</span>
                    <?= $value['sender-name'] ?>
                </div>
                <div class="item-name"><span>Item name:</span><?= $value['item-name'] ?></div>
            </div>
            <div class="item-children">
                <div class="item-owner">
                    <?= $value['receiver-name'] ?>
                </div>
                <div class="item-name"><span>Address:</span><?= $value['receiver-address'] ?></div>
            </div>
            <div class="item-children links">
                <a href="generate-id.php?id=<?= $value['id'] ?>&search=<?= htmlentities($_GET['search']) ?>">Genetarate tracking ID</a>
                <a href="details.php?id=<?= $value['id'] ?>&search=<?= htmlentities($_GET['search']) ?>">Details</a>
                <a href="deleteproduct.php?id=<?= $value['id'] ?>&search=<?= htmlentities($_GET['search']) ?>" class="spec">Delete</a>
            </div>
            <div class="item-children item-status">
                <span>Status:</span>
                <div>pending approval</div>
            </div>
            <?php $result['count'] += 1 ?>
        </div>
        <?php endforeach;?>
    </div>
    <div class="paginate">
        <?php if($result['check']>1): ?>
            <a href="admin-home.php?num=<?= $result['check']-1 ?>&search=<?= htmlentities($_GET['search']) ?>" class="diff">Previous</a>
        <?php else: ?>
            <div class="previous diff">Previous</div>
        <?php endif; ?>
        <div class="numbers">
            <?php for($i = 1;$i<=$result['num'];$i++): ?>
                <a href="admin-home.php?num=<?= $i; ?>&search=<?= htmlentities($_GET['search']) ?>" class="active <?= $i; ?>"><?= $i; ?></a>
            <?php endfor; ?>
        </div>
        <?php if($result['check'] < $result['num']):?>
            <a href="admin-home.php?num=<?= $result['check']+1 ?>&search=<?= htmlentities($_GET['search']) ?>" class="diff">Next</a>
        <?php else: ?>
            <div class="next diff">Next</div>
        <?php endif;?>
    </div>
    <?php endif;?>

    <?php endif;?>

</body>
</html>