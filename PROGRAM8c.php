<!DOCTYPE html>
<html>
<head>
    <title>Matrix Multiplication</title>
</head>
<body>
    <h1>Matrix Multiplication</h1>
    <h2>Matrix A:</h2>
    <form method="post" action="">
        <textarea name="matrixA" placeholder="Enter matrix A (e.g., 1 2 3\n4 5 6\n7 8 9)" rows="5" cols="30" required></textarea><br><br>
        <h2>Matrix B:</h2>
        <textarea name="matrixB" placeholder="Enter matrix B (e.g., 1 2 3\n4 5 6\n7 8 9)" rows="5" cols="30" required></textarea><br><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $matrixA = $_POST['matrixA'];
        $matrixB = $_POST['matrixB'];

        // Convert matrix A string into a 2D array
        $rowsA = explode("\n", $matrixA);
        $matrixArrayA = [];
        foreach ($rowsA as $rowA) {
            $matrixArrayA[] = explode(" ", $rowA);
        }

        // Convert matrix B string into a 2D array
        $rowsB = explode("\n", $matrixB);
        $matrixArrayB = [];
        foreach ($rowsB as $rowB) {
            $matrixArrayB[] = explode(" ", $rowB);
        }

        // Perform matrix multiplication
        $result = multiplyMatrices($matrixArrayA, $matrixArrayB);

        // Display the resulting matrix
        echo "<h2>Result Matrix:</h2>";
        foreach ($result as $row) {
            echo implode(" ", $row) . "<br>";
        }
    }

    function multiplyMatrices($matrixA, $matrixB) {
        $rowsA = count($matrixA);
        $colsA = count($matrixA[0]);
        $colsB = count($matrixB[0]);

        $result = array_fill(0, $rowsA, array_fill(0, $colsB, 0));

        for ($i = 0; $i < $rowsA; $i++) {
            for ($j = 0; $j < $colsB; $j++) {
                for ($k = 0; $k < $colsA; $k++) {
                    $result[$i][$j] += $matrixA[$i][$k] * $matrixB[$k][$j];
                }
            }
        }

        return $result;
    }
    ?>
</body>
</html>
