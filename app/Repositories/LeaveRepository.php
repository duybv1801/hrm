<?php

namespace App\Repositories;

use App\Models\Leave;
use App\Repositories\BaseRepository;

/**
 * Class LeaveRepository
 * @package App\Repositories
 * @version March 11, 2023, 4:01 pm UTC
*/

class LeaveRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'from_datetime',
        'to_datetime'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Leave::class;
    }
}
