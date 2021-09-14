<?php namespace Template\CompaniesModule\Company;

use Template\CompaniesModule\Company\Contract\CompanyRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class CompanyRepository extends EntryRepository implements CompanyRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var CompanyModel
     */
    protected $model;

    /**
     * Create a new CompanyRepository instance.
     *
     * @param CompanyModel $model
     */
    public function __construct(CompanyModel $model)
    {
        $this->model = $model;
    }
}
