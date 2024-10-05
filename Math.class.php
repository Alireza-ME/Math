<?php
/**
 * Math Class By A_LiReza_ME
 */
class Math {
    
    /**
     * Checks if a number is prime.
     * 
     * @param int $number The number to check.
     * @return bool True if the number is prime, otherwise false.
     */
    private static function isPrime(int $number): bool {
        if ($number < 2) return false;
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    /**
     * Prints prime numbers in a given range.
     * 
     * @param int $start The start of the range.
     * @param int $end The end of the range.
     */
    public static function printPrimeNumbersInRange(int $start, int $end): void {
        if ($start > $end) {
            echo "Invalid range: start should be less than or equal to end.\n";
            return;
        }

        $primes = [];
        for ($i = $start; $i <= $end; $i++) {
            if (self::isPrime($i)) {
                $primes[] = $i;
            }
        }
        if (!empty($primes)) {
            echo "Prime numbers between $start and $end: " . implode(', ', $primes) . "\n";
        } else {
            echo "No prime numbers found between $start and $end.\n";
        }
    }

    /**
     * Calculates the factorial of a number.
     * 
     * @param int $number The number to calculate the factorial for.
     * @return int The factorial of the number.
     * @throws InvalidArgumentException If the number is negative.
     */
    public static function factorial(int $number): int {
        if ($number < 0) {
            throw new InvalidArgumentException("Factorial is not defined for negative numbers.");
        }
        
        if ($number === 0 || $number === 1) {
            return 1;
        }

        return $number * self::factorial($number - 1);
    }

    /**
     * Prints the factorial of a number.
     * 
     * @param int $number The number to calculate and print the factorial for.
     */
    public static function printFactorial(int $number): void {
        try {
            $result = self::factorial($number);
            echo "Factorial of $number is: $result\n";
        } catch (InvalidArgumentException $e) {
            echo $e->getMessage() . "\n";
        }
    }

    /**
     * Adds two numbers.
     * 
     * @param float|int $a The first number.
     * @param float|int $b The second number.
     * @return float|int The sum of the two numbers.
     */
    public static function add($a, $b) {
        return $a + $b;
    }

    /**
     * Subtracts the second number from the first.
     * 
     * @param float|int $a The first number.
     * @param float|int $b The second number.
     * @return float|int The result of the subtraction.
     */
    public static function subtract($a, $b) {
        return $a - $b;
    }

    /**
     * Multiplies two numbers.
     * 
     * @param float|int $a The first number.
     * @param float|int $b The second number.
     * @return float|int The product of the two numbers.
     */
    public static function multiply($a, $b) {
        return $a * $b;
    }

    /**
     * Divides the first number by the second.
     * 
     * @param float|int $a The numerator.
     * @param float|int $b The denominator.
     * @return float|int The result of the division.
     * @throws InvalidArgumentException If division by zero is attempted.
     */
    public static function divide($a, $b) {
        if ($b == 0) {
            throw new InvalidArgumentException("Division by zero is not allowed.");
        }
        return $a / $b;
    }

    /**
     * Raises a number to a specified power.
     * 
     * @param float|int $base The base number.
     * @param float|int $exponent The exponent.
     * @return float|int The result of the power operation.
     */
    public static function power($base, $exponent) {
        return pow($base, $exponent);
    }

    /**
     * Calculates the Greatest Common Divisor (GCD) of two numbers.
     * 
     * @param int $a The first number.
     * @param int $b The second number.
     * @return int The GCD of the two numbers.
     */
    public static function gcd(int $a, int $b): int {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return abs($a);
    }

    /**
     * Calculates the Least Common Multiple (LCM) of two numbers.
     * 
     * @param int $a The first number.
     * @param int $b The second number.
     * @return int The LCM of the two numbers.
     * @throws InvalidArgumentException If either number is zero.
     */
    public static function lcm(int $a, int $b): int {
        if ($a == 0 || $b == 0) {
            throw new InvalidArgumentException("LCM is not defined for zero.");
        }
        return abs(($a * $b) / self::gcd($a, $b));
    }

    /**
     * Generates the Fibonacci sequence up to a specified number of terms.
     * 
     * @param int $terms The number of terms to generate.
     * @return array The Fibonacci sequence.
     * @throws InvalidArgumentException If the number of terms is negative.
     */
    public static function fibonacci(int $terms): array {
        if ($terms < 0) {
            throw new InvalidArgumentException("Number of terms cannot be negative.");
        }
        $sequence = [];
        $a = 0;
        $b = 1;
        for ($i = 0; $i < $terms; $i++) {
            $sequence[] = $a;
            $temp = $a + $b;
            $a = $b;
            $b = $temp;
        }
        return $sequence;
    }

    /**
     * Prints the Fibonacci sequence up to a specified number of terms.
     * 
     * @param int $terms The number of terms to generate and print.
     */
    public static function printFibonacci(int $terms): void {
        try {
            $sequence = self::fibonacci($terms);
            echo "Fibonacci sequence up to $terms terms: " . implode(', ', $sequence) . "\n";
        } catch (InvalidArgumentException $e) {
            echo $e->getMessage() . "\n";
        }
    }
    
    /**
     * Prints the result of an arithmetic operation.
     * 
     * @param string $operation The operation to perform ('add', 'subtract', 'multiply', 'divide', 'power').
     * @param float|int $a The first operand.
     * @param float|int $b The second operand.
     */
    public static function printArithmeticOperation(string $operation, $a, $b): void {
        try {
            switch (strtolower($operation)) {
                case 'add':
                    $result = self::add($a, $b);
                    echo "$a + $b = $result\n";
                    break;
                case 'subtract':
                    $result = self::subtract($a, $b);
                    echo "$a - $b = $result\n";
                    break;
                case 'multiply':
                    $result = self::multiply($a, $b);
                    echo "$a * $b = $result\n";
                    break;
                case 'divide':
                    $result = self::divide($a, $b);
                    echo "$a / $b = $result\n";
                    break;
                case 'power':
                    $result = self::power($a, $b);
                    echo "$a ^ $b = $result\n";
                    break;
                default:
                    echo "Unsupported operation: $operation\n";
            }
        } catch (InvalidArgumentException $e) {
            echo $e->getMessage() . "\n";
        }
    }
}
