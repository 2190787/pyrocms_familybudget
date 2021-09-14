<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class TemplateModuleServicesAddFieldOnhome extends Migration
{

        /**
     * Prevent deleting on rollback.
     */
    protected $delete = false;

    /**
     * Any additional information will
     * be updated. Slug helps find
     * the stream to work with.
     */
    protected $stream = [
        'slug' => 'services',
    ];

    /**
     * This field will be added.
     */
    protected $fields = [
        "on_home" => [
            "type"   => "anomaly.field_type.boolean",
            "config" => [
                "default_value" => false,
                "on_color"      => "success",
                "off_color"     => "danger",
                "on_text"       => "YES",
                "off_text"      => "NO",
                "mode"          => "switch",
                "label"         => null,
            ]
        ]
    ];

    /**
     * These assignments will be
     * created for the stream above.
     */
    protected $assignments = [
        'on_home'        => [
        ],
    ];

}
