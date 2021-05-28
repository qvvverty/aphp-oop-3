<?php
class ArrayException extends Exception
{
  protected $code = 5;
  protected $message = 'Error! Array type argument passed.' . PHP_EOL;
}