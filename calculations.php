<?php

// initializing variables
$counter = 1;
$factorialResult = 1;

// getting user input for number
$userNumber = $_POST['number'];

// If: if user enters nothing or invalid input
if (empty($userNumber) || !is_numeric($userNumber)) {
  echo "Please enter a valid number.";
}

// Else if: if user enters a negative number
else if ($userNumber < 0) {
  echo "Please enter a positive number.";
}

// Else if: if user enters 0
else if ($userNumber == 0) {
  echo "The factorial of 0 is 1.";
}

// Else: let the do-while loop execute to calculate the factorial
else {
  // using a do...while loop to find factorial of inputted number
  do {
    $factorialResult *= $counter;
    $counter++;
  } while ($counter <= $userNumber);

  // displaying factorial to the screen
  echo "The factorial of your inputted number (!" . $userNumber . ") is " . $factorialResult . ".";
}

?>
