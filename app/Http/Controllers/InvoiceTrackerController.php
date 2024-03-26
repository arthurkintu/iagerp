<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInvoiceTrackerRequest;
use App\Http\Requests\UpdateInvoiceTrackerRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\InvoiceTracker;
use Illuminate\Http\Request;
use App\Models\TaskOrders;

use Flash;
use Response;

class InvoiceTrackerController extends AppBaseController
{
    /**
     * Display a listing of the InvoiceTracker.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var InvoiceTracker $invoiceTrackers */
        $invoiceTrackers = InvoiceTracker::paginate(10);

        return view('invoice_trackers.index')
            ->with('invoiceTrackers', $invoiceTrackers);
    }

    /**
     * Show the form for creating a new InvoiceTracker.
     *
     * @return Response
     */
    public function create()
    {
    // Fetch task order data grouped by TONumber
    $taskOrdersByTONumber = TaskOrders::select('TONumber', 'TODescription', 'TOAmount', 'Location')
        ->get()
        ->groupBy('TONumber')
        ->toArray();

    return view('invoice_trackers.create', compact('taskOrdersByTONumber'));
    }

    /**
     * Store a newly created InvoiceTracker in storage.
     *
     * @param CreateInvoiceTrackerRequest $request
     *
     * @return Response
     */
    public function store(CreateInvoiceTrackerRequest $request)
    {
        $input = $request->all();

        /** @var InvoiceTracker $invoiceTracker */
        $invoiceTracker = InvoiceTracker::create($input);

        Flash::success('Invoice Tracker saved successfully.');

        return redirect(route('invoiceTrackers.index'));
    }

    /**
     * Display the specified InvoiceTracker.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var InvoiceTracker $invoiceTracker */
        $invoiceTracker = InvoiceTracker::find($id);

        if (empty($invoiceTracker)) {
            Flash::error('Invoice Tracker not found');

            return redirect(route('invoiceTrackers.index'));
        }

        return view('invoice_trackers.show')->with('invoiceTracker', $invoiceTracker);
    }


    /**
     * Show the form for editing the specified InvoiceTracker.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var InvoiceTracker $invoiceTracker */
        $invoiceTracker = InvoiceTracker::find($id);

        if (empty($invoiceTracker)) {
            Flash::error('Invoice Tracker not found');

            return redirect(route('invoiceTrackers.index'));
        }

        return view('invoice_trackers.edit')->with('invoiceTracker', $invoiceTracker);
    }

    /**
     * Update the specified InvoiceTracker in storage.
     *
     * @param int $id
     * @param UpdateInvoiceTrackerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInvoiceTrackerRequest $request)
    {
        /** @var InvoiceTracker $invoiceTracker */
        $invoiceTracker = InvoiceTracker::find($id);

        if (empty($invoiceTracker)) {
            Flash::error('Invoice Tracker not found');

            return redirect(route('invoiceTrackers.index'));
        }

        $invoiceTracker->fill($request->all());
        $invoiceTracker->save();

        Flash::success('Invoice Tracker updated successfully.');

        return redirect(route('invoiceTrackers.index'));
    }

    /**
     * Remove the specified InvoiceTracker from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var InvoiceTracker $invoiceTracker */
        $invoiceTracker = InvoiceTracker::find($id);

        if (empty($invoiceTracker)) {
            Flash::error('Invoice Tracker not found');

            return redirect(route('invoiceTrackers.index'));
        }

        $invoiceTracker->delete();

        Flash::success('Invoice Tracker deleted successfully.');

        return redirect(route('invoiceTrackers.index'));
    }
}
