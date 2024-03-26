<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGRNRequest;
use App\Http\Requests\UpdateGRNRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\GRN;
use Illuminate\Http\Request;
use Flash;
use Response;

class GRNController extends AppBaseController
{
    /**
     * Display a listing of the GRN.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var GRN $gRNS */
        $gRNS = GRN::paginate(30);

        return view('g_r_n_s.index')
            ->with('gRNS', $gRNS);
    }

    /**
     * Show the form for creating a new GRN.
     *
     * @return Response
     */
    public function create()
    {
        return view('g_r_n_s.create');
    }

    /**
     * Store a newly created GRN in storage.
     *
     * @param CreateGRNRequest $request
     *
     * @return Response
     */
    public function store(CreateGRNRequest $request)
    {
        $input = $request->all();

        /** @var GRN $gRN */
        $gRN = GRN::create($input);

        Flash::success('G R N saved successfully.');

        return redirect(route('gRNS.index'));
    }

    /**
     * Display the specified GRN.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var GRN $gRN */
        $gRN = GRN::find($id);

        if (empty($gRN)) {
            Flash::error('G R N not found');

            return redirect(route('gRNS.index'));
        }

        return view('g_r_n_s.show')->with('gRN', $gRN);
    }

    /**
     * Show the form for editing the specified GRN.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var GRN $gRN */
        $gRN = GRN::find($id);

        if (empty($gRN)) {
            Flash::error('G R N not found');

            return redirect(route('gRNS.index'));
        }

        return view('g_r_n_s.edit')->with('gRN', $gRN);
    }

    /**
     * Update the specified GRN in storage.
     *
     * @param int $id
     * @param UpdateGRNRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGRNRequest $request)
    {
        /** @var GRN $gRN */
        $gRN = GRN::find($id);

        if (empty($gRN)) {
            Flash::error('G R N not found');

            return redirect(route('gRNS.index'));
        }

        $gRN->fill($request->all());
        $gRN->save();

        Flash::success('G R N updated successfully.');

        return redirect(route('gRNS.index'));
    }

    /**
     * Remove the specified GRN from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var GRN $gRN */
        $gRN = GRN::find($id);

        if (empty($gRN)) {
            Flash::error('G R N not found');

            return redirect(route('gRNS.index'));
        }

        $gRN->delete();

        Flash::success('G R N deleted successfully.');

        return redirect(route('gRNS.index'));
    }
}
