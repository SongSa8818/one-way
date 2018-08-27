<?php

namespace App;

use Enum;

abstract class Active extends enum
{
  const ACTIVE = 'active';
  const INACTIVE = 'inactive';
}