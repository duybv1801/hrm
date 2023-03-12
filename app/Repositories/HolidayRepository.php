<?php

namespace App\Repositories;

use App\Models\Holiday;
use App\Repositories\BaseRepository;

/**
 * Class HolidayRepository
 * @package App\Repositories
*/

class HolidayRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
      
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
        return Holiday::class;
    }

    
    public function searchByConditions($search)
    {
        $query = $this->model;
        if (count($search)) {
            foreach ($search as $key => $value) {
                switch ($key) {
                    case 'start_date':
                        $query = $query->where('date', '>=', $value);
                        break;
                    case 'end_date':
                        $query = $query->where('date', '<=', $value);
                        break;
                    default:
                    $query = $query->where($key, $value);
                        break;
                }
            }
        }

        return $query->get();
    }
}
