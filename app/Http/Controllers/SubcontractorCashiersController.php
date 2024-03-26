<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubcontractorCashiersRequest;
use App\Http\Requests\UpdateSubcontractorCashiersRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\SubcontractorCashiers;
use Illuminate\Http\Request;
use Flash;
use Response;

class SubcontractorCashiersController extends AppBaseController
{
    /**
     * Display a listing of the SubcontractorCashiers.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var SubcontractorCashiers $subcontractorCashiers */
        $subcontractorCashiers = SubcontractorCashiers::paginate(10);

        return view('subcontractor_cashiers.index')
            ->with('subcontractorCashiers', $subcontractorCashiers);
    }

    /**
     * Show the form for creating a new SubcontractorCashiers.
     *
     * @return Response
     */
    public function create()
    {
        return view('subcontractor_cashiers.create');
    }

    /**
     * Store a newly created SubcontractorCashiers in storage.
     *
     * @param CreateSubcontractorCashiersRequest $request
     *
     * @return Response
     */
    public function store(CreateSubcontractorCashiersRequest $request)
    {
        $input = $request->all();

        /** @var SubcontractorCashiers $subcontractorCashiers */
        $subcontractorCashiers = SubcontractorCashiers::create($input);

        Flash::success('Subcontractor Cashiers saved successfully.');

        return redirect(route('subcontractorCashiers.index'));
    }

    /**
     * Display the specified SubcontractorCashiers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var SubcontractorCashiers $subcontractorCashiers */
        $subcontractorCashiers = SubcontractorCashiers::find($id);

        if (empty($subcontractorCashiers)) {
            Flash::error('Subcontractor Cashiers not found');

            return redirect(route('subcontractorCashiers.index'));
        }

        return view('subcontractor_cashiers.show')->with('subcontractorCashiers', $subcontractorCashiers);
    }

    /**
     * Show the form for editing the specified SubcontractorCashiers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var SubcontractorCashiers $subcontractorCashiers */
        $subcontractorCashiers = SubcontractorCashiers::find($id);

        if (empty($subcontractorCashiers)) {
            Flash::error('Subcontractor Cashiers not found');

            return redirect(route('subcontractorCashiers.index'));
        }

        return view('subcontractor_cashiers.edit')->with('subcontractorCashiers', $subcontractorCashiers);
    }

    /**
     * Update the specified SubcontractorCashiers in storage.
     *
     * @param int $id
     * @param UpdateSubcontractorCashiersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubcontractorCashiersRequest $request)
    {
        /** @var SubcontractorCashiers $subcontractorCashiers */
        $subcontractorCashiers = SubcontractorCashiers::find($id);

        if (empty($subcontractorCashiers)) {
            Flash::error('Subcontractor Cashiers not found');

            return redirect(route('subcontractorCashiers.index'));
        }

        $subcontractorCashiers->fill($request->all());
        $subcontractorCashiers->save();

        Flash::success('Subcontractor Cashiers updated successfully.');

        return redirect(route('subcontractorCashiers.index'));
    }

    /**
     * Remove the specified SubcontractorCashiers from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var SubcontractorCashiers $subcontractorCashiers */
        $subcontractorCashiers = SubcontractorCashiers::find($id);

        if (empty($subcontractorCashiers)) {
            Flash::error('Subcontractor Cashiers not found');

            return redirect(route('subcontractorCashiers.index'));
        }

        $subcontractorCashiers->delete();

        Flash::success('Subcontractor Cashiers deleted successfully.');

        return redirect(route('subcontractorCashiers.index'));
    }
}
