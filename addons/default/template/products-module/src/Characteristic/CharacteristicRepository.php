<?php namespace Template\ProductsModule\Characteristic;

use Template\ProductsModule\Characteristic\Contract\CharacteristicRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class CharacteristicRepository extends EntryRepository implements CharacteristicRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var CharacteristicModel
     */
    protected $model;

    /**
     * Create a new CharacteristicRepository instance.
     *
     * @param CharacteristicModel $model
     */
    public function __construct(CharacteristicModel $model)
    {
        $this->model = $model;
    }
}
