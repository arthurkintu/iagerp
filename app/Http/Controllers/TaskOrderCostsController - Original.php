<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskOrderCostsRequest;
use App\Http\Requests\UpdateTaskOrderCostsRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\TaskOrderCosts;
use Illuminate\Http\Request;
use Flash;
use Response;

class TaskOrderCostsController extends AppBaseController
{
    /**
     * Display a listing of the TaskOrderCosts.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var TaskOrderCosts $taskOrderCosts */
        $taskOrderCosts = TaskOrderCosts::paginate(25);

        return view('task_order_costs.index')
            ->with('taskOrderCosts', $taskOrderCosts);
    }

    /**
     * Show the form for creating a new TaskOrderCosts.
     *
     * @return Response
     */
    public function create()
    {
        return view('task_order_costs.create');
    }

    /**
     * Store a newly created TaskOrderCosts in storage.
     *
     * @param CreateTaskOrderCostsRequest $request
     *
     * @return Response
     */
    public function store(CreateTaskOrderCostsRequest $request)
    {
        $input = $request->all();

        /** @var TaskOrderCosts $taskOrderCosts */
        $taskOrderCosts = TaskOrderCosts::create($input);

        Flash::success('Task Order Costs saved successfully.');

        return redirect(route('taskOrderCosts.index'));
    }

    /**
     * Display the specified TaskOrderCosts.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var TaskOrderCosts $taskOrderCosts */
        $taskOrderCosts = TaskOrderCosts::find($id);

        if (empty($taskOrderCosts)) {
            Flash::error('Task Order Costs not found');

            return redirect(route('taskOrderCosts.index'));
        }

        return view('task_order_costs.show')->with('taskOrderCosts', $taskOrderCosts);
    }

    /**
     * Show the form for editing the specified TaskOrderCosts.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var TaskOrderCosts $taskOrderCosts */
        $taskOrderCosts = TaskOrderCosts::find($id);

        if (empty($taskOrderCosts)) {
            Flash::error('Task Order Costs not found');

            return redirect(route('taskOrderCosts.index'));
        }

        return view('task_order_costs.edit')->with('taskOrderCosts', $taskOrderCosts);
    }

    /**
     * Update the specified TaskOrderCosts in storage.
     *
     * @param int $id
     * @param UpdateTaskOrderCostsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTaskOrderCostsRequest $request)
    {
        /** @var TaskOrderCosts $taskOrderCosts */
        $taskOrderCosts = TaskOrderCosts::find($id);

        if (empty($taskOrderCosts)) {
            Flash::error('Task Order Costs not found');

            return redirect(route('taskOrderCosts.index'));
        }

        $taskOrderCosts->fill($request->all());
        $taskOrderCosts->save();

        Flash::success('Task Order Costs updated successfully.');

        return redirect(route('taskOrderCosts.index'));
    }

    /**
     * Remove the specified TaskOrderCosts from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var TaskOrderCosts $taskOrderCosts */
        $taskOrderCosts = TaskOrderCosts::find($id);

        if (empty($taskOrderCosts)) {
            Flash::error('Task Order Costs not found');

            return redirect(route('taskOrderCosts.index'));
        }

        $taskOrderCosts->delete();

        Flash::success('Task Order Costs deleted successfully.');

        return redirect(route('taskOrderCosts.index'));
    }
}
