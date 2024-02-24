<?php require("db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colorweb</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>COLOR - WEB</h1>
        <p>
            <a href="index.php">หน้าแรก</a>
            <a href="new-color.php">เพิ่มสี</a>
        </p>
    </header>
        <section class="section">
            <div class="container">
                <div>
                    <?php $sql = "SELECT * FROM color ";
                    if (isset(($_GET)["search"])) 
                    {
                        $search = mysqli_real_escape_string($connection , $_GET["search"]);
                        $sql .= "WHERE title LIKE '%$search%'";
                    }
                    $sql .= "ORDER BY id DESC";
                    $result = mysqli_query($connection , $sql);
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    ?>
                    <form>
                        <p>
                            <input type="search" name = "search">
                            <button type="submit" style="color: black;height: 25px;" > ค้นหา </button>
                        </p>

                    </form>
                    <h3>มีสีทั้งหมด <?php echo count($rows);?> สี</h3>
                    <?php foreach ($rows as $row):
                ?>
                <div class="color-item" style="border-color: <?php echo $row["code"]; ?>;">
                    <h4><?php echo $row["title"];?></h4>
                    <p><?php echo $row["code"];?></p>   
                </div>
                    <?php endforeach; ?>
                </div>
    </div>        
        </section>
</body>
</html>
<?php 
mysqli_close($connection);
?>