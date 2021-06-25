<?php
namespace DTApi\Repository;

use DTApi\Models\User;

/**
 * Class UserRepository
 * @package DTApi\Repository
 */
class UserRepository extends BaseRepository
{

    /**
     * @param User $model
     */
    function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function getUserById($id) {
        return $this->model->find($id);
    }
}