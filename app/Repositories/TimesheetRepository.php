<?php

namespace App\Repositories;

use App\Models\Timesheet;
use App\Repositories\BaseRepository;

/**
 * Class TimesheetRepository
 * @package App\Repositories
 */

class TimesheetRepository extends BaseRepository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'record_date',

    ];

    public function model()
    {
        return Timesheet::class;
    }
    /**
     * Get searchable fields array
     * @return array
     */
    public function getFieldsSearchable()
    {
        $this->fieldSearchable;
    }

    public function searchByConditions($search, $limit = 50)
    {
        $query = $this->model;
        if (count($search)) {
            foreach ($search as $key => $value) {
                switch ($key) {
                    case 'start_date':
                        $query = $query->where('record_date', '>=', $value);
                        break;
                    case 'end_date':
                        $query = $query->where('record_date', '<=', $value);
                        break;
                    default:
                    $query = $query->where($key, $value);
                        break;
                }
            }
        }

        return $query->with('user')->orderBy('record_date', 'DESC')->paginate($limit);
    }

    public function getWorkingHours($search) {
        $query = $this->model;
        if (count($search)) {
            foreach ($search as $key => $value) {
                switch ($key) {
                    case 'start_date':
                        $query = $query->where('record_date', '>=', $value);
                        break;
                    case 'end_date':
                        $query = $query->where('record_date', '<=', $value);
                        break;
                    default:
                    $query = $query->where($key, $value);
                        break;
                }
            }
        }

        return $query->get()->sum(function($timesheet){
            return $timesheet->working_hours + $timesheet->leave_hours;
        });
    }

    public function findByConditions($search)
    {
        $query = $this->model;
        if (count($search)) {
            foreach ($search as $key => $value) {
                switch ($key) {
                    case 'start_date':
                        $query = $query->where('record_date', '>=', $value);
                        break;
                    case 'end_date':
                        $query = $query->where('record_date', '<=', $value);
                        break;
                    default:
                        $query = $query->where($key, $value);
                        break;
                }
            }
        }

        return $query->with('user')->orderBy('record_date', 'DESC')->first();
    }
}