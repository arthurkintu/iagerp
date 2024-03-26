<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuotationItemsRequest;
use App\Http\Requests\UpdateQuotationItemsRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\QuotationItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Flash;
use Response;

class QuotationItemsController extends AppBaseController
{
    /**
     * Display a listing of the QuotationItems.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // Retrieve the totals by TONumber
        $totalsByTONumber = QuotationItems::select('TONumber', DB::raw('SUM(TotalAmount) as total'))
            ->groupBy('TONumber')
            ->pluck('total', 'TONumber');

        // Retrieve the paginated list of QuotationItems
        $quotationItems = QuotationItems::paginate(10);

        return view('quotation_items.index')
            ->with('quotationItems', $quotationItems)
            ->with('totalsByTONumber', $totalsByTONumber);
            
    }

    /**
     * Show the form for creating a new QuotationItems.
     *
     * @return Response
     */
    public function create()
    {
        return view('quotation_items.create');
    }

    /**
     * Store a newly created QuotationItems in storage.
     *
     * @param CreateQuotationItemsRequest $request
     *
     * @return Response
     */
    public function store(CreateQuotationItemsRequest $request)
    {
        $input = $request->all();

        /** @var QuotationItems $quotationItems */
        $quotationItems = QuotationItems::create($input);

        Flash::success('Quotation Items saved successfully.');

        return redirect(route('quotationItems.index'));
    }

    /**
     * Display the specified QuotationItems.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var QuotationItems $quotationItems */
        $quotationItems = QuotationItems::find($id);

        if (empty($quotationItems)) {
            Flash::error('Quotation Items not found');

            return redirect(route('quotationItems.index'));
        }

        return view('quotation_items.show')->with('quotationItems', $quotationItems);
    }

    /**
     * Show the form for editing the specified QuotationItems.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var QuotationItems $quotationItems */
        $quotationItems = QuotationItems::find($id);

        if (empty($quotationItems)) {
            Flash::error('Quotation Items not found');

            return redirect(route('quotationItems.index'));
        }

        return view('quotation_items.edit')->with('quotationItems', $quotationItems);
    }

    /**
     * Update the specified QuotationItems in storage.
     *
     * @param int $id
     * @param UpdateQuotationItemsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQuotationItemsRequest $request)
    {
        /** @var QuotationItems $quotationItems */
        $quotationItems = QuotationItems::find($id);

        if (empty($quotationItems)) {
            Flash::error('Quotation Items not found');

            return redirect(route('quotationItems.index'));
        }

        $quotationItems->fill($request->all());
        $quotationItems->save();

        Flash::success('Quotation Items updated successfully.');

        return redirect(route('quotationItems.index'));
    }

    /**
     * Remove the specified QuotationItems from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var QuotationItems $quotationItems */
        $quotationItems = QuotationItems::find($id);

        if (empty($quotationItems)) {
            Flash::error('Quotation Items not found');

            return redirect(route('quotationItems.index'));
        }

        $quotationItems->delete();

        Flash::success('Quotation Items deleted successfully.');

        return redirect(route('quotationItems.index'));
    }
}
