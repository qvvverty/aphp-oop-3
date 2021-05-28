<?php
class BooleanException extends Exception
{
  protected $code = 4;
  protected $message = 'Error! Boolean type argument passed.' . PHP_EOL;
}