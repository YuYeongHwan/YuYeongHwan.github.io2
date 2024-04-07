<!DOCTYPE html>
<html>
<head>
    <title>랜덤 숫자 생성 및 정렬</title>
</head>
<body>
    <form method="post">
        <label for="count">생성할 숫자 개수를 입력하세요:</label>
        <input type="number" id="count" name="count" min="1">
        <button type="submit">생성</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $count = $_POST["count"];
        $randomNumbers = array();

        for ($i = 0; $i < $count; $i++) {
            $randomNumbers[$i] = rand(10, 100);
        }

        echo "<h2>생성된 랜덤 숫자:</h2>";
        echo "<ul>";
        foreach ($randomNumbers as $number) {
            echo "<li>$number</li>";
        }
        echo "</ul>";

        sort($randomNumbers);
        echo "<h2>정렬된 숫자:</h2>";
        echo "<ul>";
        foreach ($randomNumbers as $number) {
            echo "<li>$number</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
