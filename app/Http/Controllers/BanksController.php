<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBanksRequest;
use App\Http\Requests\UpdateBanksRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Banks;
use Illuminate\Http\Request;
use Flash;
use Response;

class BanksController extends AppBaseController
{
    /**
     * Display a listing of the Banks.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Banks $banks */
        $banks = Banks::paginate(10);

        return view('banks.index')
            ->with('banks', $banks);
    }

    /**
     * Show the form for creating a new Banks.
     *
     * @return Response
     */
    public function create()
    {
        return view('banks.create');
    }

    /**
     * Store a newly created Banks in storage.
     *
     * @param CreateBanksRequest $request
     *
     * @return Response
     */
    public function store(CreateBanksRequest $request)
    {
        $input = $request->all();

        /** @var Banks $banks */
        $banks = Banks::create($input);

        Flash::success('Banks saved successfully.');

        return redirect(route('banks.index'));
    }

    /**
     * Display the specified Banks.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Banks $banks */
        $banks = Banks::find($id);

        if (empty($banks)) {
            Flash::error('Banks not found');

            return redirect(route('banks.index'));
        }

        return view('banks.show')->with('banks', $banks);
    }

    /**
     * Show the form for editing the specified Banks.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Banks $banks */
        $banks = Banks::find($id);

        if (empty($banks)) {
            Flash::error('Banks not found');

            return redirect(route('banks.index'));
        }

        return view('banks.edit')->with('banks', $banks);
    }

    /**
     * Update the specified Banks in storage.
     *
     * @param int $id
     * @param UpdateBanksRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBanksRequest $request)
    {
        /** @var Banks $banks */
        $banks = Banks::find($id);

        if (empty($banks)) {
            Flash::error('Banks not found');

            return redirect(route('banks.index'));
        }

        $banks->fill($request->all());
        $banks->save();

        Flash::success('Banks updated successfully.');

        return redirect(route('banks.index'));
    }

    /**
     * Remove the specified Banks from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Banks $banks */
        $banks = Banks::find($id);

        if (empty($banks)) {
            Flash::error('Banks not found');

            return redirect(route('banks.index'));
        }

        $banks->delete();

        Flash::success('Banks deleted successfully.');

        return redirect(route('banks.index'));
    }
}
