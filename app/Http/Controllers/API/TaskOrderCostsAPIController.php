<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTaskOrderCostsAPIRequest;
use App\Http\Requests\API\UpdateTaskOrderCostsAPIRequest;
use App\Models\TaskOrderCosts;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\TaskOrderCostsResource;
use Response;

/**
 * Class TaskOrderCostsController
 * @package App\Http\Controllers\API
 */

class TaskOrderCostsAPIController extends AppBaseController
{
    /**
     * Display a listing of the TaskOrderCosts.
     * GET|HEAD /taskOrderCosts
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = TaskOrderCosts::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $taskOrderCosts = $query->get();

        return $this->sendResponse(TaskOrderCostsResource::collection($taskOrderCosts), 'Task Order Costs retrieved successfully');
    }

    /**
     * Store a newly created TaskOrderCosts in storage.
     * POST /taskOrderCosts
     *
     * @param CreateTaskOrderCostsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTaskOrderCostsAPIRequest $request)
    {
        $input = $request->all();

        /** @var TaskOrderCosts $taskOrderCosts */
        $taskOrderCosts = TaskOrderCosts::create($input);

        return $this->sendResponse(new TaskOrderCostsResource($taskOrderCosts), 'Task Order Costs saved successfully');
    }

    /**
     * Display the specified TaskOrderCosts.
     * GET|HEAD /taskOrderCosts/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var TaskOrderCosts $taskOrderCosts */
        $taskOrderCosts = TaskOrderCosts::find($id);

        if (empty($taskOrderCosts)) {
            return $this->sendError('Task Order Costs not found');
        }

        return $this->sendResponse(new TaskOrderCostsResource($taskOrderCosts), 'Task Order Costs retrieved successfully');
    }

    /**
     * Update the specified TaskOrderCosts in storage.
     * PUT/PATCH /taskOrderCosts/{id}
     *
     * @param int $id
     * @param UpdateTaskOrderCostsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTaskOrderCostsAPIRequest $request)
    {
        /** @var TaskOrderCosts $taskOrderCosts */
        $taskOrderCosts = TaskOrderCosts::find($id);

        if (empty($taskOrderCosts)) {
            return $this->sendError('Task Order Costs not found');
        }

        $taskOrderCosts->fill($request->all());
        $taskOrderCosts->save();

        return $this->sendResponse(new TaskOrderCostsResource($taskOrderCosts), 'TaskOrderCosts updated successfully');
    }

    /**
     * Remove the specified TaskOrderCosts from storage.
     * DELETE /taskOrderCosts/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var TaskOrderCosts $taskOrderCosts */
        $taskOrderCosts = TaskOrderCosts::find($id);

        if (empty($taskOrderCosts)) {
            return $this->sendError('Task Order Costs not found');
        }

        $taskOrderCosts->delete();

        return $this->sendSuccess('Task Order Costs deleted successfully');
    }
}
