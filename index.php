<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP</title>
</head>
<body>
    <h1>Welcome to PHP Basic</h1>
    <p>This is a simple PHP application</p>
    <hr>
    <h1 style="color: red;">Basic PHP Syntax</h1>
    <pre>
        &lt;?php
            echo "Hello World!";
        ?&gt;
    </pre>
    <h2>Result</h2>
    <div style="color: blue;">
    <?php 
        echo "Hello World! <br>";
        print "<span style='color: red;'>Pacharaphon Netrsuwan</span>";
    ?>
    </div>

    <hr>

    <h1 style="color: red;">MY MENU</h1>
    <ul>
        <li><a href="W1_01_phpbasic.php">W1_01_phpbasic</a></li>
        <li><a href="W2_01_oddEvenNumber.php">Odd-Even-Number</a></li>
        <li><a href="w2_02_grade.php">Calculate Grade</a></li>
        <li><a href="W2_03_calculate_money.php">Calculate Money</a></li>
        <li><a href="W6_01_LoopProduct.php">Show Product(fix data)</a></li>
        <li><a href="">Connect Database</a></li>
        <li><a href="">Show Product (from Database)</a></li>
        
    </ul>

    <hr>

    <h1 style="color: red;">IF-Else</h1>
<!--เกรณฑ์ผ่านการสอบ ต้องได้คะแนน มากกว่า 60 คะแนน-->
    <?php

    $score = 75;

    if($score > 60) {
        echo "สอบผ่าน";
    } else {
        echo "สอบไม่ผ่าน";
    }

    ?>

</body>
</html>