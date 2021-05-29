<?php
include_once 'Class/IntegerException.php';
include_once 'Class/FloatException.php';
include_once 'Class/StringException.php';
include_once 'Class/BooleanException.php';
include_once 'Class/ArrayException.php';
include_once 'Class/ObjectException.php';
include_once 'Class/ValidTypeException.php'; // in case of passing invalid parameter into checkVars

/**
 * @param array $args
 * @param string ...$validTypes could be 'integer', 'float', 'string', 'boolean', 'array' and 'object'
 * @throws ValidTypeException
 */
function checkVars(array $args, string ...$validTypes): void
{
  $validParams = [
    'integer',
    'float',
    'string',
    'boolean',
    'array',
    'object'
  ];

  // validate type parameter
  foreach ($validTypes as $param) {
    if (!in_array($param, $validParams)) {
      throw new ValidTypeException();
    }
  }

  foreach ($args as $arg) {
    $argType = gettype($arg);
    if ($argType === 'double') {
      $argType = 'float';
    }

    if (!in_array($argType, $validTypes, true)) {
      $exceptionClass = ucfirst($argType) . 'Exception';
      throw new $exceptionClass();
    }
  }
}