<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculate Money</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
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
<body>

<div class="container mt-5">
    <h1 class="text-center">PHP Calculate Money</h1>
</div>

<hr class="w-100">

<div class="container mt-4">
    <p class="text-center">กรุณากรอกข้อมูลเพื่อทำการคำนวณยอดเงิน</p>

    <form action="" method="post" class="row justify-content-center">
        <div class="col-md-3 mb-3 text-center">
            <label for="price" class="form-label fw-bold">Price</label>
            <input type="number" name="price" id="price" class="form-control" required value="<?php echo isset($_POST['price']) ? $_POST['price'] : ''; ?>">
        </div>
        <div class="col-md-3 mb-3 text-center">
            <label for="amount" class="form-label fw-bold">Amount</label>
            <input type="number" name="amount" id="amount" class="form-control" required value="<?php echo isset($_POST['amount']) ? $_POST['amount'] : ''; ?>">
        </div>

        <div class="col-12 text-center mb-3">
            <label class="form-label fw-bold d-block mb-2">Membership?</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="member" id="member_yes" value="yes" required <?php if (isset($_POST['member']) && $_POST['member'] == 'yes') echo 'checked'; ?>>
                <label class="form-check-label" for="member_yes">Member (10% Discount)</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="member" id="member_no" value="no" <?php if (isset($_POST['member']) && $_POST['member'] == 'no') echo 'checked'; ?>>
                <label class="form-check-label" for="member_no">Not a member</label>
            </div>
        </div>

        <div class="col-12 text-center mb-3">
            <button type="submit" name="calculate" class="btn btn-primary me-2">Calculate</button>
            <a href="" class="btn btn-secondary">Reset All</a>
        </div>
    </form>

    <div class="row justify-content-center mt-4">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0 text-center">Show Result</h5>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_POST['calculate'])) {
                        $price = floatval($_POST['price']);
                        $amount = intval($_POST['amount']);
                        $member = $_POST['member'];
                        $total = $price * $amount;

                        $discount = ($member === 'yes') ? $total * 0.10 : 0;
                        $finalTotal = $total - $discount;
                    ?>
                        <p>ราคาสินค้า: <strong><?php echo number_format($price, 2); ?></strong> บาท</p><hr>
                        <p>จำนวนสินค้า: <strong><?php echo number_format($amount); ?></strong> ชิ้น</p><hr>
                        <p>รวมเป็นเงิน: <strong><?php echo number_format($total, 2); ?></strong> บาท</p><hr>
                        <p>ส่วนลดสมาชิก: <strong class="text-success"><?php echo number_format($discount, 2); ?></strong> บาท</p><hr>
                        <p>ยอดที่ต้องชำระ: <strong class="text-danger"><?php echo number_format($finalTotal, 2); ?></strong> บาท</p>
                    <?php
                    } else {
                        echo '<p class="text-center text-muted">Please input for Price and Amount.</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <a href="index.php"><button class="floating-btn">Back</button></a>
    </div>
</div>

</body>
</html>
