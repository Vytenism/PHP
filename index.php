<?php

function slot_run() {
    $array = [
        [rand(0, 1), rand(0, 1), rand(0, 1)],
        [rand(0, 1), rand(0, 1), rand(1, 2)],
        [rand(0, 1), rand(1, 2), rand(0, 1)]
    ];
    return $array;
}

$array1 = slot_run();
//foreach ($array1 as $index) {
//    foreach ($index as $color) {
//        if ($color > 0) {
//            $array1[$color]['css_class'] = 'blue';
//        } else {
//            $array1[$color]['css_class'] = 'orange';
//        }
//    }
//}
?>

<html>
    <head>
        <title>function's</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="UTF-8">
    </head>
    <body>
            <?php foreach ($array1 as $index): ?>
            <section>
            <?php foreach ($index as $value): ?>
                    <?php if ($value > 0): ?>
                        <div class="blue"></div>
                    <?php else: ?>
                        <div class="orange"></div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </section>
            <?php endforeach; ?>
    </body>
</html>
