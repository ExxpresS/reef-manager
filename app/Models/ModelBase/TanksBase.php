<?php

namespace App\Models\ModelBase;

use App\Models\Corals;
use App\Models\Fishs;
use App\Models\Tanks;
use App\Models\Tests;
use App\Models\Users;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TanksBase
 * @package App\Models\ModelBase
 *
 * @property integer $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property integer $litre
 * @property string $title
 * @property \Illuminate\Support\Carbon $date_add
 * @property integer $user_id
 * @property \Illuminate\Support\Carbon $deleted_at
 * @property Fishs[] $fishs
 * @property Corals[] $corals
 * @property Tests[] $tests
 * @property Users $users
 */
class TanksBase extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tanks';

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

        'litre',

        'title',

        'date_add',

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

            'litre',

            'title',

            'date_add',

            'user_id',

            'deleted_at',

        ];
    }


    public function fishs()
    {
        return $this->hasMany(Fishs::class);
    }

    public function corals()
    {
        return $this->hasMany(Corals::class);
    }

    public function tests()
    {
        return $this->hasMany(Tests::class);
    }

    public function users()
    {
        return $this->belongsTo(Users::class);
    }

}
