<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContractsRequest;
use App\Http\Requests\UpdateContractsRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Contracts;
use Illuminate\Http\Request;
use Flash;
use Response;

class ContractsController extends AppBaseController
{
    /**
     * Display a listing of the Contracts.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Contracts $contracts */
        $contracts = Contracts::paginate(10);

        return view('contracts.index')
            ->with('contracts', $contracts);
    }

    /**
     * Show the form for creating a new Contracts.
     *
     * @return Response
     */
    public function create()
    {
        return view('contracts.create');
    }

    /**
     * Store a newly created Contracts in storage.
     *
     * @param CreateContractsRequest $request
     *
     * @return Response
     */
    public function store(CreateContractsRequest $request)
    {
        $input = $request->all();

        /** @var Contracts $contracts */
        $contracts = Contracts::create($input);

        Flash::success('Contracts saved successfully.');

        return redirect(route('contracts.index'));
    }

    /**
     * Display the specified Contracts.
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
            Flash::error('Contracts not found');

            return redirect(route('contracts.index'));
        }

        return view('contracts.show')->with('contracts', $contracts);
    }

    /**
     * Show the form for editing the specified Contracts.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Contracts $contracts */
        $contracts = Contracts::find($id);

        if (empty($contracts)) {
            Flash::error('Contracts not found');

            return redirect(route('contracts.index'));
        }

        return view('contracts.edit')->with('contracts', $contracts);
    }

    /**
     * Update the specified Contracts in storage.
     *
     * @param int $id
     * @param UpdateContractsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContractsRequest $request)
    {
        /** @var Contracts $contracts */
        $contracts = Contracts::find($id);

        if (empty($contracts)) {
            Flash::error('Contracts not found');

            return redirect(route('contracts.index'));
        }

        $contracts->fill($request->all());
        $contracts->save();

        Flash::success('Contracts updated successfully.');

        return redirect(route('contracts.index'));
    }

    /**
     * Remove the specified Contracts from storage.
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
            Flash::error('Contracts not found');

            return redirect(route('contracts.index'));
        }

        $contracts->delete();

        Flash::success('Contracts deleted successfully.');

        return redirect(route('contracts.index'));
    }
}
