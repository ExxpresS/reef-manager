<?php

namespace App\Domains\Tank\Data;

use Carbon\Carbon;
use Spatie\LaravelData\Data;

/**
 * TankData
 */
class TankData extends Data
{
    public function __construct(
        public int    $id,
        public string $litre,
        public string $title,
        public Carbon $date_add,
        public int    $users_id
    )
    {
    }
}
