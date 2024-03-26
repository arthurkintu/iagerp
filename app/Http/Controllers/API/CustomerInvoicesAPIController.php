<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCustomerInvoicesAPIRequest;
use App\Http\Requests\API\UpdateCustomerInvoicesAPIRequest;
use App\Models\CustomerInvoices;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\CustomerInvoicesResource;
use Response;

/**
 * Class CustomerInvoicesController
 * @package App\Http\Controllers\API
 */

class CustomerInvoicesAPIController extends AppBaseController
{
    /**
     * Display a listing of the CustomerInvoices.
     * GET|HEAD /customerInvoices
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = CustomerInvoices::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $customerInvoices = $query->get();

        return $this->sendResponse(CustomerInvoicesResource::collection($customerInvoices), 'Customer Invoices retrieved successfully');
    }

    /**
     * Store a newly created CustomerInvoices in storage.
     * POST /customerInvoices
     *
     * @param CreateCustomerInvoicesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCustomerInvoicesAPIRequest $request)
    {
        $input = $request->all();

        /** @var CustomerInvoices $customerInvoices */
        $customerInvoices = CustomerInvoices::create($input);

        return $this->sendResponse(new CustomerInvoicesResource($customerInvoices), 'Customer Invoices saved successfully');
    }

    /**
     * Display the specified CustomerInvoices.
     * GET|HEAD /customerInvoices/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var CustomerInvoices $customerInvoices */
        $customerInvoices = CustomerInvoices::find($id);

        if (empty($customerInvoices)) {
            return $this->sendError('Customer Invoices not found');
        }

        return $this->sendResponse(new CustomerInvoicesResource($customerInvoices), 'Customer Invoices retrieved successfully');
    }

    /**
     * Update the specified CustomerInvoices in storage.
     * PUT/PATCH /customerInvoices/{id}
     *
     * @param int $id
     * @param UpdateCustomerInvoicesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCustomerInvoicesAPIRequest $request)
    {
        /** @var CustomerInvoices $customerInvoices */
        $customerInvoices = CustomerInvoices::find($id);

        if (empty($customerInvoices)) {
            return $this->sendError('Customer Invoices not found');
        }

        $customerInvoices->fill($request->all());
        $customerInvoices->save();

        return $this->sendResponse(new CustomerInvoicesResource($customerInvoices), 'CustomerInvoices updated successfully');
    }

    /**
     * Remove the specified CustomerInvoices from storage.
     * DELETE /customerInvoices/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var CustomerInvoices $customerInvoices */
        $customerInvoices = CustomerInvoices::find($id);

        if (empty($customerInvoices)) {
            return $this->sendError('Customer Invoices not found');
        }

        $customerInvoices->delete();

        return $this->sendSuccess('Customer Invoices deleted successfully');
    }
}
