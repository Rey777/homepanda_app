<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCustomerAPIRequest;
use App\Http\Requests\API\UpdateCustomerAPIRequest;
use App\Models\Customer;
use App\Repositories\CustomerRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class CustomerController
 * @package App\Http\Controllers\API
 */

class CustomerAPIController extends AppBaseController
{
    /** @var  CustomerRepository */
    private $customerRepository;

    public function __construct(CustomerRepository $customerRepo)
    {
        $this->customerRepository = $customerRepo;
    }

    /**
     * Display the specified Customer Transaction.
     * GET|HEAD /customers/{id}/transactions
     *
     * @param int $id
     *
     * @return Response
     */
    public function transactions($id)
    {
        /** @var Customer $customer */
        $customer = $this->customerRepository->find($id);
        $customer->convertTransactions();

        if (empty($customer)) {
            return $this->sendError('Customer not found');
        }

        return $this->sendResponse($customer->transactions->toArray(), 'Customer transactions retrieved successfully');
    }
}
