<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubcontractorCostsRequest;
use App\Http\Requests\UpdateSubcontractorCostsRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\SubcontractorCosts;
use Illuminate\Http\Request;
use Flash;
use Response;

class SubcontractorCostsController extends AppBaseController
{
    /**
     * Display a listing of the SubcontractorCosts.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var SubcontractorCosts $subcontractorCosts */
        $subcontractorCosts = SubcontractorCosts::paginate(25);

        return view('subcontractor_costs.index')
            ->with('subcontractorCosts', $subcontractorCosts);
    }

    /**
     * Show the form for creating a new SubcontractorCosts.
     *
     * @return Response
     */
    public function create()
    {
        return view('subcontractor_costs.create');
    }

    /**
     * Store a newly created SubcontractorCosts in storage.
     *
     * @param CreateSubcontractorCostsRequest $request
     *
     * @return Response
     */
    public function store(CreateSubcontractorCostsRequest $request)
    {
        $input = $request->all();

        /** @var SubcontractorCosts $subcontractorCosts */
        $subcontractorCosts = SubcontractorCosts::create($input);

        Flash::success('Subcontractor Costs saved successfully.');

        return redirect(route('subcontractorCosts.index'));
    }

    /**
     * Display the specified SubcontractorCosts.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var SubcontractorCosts $subcontractorCosts */
        $subcontractorCosts = SubcontractorCosts::find($id);

        if (empty($subcontractorCosts)) {
            Flash::error('Subcontractor Costs not found');

            return redirect(route('subcontractorCosts.index'));
        }

        return view('subcontractor_costs.show')->with('subcontractorCosts', $subcontractorCosts);
    }

    /**
     * Show the form for editing the specified SubcontractorCosts.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var SubcontractorCosts $subcontractorCosts */
        $subcontractorCosts = SubcontractorCosts::find($id);

        if (empty($subcontractorCosts)) {
            Flash::error('Subcontractor Costs not found');

            return redirect(route('subcontractorCosts.index'));
        }

        return view('subcontractor_costs.edit')->with('subcontractorCosts', $subcontractorCosts);
    }

    /**
     * Update the specified SubcontractorCosts in storage.
     *
     * @param int $id
     * @param UpdateSubcontractorCostsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubcontractorCostsRequest $request)
    {
        /** @var SubcontractorCosts $subcontractorCosts */
        $subcontractorCosts = SubcontractorCosts::find($id);

        if (empty($subcontractorCosts)) {
            Flash::error('Subcontractor Costs not found');

            return redirect(route('subcontractorCosts.index'));
        }

        $subcontractorCosts->fill($request->all());
        $subcontractorCosts->save();

        Flash::success('Subcontractor Costs updated successfully.');

        return redirect(route('subcontractorCosts.index'));
    }

    /**
     * Remove the specified SubcontractorCosts from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var SubcontractorCosts $subcontractorCosts */
        $subcontractorCosts = SubcontractorCosts::find($id);

        if (empty($subcontractorCosts)) {
            Flash::error('Subcontractor Costs not found');

            return redirect(route('subcontractorCosts.index'));
        }

        $subcontractorCosts->delete();

        Flash::success('Subcontractor Costs deleted successfully.');

        return redirect(route('subcontractorCosts.index'));
    }
}
