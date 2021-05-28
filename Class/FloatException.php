<?php
class FloatException extends Exception
{
  protected $code = 2;
  protected $message = 'Error! Float type argument passed.' . PHP_EOL;
}