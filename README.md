
# Math Class by A_LiReza_ME

This `Math` class provides a collection of useful mathematical operations. It includes basic arithmetic functions, advanced calculations like factorial, prime number checks, GCD, LCM, Fibonacci sequence generation, and more.

## Features

- **Prime Number Operations**:
  - Print prime numbers within a specified range.
  
- **Factorial Calculation**:
  - Calculate the factorial of a given number.
  
- **Basic Arithmetic**:
  - Add, subtract, multiply, divide, and raise numbers to a power.
  
- **Greatest Common Divisor (GCD)**:
  - Calculate the GCD of two numbers.
  
- **Least Common Multiple (LCM)**:
  - Calculate the LCM of two numbers.
  
- **Fibonacci Sequence**:
  - Generate and print the Fibonacci sequence up to a given number of terms.

## Installation

No external dependencies are required for this class. Just include the class in your PHP project.

## Usage

### 1. Prime Numbers

To print all prime numbers between two integers:

```php
Math::printPrimeNumbersInRange(10, 50);
```

### 2. Factorial

To print the factorial of a number:

```php
Math::printFactorial(5); // Output: Factorial of 5 is: 120
```

### 3. Basic Arithmetic Operations

You can perform basic arithmetic operations (addition, subtraction, multiplication, division, power) using the `printArithmeticOperation` method.

```php
Math::printArithmeticOperation('add', 10, 5);        // Output: 10 + 5 = 15
Math::printArithmeticOperation('subtract', 10, 5);   // Output: 10 - 5 = 5
Math::printArithmeticOperation('multiply', 10, 5);   // Output: 10 * 5 = 50
Math::printArithmeticOperation('divide', 10, 5);     // Output: 10 / 5 = 2
Math::printArithmeticOperation('power', 2, 3);       // Output: 2 ^ 3 = 8
```

### 4. GCD (Greatest Common Divisor)

To calculate the GCD of two numbers:

```php
echo "GCD of 54 and 24 is: " . Math::gcd(54, 24);  // Output: GCD of 54 and 24 is: 6
```

### 5. LCM (Least Common Multiple)

To calculate the LCM of two numbers:

```php
echo "LCM of 54 and 24 is: " . Math::lcm(54, 24);  // Output: LCM of 54 and 24 is: 216
```

### 6. Fibonacci Sequence

To print the Fibonacci sequence up to a given number of terms:

```php
Math::printFibonacci(10);  // Output: Fibonacci sequence up to 10 terms: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34
```

## Exception Handling

- Division by zero is handled using an `InvalidArgumentException`.
- Factorial calculation for negative numbers will also throw an `InvalidArgumentException`.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

## Author

This class was created by **A_LiReza_ME**.
