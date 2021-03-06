<?php namespace Template\ServicesModule\Service;

use Template\ServicesModule\Service\Contract\ServiceRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class ServiceRepository extends EntryRepository implements ServiceRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var ServiceModel
     */
    protected $model;

    /**
     * Create a new ServiceRepository instance.
     *
     * @param ServiceModel $model
     */
    public function __construct(ServiceModel $model)
    {
        $this->model = $model;
    }
}
