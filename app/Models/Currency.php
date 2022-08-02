<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Currency
 * @package App\Models
 * @version August 2, 2022, 1:15 pm UTC
 *
 */
class Currency extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'currencies';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name', 
        'code',         
        'symbol'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name'  => 'string',
        'code'  => 'string',
        'symbol'=> 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
