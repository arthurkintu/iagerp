<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectManagersRequest;
use App\Http\Requests\UpdateProjectManagersRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\ProjectManagers;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProjectManagersController extends AppBaseController
{
    /**
     * Display a listing of the ProjectManagers.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var ProjectManagers $projectManagers */
        $projectManagers = ProjectManagers::paginate(10);

        return view('project_managers.index')
            ->with('projectManagers', $projectManagers);
    }

    /**
     * Show the form for creating a new ProjectManagers.
     *
     * @return Response
     */
    public function create()
    {
        return view('project_managers.create');
    }

    /**
     * Store a newly created ProjectManagers in storage.
     *
     * @param CreateProjectManagersRequest $request
     *
     * @return Response
     */
    public function store(CreateProjectManagersRequest $request)
    {
        $input = $request->all();

        /** @var ProjectManagers $projectManagers */
        $projectManagers = ProjectManagers::create($input);

        Flash::success('Project Managers saved successfully.');

        return redirect(route('projectManagers.index'));
    }

    /**
     * Display the specified ProjectManagers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ProjectManagers $projectManagers */
        $projectManagers = ProjectManagers::find($id);

        if (empty($projectManagers)) {
            Flash::error('Project Managers not found');

            return redirect(route('projectManagers.index'));
        }

        return view('project_managers.show')->with('projectManagers', $projectManagers);
    }

    /**
     * Show the form for editing the specified ProjectManagers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var ProjectManagers $projectManagers */
        $projectManagers = ProjectManagers::find($id);

        if (empty($projectManagers)) {
            Flash::error('Project Managers not found');

            return redirect(route('projectManagers.index'));
        }

        return view('project_managers.edit')->with('projectManagers', $projectManagers);
    }

    /**
     * Update the specified ProjectManagers in storage.
     *
     * @param int $id
     * @param UpdateProjectManagersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProjectManagersRequest $request)
    {
        /** @var ProjectManagers $projectManagers */
        $projectManagers = ProjectManagers::find($id);

        if (empty($projectManagers)) {
            Flash::error('Project Managers not found');

            return redirect(route('projectManagers.index'));
        }

        $projectManagers->fill($request->all());
        $projectManagers->save();

        Flash::success('Project Managers updated successfully.');

        return redirect(route('projectManagers.index'));
    }

    /**
     * Remove the specified ProjectManagers from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ProjectManagers $projectManagers */
        $projectManagers = ProjectManagers::find($id);

        if (empty($projectManagers)) {
            Flash::error('Project Managers not found');

            return redirect(route('projectManagers.index'));
        }

        $projectManagers->delete();

        Flash::success('Project Managers deleted successfully.');

        return redirect(route('projectManagers.index'));
    }
}
