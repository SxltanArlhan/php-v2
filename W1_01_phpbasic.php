<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <style>
    .floating-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: black;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        z-index: 999;
        transition: background-color 0.3s;
    }

    .floating-btn:hover {
        background-color: #333;
    }
</style>
</head>
<style>

</style>
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
    <h1 style="color: red;">PHP Variable</h1>
    <pre>
        &lt;?php
            $greeting = "Hello World!";
            echo $greeting;
        ?&gt;
    </pre>
    <h2>Result</h2>
        <?php
            $greeting = "Hello World!";
            echo "<span style='color: blue;'>".$greeting."</span>";
        ?>
    <hr>
    <h1 style="color: red;">Integer Variable Example</h1>
    <?php
        $old = 20;
        echo "<span style='color: blue;'>I am ".$old." years old.</span><br>";
        echo "<span style='color: blue;'>I am $old years old.</span>";
    ?>
    <hr>
    <h1 style="color: red;">Calculate with Variable</h1>
        <?php
            $a = 5;
            $b = 4;
            $c = $a + $b;
            
            echo "<span style='color: blue;'>The sum of $a and $b is $c</span>";
        ?>
    <hr>
    <h1 style="color: red;">คำนวณพื้นที่สามเหลี่ยม</h1>
        <?php
            $t = 5;
            $s = 4;
            $c = 0.2;

            $r = $c * $t * $s;
            
            echo "<span style='color: blue;'>พื้นที่ของสามเหลี่ยมคือ $r ตารางหน่วย </span>";
        ?>
    <hr>
    <h1 style="color: red;">คำนวณอายุจากปีเกิด</h1>
        <?php
            $a = 2025;
            $b = 2005;
            $c = $a - $b;
            echo "<span style='color: blue;'>อายุของคุณคือ $c ปี</span>"
        ?>
    <hr>

        <h1 style="color: red;">IF-Else</h1>
    <?php

    $score = 59;

    if($score > 60) {
        echo "ผลลัพธ์ : สอบผ่าน<br>";
    } else {
        echo "ผลลัพธ์ : สอบไม่ผ่าน<br>";
    }
    echo "คะแนนของคุณคือ $score";

    ?>

    <hr>
    
    <h1 style="color: red;">Boolean Variable</h1>
    <?php
    
    echo "<h3>คุณเป็นนักศึกษาใช่หรือไม่</h3>";
    $is_student = true;
    if(!$is_student){
        echo "ใช่ คุณเป็นนักศึกษา";
    }else{
        echo "ไม่ คุณไม่ใช่นักศึกษา";
    }
    ?>a

    <hr>
    <h1 style="color: red;">Loop</h1>
    <h2>======== Loop for ========</h2>
    <h3>แสดงตัวเลข 1 ถึง 10</h3>
    <?php

    $sum = 0;
    $text = "";

    for($i = 5; $i <= 9; $i++){
        echo "$i ";
        $sum += $i;

        $text .= $i;

        if($i < 9){
            $text .= "+";
        }
    }

    echo "<br>ผลรวมคือ $sum";
    echo "<br>$text = $sum";

    ?>
    <h2>======== สูตรคูณแม่ 2 ========</h2>
    <?php
    $j = 1;
    while($j <= 12){
        echo "2 x $j = ".(2 * $j)."<br>";
        $j++;

    }
    ?>


    <h2>======== สูตรคูณแม่ 2 ในตาราง ========</h2>
    <table class="table table-bordered table-striped w-auto mx-auto text-center">
        <thead class="table-success">
            <tr>
                <th>ลำดับ</th>
                <th>สูตรคูณ</th>
                <th>ผลลัพธ์</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for($i=1;$i <= 12; $i++){
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>2 x $i </td>";
                echo "<td>" . (2 * $i) . "</td>";
                echo "</tr>";


            }
            ?>
        </tbody>
    </table>
    
    <!-- ======================================================== -->
    <!-- ======================================================== -->
    <!-- ======================================================== -->
    <!-- ======================================================== -->

    <hr>
    <h2>สร้างตัวแปรอาเรย์ แบบที่ 1: Indexed Array</h2>
    <h5>PHP จะกำหนด index เป็นตัวเลขอัตโนมัติ โดยเริ่มจาก 0</h5>
    <hr>
        
    <?php
        $fruits = ["Apple","Banana","Cherry"];

    ?>

    <h3>แสดงรายการผลไม้ โดยใช้ index</h3>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php 
            echo $fruits[0]."<br>";
            echo $fruits[1]."<br>";
            echo $fruits[2]."<br>";
        ?>
    </div>
    <div style="color:red; background-color: lightgray; padding: 10px;">
        <?php 
            echo "รายการผลไม้: <br>";
            echo "ผลไม้ที่ 1: " . $fruits[0] . "<br>";
            echo "ผลไม้ที่ 2: " . $fruits[1] . "<br>";
            echo "ผลไม้ที่ 3: " . $fruits[2] . "<br>";
        ?>
    </div>
    <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ โดยใช้ print readable</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            echo "รายการผลไม้: <br>";
            print_r($fruits); // แสดงผลอาเรย์ทั้งหมด  print readable
            echo "<br>";

        ?>
    </div>
    <br>
    <h4>แสดงจำนวนสมาชิกใน array</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            echo "รายการผลไม้: ".count($fruits)." ชนิด <br>";
            echo "<br>";

        ?>
    </div>
    <br>

        <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ โดยใช้ implode เพื่อแปลงอาเรย์เป็นสตริง</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            // แสดงรายการผลไม้และจำนวนสมาชิกในอาเรย์
            // ใช้ implode เพื่อแปลงอาเรย์เป็นสตริง และแสดงผลลัพธ์
            echo "รายการผลไม้: " . implode(", ", $fruits) . "<br>"; // ผลลัพธ์: Apple, Banana, Cherry
            echo "<br>";
        ?>
    </div>
        <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ ใช้คำสั่ง foreach เพื่อวนลูป</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php

        foreach ($fruits as $fruit) {
            echo "ผลไม้: ".$fruit . "<br>";
        }
        echo "</div><br>";
        ?>
    </div>
    <h4>แสดงรายการผลไม้ ใช้คำสั่ง foreach เพื่อวนลูป แบบย้อน</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
    <?php
        echo "ผลไม้ทั้งหมด : ";

        $lastFruit = end($fruits); // เก็บผลไม้ตัวสุดท้าย

        foreach ($fruits as $fruit) {
            if ($fruit == $lastFruit) {
                echo $fruit . ".";
            } else {
                echo $fruit . ", ";
            }
        }
    ?>
    </div>

    <!-- ======================================================== -->
    <!-- ======================================================== -->
        
        <hr>
        <h2>สร้างตัวแปรอาเรย์ แบบที่ 2: Associative Array</h2>
        <h6>เป็น array ซ้อนกันหลายชุด (Multidimensional array)</h6>
        <h6>แต่ละชุดเป็น associative array ที่ระบุชื่อ key ชัดเจน เช่น "name" และ "price"</h6>
        <h6>ใช้สำหรับเก็บข้อมูลที่มีความสัมพันธ์กัน key => value เช่น รายการสินค้า</h6>


        <?php
            // สร้างอาเรย์ของผลไม้ที่มีชื่อและราคา
            $products = [
                ["name" => "Apple", "price" => 30],
                ["name" => "Banana", "price" => 20],
                ["name" => "Cherry", "price" => 15]
            ];
        ?>


 <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ ใช้คำสั่ง key value</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            // แสดงผลลัพธ์ของการเข้าถึงข้อมูลในอาเรย์
            echo $products[0]["name"] . "<br>";  // Apple
            echo $products[2]["price"] . "<br>"; // 15

    
        ?>
    </div>

    <h4>แสดงรายการสินค้า ใช้คำสั่ง foreach เพื่อวนลูป</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
    <?php
        $totalPrice = 0;

        foreach ($products as $product) {
            echo "สินค้า: $product[name] ราคา $product[price] บาท<br>";
            $totalPrice += $product['price'];
        }

        echo "ราคารวมของสินค้าทั้งหมด: $totalPrice บาท";
    ?>
    </div>















    <a href="index.php"><button class="floating-btn">Back</button></a>



</body>

</html>