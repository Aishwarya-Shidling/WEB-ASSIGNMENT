<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="post" action="">
        <input type="text" name="num1" placeholder="Enter first number" required><br><br>
        <input type="text" name="num2" placeholder="Enter second number" required><br><br>
        <select name="operator">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select><br><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case 'add':
                $result = $num1 + $num2;
                echo "<h2>Result: $num1 + $num2 = $result</h2>";
                break;
            case 'subtract':
                $result = $num1 - $num2;
                echo "<h2>Result: $num1 - $num2 = $result</h2>";
                break;
            case 'multiply':
                $result = $num1 * $num2;
                echo "<h2>Result: $num1 * $num2 = $result</h2>";
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "<h2>Result: $num1 / $num2 = $result</h2>";
                } else {
                    echo "<h2>Error: Division by zero is not allowed.</h2>";
                }
                break;
        }
    }
    ?>
</body>
</html>
