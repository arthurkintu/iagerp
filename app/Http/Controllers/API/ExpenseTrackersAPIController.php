<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateExpenseTrackersAPIRequest;
use App\Http\Requests\API\UpdateExpenseTrackersAPIRequest;
use App\Models\ExpenseTrackers;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\ExpenseTrackersResource;
use Response;

/**
 * Class ExpenseTrackersController
 * @package App\Http\Controllers\API
 */

class ExpenseTrackersAPIController extends AppBaseController
{
    /**
     * Display a listing of the ExpenseTrackers.
     * GET|HEAD /expenseTrackers
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = ExpenseTrackers::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $expenseTrackers = $query->get();

        return $this->sendResponse(ExpenseTrackersResource::collection($expenseTrackers), 'Expense Trackers retrieved successfully');
    }

    /**
     * Store a newly created ExpenseTrackers in storage.
     * POST /expenseTrackers
     *
     * @param CreateExpenseTrackersAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateExpenseTrackersAPIRequest $request)
    {
        $input = $request->all();

        /** @var ExpenseTrackers $expenseTrackers */
        $expenseTrackers = ExpenseTrackers::create($input);

        return $this->sendResponse(new ExpenseTrackersResource($expenseTrackers), 'Expense Trackers saved successfully');
    }

    /**
     * Display the specified ExpenseTrackers.
     * GET|HEAD /expenseTrackers/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ExpenseTrackers $expenseTrackers */
        $expenseTrackers = ExpenseTrackers::find($id);

        if (empty($expenseTrackers)) {
            return $this->sendError('Expense Trackers not found');
        }

        return $this->sendResponse(new ExpenseTrackersResource($expenseTrackers), 'Expense Trackers retrieved successfully');
    }

    /**
     * Update the specified ExpenseTrackers in storage.
     * PUT/PATCH /expenseTrackers/{id}
     *
     * @param int $id
     * @param UpdateExpenseTrackersAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExpenseTrackersAPIRequest $request)
    {
        /** @var ExpenseTrackers $expenseTrackers */
        $expenseTrackers = ExpenseTrackers::find($id);

        if (empty($expenseTrackers)) {
            return $this->sendError('Expense Trackers not found');
        }

        $expenseTrackers->fill($request->all());
        $expenseTrackers->save();

        return $this->sendResponse(new ExpenseTrackersResource($expenseTrackers), 'ExpenseTrackers updated successfully');
    }

    /**
     * Remove the specified ExpenseTrackers from storage.
     * DELETE /expenseTrackers/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ExpenseTrackers $expenseTrackers */
        $expenseTrackers = ExpenseTrackers::find($id);

        if (empty($expenseTrackers)) {
            return $this->sendError('Expense Trackers not found');
        }

        $expenseTrackers->delete();

        return $this->sendSuccess('Expense Trackers deleted successfully');
    }
}
