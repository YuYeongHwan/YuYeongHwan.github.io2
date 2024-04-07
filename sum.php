<!DOCTYPE html>
<html>
<head>
    <title>숫자 출력 및 합과 곱 계산</title>
</head>
<body>
    <form method="post">
        <label for="number">숫자를 입력하세요:</label>
        <input type="text" id="number" name="number">
        <button type="submit">계산</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $sum = 0;
        $prod = 1;

        $sumString = "";
        for ($i = 1; $i <= $number; $i++) {
            $sum += $i;
            $sumString .= "$i";
            if ($i != $number) {
                $sumString .= "+";
            }
        }

        $productString = "";
        for ($i = 1; $i <= $number; $i++) {
            $prod *= $i;
            $productString .= "$i";
            if ($i != $number) {
                $productString .= "*";
            }
        }

        echo "<ul>";
        echo "<li>$sumString= $sum</li>";
        echo "<li>$productString= $prod</li>";
        echo "</ul>";
    }
    ?>
</body>
</html>
