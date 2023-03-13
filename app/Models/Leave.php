<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Leave
 * @package App\Models
 * @version March 11, 2023, 4:01 pm UTC
 *
 * @property integer $user_id
 * @property string|\Carbon\Carbon $from_datetime
 * @property string|\Carbon\Carbon $to_datetime
 */
class Leave extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'leaves';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'from_datetime',
        'to_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'from_datetime' => 'required',
        'to_datetime' => 'required'
    ];

    
}
