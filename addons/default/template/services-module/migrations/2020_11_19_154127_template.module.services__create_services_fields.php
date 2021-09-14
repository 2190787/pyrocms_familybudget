<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class TemplateModuleServicesCreateServicesFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name' => [
            'type' => 'anomaly.field_type.text',
        ],
        'slug' => [
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name',
                'type' => '_'
            ],
        ],
        'title' => [
            'type' => 'anomaly.field_type.text',
        ],
        'subtitle' => [
            'type' => 'anomaly.field_type.text',
        ],
        'description' => [
            'type' => 'anomaly.field_type.textarea',
        ],
        'images' => [
            'type' => 'anomaly.field_type.files',
            'config' => [
                "default_value" => null,
                "folders"       => ["images"],
                "max"           => 2,
                "mode"          => "default",
            ]
        ],
        'active' => [
            'type' => 'anomaly.field_type.boolean',
        ],
    ];

}
