<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuotationsRequest;
use App\Http\Requests\UpdateQuotationsRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Quotations;
use App\Models\TaskOrders;
use App\Models\QuotationItems;
use Illuminate\Http\Request;
use Flash;
use Response;

class QuotationsController extends AppBaseController
{
    /**
     * Display a listing of the Quotations.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Quotations $quotations */
        $quotations = Quotations::paginate(50);

        return view('quotations.index')
            ->with('quotations', $quotations);
    }

    /**
     * Show the form for creating a new Quotations.
     *
     * @return Response
     */
    public function create()
    {
    // Fetch distinct TONumbers
    $tonumbers = QuotationItems::distinct()->pluck('TONumber');

    // Set the default selected TONumber (you can change this based on your requirement)
    $selectedTONumber = $tonumbers->first();

    // Fetch associated items with the required columns
    $quotationItemsByTONumber = [];
    foreach ($tonumbers as $tonumber) {
        $quotationItemsByTONumber[$tonumber] = QuotationItems::where('TONumber', $tonumber)
            ->get(['TONumber', 'TotalAmount', 'ItemName', 'ItemUnit', 'Quantity', 'UnitPrice']);
    }

    return view('quotations.create', compact('tonumbers', 'quotationItemsByTONumber', 'selectedTONumber'));
   }

    /**
     * Store a newly created Quotations in storage.
     *
     * @param CreateQuotationsRequest $request
     *
     * @return Response
     */
    public function store(CreateQuotationsRequest $request)
    {
        $input = $request->all();

        /** @var Quotations $quotations */
        $quotations = Quotations::create($input);

        Flash::success('Quotations saved successfully.');

        return redirect(route('quotations.index'));
    }

    /**
     * Display the specified Quotations.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Quotations $quotations */
        $quotations = Quotations::find($id);

        if (empty($quotations)) {
            Flash::error('Quotations not found');

            return redirect(route('quotations.index'));
        }

        return view('quotations.show')->with('quotations', $quotations);
    }

    /**
     * Show the form for editing the specified Quotations.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Quotations $quotations */
        $quotations = Quotations::find($id);

        if (empty($quotations)) {
            Flash::error('Quotations not found');

            return redirect(route('quotations.index'));
        }

        return view('quotations.edit')->with('quotations', $quotations);
    }

    /**
     * Update the specified Quotations in storage.
     *
     * @param int $id
     * @param UpdateQuotationsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQuotationsRequest $request)
    {
        /** @var Quotations $quotations */
        $quotations = Quotations::find($id);

        if (empty($quotations)) {
            Flash::error('Quotations not found');

            return redirect(route('quotations.index'));
        }

        $quotations->fill($request->all());
        $quotations->save();

        Flash::success('Quotations updated successfully.');

        return redirect(route('quotations.index'));
    }

    /**
     * Remove the specified Quotations from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Quotations $quotations */
        $quotations = Quotations::find($id);

        if (empty($quotations)) {
            Flash::error('Quotations not found');

            return redirect(route('quotations.index'));
        }

        $quotations->delete();

        Flash::success('Quotations deleted successfully.');

        return redirect(route('quotations.index'));
    }
}
