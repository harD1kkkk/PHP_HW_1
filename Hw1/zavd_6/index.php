<?php
require_once 'php/sections.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array page</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <div class="header">
        <?php echo $sections['header']['text']; ?>
    </div>

    <div class="content">
        <?php echo $sections['content']['text']; ?>
    </div>

    <div class="footer">
        <?php echo $sections['footer']['text']; ?>
    </div>
</body>

</html>
