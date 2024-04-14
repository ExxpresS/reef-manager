<?php

namespace App\Models\ModelBase;

use App\Models\Tanks;
use App\Models\Tests;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TestsBase
 * @package App\Models\ModelBase
 * 
 * @property integer $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon $deleted_at
 * @property float $ph
 * @property float $kh
 * @property float $ca
 * @property float $mg
 * @property float $temperature
 * @property float $densite
 * @property float $nitrate
 * @property float $phosphate
 * @property integer $tanks_id
 * @property Tanks $tanks
 */
class TestsBase extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tests';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'ph',

        'kh',

        'ca',

        'mg',

        'temperature',

        'densite',

        'nitrate',

        'phosphate',

        'tanks_id',

    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

    ];

    /**
     * @return string[]
     */
    public static function keys(): array
    {
        return [

            'id',

            'created_at',

            'updated_at',

            'deleted_at',

            'ph',

            'kh',

            'ca',

            'mg',

            'temperature',

            'densite',

            'nitrate',

            'phosphate',

            'tanks_id',

        ];
    }


    public function tanks()
    {
        return $this->belongsTo(Tanks::class);
    }

}
