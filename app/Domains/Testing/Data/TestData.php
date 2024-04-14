<?php

namespace App\Domains\Testing\Data;

use Spatie\LaravelData\Data;

class TestData extends Data
{
    public function __construct(

        public int    $id,
        public ?float $ph,
        public ?float $kh,
        public ?float $ca,
        public ?float $mg,
        public ?float $temperature,
        public ?float $densite,
        public ?float $nitrate,
        public ?float $phosphate,
        public int    $tanks_id
    )
    {
    }
}
