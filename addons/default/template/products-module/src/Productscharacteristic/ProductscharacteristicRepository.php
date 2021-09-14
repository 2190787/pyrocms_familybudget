<?php namespace Template\ProductsModule\Productscharacteristic;

use Template\ProductsModule\Productscharacteristic\Contract\ProductscharacteristicRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class ProductscharacteristicRepository extends EntryRepository implements ProductscharacteristicRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var ProductscharacteristicModel
     */
    protected $model;

    /**
     * Create a new ProductscharacteristicRepository instance.
     *
     * @param ProductscharacteristicModel $model
     */
    public function __construct(ProductscharacteristicModel $model)
    {
        $this->model = $model;
    }
}
