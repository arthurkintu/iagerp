<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubContractorTrackerRequest;
use App\Http\Requests\UpdateSubContractorTrackerRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\SubContractorTracker;
use Illuminate\Http\Request;
use Flash;
use Response;

class SubContractorTrackerController extends AppBaseController
{
    /**
     * Display a listing of the SubContractorTracker.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var SubContractorTracker $subContractorTrackers */
        $subContractorTrackers = SubContractorTracker::paginate(30);

        return view('sub_contractor_trackers.index')
            ->with('subContractorTrackers', $subContractorTrackers);
    }

    /**
     * Show the form for creating a new SubContractorTracker.
     *
     * @return Response
     */
    public function create()
    {
        return view('sub_contractor_trackers.create');
    }

    /**
     * Store a newly created SubContractorTracker in storage.
     *
     * @param CreateSubContractorTrackerRequest $request
     *
     * @return Response
     */
    public function store(CreateSubContractorTrackerRequest $request)
    {
        $input = $request->all();

        /** @var SubContractorTracker $subContractorTracker */
        $subContractorTracker = SubContractorTracker::create($input);

        Flash::success('Sub Contractor Tracker saved successfully.');

        return redirect(route('subContractorTrackers.index'));
    }

    /**
     * Display the specified SubContractorTracker.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var SubContractorTracker $subContractorTracker */
        $subContractorTracker = SubContractorTracker::find($id);

        if (empty($subContractorTracker)) {
            Flash::error('Sub Contractor Tracker not found');

            return redirect(route('subContractorTrackers.index'));
        }

        return view('sub_contractor_trackers.show')->with('subContractorTracker', $subContractorTracker);
    }

    /**
     * Show the form for editing the specified SubContractorTracker.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var SubContractorTracker $subContractorTracker */
        $subContractorTracker = SubContractorTracker::find($id);

        if (empty($subContractorTracker)) {
            Flash::error('Sub Contractor Tracker not found');

            return redirect(route('subContractorTrackers.index'));
        }

        return view('sub_contractor_trackers.edit')->with('subContractorTracker', $subContractorTracker);
    }

    /**
     * Update the specified SubContractorTracker in storage.
     *
     * @param int $id
     * @param UpdateSubContractorTrackerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubContractorTrackerRequest $request)
    {
        /** @var SubContractorTracker $subContractorTracker */
        $subContractorTracker = SubContractorTracker::find($id);

        if (empty($subContractorTracker)) {
            Flash::error('Sub Contractor Tracker not found');

            return redirect(route('subContractorTrackers.index'));
        }

        $subContractorTracker->fill($request->all());
        $subContractorTracker->save();

        Flash::success('Sub Contractor Tracker updated successfully.');

        return redirect(route('subContractorTrackers.index'));
    }

    /**
     * Remove the specified SubContractorTracker from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var SubContractorTracker $subContractorTracker */
        $subContractorTracker = SubContractorTracker::find($id);

        if (empty($subContractorTracker)) {
            Flash::error('Sub Contractor Tracker not found');

            return redirect(route('subContractorTrackers.index'));
        }

        $subContractorTracker->delete();

        Flash::success('Sub Contractor Tracker deleted successfully.');

        return redirect(route('subContractorTrackers.index'));
    }
}
