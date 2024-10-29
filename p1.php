<!DOCTYPE html>
<html>
<body>
    
<style>
        body {
            background: linear-gradient(135deg, 
            red, orange, yellow, green, blue, indigo, violet);;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        form {
            text-align: center;
            margin-bottom: 100px;
            font-size: 78px;
        }

        .result {
            text-align: center;
            font-size: 78px;
            font-weight: bold;
        }
    </style>
 
    <form action="<?php $_PHP_SELF ?>" method="get">
        Enter 1st no: <input type="number" name="num1"><br>
        Enter 2nd no: <input type="number" name="num2"><br>
        <input type="submit" value="ADD" name="operation">
        <input type="submit" value="SUB" name="operation">
        <input type="submit" value="MUL" name="operation">
        <input type="submit" value="DIV" name="operation">
    </form>
    

    <?php
if (isset($_GET['operation'])) {
    $a = $_GET['num1'];
    $b = $_GET['num2'];
    $op = $_GET['operation'];
    switch ($op) {
        case "ADD":
            $result = $a + $b;
            echo "Result: " . $result;
            break;
        case "SUB":
            $result = $a - $b;
            echo "Result: " . $result;
            break;
        case "MUL":
            $result = $a * $b;
            echo "Result: " . $result;
            break;
        case "DIV":
            if ($b != 0) {
                $result = $a / $b;
                echo "Result: " . $result;
            } else {
                echo "Cannot divide by zero!";
            }
            break;
    }
}
?>

</body>

</html>

