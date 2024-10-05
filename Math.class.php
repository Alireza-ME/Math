/**
* Math Class By A_LiReza_ME
**/
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

        for ($i = $start; $i <= $end; $i++) {
            if (self::isPrime($i)) {
                echo $i . " ";
            }
        }
        echo "\n";
    }

    /**
     * Calculates the factorial of a number.
     * 
     * @param int $number The number to calculate the factorial for.
     * @return int The factorial of the number.
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
}
