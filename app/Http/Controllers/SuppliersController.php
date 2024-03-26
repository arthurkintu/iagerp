<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSuppliersRequest;
use App\Http\Requests\UpdateSuppliersRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Suppliers;
use Illuminate\Http\Request;
use Flash;
use Response;

class SuppliersController extends AppBaseController
{
    /**
     * Display a listing of the Suppliers.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Suppliers $suppliers */
        $suppliers = Suppliers::paginate(10);

        return view('suppliers.index')
            ->with('suppliers', $suppliers);
    }

    /**
     * Show the form for creating a new Suppliers.
     *
     * @return Response
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created Suppliers in storage.
     *
     * @param CreateSuppliersRequest $request
     *
     * @return Response
     */
    public function store(CreateSuppliersRequest $request)
    {
        $input = $request->all();

        /** @var Suppliers $suppliers */
        $suppliers = Suppliers::create($input);

        Flash::success('Suppliers saved successfully.');

        return redirect(route('suppliers.index'));
    }

    /**
     * Display the specified Suppliers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Suppliers $suppliers */
        $suppliers = Suppliers::find($id);

        if (empty($suppliers)) {
            Flash::error('Suppliers not found');

            return redirect(route('suppliers.index'));
        }

        return view('suppliers.show')->with('suppliers', $suppliers);
    }

    /**
     * Show the form for editing the specified Suppliers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Suppliers $suppliers */
        $suppliers = Suppliers::find($id);

        if (empty($suppliers)) {
            Flash::error('Suppliers not found');

            return redirect(route('suppliers.index'));
        }

        return view('suppliers.edit')->with('suppliers', $suppliers);
    }

    /**
     * Update the specified Suppliers in storage.
     *
     * @param int $id
     * @param UpdateSuppliersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSuppliersRequest $request)
    {
        /** @var Suppliers $suppliers */
        $suppliers = Suppliers::find($id);

        if (empty($suppliers)) {
            Flash::error('Suppliers not found');

            return redirect(route('suppliers.index'));
        }

        $suppliers->fill($request->all());
        $suppliers->save();

        Flash::success('Suppliers updated successfully.');

        return redirect(route('suppliers.index'));
    }

    /**
     * Remove the specified Suppliers from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Suppliers $suppliers */
        $suppliers = Suppliers::find($id);

        if (empty($suppliers)) {
            Flash::error('Suppliers not found');

            return redirect(route('suppliers.index'));
        }

        $suppliers->delete();

        Flash::success('Suppliers deleted successfully.');

        return redirect(route('suppliers.index'));
    }
}
