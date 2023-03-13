<?php

namespace App\Http\Controllers;

use App\Models\InOutFoget;
use App\Repositories\TimesheetRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InOutForgetController extends Controller
{
    protected $timesheetRepository;
    public function __construct(TimesheetRepository $timesheetRepository) {
        $this->timesheetRepository = $timesheetRepository;
    }
    public function create(Request $request) {
        $date = $request->get('date', date('Y-m-d'));
        $date = Carbon::parse($date)->format('Y-m-d');
        $timesheet = $this->timesheetRepository->findByConditions(['record_date'=> $date]);
        $data['timesheet'] = $timesheet;
        $inOutForget = new InOutFoget();
        $inOutForget->date = $date;
        if($timesheet) {
            $inOutForget->in_time = $timesheet->in_time;
            $inOutForget->out_time = $timesheet->out_time;
        }
        $data['inOutForget'] = $inOutForget;

        return view('in_out_forgets.create', $data);
    }
}
