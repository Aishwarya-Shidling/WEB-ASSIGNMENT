<!DOCTYPE html>
<html>
<head>
    <title>Matrix Transpose</title>
</head>
<body>
    <h1>Matrix Transpose</h1>
    <form method="post" action="">
        <textarea name="matrix" placeholder="Enter the matrix (e.g., 1 2 3\n4 5 6\n7 8 9)" rows="5" cols="30" required></textarea><br><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $matrix = $_POST['matrix'];

        // Convert the matrix string into a 2D array
        $rows = explode("\n", $matrix);
        $matrixArray = [];
        foreach ($rows as $row) {
            $matrixArray[] = explode(" ", $row);
        }

        // Find the transpose of the matrix
        $transpose = array_map(null, ...$matrixArray);

        // Display the transpose matrix
        echo "<h2>Transpose Matrix:</h2>";
        foreach ($transpose as $row) {
            echo implode(" ", $row) . "<br>";
        }
    }
    ?>
</body>
</html>
