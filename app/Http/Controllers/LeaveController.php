<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLeaveRequest;
use App\Http\Requests\UpdateLeaveRequest;
use App\Repositories\LeaveRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LeaveController extends AppBaseController
{
    /** @var LeaveRepository $leaveRepository*/
    private $leaveRepository;

    public function __construct(LeaveRepository $leaveRepo)
    {
        $this->leaveRepository = $leaveRepo;
    }

    /**
     * Display a listing of the Leave.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $leaves = $this->leaveRepository->all();

        return view('leaves.index')
            ->with('leaves', $leaves);
    }

    /**
     * Show the form for creating a new Leave.
     *
     * @return Response
     */
    public function create()
    {
        return view('leaves.create');
    }

    /**
     * Store a newly created Leave in storage.
     *
     * @param CreateLeaveRequest $request
     *
     * @return Response
     */
    public function store(CreateLeaveRequest $request)
    {
        $input = $request->all();

        $leave = $this->leaveRepository->create($input);

        Flash::success('Leave saved successfully.');

        return redirect(route('leaves.index'));
    }

    /**
     * Display the specified Leave.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $leave = $this->leaveRepository->find($id);

        if (empty($leave)) {
            Flash::error('Leave not found');

            return redirect(route('leaves.index'));
        }

        return view('leaves.show')->with('leave', $leave);
    }

    /**
     * Show the form for editing the specified Leave.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $leave = $this->leaveRepository->find($id);

        if (empty($leave)) {
            Flash::error('Leave not found');

            return redirect(route('leaves.index'));
        }

        return view('leaves.edit')->with('leave', $leave);
    }

    /**
     * Update the specified Leave in storage.
     *
     * @param int $id
     * @param UpdateLeaveRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLeaveRequest $request)
    {
        $leave = $this->leaveRepository->find($id);

        if (empty($leave)) {
            Flash::error('Leave not found');

            return redirect(route('leaves.index'));
        }

        $leave = $this->leaveRepository->update($request->all(), $id);

        Flash::success('Leave updated successfully.');

        return redirect(route('leaves.index'));
    }

    /**
     * Remove the specified Leave from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $leave = $this->leaveRepository->find($id);

        if (empty($leave)) {
            Flash::error('Leave not found');

            return redirect(route('leaves.index'));
        }

        $this->leaveRepository->delete($id);

        Flash::success('Leave deleted successfully.');

        return redirect(route('leaves.index'));
    }
}
