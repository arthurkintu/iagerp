<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateLeaveApplicationAPIRequest;
use App\Http\Requests\API\UpdateLeaveApplicationAPIRequest;
use App\Models\LeaveApplication;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\LeaveApplicationResource;
use Response;

/**
 * Class LeaveApplicationController
 * @package App\Http\Controllers\API
 */

class LeaveApplicationAPIController extends AppBaseController
{
    /**
     * Display a listing of the LeaveApplication.
     * GET|HEAD /leaveApplications
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = LeaveApplication::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $leaveApplications = $query->get();

        return $this->sendResponse(LeaveApplicationResource::collection($leaveApplications), 'Leave Applications retrieved successfully');
    }

    /**
     * Store a newly created LeaveApplication in storage.
     * POST /leaveApplications
     *
     * @param CreateLeaveApplicationAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateLeaveApplicationAPIRequest $request)
    {
        $input = $request->all();

        /** @var LeaveApplication $leaveApplication */
        $leaveApplication = LeaveApplication::create($input);

        return $this->sendResponse(new LeaveApplicationResource($leaveApplication), 'Leave Application saved successfully');
    }

    /**
     * Display the specified LeaveApplication.
     * GET|HEAD /leaveApplications/{id}
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
            return $this->sendError('Leave Application not found');
        }

        return $this->sendResponse(new LeaveApplicationResource($leaveApplication), 'Leave Application retrieved successfully');
    }

    /**
     * Update the specified LeaveApplication in storage.
     * PUT/PATCH /leaveApplications/{id}
     *
     * @param int $id
     * @param UpdateLeaveApplicationAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLeaveApplicationAPIRequest $request)
    {
        /** @var LeaveApplication $leaveApplication */
        $leaveApplication = LeaveApplication::find($id);

        if (empty($leaveApplication)) {
            return $this->sendError('Leave Application not found');
        }

        $leaveApplication->fill($request->all());
        $leaveApplication->save();

        return $this->sendResponse(new LeaveApplicationResource($leaveApplication), 'LeaveApplication updated successfully');
    }

    /**
     * Remove the specified LeaveApplication from storage.
     * DELETE /leaveApplications/{id}
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
            return $this->sendError('Leave Application not found');
        }

        $leaveApplication->delete();

        return $this->sendSuccess('Leave Application deleted successfully');
    }
}
