<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSupplierCashierRequest;
use App\Http\Requests\UpdateSupplierCashierRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\SupplierCashier;
use Illuminate\Http\Request;
use Flash;
use Response;

class SupplierCashierController extends AppBaseController
{
    /**
     * Display a listing of the SupplierCashier.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var SupplierCashier $supplierCashiers */
        $supplierCashiers = SupplierCashier::paginate(10);

        return view('supplier_cashiers.index')
            ->with('supplierCashiers', $supplierCashiers);
    }

    /**
     * Show the form for creating a new SupplierCashier.
     *
     * @return Response
     */
    public function create()
    {
        return view('supplier_cashiers.create');
    }

    /**
     * Store a newly created SupplierCashier in storage.
     *
     * @param CreateSupplierCashierRequest $request
     *
     * @return Response
     */
    public function store(CreateSupplierCashierRequest $request)
    {
        $input = $request->all();

        /** @var SupplierCashier $supplierCashier */
        $supplierCashier = SupplierCashier::create($input);

        Flash::success('Supplier Cashier saved successfully.');

        return redirect(route('supplierCashiers.index'));
    }

    /**
     * Display the specified SupplierCashier.
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
            Flash::error('Supplier Cashier not found');

            return redirect(route('supplierCashiers.index'));
        }

        return view('supplier_cashiers.show')->with('supplierCashier', $supplierCashier);
    }

    /**
     * Show the form for editing the specified SupplierCashier.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var SupplierCashier $supplierCashier */
        $supplierCashier = SupplierCashier::find($id);

        if (empty($supplierCashier)) {
            Flash::error('Supplier Cashier not found');

            return redirect(route('supplierCashiers.index'));
        }

        return view('supplier_cashiers.edit')->with('supplierCashier', $supplierCashier);
    }

    /**
     * Update the specified SupplierCashier in storage.
     *
     * @param int $id
     * @param UpdateSupplierCashierRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSupplierCashierRequest $request)
    {
        /** @var SupplierCashier $supplierCashier */
        $supplierCashier = SupplierCashier::find($id);

        if (empty($supplierCashier)) {
            Flash::error('Supplier Cashier not found');

            return redirect(route('supplierCashiers.index'));
        }

        $supplierCashier->fill($request->all());
        $supplierCashier->save();

        Flash::success('Supplier Cashier updated successfully.');

        return redirect(route('supplierCashiers.index'));
    }

    /**
     * Remove the specified SupplierCashier from storage.
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
            Flash::error('Supplier Cashier not found');

            return redirect(route('supplierCashiers.index'));
        }

        $supplierCashier->delete();

        Flash::success('Supplier Cashier deleted successfully.');

        return redirect(route('supplierCashiers.index'));
    }
}
