<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSupplierInvoicesAPIRequest;
use App\Http\Requests\API\UpdateSupplierInvoicesAPIRequest;
use App\Models\SupplierInvoices;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\SupplierInvoicesResource;
use Response;

/**
 * Class SupplierInvoicesController
 * @package App\Http\Controllers\API
 */

class SupplierInvoicesAPIController extends AppBaseController
{
    /**
     * Display a listing of the SupplierInvoices.
     * GET|HEAD /supplierInvoices
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = SupplierInvoices::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $supplierInvoices = $query->get();

        return $this->sendResponse(SupplierInvoicesResource::collection($supplierInvoices), 'Supplier Invoices retrieved successfully');
    }

    /**
     * Store a newly created SupplierInvoices in storage.
     * POST /supplierInvoices
     *
     * @param CreateSupplierInvoicesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateSupplierInvoicesAPIRequest $request)
    {
        $input = $request->all();

        /** @var SupplierInvoices $supplierInvoices */
        $supplierInvoices = SupplierInvoices::create($input);

        return $this->sendResponse(new SupplierInvoicesResource($supplierInvoices), 'Supplier Invoices saved successfully');
    }

    /**
     * Display the specified SupplierInvoices.
     * GET|HEAD /supplierInvoices/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var SupplierInvoices $supplierInvoices */
        $supplierInvoices = SupplierInvoices::find($id);

        if (empty($supplierInvoices)) {
            return $this->sendError('Supplier Invoices not found');
        }

        return $this->sendResponse(new SupplierInvoicesResource($supplierInvoices), 'Supplier Invoices retrieved successfully');
    }

    /**
     * Update the specified SupplierInvoices in storage.
     * PUT/PATCH /supplierInvoices/{id}
     *
     * @param int $id
     * @param UpdateSupplierInvoicesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSupplierInvoicesAPIRequest $request)
    {
        /** @var SupplierInvoices $supplierInvoices */
        $supplierInvoices = SupplierInvoices::find($id);

        if (empty($supplierInvoices)) {
            return $this->sendError('Supplier Invoices not found');
        }

        $supplierInvoices->fill($request->all());
        $supplierInvoices->save();

        return $this->sendResponse(new SupplierInvoicesResource($supplierInvoices), 'SupplierInvoices updated successfully');
    }

    /**
     * Remove the specified SupplierInvoices from storage.
     * DELETE /supplierInvoices/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var SupplierInvoices $supplierInvoices */
        $supplierInvoices = SupplierInvoices::find($id);

        if (empty($supplierInvoices)) {
            return $this->sendError('Supplier Invoices not found');
        }

        $supplierInvoices->delete();

        return $this->sendSuccess('Supplier Invoices deleted successfully');
    }
}
