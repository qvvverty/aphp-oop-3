<?php
//declare(strict_types=1);
include_once 'utils/checkVars.php';

function sum($a, $b): int
{
  checkVars(func_get_args(), 'integer');
  return $a + $b;
}

function concatStrings($str1, $str2): string
{
  checkVars(func_get_args(), 'string');
  return $str1 . ' ' . $str2 . PHP_EOL;
}

try {
  echo sum(1, 2.5) . PHP_EOL;
} catch (Exception $exception) {
  echo $exception->getMessage();
}

try {
  echo concatStrings('Something', 1);
} catch (Exception $exception) {
  echo $exception->getMessage();
}