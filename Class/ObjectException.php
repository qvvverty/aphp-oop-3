<?php
class ObjectException extends Exception
{
  protected $code = 6;
  protected $message = 'Error! Object type argument passed.' . PHP_EOL;
}