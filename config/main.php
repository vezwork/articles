<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
        
            foreach ( array_slice (scandir("articles/", SCANDIR_SORT_ASCENDING), 2) as $value) {
                echo "<a href=?" . urlencode($value) . "><div>";
                echo $value . "<sup>";
                echo date ("M j<\s\up>S</\s\up>", filemtime("articles/" . $value));
                echo "</sup></div>";
            }
        ?>
    </body>
</html>