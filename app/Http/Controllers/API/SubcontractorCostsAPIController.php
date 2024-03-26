<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSubcontractorCostsAPIRequest;
use App\Http\Requests\API\UpdateSubcontractorCostsAPIRequest;
use App\Models\SubcontractorCosts;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\SubcontractorCostsResource;
use Response;

/**
 * Class SubcontractorCostsController
 * @package App\Http\Controllers\API
 */

class SubcontractorCostsAPIController extends AppBaseController
{
    /**
     * Display a listing of the SubcontractorCosts.
     * GET|HEAD /subcontractorCosts
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = SubcontractorCosts::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $subcontractorCosts = $query->get();

        return $this->sendResponse(SubcontractorCostsResource::collection($subcontractorCosts), 'Subcontractor Costs retrieved successfully');
    }

    /**
     * Store a newly created SubcontractorCosts in storage.
     * POST /subcontractorCosts
     *
     * @param CreateSubcontractorCostsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateSubcontractorCostsAPIRequest $request)
    {
        $input = $request->all();

        /** @var SubcontractorCosts $subcontractorCosts */
        $subcontractorCosts = SubcontractorCosts::create($input);

        return $this->sendResponse(new SubcontractorCostsResource($subcontractorCosts), 'Subcontractor Costs saved successfully');
    }

    /**
     * Display the specified SubcontractorCosts.
     * GET|HEAD /subcontractorCosts/{id}
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
            return $this->sendError('Subcontractor Costs not found');
        }

        return $this->sendResponse(new SubcontractorCostsResource($subcontractorCosts), 'Subcontractor Costs retrieved successfully');
    }

    /**
     * Update the specified SubcontractorCosts in storage.
     * PUT/PATCH /subcontractorCosts/{id}
     *
     * @param int $id
     * @param UpdateSubcontractorCostsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubcontractorCostsAPIRequest $request)
    {
        /** @var SubcontractorCosts $subcontractorCosts */
        $subcontractorCosts = SubcontractorCosts::find($id);

        if (empty($subcontractorCosts)) {
            return $this->sendError('Subcontractor Costs not found');
        }

        $subcontractorCosts->fill($request->all());
        $subcontractorCosts->save();

        return $this->sendResponse(new SubcontractorCostsResource($subcontractorCosts), 'SubcontractorCosts updated successfully');
    }

    /**
     * Remove the specified SubcontractorCosts from storage.
     * DELETE /subcontractorCosts/{id}
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
            return $this->sendError('Subcontractor Costs not found');
        }

        $subcontractorCosts->delete();

        return $this->sendSuccess('Subcontractor Costs deleted successfully');
    }
}
