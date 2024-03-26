<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubcontractorsRequest;
use App\Http\Requests\UpdateSubcontractorsRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Subcontractors;
use Illuminate\Http\Request;
use Flash;
use Response;

class SubcontractorsController extends AppBaseController
{
    /**
     * Display a listing of the Subcontractors.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Subcontractors $subcontractors */
        $subcontractors = Subcontractors::paginate(10);

        return view('subcontractors.index')
            ->with('subcontractors', $subcontractors);
    }

    /**
     * Show the form for creating a new Subcontractors.
     *
     * @return Response
     */
    public function create()
    {
        return view('subcontractors.create');
    }

    /**
     * Store a newly created Subcontractors in storage.
     *
     * @param CreateSubcontractorsRequest $request
     *
     * @return Response
     */
    public function store(CreateSubcontractorsRequest $request)
    {
        $input = $request->all();

        /** @var Subcontractors $subcontractors */
        $subcontractors = Subcontractors::create($input);

        Flash::success('Subcontractors saved successfully.');

        return redirect(route('subcontractors.index'));
    }

    /**
     * Display the specified Subcontractors.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Subcontractors $subcontractors */
        $subcontractors = Subcontractors::find($id);

        if (empty($subcontractors)) {
            Flash::error('Subcontractors not found');

            return redirect(route('subcontractors.index'));
        }

        return view('subcontractors.show')->with('subcontractors', $subcontractors);
    }

    /**
     * Show the form for editing the specified Subcontractors.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Subcontractors $subcontractors */
        $subcontractors = Subcontractors::find($id);

        if (empty($subcontractors)) {
            Flash::error('Subcontractors not found');

            return redirect(route('subcontractors.index'));
        }

        return view('subcontractors.edit')->with('subcontractors', $subcontractors);
    }

    /**
     * Update the specified Subcontractors in storage.
     *
     * @param int $id
     * @param UpdateSubcontractorsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubcontractorsRequest $request)
    {
        /** @var Subcontractors $subcontractors */
        $subcontractors = Subcontractors::find($id);

        if (empty($subcontractors)) {
            Flash::error('Subcontractors not found');

            return redirect(route('subcontractors.index'));
        }

        $subcontractors->fill($request->all());
        $subcontractors->save();

        Flash::success('Subcontractors updated successfully.');

        return redirect(route('subcontractors.index'));
    }

    /**
     * Remove the specified Subcontractors from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Subcontractors $subcontractors */
        $subcontractors = Subcontractors::find($id);

        if (empty($subcontractors)) {
            Flash::error('Subcontractors not found');

            return redirect(route('subcontractors.index'));
        }

        $subcontractors->delete();

        Flash::success('Subcontractors deleted successfully.');

        return redirect(route('subcontractors.index'));
    }
}
