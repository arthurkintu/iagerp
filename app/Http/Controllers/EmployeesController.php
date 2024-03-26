<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeesRequest;
use App\Http\Requests\UpdateEmployeesRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Employees;
use Illuminate\Http\Request;
use Flash;
use Response;
use Carbon\Carbon;

class EmployeesController extends AppBaseController
{
    /**
     * Display a listing of the Employees.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $employees = Employees::paginate(10); // Change to paginate() instead of all()
        return view('employees.index', compact('employees'));
    }



    /**
     * Show the form for creating a new Employees.
     *
     * @return Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created Employees in storage.
     *
     * @param CreateEmployeesRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeesRequest $request)
    {
        $input = $request->all();

        /** @var Employees $employees */
        $employees = Employees::create($input);

        Flash::success('Employees saved successfully.');

        return redirect(route('employees.index'));
    }

    /**
     * Display the specified Employees.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $employees = Employees::find($id);

        if (empty($employees)) {
            Flash::error('Employee not found');
            return redirect(route('employees.index'));
        }
    
        return view('employees.show', ['employees' => $employees]);
    }

    /**
     * Show the form for editing the specified Employees.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Employees $employees */
        $employees = Employees::find($id);

        if (empty($employees)) {
            Flash::error('Employees not found');

            return redirect(route('employees.index'));
        }

        return view('employees.edit')->with('employees', $employees);
    }

    /**
     * Update the specified Employees in storage.
     *
     * @param int $id
     * @param UpdateEmployeesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeesRequest $request)
    {
        /** @var Employees $employees */
        $employees = Employees::find($id);

        if (empty($employees)) {
            Flash::error('Employees not found');

            return redirect(route('employees.index'));
        }

        $employees->fill($request->all());
        $employees->save();

        Flash::success('Employees updated successfully.');

        return redirect(route('employees.index'));
    }

    /**
     * Remove the specified Employees from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Employees $employees */
        $employees = Employees::find($id);

        if (empty($employees)) {
            Flash::error('Employees not found');

            return redirect(route('employees.index'));
        }

        $employees->delete();

        Flash::success('Employees deleted successfully.');

        return redirect(route('employees.index'));
    }
}
