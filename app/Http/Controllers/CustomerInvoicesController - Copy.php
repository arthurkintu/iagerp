<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCustomerInvoicesRequest;
use App\Http\Requests\UpdateCustomerInvoicesRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\CustomerInvoices;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\TaskOrders;

class CustomerInvoicesController extends AppBaseController
{
    /**
     * Display a listing of the CustomerInvoices.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var CustomerInvoices $customerInvoices */
        $customerInvoices = CustomerInvoices::paginate(30);

        return view('customer_invoices.index')
            ->with('customerInvoices', $customerInvoices);
    }

    /**
     * Show the form for creating a new CustomerInvoices.
     *
     * @return Response
     */
    public function create()
    {
        // Fetch task orders only if they're not already fetched
        if (!isset($taskOrders)) {
            // Pluck TONumber from TaskOrders
            $taskOrders = TaskOrders::pluck('TONumber', 'TONumber');
        }
    
        // Fetch task orders with TOAmount and merge with existing task orders
        $taskOrdersWithAmount = TaskOrders::pluck('TOAmount', 'TONumber');
    
        // Merge the two arrays, ensuring that TOAmount is not overwritten
        foreach ($taskOrdersWithAmount as $tonumber => $TOAmount) {
            if (!isset($taskOrders[$tonumber])) {
                $taskOrders[$tonumber] = $TOAmount;
            }
        }
    
        // Fetch Contract Numbers from the "contracts" table
        $contracts = Contracts::pluck('ContractNo', 'ContractNo');
    
        return view('customer_invoices.create', compact('taskOrders', 'contracts'));
    }
    


    
    /**
     * Store a newly created CustomerInvoices in storage.
     *
     * @param CreateCustomerInvoicesRequest $request
     *
     * @return Response
     */
    public function store(CreateCustomerInvoicesRequest $request)
    {
        $input = $request->all();

        /** @var CustomerInvoices $customerInvoices */
        $customerInvoices = CustomerInvoices::create($input);

        Flash::success('Customer Invoices saved successfully.');

        return redirect(route('customerInvoices.index'));
    }

    /**
     * Display the specified CustomerInvoices.
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
            Flash::error('Customer Invoices not found');

            return redirect(route('customerInvoices.index'));
        }

        return view('customer_invoices.show')->with('customerInvoices', $customerInvoices);
    }

    /**
     * Show the form for editing the specified CustomerInvoices.
     *
     * @param int $id
     *
     * @return Response
     */


    public function edit($id)
{
    $customerInvoices = CustomerInvoices::find($id);

    if (empty($customerInvoices)) {
        Flash::error('Customer Invoices not found');
        return redirect(route('customerInvoices.index'));
    }

    $taskOrders = TaskOrders::pluck('TONumber', 'TONumber');

    return view('customer_invoices.edit', compact('customerInvoices', 'taskOrders'));
}

    

    /**
     * Update the specified CustomerInvoices in storage.
     *
     * @param int $id
     * @param UpdateCustomerInvoicesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCustomerInvoicesRequest $request)
    {
        /** @var CustomerInvoices $customerInvoices */
        $customerInvoices = CustomerInvoices::find($id);

        if (empty($customerInvoices)) {
            Flash::error('Customer Invoices not found');

            return redirect(route('customerInvoices.index'));
        }

        $customerInvoices->fill($request->all());
        $customerInvoices->save();

        Flash::success('Customer Invoices updated successfully.');

        return redirect(route('customerInvoices.index'));
    }

    /**
     * Remove the specified CustomerInvoices from storage.
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
            Flash::error('Customer Invoices not found');

            return redirect(route('customerInvoices.index'));
        }

        $customerInvoices->delete();

        Flash::success('Customer Invoices deleted successfully.');

        return redirect(route('customerInvoices.index'));
    }




    public function fetchTOAmount(Request $request)
{
    // Fetch the TOAmount corresponding to the selected TONumber
    $toAmount = TaskOrders::where('TONumber', $request->tonumber)->value('TOAmount');

    // Return the TOAmount as JSON response
    return response()->json(['TOAmount' => $TOAmount]);
}

}





