<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * Class CustomerTransaction
 * @package App\Models
 * @version August 2, 2022, 7:23 am UTC
 *
 */
class CustomerTransaction extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'customer_transactions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'date',
        'value',
        'currency_code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'date' => 'date',
        'value' => 'decimal:2',
        'currency_code' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'date' => 'date',
        'value' => 'numeric',
        'currency_code' => 'size:3',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function currency()
    {
        return $this->hasOne(\App\Models\Currency::class, 'code', 'currency_code');
    }

    /**
     * Convert transaction in EUR currency
     */
    public function convert()
    {
        
        try{
            //call Exchange convert service 
            $response = Http::withHeaders([
                'apikey' => env("API_LAYER_KEY", ""),
            ])->get(
                env("API_CONVERT_ENDPOINT", "")."/convert"
            );

            $result = $response->json();

            //check if successfully convert to EUR currency and update customer transaction value
            if($result["success"]){
                $this->value = $this->value * $result["rate"];
                $this->currency_code = "EUR";
            }
            else
                Log::error("Exchange Services error");
        }
        catch(ConnectionException $e){
            Log::error("Exchange Services unavalaible (".$e->getMessage().")");
        }
    }


}
