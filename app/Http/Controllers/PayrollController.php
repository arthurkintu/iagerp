<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePayrollRequest;
use App\Http\Requests\UpdatePayrollRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Payroll;
use Illuminate\Http\Request;
use Flash;
use Response;

class PayrollController extends AppBaseController
{
    /**
     * Display a listing of the Payroll.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Payroll $payrolls */
        $payrolls = Payroll::paginate(25);

        return view('payrolls.index')
            ->with('payrolls', $payrolls);
    }

    /**
     * Show the form for creating a new Payroll.
     *
     * @return Response
     */
    public function create()
    {
        return view('payrolls.create');
    }

    /**
     * Store a newly created Payroll in storage.
     *
     * @param CreatePayrollRequest $request
     *
     * @return Response
     */
    public function store(CreatePayrollRequest $request)
    {
        $input = $request->all();

        /** @var Payroll $payroll */
        $payroll = Payroll::create($input);

        Flash::success('Payroll saved successfully.');

        return redirect(route('payrolls.index'));
    }

    /**
     * Display the specified Payroll.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Payroll $payroll */
        $payroll = Payroll::find($id);

        if (empty($payroll)) {
            Flash::error('Payroll not found');

            return redirect(route('payrolls.index'));
        }

        return view('payrolls.show')->with('payroll', $payroll);
    }

    /**
     * Show the form for editing the specified Payroll.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Payroll $payroll */
        $payroll = Payroll::find($id);

        if (empty($payroll)) {
            Flash::error('Payroll not found');

            return redirect(route('payrolls.index'));
        }

        return view('payrolls.edit')->with('payroll', $payroll);
    }

    /**
     * Update the specified Payroll in storage.
     *
     * @param int $id
     * @param UpdatePayrollRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePayrollRequest $request)
    {
        /** @var Payroll $payroll */
        $payroll = Payroll::find($id);

        if (empty($payroll)) {
            Flash::error('Payroll not found');

            return redirect(route('payrolls.index'));
        }

        $payroll->fill($request->all());
        $payroll->save();

        Flash::success('Payroll updated successfully.');

        return redirect(route('payrolls.index'));
    }

    /**
     * Remove the specified Payroll from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Payroll $payroll */
        $payroll = Payroll::find($id);

        if (empty($payroll)) {
            Flash::error('Payroll not found');

            return redirect(route('payrolls.index'));
        }

        $payroll->delete();

        Flash::success('Payroll deleted successfully.');

        return redirect(route('payrolls.index'));
    }
}
