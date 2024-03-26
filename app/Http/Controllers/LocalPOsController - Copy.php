<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLocalPOsRequest;
use App\Http\Requests\UpdateLocalPOsRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\LocalPOs;
use Illuminate\Http\Request;
use App\Models\QuotationItems;
use App\Models\TaskOrders;
use Flash;
use Response;

class LocalPOsController extends AppBaseController
{
    /**
     * Display a listing of the LocalPOs.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var LocalPOs $localPOs */
        $localPOs = LocalPOs::paginate(10);

        return view('local_p_os.index')
            ->with('localPOs', $localPOs);
    }

    /**
     * Show the form for creating a new LocalPOs.
     *
     * @return Response
     */


  public function create()
{
    $quotationItemsByTONumber = QuotationItems::select('TONumber', 'QuotationNumber', 'TotalAmount')
        ->get()
        ->groupBy('TONumber')
        ->toArray();

    return view('local_p_os.create', compact('quotationItemsByTONumber'));



}


    /**
     * Store a newly created LocalPOs in storage.
     *
     * @param CreateLocalPOsRequest $request
     *
     * @return Response
     */
    public function store(CreateLocalPOsRequest $request)
    {
        $input = $request->all();

        /** @var LocalPOs $localPOs */
        $localPOs = LocalPOs::create($input);

        Flash::success('Local P Os saved successfully.');

        return redirect(route('localPOs.index'));
    }

    /**
     * Display the specified LocalPOs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var LocalPOs $localPOs */
        $localPOs = LocalPOs::find($id);

        if (empty($localPOs)) {
            Flash::error('Local P Os not found');

            return redirect(route('localPOs.index'));
        }

        return view('local_p_os.show')->with('localPOs', $localPOs);
    }

    /**
     * Show the form for editing the specified LocalPOs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var LocalPOs $localPOs */
        $localPOs = LocalPOs::find($id);

        if (empty($localPOs)) {
            Flash::error('Local P Os not found');

            return redirect(route('localPOs.index'));
        }

        return view('local_p_os.edit')->with('localPOs', $localPOs);
    }

    /**
     * Update the specified LocalPOs in storage.
     *
     * @param int $id
     * @param UpdateLocalPOsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLocalPOsRequest $request)
    {
        /** @var LocalPOs $localPOs */
        $localPOs = LocalPOs::find($id);

        if (empty($localPOs)) {
            Flash::error('Local P Os not found');

            return redirect(route('localPOs.index'));
        }

        $localPOs->fill($request->all());
        $localPOs->save();

        Flash::success('Local P Os updated successfully.');

        return redirect(route('localPOs.index'));
    }

    /**
     * Remove the specified LocalPOs from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var LocalPOs $localPOs */
        $localPOs = LocalPOs::find($id);

        if (empty($localPOs)) {
            Flash::error('Local P Os not found');

            return redirect(route('localPOs.index'));
        }

        $localPOs->delete();

        Flash::success('Local P Os deleted successfully.');

        return redirect(route('localPOs.index'));
    }
}
