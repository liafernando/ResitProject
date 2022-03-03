<body>
<?php
    include 'header.php';
?>
    <main>
    <div class = 'mainTitle'>
        <h1>Our Products<h1>
    </div>
    <?php
        include 'Database.php';
        $sql = "select * FROM item;";
        if($stmt = mysqli_prepare($conn, $sql)) {
            if(mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);
                while($attr=mysqli_fetch_assoc($result)) {
    ?>
    <article>
        <div class = 'article_product'>
            <img src = "./upload/<?php echo $attr['image']?>" alt = "Product Image"><br><br>
            <h4><?php echo $attr['title']?></h4><br>
            <p><?php echo $attr['description'] ?></p><br>
            <p><b><i><?php echo $attr['category'] ?></i></b></p><br>
            <h4><?php echo "Price: &euro;" .$attr['price'] ?></h4><br>
            <div class = 'log'>
                <input type="submit" value="Add to Cart">
            </div>
        </div>
    </article>
    <?php
                }
            }
        }
    ?>    
    </main>
</body>  