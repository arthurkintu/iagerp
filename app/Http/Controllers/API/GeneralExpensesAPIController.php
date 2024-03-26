<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateGeneralExpensesAPIRequest;
use App\Http\Requests\API\UpdateGeneralExpensesAPIRequest;
use App\Models\GeneralExpenses;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\GeneralExpensesResource;
use Response;

/**
 * Class GeneralExpensesController
 * @package App\Http\Controllers\API
 */

class GeneralExpensesAPIController extends AppBaseController
{
    /**
     * Display a listing of the GeneralExpenses.
     * GET|HEAD /generalExpenses
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = GeneralExpenses::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $generalExpenses = $query->get();

        return $this->sendResponse(GeneralExpensesResource::collection($generalExpenses), 'General Expenses retrieved successfully');
    }

    /**
     * Store a newly created GeneralExpenses in storage.
     * POST /generalExpenses
     *
     * @param CreateGeneralExpensesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateGeneralExpensesAPIRequest $request)
    {
        $input = $request->all();

        /** @var GeneralExpenses $generalExpenses */
        $generalExpenses = GeneralExpenses::create($input);

        return $this->sendResponse(new GeneralExpensesResource($generalExpenses), 'General Expenses saved successfully');
    }

    /**
     * Display the specified GeneralExpenses.
     * GET|HEAD /generalExpenses/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var GeneralExpenses $generalExpenses */
        $generalExpenses = GeneralExpenses::find($id);

        if (empty($generalExpenses)) {
            return $this->sendError('General Expenses not found');
        }

        return $this->sendResponse(new GeneralExpensesResource($generalExpenses), 'General Expenses retrieved successfully');
    }

    /**
     * Update the specified GeneralExpenses in storage.
     * PUT/PATCH /generalExpenses/{id}
     *
     * @param int $id
     * @param UpdateGeneralExpensesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGeneralExpensesAPIRequest $request)
    {
        /** @var GeneralExpenses $generalExpenses */
        $generalExpenses = GeneralExpenses::find($id);

        if (empty($generalExpenses)) {
            return $this->sendError('General Expenses not found');
        }

        $generalExpenses->fill($request->all());
        $generalExpenses->save();

        return $this->sendResponse(new GeneralExpensesResource($generalExpenses), 'GeneralExpenses updated successfully');
    }

    /**
     * Remove the specified GeneralExpenses from storage.
     * DELETE /generalExpenses/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var GeneralExpenses $generalExpenses */
        $generalExpenses = GeneralExpenses::find($id);

        if (empty($generalExpenses)) {
            return $this->sendError('General Expenses not found');
        }

        $generalExpenses->delete();

        return $this->sendSuccess('General Expenses deleted successfully');
    }
}
