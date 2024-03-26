<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCustomerInvoicesRequest;
use App\Http\Requests\UpdateCustomerInvoicesRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\CustomerInvoices;
use Illuminate\Http\Request;
use App\Models\TaskOrders;
use Flash;
use Response;

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
        $query = CustomerInvoices::query();

        if ($request->has('contract_number')) {
            $query->where('ContractNumber', 'like', '%' . $request->input('contract_number') . '%');
        }

        if ($request->has('invoice_status')) {
            $query->where('InvoiceStatus', $request->input('invoice_status'));
        }

        if ($request->has('invoice_group')) {
            $query->where('InvoiceGroup', $request->input('invoice_group'));
        }

        $customerInvoices = $query->paginate(30);

        $invoiceStatusOptions = CustomerInvoices::pluck('InvoiceStatus', 'InvoiceStatus');
        $invoiceGroupOptions = CustomerInvoices::pluck('InvoiceGroup', 'InvoiceGroup');

        return view('customer_invoices.index', compact('customerInvoices', 'invoiceStatusOptions', 'invoiceGroupOptions'));
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
        foreach ($taskOrdersWithAmount as $tonumber => $toamount) {
            if (!isset($taskOrders[$tonumber])) {
                $taskOrders[$tonumber] = $toamount;
            }
        }
    
        // Pass the task orders to the view
        return view('customer_invoices.create', compact('taskOrders'));




        
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
    // Find the customer invoice by its ID
    $customerInvoices = CustomerInvoices::find($id);

    // Check if the customer invoice is not found
    if (empty($customerInvoices)) {
        // If not found, display an error message and redirect
        Flash::error('Customer Invoices not found');
        return redirect(route('customerInvoices.index'));
    }

    // Fetch task orders
    $taskOrders = TaskOrders::pluck('TONumber', 'TONumber');

    // Pass the customer invoice and task orders to the edit view
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

    // Fetch the corresponding ContractNo
    $contractNo = TaskOrders::where('TONumber', $request->tonumber)->value('ContractNo');

    // Return the TOAmount and ContractNo as JSON response
    return response()->json(['TOAmount' => $toAmount, 'ContractNo' => $contractNo]);
}




}
