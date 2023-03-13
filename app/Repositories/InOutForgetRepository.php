<?php

namespace App\Repositories;

use App\Models\InOutForget;
use App\Repositories\BaseRepository;

/**
 * Class InOutForgetRepository
 * @package App\Repositories
 */

class InOutForgetRepository extends BaseRepository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'date',

    ];

    public function model()
    {
        return InOutForget::class;
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

        return $query->with('user')->orderBy('date', 'DESC')->paginate($limit);
    }
}