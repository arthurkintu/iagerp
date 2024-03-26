<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePurchaseOrdersAPIRequest;
use App\Http\Requests\API\UpdatePurchaseOrdersAPIRequest;
use App\Models\PurchaseOrders;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\PurchaseOrdersResource;
use Response;

/**
 * Class PurchaseOrdersController
 * @package App\Http\Controllers\API
 */

class PurchaseOrdersAPIController extends AppBaseController
{
    /**
     * Display a listing of the PurchaseOrders.
     * GET|HEAD /purchaseOrders
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = PurchaseOrders::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $purchaseOrders = $query->get();

        return $this->sendResponse(PurchaseOrdersResource::collection($purchaseOrders), 'Purchase Orders retrieved successfully');
    }

    /**
     * Store a newly created PurchaseOrders in storage.
     * POST /purchaseOrders
     *
     * @param CreatePurchaseOrdersAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePurchaseOrdersAPIRequest $request)
    {
        $input = $request->all();

        /** @var PurchaseOrders $purchaseOrders */
        $purchaseOrders = PurchaseOrders::create($input);

        return $this->sendResponse(new PurchaseOrdersResource($purchaseOrders), 'Purchase Orders saved successfully');
    }

    /**
     * Display the specified PurchaseOrders.
     * GET|HEAD /purchaseOrders/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var PurchaseOrders $purchaseOrders */
        $purchaseOrders = PurchaseOrders::find($id);

        if (empty($purchaseOrders)) {
            return $this->sendError('Purchase Orders not found');
        }

        return $this->sendResponse(new PurchaseOrdersResource($purchaseOrders), 'Purchase Orders retrieved successfully');
    }

    /**
     * Update the specified PurchaseOrders in storage.
     * PUT/PATCH /purchaseOrders/{id}
     *
     * @param int $id
     * @param UpdatePurchaseOrdersAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePurchaseOrdersAPIRequest $request)
    {
        /** @var PurchaseOrders $purchaseOrders */
        $purchaseOrders = PurchaseOrders::find($id);

        if (empty($purchaseOrders)) {
            return $this->sendError('Purchase Orders not found');
        }

        $purchaseOrders->fill($request->all());
        $purchaseOrders->save();

        return $this->sendResponse(new PurchaseOrdersResource($purchaseOrders), 'PurchaseOrders updated successfully');
    }

    /**
     * Remove the specified PurchaseOrders from storage.
     * DELETE /purchaseOrders/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var PurchaseOrders $purchaseOrders */
        $purchaseOrders = PurchaseOrders::find($id);

        if (empty($purchaseOrders)) {
            return $this->sendError('Purchase Orders not found');
        }

        $purchaseOrders->delete();

        return $this->sendSuccess('Purchase Orders deleted successfully');
    }
}
