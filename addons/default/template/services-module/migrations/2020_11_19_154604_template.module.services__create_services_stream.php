<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class TemplateModuleServicesCreateServicesStream extends Migration
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
        'slug' => 'services',
        'title_column' => 'name',
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
        'name' => [
            'translatable' => true,
            'required' => true,
        ],
        'slug' => [
            'unique' => true,
            'required' => true,
        ],
        'title' => [
            'translatable' => true,
        ],
        'subtitle' => [
            'translatable' => true,
        ],
        'description' => [
            'translatable' => true,
        ],
        'images' => [
        ],
        'active' => [
        ],
    ];
}
