<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class TemplateModuleProductsCreateProductscharacteristicsStream extends Migration
{

    /**
     * This migration creates the stream.
     * It should be deleted on rollback.
     *
     * @var bool
     */
    protected $delete = true;

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'productscharacteristics',
        'title_column' => 'value',
        'translatable' => true,
        'versionable' => false,
        'trashable' => false,
        'searchable' => false,
        'sortable' => false,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        /*Relationship*/
        'products' => [
            'required' => true,
        ],
        /*Relationship*/
        'characteristics' => [
            'required' => true,
        ],
        /* Field*/
        'value' => [
            'translatable' => true,
            'required' => true,
        ],
    ];
}
