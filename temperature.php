<!-- write a php script to covert php script to fahrenheit and vice versa using form -->
<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h2>Temperature Converter</h2>
    <form method="POST">
        <label for="temperature">Enter temperature:</label>
        <input type="number" id="temperature" name="temperature" required><br><br>
        
        <input type="submit" name="operation" value="Convert to Fahrenheit">
        <input type="submit" name="operation" value="Convert to Celsius">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST['temperature'];
        $operation = $_POST['operation'];
        $result = 0;

        switch ($operation) {
            case "Convert to Fahrenheit":
                $result = ($temperature * 9/5) + 32;
                break;
            case "Convert to Celsius":
                $result = ($temperature - 32) * 5/9;
                break;
        }

        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
