<?php

abstract class Enum {
  static function getKeys(){
    $class = new ReflectionClass(get_called_class());
    return $class->getConstants();
  }
}