<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskOrdersRequest;
use App\Http\Requests\UpdateTaskOrdersRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\TaskOrders;
use App\Models\Locations;
use App\Models\ProjectManagers;
use App\Models\Taskorderproposals;
use App\Models\SubcontractorCosts;
use Illuminate\Http\Request;
use App\Models\Contracts; // Corrected import statement for Contracts model
use Flash;
use Response;

class TaskOrdersController extends AppBaseController
{
    /**
     * Display a listing of the TaskOrders.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var TaskOrders $taskOrders */
        $taskOrders = TaskOrders::paginate(30);

        return view('task_orders.index')
            ->with('taskOrders', $taskOrders);
    }

    /**
     * Show the form for creating a new TaskOrders.
     *
     * @return Response
     */
    public function create()
    {
        // Retrieve all contracts, project managers, locations, and top numbers
        $contracts = Contracts::all();
        $projectManagers = ProjectManagers::all();
        $locations = Locations::all();
        $taskOrderProposals = TaskOrderProposals::pluck('Topnumber', 'id'); // Fetch all task order proposals
        
        // Return the create view with the fetched data
        return view('task_orders.create', compact('contracts', 'projectManagers', 'locations', 'taskOrderProposals'));
    }
    

    /**
     * Store a newly created TaskOrders in storage.
     *
     * @param CreateTaskOrdersRequest $request
     *
     * @return Response
     */
    public function store(CreateTaskOrdersRequest $request)
    {
        $input = $request->all();

        /** @var TaskOrders $taskOrders */
        $taskOrders = TaskOrders::create($input);

        Flash::success('Task Orders saved successfully.');

        return redirect(route('taskOrders.index'));
    }

    /**
     * Display the specified TaskOrders.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var TaskOrders $taskOrders */
        $taskOrders = TaskOrders::find($id);

        if (empty($taskOrders)) {
            Flash::error('Task Orders not found');

            return redirect(route('taskOrders.index'));
        }

        return view('task_orders.show')->with('taskOrders', $taskOrders);
    }

    /**
     * Show the form for editing the specified TaskOrders.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        // Retrieve the task order by its ID
        $taskOrders = TaskOrders::find($id);
    
        // Check if the task order is not found
        if (empty($taskOrders)) {
            // If not found, display an error message and redirect
            Flash::error('Task Order not found');
            return redirect(route('taskOrders.index'));
        }
    
        // Retrieve any additional data needed for editing (e.g., contracts, project managers, locations)
        $contracts = Contracts::all();
        $projectManagers = ProjectManagers::all();
        $locations = Locations::all();
        
        // Retrieve only the top numbers from the TaskOrderProposals table
        $taskOrderProposals = TaskOrderProposals::pluck('Topnumber', 'Topnumber');
    
        // Return the edit view with the task orders and related data
        return view('task_orders.edit', compact('taskOrders', 'contracts', 'projectManagers', 'locations', 'taskOrderProposals'));
    }
    
    
    

    



    /**
     * Update the specified TaskOrders in storage.
     *
     * @param int $id
     * @param UpdateTaskOrdersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTaskOrdersRequest $request)
    {
        /** @var TaskOrders $taskOrders */
        $taskOrders = TaskOrders::find($id);

        if (empty($taskOrders)) {
            Flash::error('Task Orders not found');

            return redirect(route('taskOrders.index'));
        }

        $taskOrders->fill($request->all());
        $taskOrders->save();

        Flash::success('Task Orders updated successfully.');

        return redirect(route('taskOrders.index'));
    }

    /**
     * Remove the specified TaskOrders from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var TaskOrders $taskOrders */
        $taskOrders = TaskOrders::find($id);

        if (empty($taskOrders)) {
            Flash::error('Task Orders not found');

            return redirect(route('taskOrders.index'));
        }

        $taskOrders->delete();

        Flash::success('Task Orders deleted successfully.');

        return redirect(route('taskOrders.index'));
    }



    
}
