<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class TemplateModuleNewsCreateNewsFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'title' => [
            'type' => 'anomaly.field_type.text',
        ],
        'slug' => [
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'title',
                'type' => '_'
            ],
        ],
        'content' => [
            'type' => 'anomaly.field_type.wysiwyg',
            "config" => [
                "default_value" => null,
                "configuration" => "default",
                "line_breaks"   => false,
                "sync"          => true,
                "height"        => 500,
                "buttons"       => [],
                "plugins"       => [],
            ]
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
        "date" => [
            "type"   => "anomaly.field_type.datetime",
            "config" => [
                "default_value" => null,
                "mode"          => "datetime",
                "date_format"   => "j F, Y",
                "year_range"    => "-50:+50",
                "time_format"   => "g:i A",
                "timezone"      => null,
                "picker"        => true,
                "step"          => 15,
                "min"           => null,
                "max"           => null
            ]
        ],
        'active' => [
            'type' => 'anomaly.field_type.boolean',
        ],
    ];
}
