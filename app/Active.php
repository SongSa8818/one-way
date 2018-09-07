<?php

namespace App;

use Enum;

abstract class Active extends enum
{
    const ACTIVE = 'Active';
    const INACTIVE = 'Inactive';
    const SHOWING = 'Showing';
    const OFFERING = 'Offering';
    const REQUESTED = 'Requested';
    const REJECT_OFFER = 'Requested';
}