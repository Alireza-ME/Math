<?php

//Use class
include_once('Math.class.php');

// Example usage:

// Printing prime numbers between 10 and 50
Math::printPrimeNumbersInRange(10, 50);

// Printing factorial of 5
Math::printFactorial(5);

// Performing arithmetic operations
Math::printArithmeticOperation('add', 10, 5);        // Output: 10 + 5 = 15
Math::printArithmeticOperation('subtract', 10, 5);   // Output: 10 - 5 = 5
Math::printArithmeticOperation('multiply', 10, 5);   // Output: 10 * 5 = 50
Math::printArithmeticOperation('divide', 10, 5);     // Output: 10 / 5 = 2
Math::printArithmeticOperation('power', 2, 3);       // Output: 2 ^ 3 = 8

// Calculating GCD and LCM
echo "GCD of 54 and 24 is: " . Math::gcd(54, 24) . "\n"; // Output: GCD of 54 and 24 is: 6
echo "LCM of 54 and 24 is: " . Math::lcm(54, 24) . "\n"; // Output: LCM of 54 and 24 is: 216

// Printing Fibonacci sequence
Math::printFibonacci(10); // Output: Fibonacci sequence up to 10 terms: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34
