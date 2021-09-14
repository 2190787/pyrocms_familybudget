<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class TemplateModuleCompaniesCreateCompaniesStream extends Migration
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
        'slug' => 'companies',
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
        'social_name' => [
        ],
        'comercial_name' => [
            'translatable' => true,
        ],
        'fiscal_number' => [
            'unique' => true,
        ],
        'privacy_policy_title' => [
            'translatable' => true,
        ],
        'privacy_policy' => [
            'translatable' => true,
        ],
        'quality_policy_title' => [
            'translatable' => true,
        ],
        'quality_policy' => [
            'translatable' => true,
        ],
        'institutional_message_title' => [
            'translatable' => true,
        ],
        'institutional_message' =>[
            'translatable' => true,
        ],
        'about_title' => [
            'translatable' => true,
        ],
        'about' =>[
            'translatable' => true,
        ],
        'vision_title' => [
            'translatable' => true,
        ],
        'vision' => [
            'translatable' => true,
        ],
        'mission_title' => [
            'translatable' => true,
        ],
        'mission' => [
            'translatable' => true,
        ],
        'values_title' => [
            'translatable' => true,
        ],
        'values' => [
            'translatable' => true,
        ],
        'images' => [
        ],
        'active' => [
            //'required' => true,
        ],
    ];
}
