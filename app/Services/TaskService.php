<?php

namespace App\Services;

use App\Repositories\TaskRepository;
use Illuminate\Database\Eloquent\Model;

class TaskService extends BaseService implements TaskServiceInterface
{
    /**
     * Method __construct
     *
     * @param TaskRepository $repository [explicite description]
     *
     * @return void
     */
    public function __construct(TaskRepository $repository)
    {
        parent::__construct($repository);
    }

    public function store(array $data): Model
    {
        $data['active'] = true;
        return parent::store($data);
    }
}
