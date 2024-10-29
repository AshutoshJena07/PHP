<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String & Number Handling Functions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        .output {
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        code {
            background-color: #eaeaea;
            padding: 2px 5px;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>PHP String Manipulation Functions</h2>
        <div class="output">
            <?php
            // String Manipulation Functions
            $string = " Hello World! ";

            // 1. Trim - Removes whitespace from the beginning and end of a string
            $trimmed = trim($string);
            echo "<strong>Trimmed string:</strong> '" . $trimmed . "'<br>";

            // 2. strlen - Returns the length of a string
            $length = strlen($trimmed);
            echo "<strong>Length of string:</strong> " . $length . "<br>";

            // 3. strtoupper - Converts string to uppercase
            $uppercase = strtoupper($trimmed);
            echo "<strong>Uppercase string:</strong> " . $uppercase . "<br>";

            // 4. strtolower - Converts string to lowercase
            $lowercase = strtolower($trimmed);
            echo "<strong>Lowercase string:</strong> " . $lowercase . "<br>";

            // 5. str_replace - Replaces part of a string
            $replaced = str_replace("World", "PHP", $trimmed);
            echo "<strong>Replaced string:</strong> " . $replaced . "<br>";

            // 6. substr - Returns a part of a string
            $substring = substr($trimmed, 6, 5);
            echo "<strong>Substring:</strong> " . $substring . "<br>";
            ?>
        </div>

        <h2>PHP Number Handling Functions</h2>
        <div class="output">
            <?php
            // Number Handling Functions
            $number = 123.456;

            // 1. round - Rounds a floating point number
            $rounded = round($number, 2);  // Round to 2 decimal places
            echo "<strong>Rounded number:</strong> " . $rounded . "<br>";

            // 2. ceil - Rounds a number upwards to the nearest integer
            $ceiled = ceil($number);
            echo "<strong>Ceiled number:</strong> " . $ceiled . "<br>";

            // 3. floor - Rounds a number downwards to the nearest integer
            $floored = floor($number);
            echo "<strong>Floored number:</strong> " . $floored . "<br>";

            // 4. abs - Returns the absolute value of a number
            $negativeNumber = -50;
            $absolute = abs($negativeNumber);
            echo "<strong>Absolute value:</strong> " . $absolute . "<br>";

            // 5. number_format - Formats a number with grouped thousands
            $formatted = number_format($number, 2, '.', ',');
            echo "<strong>Formatted number:</strong> " . $formatted . "<br>";

           
            $power = pow(2, 3);  // 2 raised to the power of 3
            echo "<strong>2 raised to the power of 3:</strong> " . $power . "<br>";
            ?>
        </div>
    </div>
</body>
</html>