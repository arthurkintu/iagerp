<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSupplierInvoicesRequest;
use App\Http\Requests\UpdateSupplierInvoicesRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\SupplierInvoices;
use Illuminate\Http\Request;
use Flash;
use Response;

class SupplierInvoicesController extends AppBaseController
{
    /**
     * Display a listing of the SupplierInvoices.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var SupplierInvoices $supplierInvoices */
        $supplierInvoices = SupplierInvoices::paginate(10);

        return view('supplier_invoices.index')
            ->with('supplierInvoices', $supplierInvoices);
    }

    /**
     * Show the form for creating a new SupplierInvoices.
     *
     * @return Response
     */
    public function create()
    {
        return view('supplier_invoices.create');
    }

    /**
     * Store a newly created SupplierInvoices in storage.
     *
     * @param CreateSupplierInvoicesRequest $request
     *
     * @return Response
     */
    public function store(CreateSupplierInvoicesRequest $request)
    {
        $input = $request->all();

        /** @var SupplierInvoices $supplierInvoices */
        $supplierInvoices = SupplierInvoices::create($input);

        Flash::success('Supplier Invoices saved successfully.');

        return redirect(route('supplierInvoices.index'));
    }

    /**
     * Display the specified SupplierInvoices.
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
            Flash::error('Supplier Invoices not found');

            return redirect(route('supplierInvoices.index'));
        }

        return view('supplier_invoices.show')->with('supplierInvoices', $supplierInvoices);
    }

    /**
     * Show the form for editing the specified SupplierInvoices.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var SupplierInvoices $supplierInvoices */
        $supplierInvoices = SupplierInvoices::find($id);

        if (empty($supplierInvoices)) {
            Flash::error('Supplier Invoices not found');

            return redirect(route('supplierInvoices.index'));
        }

        return view('supplier_invoices.edit')->with('supplierInvoices', $supplierInvoices);
    }

    /**
     * Update the specified SupplierInvoices in storage.
     *
     * @param int $id
     * @param UpdateSupplierInvoicesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSupplierInvoicesRequest $request)
    {
        /** @var SupplierInvoices $supplierInvoices */
        $supplierInvoices = SupplierInvoices::find($id);

        if (empty($supplierInvoices)) {
            Flash::error('Supplier Invoices not found');

            return redirect(route('supplierInvoices.index'));
        }

        $supplierInvoices->fill($request->all());
        $supplierInvoices->save();

        Flash::success('Supplier Invoices updated successfully.');

        return redirect(route('supplierInvoices.index'));
    }

    /**
     * Remove the specified SupplierInvoices from storage.
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
            Flash::error('Supplier Invoices not found');

            return redirect(route('supplierInvoices.index'));
        }

        $supplierInvoices->delete();

        Flash::success('Supplier Invoices deleted successfully.');

        return redirect(route('supplierInvoices.index'));
    }
}
