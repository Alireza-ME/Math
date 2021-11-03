<?php
/**
* Math Class By A_LiReza_ME
**/

class Math {
	
	/* 
* @method Checking the numbers first
   */
private static function Calculate(array $data) {

if($data['Operation'] == 'PrimeNumber'){
   $n = 0; 
  for($i = 2; $i < ($data['Value']/2+1); $i++) {
    if($data['Value']% $i == 0){
      $n++;
      break;
    }
  }
  if ($n == 0){
     print $data['Value'];
    } 
  } 
}
/* 
* @method Handel to check the prime numbers
   */
public static function primenumber($x,$y){
for($i = $x; $i < $y + 1; $i++) {
   self::Calculate(
    [
'Operation' => 'PrimeNumber', 
'Value' => $i
        ]
);
     }
   } 
/*
 * @method Factorial calculation of a number
  */
public static function Factorial(int $number){
  if ($number == 0) return 1;
  return $number * self::Factorial($number - 1);
     }
 } 