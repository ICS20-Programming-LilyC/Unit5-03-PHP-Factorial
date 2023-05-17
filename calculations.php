<?php

// Initializing counter and factorial results variables.
$counter = 1;
$factorialResult = 1;

// Getting user input number for factorial calculations. 
$userNum = $_POST['number'];

// If, the user enters nothing, display "Please enter a valid number". 
if ((!is_numeric($userNum)) ) {
  echo "Please enter a valid number.";
}

// Else if, the user enters a negative number, display "Please enter a positive number".
else if ($userNum < 0) {
  echo "Please enter a positive number.";
}

// Else, let the DO...WHILE loop to calculate the factorial.
else {

  // Using a DO...WHILE loop to find the factorial of the user's number.
  do {
    $factorialResult = $factorialResult * $counter;
    $counter = $counter + 1;
  } 
    while ($counter <= $userNum);

  // Displaying factorial to the screen.
  echo "The factorial of your inputted number (!" . $userNum . ") = " . $factorialResult . ".";
}

?>