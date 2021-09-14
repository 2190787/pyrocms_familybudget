<?php namespace Template\CompaniesModule\SocialmediaLink;

use Template\CompaniesModule\SocialmediaLink\Contract\SocialmediaLinkRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class SocialmediaLinkRepository extends EntryRepository implements SocialmediaLinkRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var SocialmediaLinkModel
     */
    protected $model;

    /**
     * Create a new SocialmediaLinkRepository instance.
     *
     * @param SocialmediaLinkModel $model
     */
    public function __construct(SocialmediaLinkModel $model)
    {
        $this->model = $model;
    }
}
