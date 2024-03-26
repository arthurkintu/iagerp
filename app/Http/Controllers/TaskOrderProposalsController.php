<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskOrderProposalsRequest;
use App\Http\Requests\UpdateTaskOrderProposalsRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\TaskOrderProposals;
use Illuminate\Http\Request;
use Flash;
use Response;

class TaskOrderProposalsController extends AppBaseController
{
    /**
     * Display a listing of the TaskOrderProposals.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var TaskOrderProposals $taskOrderProposals */
        $taskOrderProposals = TaskOrderProposals::paginate(10);

        return view('task_order_proposals.index')
            ->with('taskOrderProposals', $taskOrderProposals);
    }

    /**
     * Show the form for creating a new TaskOrderProposals.
     *
     * @return Response
     */
    public function create()
    {
        return view('task_order_proposals.create');
    }

    /**
     * Store a newly created TaskOrderProposals in storage.
     *
     * @param CreateTaskOrderProposalsRequest $request
     *
     * @return Response
     */
    public function store(CreateTaskOrderProposalsRequest $request)
    {
        $input = $request->all();

        /** @var TaskOrderProposals $taskOrderProposals */
        $taskOrderProposals = TaskOrderProposals::create($input);

        Flash::success('Task Order Proposals saved successfully.');

        return redirect(route('taskOrderProposals.index'));
    }

    /**
     * Display the specified TaskOrderProposals.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var TaskOrderProposals $taskOrderProposals */
        $taskOrderProposals = TaskOrderProposals::find($id);

        if (empty($taskOrderProposals)) {
            Flash::error('Task Order Proposals not found');

            return redirect(route('taskOrderProposals.index'));
        }

        return view('task_order_proposals.show')->with('taskOrderProposals', $taskOrderProposals);
    }

    /**
     * Show the form for editing the specified TaskOrderProposals.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var TaskOrderProposals $taskOrderProposals */
        $taskOrderProposals = TaskOrderProposals::find($id);

        if (empty($taskOrderProposals)) {
            Flash::error('Task Order Proposals not found');

            return redirect(route('taskOrderProposals.index'));
        }

        return view('task_order_proposals.edit')->with('taskOrderProposals', $taskOrderProposals);
    }

    /**
     * Update the specified TaskOrderProposals in storage.
     *
     * @param int $id
     * @param UpdateTaskOrderProposalsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTaskOrderProposalsRequest $request)
    {
        /** @var TaskOrderProposals $taskOrderProposals */
        $taskOrderProposals = TaskOrderProposals::find($id);

        if (empty($taskOrderProposals)) {
            Flash::error('Task Order Proposals not found');

            return redirect(route('taskOrderProposals.index'));
        }

        $taskOrderProposals->fill($request->all());
        $taskOrderProposals->save();

        Flash::success('Task Order Proposals updated successfully.');

        return redirect(route('taskOrderProposals.index'));
    }

    /**
     * Remove the specified TaskOrderProposals from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var TaskOrderProposals $taskOrderProposals */
        $taskOrderProposals = TaskOrderProposals::find($id);

        if (empty($taskOrderProposals)) {
            Flash::error('Task Order Proposals not found');

            return redirect(route('taskOrderProposals.index'));
        }

        $taskOrderProposals->delete();

        Flash::success('Task Order Proposals deleted successfully.');

        return redirect(route('taskOrderProposals.index'));
    }
}
