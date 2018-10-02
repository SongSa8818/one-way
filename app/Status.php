<?php

namespace App;

use Enum;

abstract class Status extends enum
{
    const ACTIVE = 'Active';
    const INACTIVE = 'Inactive';
    const SHOWING = 'Showing';
    const OFFERING = 'Offering';
    const REQUESTED = 'Requested';
    const REJECT_OFFER = 'Rejected offer';
    const ACCEPT_OFFER = 'Accepted offer';
}