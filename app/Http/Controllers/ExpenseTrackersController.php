<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExpenseTrackersRequest;
use App\Http\Requests\UpdateExpenseTrackersRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\ExpenseTrackers;
use Illuminate\Http\Request;
use Flash;
use Response;

class ExpenseTrackersController extends AppBaseController
{
    /**
     * Display a listing of the ExpenseTrackers.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var ExpenseTrackers $expenseTrackers */
        $expenseTrackers = ExpenseTrackers::paginate(10);

        return view('expense_trackers.index')
            ->with('expenseTrackers', $expenseTrackers);
    }

    /**
     * Show the form for creating a new ExpenseTrackers.
     *
     * @return Response
     */
    public function create()
    {
        return view('expense_trackers.create');
    }

    /**
     * Store a newly created ExpenseTrackers in storage.
     *
     * @param CreateExpenseTrackersRequest $request
     *
     * @return Response
     */
    public function store(CreateExpenseTrackersRequest $request)
    {
        $input = $request->all();

        /** @var ExpenseTrackers $expenseTrackers */
        $expenseTrackers = ExpenseTrackers::create($input);

        Flash::success('Expense Trackers saved successfully.');

        return redirect(route('expenseTrackers.index'));
    }

    /**
     * Display the specified ExpenseTrackers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ExpenseTrackers $expenseTrackers */
        $expenseTrackers = ExpenseTrackers::find($id);

        if (empty($expenseTrackers)) {
            Flash::error('Expense Trackers not found');

            return redirect(route('expenseTrackers.index'));
        }

        return view('expense_trackers.show')->with('expenseTrackers', $expenseTrackers);
    }

    /**
     * Show the form for editing the specified ExpenseTrackers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var ExpenseTrackers $expenseTrackers */
        $expenseTrackers = ExpenseTrackers::find($id);

        if (empty($expenseTrackers)) {
            Flash::error('Expense Trackers not found');

            return redirect(route('expenseTrackers.index'));
        }

        return view('expense_trackers.edit')->with('expenseTrackers', $expenseTrackers);
    }

    /**
     * Update the specified ExpenseTrackers in storage.
     *
     * @param int $id
     * @param UpdateExpenseTrackersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExpenseTrackersRequest $request)
    {
        /** @var ExpenseTrackers $expenseTrackers */
        $expenseTrackers = ExpenseTrackers::find($id);

        if (empty($expenseTrackers)) {
            Flash::error('Expense Trackers not found');

            return redirect(route('expenseTrackers.index'));
        }

        $expenseTrackers->fill($request->all());
        $expenseTrackers->save();

        Flash::success('Expense Trackers updated successfully.');

        return redirect(route('expenseTrackers.index'));
    }

    /**
     * Remove the specified ExpenseTrackers from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ExpenseTrackers $expenseTrackers */
        $expenseTrackers = ExpenseTrackers::find($id);

        if (empty($expenseTrackers)) {
            Flash::error('Expense Trackers not found');

            return redirect(route('expenseTrackers.index'));
        }

        $expenseTrackers->delete();

        Flash::success('Expense Trackers deleted successfully.');

        return redirect(route('expenseTrackers.index'));
    }
}
