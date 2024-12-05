<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figures</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$figures = [
    ['name' => 'circle', 'x' => 25, 'y' => 25, 'color' => 'red'],
    ['name' => 'square', 'x' => 60, 'y' => 60, 'color' => 'green'],
    ['name' => 'square', 'x' => 150, 'y' => 50, 'color' => 'blue']
];

foreach ($figures as $figure) {
    $width = 40;
    $height = 40;
    $x = $figure['x'];
    $y = $figure['y'];
    $color = $figure['color'];
    $shapeClass = $figure['name'] === 'circle' ? 'circle' : '';

    echo "<div class='figure $shapeClass' style='
        width: {$width}px; 
        height: {$height}px; 
        background-color: {$color}; 
        top: {$y}px; 
        left: {$x}px;'>
    </div>";
}
?>

</body>
</html>
