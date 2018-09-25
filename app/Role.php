<?php

namespace App;

use Enum;

abstract class Role extends enum
{
  const ADMIN = 'Admin';
  const AGENCY = 'Agency';
  const CUSTOMER = 'Customer';
}