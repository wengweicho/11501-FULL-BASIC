<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $score = 75;
    echo "成績為:" . $score . "分 <br>";
    echo "判定: ";

    if ($score >= 60) {
        echo "及格";
    } else {
        echo "不及格";
    }

    ?>

</body>

</html>