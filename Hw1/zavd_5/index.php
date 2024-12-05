<?php
require_once 'php/combinations.php';
require_once 'php/components.php';

$showResult = isset($_POST['generate']);
$combinations = $showResult ? generateCombinations($cpus, $motherboards, $memory, $storage, $powerUnits) : [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Configuration</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <div class="wrapper">
        <h1>PC Configuration Picker</h1>
        
        <div class="combinations">
            <div class="combo-item">
                <h3>CPUs</h3>
                <?php foreach ($cpus as $cpu): ?>
                    <p style="background: <?php echo $cpu['color']; ?>"><?php echo $cpu['title']; ?></p>
                <?php endforeach; ?>
            </div>
            <div class="combo-item">
                <h3>Motherboards</h3>
                <?php foreach ($motherboards as $mb): ?>
                    <p style="background: <?php echo $mb['color']; ?>"><?php echo $mb['title']; ?></p>
                <?php endforeach; ?>
            </div>
            <div class="combo-item">
                <h3>RAM</h3>
                <?php foreach ($memory as $mem): ?>
                    <p style="background: <?php echo $mem['color']; ?>"><?php echo $mem['title']; ?></p>
                <?php endforeach; ?>
            </div>
            <div class="combo-item">
                <h3>Storage</h3>
                <?php foreach ($storage as $st): ?>
                    <p style="background: <?php echo $st['color']; ?>"><?php echo $st['title']; ?></p>
                <?php endforeach; ?>
            </div>
            <div class="combo-item">
                <h3>Power Supply Units</h3>
                <?php foreach ($powerUnits as $psu): ?>
                    <p style="background: <?php echo $psu['color']; ?>"><?php echo $psu['title']; ?></p>
                <?php endforeach; ?>
            </div>
        </div>

        <form method="post">
            <button type="submit" name="generate">Show Combinations</button>
        </form>

        <?php if ($showResult): ?>
            <div class="combinations">
                <?php foreach ($combinations as $index => $combo): ?>
                    <div class="combo-item">
                        <h3>Combination <?php echo $index + 1; ?></h3>
                        <p style="background: <?php echo $combo['cpu']['color']; ?>">CPU: <?php echo $combo['cpu']['title']; ?></p>
                        <p style="background: <?php echo $combo['motherboard']['color']; ?>">Motherboard: <?php echo $combo['motherboard']['title']; ?></p>
                        <p style="background: <?php echo $combo['ram']['color']; ?>">RAM: <?php echo $combo['ram']['title']; ?></p>
                        <p style="background: <?php echo $combo['hdd']['color']; ?>">Storage: <?php echo $combo['hdd']['title']; ?></p>
                        <p style="background: <?php echo $combo['psu']['color']; ?>">Power Supply: <?php echo $combo['psu']['title']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>
