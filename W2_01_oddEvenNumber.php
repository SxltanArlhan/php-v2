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
    <h1 class="text-center">Odd Even Number Checker</h1>
    <hr>
    <p class="text-center">กรุณากรอกตัวเลขเพื่อทำการตรวจสอบว่าเป็น เลขคู่ หรือ เลขคี่ </p>

    <form action="" method="post" class="text-center">
        <div class="form-group">
            <input type="number" name="number" id="num" class="form-control w-50 mx-auto"  placeholder="Enter Number" required>
        </div>
        <button type="submit" class="btn btn-primary mt-4 mb-3">Check</button>
    </form>
    </div>

    <?php
    if (isset($_POST['number'])) {

        $get_number = $_POST['number'];

        if ($get_number % 2 == 0) {
            echo "<h3 class='text-center mt-4 text-success'>$get_number เป็นเลขคู่</h3>";
        } else {
            echo "<h3 class='text-center mt-4 text-danger'>$get_number เป็นเลขคี่</h3>";
        }
    }
    ?>
    <a href="index.php"><button class="floating-btn">Back</button></a>

</body>
</html>