<?php namespace Template\NewsModule\News;

use Template\NewsModule\News\Contract\NewsRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class NewsRepository extends EntryRepository implements NewsRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var NewsModel
     */
    protected $model;

    /**
     * Create a new NewsRepository instance.
     *
     * @param NewsModel $model
     */
    public function __construct(NewsModel $model)
    {
        $this->model = $model;
    }
}
