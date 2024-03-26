<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClientsRequest;
use App\Http\Requests\UpdateClientsRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Clients;
use Illuminate\Http\Request;
use Flash;
use Response;

class ClientsController extends AppBaseController
{
    /**
     * Display a listing of the Clients.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Clients $clients */
        $clients = Clients::paginate(10);

        return view('clients.index')
            ->with('clients', $clients);
    }

    /**
     * Show the form for creating a new Clients.
     *
     * @return Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created Clients in storage.
     *
     * @param CreateClientsRequest $request
     *
     * @return Response
     */
    public function store(CreateClientsRequest $request)
    {
        $input = $request->all();

        /** @var Clients $clients */
        $clients = Clients::create($input);

        Flash::success('Clients saved successfully.');

        return redirect(route('clients.index'));
    }

    /**
     * Display the specified Clients.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Clients $clients */
        $clients = Clients::find($id);

        if (empty($clients)) {
            Flash::error('Clients not found');

            return redirect(route('clients.index'));
        }

        return view('clients.show')->with('clients', $clients);
    }

    /**
     * Show the form for editing the specified Clients.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Clients $clients */
        $clients = Clients::find($id);

        if (empty($clients)) {
            Flash::error('Clients not found');

            return redirect(route('clients.index'));
        }

        return view('clients.edit')->with('clients', $clients);
    }

    /**
     * Update the specified Clients in storage.
     *
     * @param int $id
     * @param UpdateClientsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClientsRequest $request)
    {
        /** @var Clients $clients */
        $clients = Clients::find($id);

        if (empty($clients)) {
            Flash::error('Clients not found');

            return redirect(route('clients.index'));
        }

        $clients->fill($request->all());
        $clients->save();

        Flash::success('Clients updated successfully.');

        return redirect(route('clients.index'));
    }

    /**
     * Remove the specified Clients from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Clients $clients */
        $clients = Clients::find($id);

        if (empty($clients)) {
            Flash::error('Clients not found');

            return redirect(route('clients.index'));
        }

        $clients->delete();

        Flash::success('Clients deleted successfully.');

        return redirect(route('clients.index'));
    }
}
