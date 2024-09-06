<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Magenest</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            width: 400px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <h1>Giải phương trình bậc 2: ax2 + bx + c = 0</h1>
    <form action="index.php" method="POST">
        <div class="mb-3">
            <label for="number-a" class="form-label">Nhập số a</label>
            <input type="number" class="form-control" id="number-a" name="number-a" required>
        </div>
        <div class="mb-3">
            <label for="number-b" class="form-label">Nhập số b</label>
            <input type="number" class="form-control" id="number-b" name="number-b" required>
        </div>
        <div class="mb-3">
            <label for="number-c" class="form-label">Nhập số c</label>
            <input type="number" class="form-control" id="number-c" name="number-c" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $a = $_POST['number-a'];
        $b = $_POST['number-b'];
        $c = $_POST['number-c'];

        $delta = $b * $b - 4 * $a * $c;

        if ($delta < 0) {
            echo '<h5 class="mt-3">Phương trình vô nghiệm</h5>';
        } else if ($delta === 0) {
            $x = -$b / (2 * $a);
            echo '<h5 class="mt-3">Phương trình có nghiệm kép x = ' . round($x, 2) . '</h5>';
        } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            echo '<h5 class="mt-3">Phương trình có 2 nghiệm phân biệt x1 = ' . round($x1, 2) . ' và x2 = ' . round($x2, 2) . '</h5>';
        }
    }
?>