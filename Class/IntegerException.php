<?php
class IntegerException extends Exception
{
  protected $code = 1;
  protected $message = 'Error! Int type argument passed.' . PHP_EOL;
}