<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLeaveApplicationRequest;
use App\Http\Requests\UpdateLeaveApplicationRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\LeaveApplication;
use Illuminate\Http\Request;
use Flash;
use Response;

class LeaveApplicationController extends AppBaseController
{
    /**
     * Display a listing of the LeaveApplication.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var LeaveApplication $leaveApplications */
        $leaveApplications = LeaveApplication::paginate(10);

        return view('leave_applications.index')
            ->with('leaveApplications', $leaveApplications);
    }

    /**
     * Show the form for creating a new LeaveApplication.
     *
     * @return Response
     */
    public function create()
    {
        return view('leave_applications.create');
    }

    /**
     * Store a newly created LeaveApplication in storage.
     *
     * @param CreateLeaveApplicationRequest $request
     *
     * @return Response
     */
    public function store(CreateLeaveApplicationRequest $request)
    {
        $input = $request->all();

        /** @var LeaveApplication $leaveApplication */
        $leaveApplication = LeaveApplication::create($input);

        Flash::success('Leave Application saved successfully.');

        return redirect(route('leaveApplications.index'));
    }

    /**
     * Display the specified LeaveApplication.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var LeaveApplication $leaveApplication */
        $leaveApplication = LeaveApplication::find($id);

        if (empty($leaveApplication)) {
            Flash::error('Leave Application not found');

            return redirect(route('leaveApplications.index'));
        }

        return view('leave_applications.show')->with('leaveApplication', $leaveApplication);
    }

    /**
     * Show the form for editing the specified LeaveApplication.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var LeaveApplication $leaveApplication */
        $leaveApplication = LeaveApplication::find($id);

        if (empty($leaveApplication)) {
            Flash::error('Leave Application not found');

            return redirect(route('leaveApplications.index'));
        }

        return view('leave_applications.edit')->with('leaveApplication', $leaveApplication);
    }

    /**
     * Update the specified LeaveApplication in storage.
     *
     * @param int $id
     * @param UpdateLeaveApplicationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLeaveApplicationRequest $request)
    {
        /** @var LeaveApplication $leaveApplication */
        $leaveApplication = LeaveApplication::find($id);

        if (empty($leaveApplication)) {
            Flash::error('Leave Application not found');

            return redirect(route('leaveApplications.index'));
        }

        $leaveApplication->fill($request->all());
        $leaveApplication->save();

        Flash::success('Leave Application updated successfully.');

        return redirect(route('leaveApplications.index'));
    }

    /**
     * Remove the specified LeaveApplication from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var LeaveApplication $leaveApplication */
        $leaveApplication = LeaveApplication::find($id);

        if (empty($leaveApplication)) {
            Flash::error('Leave Application not found');

            return redirect(route('leaveApplications.index'));
        }

        $leaveApplication->delete();

        Flash::success('Leave Application deleted successfully.');

        return redirect(route('leaveApplications.index'));
    }
}
