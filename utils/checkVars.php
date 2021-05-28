<?php
include_once 'Class/IntegerException.php';
include_once 'Class/FloatException.php';
include_once 'Class/StringException.php';
include_once 'Class/BooleanException.php';
include_once 'Class/ArrayException.php';
include_once 'Class/ObjectException.php';

/**
 * @param array $args
 * @param string ...$validTypes could be 'integer', 'float', 'string', 'boolean', 'array' and 'object'
 */
function checkVars(array $args, string ...$validTypes): void
{
  foreach ($args as $arg) {
    $argType = gettype($arg);
    if ($argType === 'double') {
      $argType = 'float';
    }

    if (!in_array($argType, $validTypes)) {
      $exceptionClass = ucfirst($argType) . 'Exception';
      throw new $exceptionClass();
    }
  }
}