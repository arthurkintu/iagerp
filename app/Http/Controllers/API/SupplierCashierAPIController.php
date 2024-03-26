<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSupplierCashierAPIRequest;
use App\Http\Requests\API\UpdateSupplierCashierAPIRequest;
use App\Models\SupplierCashier;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\SupplierCashierResource;
use Response;

/**
 * Class SupplierCashierController
 * @package App\Http\Controllers\API
 */

class SupplierCashierAPIController extends AppBaseController
{
    /**
     * Display a listing of the SupplierCashier.
     * GET|HEAD /supplierCashiers
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = SupplierCashier::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $supplierCashiers = $query->get();

        return $this->sendResponse(SupplierCashierResource::collection($supplierCashiers), 'Supplier Cashiers retrieved successfully');
    }

    /**
     * Store a newly created SupplierCashier in storage.
     * POST /supplierCashiers
     *
     * @param CreateSupplierCashierAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateSupplierCashierAPIRequest $request)
    {
        $input = $request->all();

        /** @var SupplierCashier $supplierCashier */
        $supplierCashier = SupplierCashier::create($input);

        return $this->sendResponse(new SupplierCashierResource($supplierCashier), 'Supplier Cashier saved successfully');
    }

    /**
     * Display the specified SupplierCashier.
     * GET|HEAD /supplierCashiers/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var SupplierCashier $supplierCashier */
        $supplierCashier = SupplierCashier::find($id);

        if (empty($supplierCashier)) {
            return $this->sendError('Supplier Cashier not found');
        }

        return $this->sendResponse(new SupplierCashierResource($supplierCashier), 'Supplier Cashier retrieved successfully');
    }

    /**
     * Update the specified SupplierCashier in storage.
     * PUT/PATCH /supplierCashiers/{id}
     *
     * @param int $id
     * @param UpdateSupplierCashierAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSupplierCashierAPIRequest $request)
    {
        /** @var SupplierCashier $supplierCashier */
        $supplierCashier = SupplierCashier::find($id);

        if (empty($supplierCashier)) {
            return $this->sendError('Supplier Cashier not found');
        }

        $supplierCashier->fill($request->all());
        $supplierCashier->save();

        return $this->sendResponse(new SupplierCashierResource($supplierCashier), 'SupplierCashier updated successfully');
    }

    /**
     * Remove the specified SupplierCashier from storage.
     * DELETE /supplierCashiers/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var SupplierCashier $supplierCashier */
        $supplierCashier = SupplierCashier::find($id);

        if (empty($supplierCashier)) {
            return $this->sendError('Supplier Cashier not found');
        }

        $supplierCashier->delete();

        return $this->sendSuccess('Supplier Cashier deleted successfully');
    }
}
