<?php
class StringException extends Exception
{
  protected $code = 3;
  protected $message = 'Error! String type argument passed.' . PHP_EOL;
}