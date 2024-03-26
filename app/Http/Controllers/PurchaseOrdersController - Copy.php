<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePurchaseOrdersRequest;
use App\Http\Requests\UpdatePurchaseOrdersRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\PurchaseOrders;
use App\Models\QuotationItems;
use App\Models\TaskOrders;
use Illuminate\Http\Request;
use Flash;
use Response;

class PurchaseOrdersController extends AppBaseController
{
    /**
     * Display a listing of the PurchaseOrders.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var PurchaseOrders $purchaseOrders */
        $purchaseOrders = PurchaseOrders::paginate(15);

        return view('purchase_orders.index')
            ->with('purchaseOrders', $purchaseOrders);
    }

    /**
     * Show the form for creating a new PurchaseOrders.
     *
     * @return Response
     */
    public function create()
    {
        
    $quotationItemsByTONumber = QuotationItems::select('TONumber', 'QuotationNumber', 'TotalAmount')
    ->get()
    ->groupBy('TONumber')
    ->toArray();

return view('purchase_orders.create', compact('quotationItemsByTONumber'));
    }

    /**
     * Store a newly created PurchaseOrders in storage.
     *
     * @param CreatePurchaseOrdersRequest $request
     *
     * @return Response
     */
    public function store(CreatePurchaseOrdersRequest $request)
    {
        $input = $request->all();

        /** @var PurchaseOrders $purchaseOrders */
        $purchaseOrders = PurchaseOrders::create($input);

        Flash::success('Purchase Orders saved successfully.');

        return redirect(route('purchaseOrders.index'));
    }

    /**
     * Display the specified PurchaseOrders.
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
            Flash::error('Purchase Orders not found');

            return redirect(route('purchaseOrders.index'));
        }

        return view('purchase_orders.show')->with('purchaseOrders', $purchaseOrders);
    }

    /**
     * Show the form for editing the specified PurchaseOrders.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var PurchaseOrders $purchaseOrders */
        $purchaseOrders = PurchaseOrders::find($id);

        if (empty($purchaseOrders)) {
            Flash::error('Purchase Orders not found');

            return redirect(route('purchaseOrders.index'));
        }

        return view('purchase_orders.edit')->with('purchaseOrders', $purchaseOrders);
    }

    /**
     * Update the specified PurchaseOrders in storage.
     *
     * @param int $id
     * @param UpdatePurchaseOrdersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePurchaseOrdersRequest $request)
    {
        /** @var PurchaseOrders $purchaseOrders */
        $purchaseOrders = PurchaseOrders::find($id);

        if (empty($purchaseOrders)) {
            Flash::error('Purchase Orders not found');

            return redirect(route('purchaseOrders.index'));
        }

        $purchaseOrders->fill($request->all());
        $purchaseOrders->save();

        Flash::success('Purchase Orders updated successfully.');

        return redirect(route('purchaseOrders.index'));
    }

    /**
     * Remove the specified PurchaseOrders from storage.
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
            Flash::error('Purchase Orders not found');

            return redirect(route('purchaseOrders.index'));
        }

        $purchaseOrders->delete();

        Flash::success('Purchase Orders deleted successfully.');

        return redirect(route('purchaseOrders.index'));
    }
}
