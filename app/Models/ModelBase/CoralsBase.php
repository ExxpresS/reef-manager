<?php

namespace App\Models\ModelBase;

use App\Models\Corals;
use App\Models\Tanks;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoralsBase
 * @package App\Models\ModelBase
 *
 * @property integer $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property string $name
 * @property string $date_add
 * @property integer $tanks_id
 * @property \Illuminate\Support\Carbon $deleted_at
 * @property Tanks $tanks
 */
class CoralsBase extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'corals';

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

        'name',

        'date_add',

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
        'date_add' =>'datetime'
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

            'name',

            'date_add',

            'tanks_id',

            'deleted_at',

        ];
    }


    public function tanks()
    {
        return $this->belongsTo(Tanks::class);
    }

}
