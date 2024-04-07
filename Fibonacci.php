<!DOCTYPE html>
<html>
<head>
    <title>피보나치 수열과 비례 출력</title>
</head>
<body>
    <form method="post">
        <label for="count">생성할 피보나치 수열의 항 개수를 입력하세요:</label>
        <input type="number" id="count" name="count" min="1">
        <button type="submit">생성</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $count = $_POST["count"];
        $fibonacciSequence = array();

        $fibonacciSequence[1] = 1;
        $fibonacciSequence[2] = 1;
        for ($i = 3; $i <= $count; $i++) {
            $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
        }

        echo "<h2>피보나치 수열과 앞과 뒤항의 비례:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>i</th><th>fi</th><th>fi+1</th><th>fi+1 / fi</th></tr>";
        for ($i = 1; $i <= $count; $i++) {
            $fi = $fibonacciSequence[$i];
            $fiPlus1 = isset($fibonacciSequence[$i + 1]) ? $fibonacciSequence[$i + 1] : "";
            $ratio = ($fiPlus1 != "") ? number_format($fiPlus1 / $fi, 6) : "";
            echo "<tr><td>$i</td><td>$fi</td><td>$fiPlus1</td><td>$ratio</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>