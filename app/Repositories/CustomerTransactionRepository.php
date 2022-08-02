<?php

namespace App\Repositories;

use App\Models\CustomerTransaction;
use App\Repositories\BaseRepository;

/**
 * Class CustomerTransactionRepository
 * @package App\Repositories
 * @version August 2, 2022, 7:23 am UTC
*/

class CustomerTransactionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CustomerTransaction::class;
    }
}
