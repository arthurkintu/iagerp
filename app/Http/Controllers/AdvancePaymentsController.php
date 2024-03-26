<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdvancePaymentsRequest;
use App\Http\Requests\UpdateAdvancePaymentsRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\AdvancePayments;
use Illuminate\Http\Request;
use Flash;
use Response;

class AdvancePaymentsController extends AppBaseController
{
    /**
     * Display a listing of the AdvancePayments.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var AdvancePayments $advancePayments */
        $advancePayments = AdvancePayments::paginate(25);

        return view('advance_payments.index')
            ->with('advancePayments', $advancePayments);
    }

    /**
     * Show the form for creating a new AdvancePayments.
     *
     * @return Response
     */
    public function create()
    {
        return view('advance_payments.create');
    }

    /**
     * Store a newly created AdvancePayments in storage.
     *
     * @param CreateAdvancePaymentsRequest $request
     *
     * @return Response
     */
    public function store(CreateAdvancePaymentsRequest $request)
    {
        $input = $request->all();

        /** @var AdvancePayments $advancePayments */
        $advancePayments = AdvancePayments::create($input);

        Flash::success('Advance Payments saved successfully.');

        return redirect(route('advancePayments.index'));
    }

    /**
     * Display the specified AdvancePayments.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var AdvancePayments $advancePayments */
        $advancePayments = AdvancePayments::find($id);

        if (empty($advancePayments)) {
            Flash::error('Advance Payments not found');

            return redirect(route('advancePayments.index'));
        }

        return view('advance_payments.show')->with('advancePayments', $advancePayments);
    }

    /**
     * Show the form for editing the specified AdvancePayments.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var AdvancePayments $advancePayments */
        $advancePayments = AdvancePayments::find($id);

        if (empty($advancePayments)) {
            Flash::error('Advance Payments not found');

            return redirect(route('advancePayments.index'));
        }

        return view('advance_payments.edit')->with('advancePayments', $advancePayments);
    }

    /**
     * Update the specified AdvancePayments in storage.
     *
     * @param int $id
     * @param UpdateAdvancePaymentsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdvancePaymentsRequest $request)
    {
        /** @var AdvancePayments $advancePayments */
        $advancePayments = AdvancePayments::find($id);

        if (empty($advancePayments)) {
            Flash::error('Advance Payments not found');

            return redirect(route('advancePayments.index'));
        }

        $advancePayments->fill($request->all());
        $advancePayments->save();

        Flash::success('Advance Payments updated successfully.');

        return redirect(route('advancePayments.index'));
    }

    /**
     * Remove the specified AdvancePayments from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var AdvancePayments $advancePayments */
        $advancePayments = AdvancePayments::find($id);

        if (empty($advancePayments)) {
            Flash::error('Advance Payments not found');

            return redirect(route('advancePayments.index'));
        }

        $advancePayments->delete();

        Flash::success('Advance Payments deleted successfully.');

        return redirect(route('advancePayments.index'));
    }
}
