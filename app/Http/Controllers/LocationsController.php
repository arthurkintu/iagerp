<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLocationsRequest;
use App\Http\Requests\UpdateLocationsRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Locations;
use Illuminate\Http\Request;
use Flash;
use Response;

class LocationsController extends AppBaseController
{
    /**
     * Display a listing of the Locations.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Locations $locations */
        $locations = Locations::paginate(10);

        return view('locations.index')
            ->with('locations', $locations);
    }

    /**
     * Show the form for creating a new Locations.
     *
     * @return Response
     */
    public function create()
    {
        return view('locations.create');
    }

    /**
     * Store a newly created Locations in storage.
     *
     * @param CreateLocationsRequest $request
     *
     * @return Response
     */
    public function store(CreateLocationsRequest $request)
    {
        $input = $request->all();

        /** @var Locations $locations */
        $locations = Locations::create($input);

        Flash::success('Locations saved successfully.');

        return redirect(route('locations.index'));
    }

    /**
     * Display the specified Locations.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Locations $locations */
        $locations = Locations::find($id);

        if (empty($locations)) {
            Flash::error('Locations not found');

            return redirect(route('locations.index'));
        }

        return view('locations.show')->with('locations', $locations);
    }

    /**
     * Show the form for editing the specified Locations.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Locations $locations */
        $locations = Locations::find($id);

        if (empty($locations)) {
            Flash::error('Locations not found');

            return redirect(route('locations.index'));
        }

        return view('locations.edit')->with('locations', $locations);
    }

    /**
     * Update the specified Locations in storage.
     *
     * @param int $id
     * @param UpdateLocationsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLocationsRequest $request)
    {
        /** @var Locations $locations */
        $locations = Locations::find($id);

        if (empty($locations)) {
            Flash::error('Locations not found');

            return redirect(route('locations.index'));
        }

        $locations->fill($request->all());
        $locations->save();

        Flash::success('Locations updated successfully.');

        return redirect(route('locations.index'));
    }

    /**
     * Remove the specified Locations from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Locations $locations */
        $locations = Locations::find($id);

        if (empty($locations)) {
            Flash::error('Locations not found');

            return redirect(route('locations.index'));
        }

        $locations->delete();

        Flash::success('Locations deleted successfully.');

        return redirect(route('locations.index'));
    }
}
