<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGeneralExpensesRequest;
use App\Http\Requests\UpdateGeneralExpensesRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\GeneralExpenses;
use Illuminate\Http\Request;
use Flash;
use Response;

class GeneralExpensesController extends AppBaseController
{
    /**
     * Display a listing of the GeneralExpenses.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var GeneralExpenses $generalExpenses */
        $generalExpenses = GeneralExpenses::paginate(30);

        return view('general_expenses.index')
            ->with('generalExpenses', $generalExpenses);
    }

    /**
     * Show the form for creating a new GeneralExpenses.
     *
     * @return Response
     */
    public function create()
    {
        return view('general_expenses.create');
    }

    /**
     * Store a newly created GeneralExpenses in storage.
     *
     * @param CreateGeneralExpensesRequest $request
     *
     * @return Response
     */
    public function store(CreateGeneralExpensesRequest $request)
    {
        $input = $request->all();

        /** @var GeneralExpenses $generalExpenses */
        $generalExpenses = GeneralExpenses::create($input);

        Flash::success('General Expenses saved successfully.');

        return redirect(route('generalExpenses.index'));
    }

    /**
     * Display the specified GeneralExpenses.
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
            Flash::error('General Expenses not found');

            return redirect(route('generalExpenses.index'));
        }

        return view('general_expenses.show')->with('generalExpenses', $generalExpenses);
    }

    /**
     * Show the form for editing the specified GeneralExpenses.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var GeneralExpenses $generalExpenses */
        $generalExpenses = GeneralExpenses::find($id);

        if (empty($generalExpenses)) {
            Flash::error('General Expenses not found');

            return redirect(route('generalExpenses.index'));
        }

        return view('general_expenses.edit')->with('generalExpenses', $generalExpenses);
    }

    /**
     * Update the specified GeneralExpenses in storage.
     *
     * @param int $id
     * @param UpdateGeneralExpensesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGeneralExpensesRequest $request)
    {
        /** @var GeneralExpenses $generalExpenses */
        $generalExpenses = GeneralExpenses::find($id);

        if (empty($generalExpenses)) {
            Flash::error('General Expenses not found');

            return redirect(route('generalExpenses.index'));
        }

        $generalExpenses->fill($request->all());
        $generalExpenses->save();

        Flash::success('General Expenses updated successfully.');

        return redirect(route('generalExpenses.index'));
    }

    /**
     * Remove the specified GeneralExpenses from storage.
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
            Flash::error('General Expenses not found');

            return redirect(route('generalExpenses.index'));
        }

        $generalExpenses->delete();

        Flash::success('General Expenses deleted successfully.');

        return redirect(route('generalExpenses.index'));
    }
}
