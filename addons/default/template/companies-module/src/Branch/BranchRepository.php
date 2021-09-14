<?php namespace Template\CompaniesModule\Branch;

use Template\CompaniesModule\Branch\Contract\BranchRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class BranchRepository extends EntryRepository implements BranchRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var BranchModel
     */
    protected $model;

    /**
     * Create a new BranchRepository instance.
     *
     * @param BranchModel $model
     */
    public function __construct(BranchModel $model)
    {
        $this->model = $model;
    }
}
