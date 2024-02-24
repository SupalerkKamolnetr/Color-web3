<?php require("db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new-color</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>COLOR - WEB</h1>
        <p>
            <a href="index.php">หน้าแรก</a>
            <a href="new-color.php">เพิ่มสี</a>
        </p>
        </header>
    <div class="container">
    <?php if($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <?php 
            $code = mysqli_real_escape_string($connection,$_POST["code"]);
            $title = mysqli_real_escape_string($connection,$_POST["title"]);
            $sql = "INSERT INTO color ( title , code ) VALUES ( '$title' , '$code' );";
            $result = mysqli_query($connection , $sql);
        ?>
        <?php if (($result) == true ):?>
            <p>เพิ่มสีเรียบร้อย</p>
        <?php else: ?>
            <p>เพิ่มสีผิดพลาด</p>
        <?php endif; ?> 
    <?php else :?>
        <form method="post">
        <p>
            <label>โค้ดสี</label>
            <input type="color" , name="code">
        </p>
        <p>
            <label>ชื่อสี</label>
            <input type = "text" , name="title">
        </p>
        <button type="submit"> เพิ่มสีใหม่ </button>
    </form> 
    <?php endif; ?>
    </div>
</body>
</html>
<?php 
mysqli_close($connection);?>
