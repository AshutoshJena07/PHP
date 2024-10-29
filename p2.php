<?php
// Get the current day of the week as a number (0 = Sunday, 1 = Monday, ..., 6 = Saturday)
$day = date('w');

// Use a switch case constructor to determine the day of the week
switch ($day) {
    case 0:
        $dayName = 'Sunday';
        break;
    case 1:
        $dayName = 'Monday';
        break;
    case 2:
        $dayName = 'Tuesday';
        break;
    case 3:
        $dayName = 'Wednesday';
        break;
    case 4:
        $dayName = 'Thursday';
        break;
    case 5:
        $dayName = 'Friday';
        break;
    case 6:
        $dayName = 'Saturday';
        break;
    default:
        $dayName = 'Unknown';
        break;
}

// Display the day of the week
echo '<h1>Today is ' . $dayName . '</h1>';
?>

