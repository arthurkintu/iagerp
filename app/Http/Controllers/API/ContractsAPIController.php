<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateContractsAPIRequest;
use App\Http\Requests\API\UpdateContractsAPIRequest;
use App\Models\Contracts;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\ContractsResource;
use Response;

/**
 * Class ContractsController
 * @package App\Http\Controllers\API
 */

class ContractsAPIController extends AppBaseController
{
    /**
     * Display a listing of the Contracts.
     * GET|HEAD /contracts
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = Contracts::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $contracts = $query->get();

        return $this->sendResponse(ContractsResource::collection($contracts), 'Contracts retrieved successfully');
    }

    /**
     * Store a newly created Contracts in storage.
     * POST /contracts
     *
     * @param CreateContractsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateContractsAPIRequest $request)
    {
        $input = $request->all();

        /** @var Contracts $contracts */
        $contracts = Contracts::create($input);

        return $this->sendResponse(new ContractsResource($contracts), 'Contracts saved successfully');
    }

    /**
     * Display the specified Contracts.
     * GET|HEAD /contracts/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Contracts $contracts */
        $contracts = Contracts::find($id);

        if (empty($contracts)) {
            return $this->sendError('Contracts not found');
        }

        return $this->sendResponse(new ContractsResource($contracts), 'Contracts retrieved successfully');
    }

    /**
     * Update the specified Contracts in storage.
     * PUT/PATCH /contracts/{id}
     *
     * @param int $id
     * @param UpdateContractsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContractsAPIRequest $request)
    {
        /** @var Contracts $contracts */
        $contracts = Contracts::find($id);

        if (empty($contracts)) {
            return $this->sendError('Contracts not found');
        }

        $contracts->fill($request->all());
        $contracts->save();

        return $this->sendResponse(new ContractsResource($contracts), 'Contracts updated successfully');
    }

    /**
     * Remove the specified Contracts from storage.
     * DELETE /contracts/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Contracts $contracts */
        $contracts = Contracts::find($id);

        if (empty($contracts)) {
            return $this->sendError('Contracts not found');
        }

        $contracts->delete();

        return $this->sendSuccess('Contracts deleted successfully');
    }
}
