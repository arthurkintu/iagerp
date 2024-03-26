<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTOMaterialsAPIRequest;
use App\Http\Requests\API\UpdateTOMaterialsAPIRequest;
use App\Models\TOMaterials;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\TOMaterialsResource;
use Response;

/**
 * Class TOMaterialsController
 * @package App\Http\Controllers\API
 */

class TOMaterialsAPIController extends AppBaseController
{
    /**
     * Display a listing of the TOMaterials.
     * GET|HEAD /tOMaterials
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = TOMaterials::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $tOMaterials = $query->get();

        return $this->sendResponse(TOMaterialsResource::collection($tOMaterials), 'T O Materials retrieved successfully');
    }

    /**
     * Store a newly created TOMaterials in storage.
     * POST /tOMaterials
     *
     * @param CreateTOMaterialsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTOMaterialsAPIRequest $request)
    {
        $input = $request->all();

        /** @var TOMaterials $tOMaterials */
        $tOMaterials = TOMaterials::create($input);

        return $this->sendResponse(new TOMaterialsResource($tOMaterials), 'T O Materials saved successfully');
    }

    /**
     * Display the specified TOMaterials.
     * GET|HEAD /tOMaterials/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var TOMaterials $tOMaterials */
        $tOMaterials = TOMaterials::find($id);

        if (empty($tOMaterials)) {
            return $this->sendError('T O Materials not found');
        }

        return $this->sendResponse(new TOMaterialsResource($tOMaterials), 'T O Materials retrieved successfully');
    }

    /**
     * Update the specified TOMaterials in storage.
     * PUT/PATCH /tOMaterials/{id}
     *
     * @param int $id
     * @param UpdateTOMaterialsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTOMaterialsAPIRequest $request)
    {
        /** @var TOMaterials $tOMaterials */
        $tOMaterials = TOMaterials::find($id);

        if (empty($tOMaterials)) {
            return $this->sendError('T O Materials not found');
        }

        $tOMaterials->fill($request->all());
        $tOMaterials->save();

        return $this->sendResponse(new TOMaterialsResource($tOMaterials), 'TOMaterials updated successfully');
    }

    /**
     * Remove the specified TOMaterials from storage.
     * DELETE /tOMaterials/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var TOMaterials $tOMaterials */
        $tOMaterials = TOMaterials::find($id);

        if (empty($tOMaterials)) {
            return $this->sendError('T O Materials not found');
        }

        $tOMaterials->delete();

        return $this->sendSuccess('T O Materials deleted successfully');
    }
}
