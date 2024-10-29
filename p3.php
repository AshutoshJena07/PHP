<?php
// Function to calculate factorial
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Check if a number is submitted
if (isset($_POST['number'])) {
    $number = $_POST['number'];
    $factorialResult = factorial($number);
} else {
    $number = '';
    $factorialResult = '';
}

// Display the input form and result
?>
<form action="" method="post">
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="number" value="<?php echo $number; ?>">
    <input type="submit" value="Calculate Factorial">
</form>
<?php if ($factorialResult != ''): ?>
    <p>The factorial of <?php echo $number; ?> is <?php echo $factorialResult; ?></p>
<?php endif; ?>

<style class="csss">body {
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

