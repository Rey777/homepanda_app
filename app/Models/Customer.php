<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Customer
 * @package App\Models
 * @version August 2, 2022, 7:22 am UTC
 *
 */
class Customer extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'customers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'max:255'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function transactions()
    {
        return $this->hasMany(\App\Models\CustomerTransaction::class);
    }


    /**
     * Convert all transaction in EUR currency
     */
    public function convertTransactions()
    {
        foreach($this->transactions as $transaction){
            $transaction->convert("EUR");
        }
    }

    
}
