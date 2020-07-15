<?php
include ('server-info.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>System Info</title>
        <link rel="stylesheet" href="css/style.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Server &amp; File Info</h1>
            <?php if ($server): ?>
                <ul class="list-group">
                    <?php foreach ($server as $key => $value): ?>
                        <li class="list-group-item">
                            <strong><?php echo $key;?>: </strong>
                            <?php echo $value; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
        
    </body>
    <footer>
        <script src="js/bootstrap.min.js" defer></script>
    </footer>
</html>