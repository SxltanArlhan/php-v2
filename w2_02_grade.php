<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd Even Number</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <style>
    .floating-btn {
        position: fixed;
        bottom: 20px;
        left: 20px;
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
<body>
    <!-- คำนวณหาเลขคู่เลขคี่ -->
    <div class="container mt-5">
    <h1 class="text-center">Grade Checker</h1>
    <hr>
    <p class="text-center">กรุณากรอกคะแนน (0 - 100) เพื่อทำการตรวจสอบว่าได้เกรดอะไร?</p>

    <form action="" method="post" class="text-center" id="gradeForm">
        <div class="form-group">
            <input type="number" name="score" id="score" class="form-control w-50 mx-auto" placeholder="Enter Score" required
                    value="<?php echo isset($_POST['score']) ? $_POST['score'] : ''; ?>">
        </div>
        <button type="submit" class="btn btn-primary mt-4 mb-3">Check</button>
        <button type="button" class="btn btn-secondary mt-4 mb-3" onclick="clearGrade()">Reset</button>
    </form>
    </div>

    <?php
    if (isset($_POST['score'])) {

        $score = $_POST['score'];
        $grade = "";

        if ($score < 0 || $score > 100) {
            echo "<h3 class='text-center mt-4 text-danger' id='gradeResult'>กรุณากรอกคะแนนระหว่าง 0 - 100 เท่านั้น</h3>";
        } else {
            if ($score >= 80) {
                $grade = "A";
            } elseif ($score >= 70) {
                $grade = "B";
            } elseif ($score >= 60) {
                $grade = "C";
            } elseif ($score >= 50) {
                $grade = "D";
            } else {
                $grade = "E";
            }

            echo "<h3 class='text-center mt-4' id='gradeResult'>คะแนนของคุณคือ: $score ได้เกรด: <span class='text-primary'>$grade</span></h3>";
        }
    }
    ?>

    <script>
        function clearGrade() {
            document.getElementById('score').value = '';
            var gradeResult = document.getElementById('gradeResult'); 
            if (gradeResult) {
                gradeResult.remove();
            }
        }
    </script>




    <a href="index.php"><button class="floating-btn">Back</button></a>

</body>
</html>