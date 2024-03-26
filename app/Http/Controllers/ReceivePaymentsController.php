<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReceivePaymentsRequest;
use App\Http\Requests\UpdateReceivePaymentsRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\ReceivePayments;
use Illuminate\Http\Request;
use Flash;
use Response;

class ReceivePaymentsController extends AppBaseController
{
    /**
     * Display a listing of the ReceivePayments.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var ReceivePayments $receivePayments */
        $receivePayments = ReceivePayments::paginate(10);

        return view('receive_payments.index')
            ->with('receivePayments', $receivePayments);
    }

    /**
     * Show the form for creating a new ReceivePayments.
     *
     * @return Response
     */
    public function create()
    {
        return view('receive_payments.create');
    }

    /**
     * Store a newly created ReceivePayments in storage.
     *
     * @param CreateReceivePaymentsRequest $request
     *
     * @return Response
     */
    public function store(CreateReceivePaymentsRequest $request)
    {
        $input = $request->all();

        /** @var ReceivePayments $receivePayments */
        $receivePayments = ReceivePayments::create($input);

        Flash::success('Receive Payments saved successfully.');

        return redirect(route('receivePayments.index'));
    }

    /**
     * Display the specified ReceivePayments.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ReceivePayments $receivePayments */
        $receivePayments = ReceivePayments::find($id);

        if (empty($receivePayments)) {
            Flash::error('Receive Payments not found');

            return redirect(route('receivePayments.index'));
        }

        return view('receive_payments.show')->with('receivePayments', $receivePayments);
    }

    /**
     * Show the form for editing the specified ReceivePayments.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var ReceivePayments $receivePayments */
        $receivePayments = ReceivePayments::find($id);

        if (empty($receivePayments)) {
            Flash::error('Receive Payments not found');

            return redirect(route('receivePayments.index'));
        }

        return view('receive_payments.edit')->with('receivePayments', $receivePayments);
    }

    /**
     * Update the specified ReceivePayments in storage.
     *
     * @param int $id
     * @param UpdateReceivePaymentsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReceivePaymentsRequest $request)
    {
        /** @var ReceivePayments $receivePayments */
        $receivePayments = ReceivePayments::find($id);

        if (empty($receivePayments)) {
            Flash::error('Receive Payments not found');

            return redirect(route('receivePayments.index'));
        }

        $receivePayments->fill($request->all());
        $receivePayments->save();

        Flash::success('Receive Payments updated successfully.');

        return redirect(route('receivePayments.index'));
    }

    /**
     * Remove the specified ReceivePayments from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ReceivePayments $receivePayments */
        $receivePayments = ReceivePayments::find($id);

        if (empty($receivePayments)) {
            Flash::error('Receive Payments not found');

            return redirect(route('receivePayments.index'));
        }

        $receivePayments->delete();

        Flash::success('Receive Payments deleted successfully.');

        return redirect(route('receivePayments.index'));
    }
}
