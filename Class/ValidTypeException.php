<?php
// in case of passing invalid parameter into checkVars
class ValidTypeException extends Exception
{
  protected $code = 0;
  protected $message = 'Error! Incorrect type parameter.' . PHP_EOL;
}