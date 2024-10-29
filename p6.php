
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        input[type="number"] {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            color: #007bff;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Factorial Calculator</h2>
        <form action="" method="post">
            <input type="number" name="number" placeholder="Enter a number" required>
            <input type="submit" value="Calculate Factorial">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Function to calculate factorial using recursion
            function factorial($n) {
                if ($n == 0 || $n == 1) {
                    return 1;
                }
                return $n * factorial($n - 1);
            }

            // Get the user input
            $number = intval($_POST["number"]);

            if ($number < 0) {
                echo "<div class='result'>Please enter a non-negative number.</div>";
            } else {
                // Calculate factorial
                $result = factorial($number);
                echo "<div class='result'>Factorial of $number is $result</div>";
            }
        }
        ?>
    </div>
</body>
</html>