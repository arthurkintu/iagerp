<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTOMaterialsRequest;
use App\Http\Requests\UpdateTOMaterialsRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\TOMaterials;
use Illuminate\Http\Request;
use Flash;
use Response;

class TOMaterialsController extends AppBaseController
{
    /**
     * Display a listing of the TOMaterials.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var TOMaterials $tOMaterials */
        $tOMaterials = TOMaterials::paginate(40);

        return view('t_o_materials.index')
            ->with('tOMaterials', $tOMaterials);
    }

    /**
     * Show the form for creating a new TOMaterials.
     *
     * @return Response
     */
    public function create()
    {
        return view('t_o_materials.create');
    }

    /**
     * Store a newly created TOMaterials in storage.
     *
     * @param CreateTOMaterialsRequest $request
     *
     * @return Response
     */
    public function store(CreateTOMaterialsRequest $request)
    {
        $input = $request->all();

        /** @var TOMaterials $tOMaterials */
        $tOMaterials = TOMaterials::create($input);

        Flash::success('T O Materials saved successfully.');

        return redirect(route('tOMaterials.index'));
    }

    /**
     * Display the specified TOMaterials.
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
            Flash::error('T O Materials not found');

            return redirect(route('tOMaterials.index'));
        }

        return view('t_o_materials.show')->with('tOMaterials', $tOMaterials);
    }

    /**
     * Show the form for editing the specified TOMaterials.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var TOMaterials $tOMaterials */
        $tOMaterials = TOMaterials::find($id);

        if (empty($tOMaterials)) {
            Flash::error('T O Materials not found');

            return redirect(route('tOMaterials.index'));
        }

        return view('t_o_materials.edit')->with('tOMaterials', $tOMaterials);
    }

    /**
     * Update the specified TOMaterials in storage.
     *
     * @param int $id
     * @param UpdateTOMaterialsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTOMaterialsRequest $request)
    {
        /** @var TOMaterials $tOMaterials */
        $tOMaterials = TOMaterials::find($id);

        if (empty($tOMaterials)) {
            Flash::error('T O Materials not found');

            return redirect(route('tOMaterials.index'));
        }

        $tOMaterials->fill($request->all());
        $tOMaterials->save();

        Flash::success('T O Materials updated successfully.');

        return redirect(route('tOMaterials.index'));
    }

    /**
     * Remove the specified TOMaterials from storage.
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
            Flash::error('T O Materials not found');

            return redirect(route('tOMaterials.index'));
        }

        $tOMaterials->delete();

        Flash::success('T O Materials deleted successfully.');

        return redirect(route('tOMaterials.index'));
    }
}
