<?php
  require_once 'validate-code.php';
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
    <link rel="stylesheet" href="../css/update-location.css">
    <link rel="shortcut icon" href="../images/sle.svg" type="image/x-icon">
    <title>SureLinkExpress</title>
</head>
<body>
    <a class="section1" href="admin-currently-shipped.php">
        <span>Home:</span>
        <div>shipping</div>
    </a>
    <form class="section2" action="add-location.php" method="POST">
        <div class="first">
            <label>New location</label><br/>
            <input type="text" name="location" id="">
        </div>
        <div class="first">
            <label>Date</label><br/>
            <input type="text" name="date" id="">
        </div>
        <div class="first">
            <label>Time</label><br/>
            <input type="text" name="time" id="">
        </div>
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="submit" value="Update" class="update" name="submit">
    </form>
    <div class="link">
        <a href="" class="update">End shipping</a>
    </div>
    <div class="past">
        Past locations
    </div>
    <ol>
        <?php foreach($result as $key => $value):?>
            <li><span><?= $value['location'] ?></span><a href="delete-past.php?id=<?= $value['id'] ?>&ship=<?= $value['shipping-id'] ?>"><span class="material-symbols-outlined">close</span></a></li>
        <?php endforeach ?>
    </ol>

    <?php if(isset($_GET['error'])) :?>
        <div class="error <?= htmlentities($_GET['change']) ?>">
            <div>
                <?php echo htmlentities($_GET['error']) ?>
            </div>
            <span class="material-symbols-outlined">close</span>
        </div>
    <?php endif ?>

    <?php if(isset($_GET['error'])) :?>
        <script src="../scripts/error.js"></script>
    <?php endif ?>

</body>
</html>