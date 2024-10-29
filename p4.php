<?php
// Function to swap two variables
function swapVariables($a, $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
    return array($a, $b);
}

// Check if numbers are submitted
if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    list($swappedNum1, $swappedNum2) = swapVariables($num1, $num2);
} else {
    $num1 = '';
    $num2 = '';
    $swappedNum1 = '';
    $swappedNum2 = '';
}

// Display the input form and result
?>
<form action="" method="post">
    <label for="num1">Enter first number:</label>
    <input type="number" id="num1" name="num1" value="<?php echo $num1; ?>">
    <br>
    <label for="num2">Enter second number:</label>
    <input type="number" id="num2" name="num2" value="<?php echo $num2; ?>">
    <input type="submit" value="Swap Numbers">
</form>
<?php if ($swappedNum1 != '' && $swappedNum2 != ''): ?>
    <p>Swapped numbers:</p>
    <p>First number: <?php echo $swappedNum1; ?></p>
    <p>Second number: <?php echo $swappedNum2; ?></p>
<?php endif; ?>

<style>
body {
    font-family: Arial, sans-serif;
    text-align: center;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="number"] {
    width: 50px;
    height: 20px;
    margin-bottom: 10px;
}

input[type="submit"] {
    width: 100px;
    height: 25px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #3e8e41;
}</style>
