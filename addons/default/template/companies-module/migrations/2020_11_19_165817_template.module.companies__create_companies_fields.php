<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Faker\Provider\ar_JO\Company;
use Template\CompaniesModule\Company\CompanyModel;
use Template\CompaniesModule\SocialmediaLink\SocialmediaLinkModel;

class TemplateModuleCompaniesCreateCompaniesFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [

        /**
         * Fields
         */
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
        'social_name' => [
            'type' => 'anomaly.field_type.text',
        ],
        'comercial_name' => [
            'type' => 'anomaly.field_type.text',
        ],
        'fiscal_number' => [
            'type' => 'anomaly.field_type.text',
        ],
        'privacy_policy_title' => [
            'type' => 'anomaly.field_type.text',
        ],
        'privacy_policy' => [
            'type' => 'anomaly.field_type.textarea',
        ],
        'quality_policy_title' => [
            'type' => 'anomaly.field_type.text',
        ],
        'quality_policy' => [
            'type' => 'anomaly.field_type.textarea',
        ],
        'institutional_message_title' => [
            'type' => 'anomaly.field_type.text',
        ],
        'institutional_message' => [
            'type' => 'anomaly.field_type.textarea',
        ],
        'about_title' => [
            'type' => 'anomaly.field_type.text',
        ],
        'about' => [
            'type'  => 'anomaly.field_type.textarea',
        ],
        'vision_title' => [
            'type' => 'anomaly.field_type.text',
        ],
        'vision' => [
            'type'  => 'anomaly.field_type.textarea',
        ],
        'mission_title' => [
            'type' => 'anomaly.field_type.text',
        ],
        'mission' => [
            'type'  => 'anomaly.field_type.textarea',
        ],
        'values_title' => [
            'type' => 'anomaly.field_type.text',
        ],
        'values' => [
            'type'  => 'anomaly.field_type.textarea',
        ],

        'images' => [
            'type' => 'anomaly.field_type.files',
            'config' => [
                "default_value" => null,
                "folders"       => ["images"],
                "max"           => 5,
                "mode"          => "default",
            ]
        ],
        "image" => [
            "type"   => "anomaly.field_type.file",
            "config" => [
                "default_value" => null,
                "folders"       => ["images"],
                "max"           => 5,
                "mode"          => "default",
            ]    
        ],
        'active' => [
            'type' => 'anomaly.field_type.boolean',
        ],
        'address_1' => [
            'type' => 'anomaly.field_type.text',
        ],
        'address_2' => [
            'type' => 'anomaly.field_type.text',
        ],
        "city" => [
            "type"   => "anomaly.field_type.text",
        ],
        'postal_code' => [
            'type' => 'anomaly.field_type.text',
        ],
        'phone' => [
            'type' => 'anomaly.field_type.text',
        ],
        'fax' => [
            'type' => 'anomaly.field_type.text',
        ],
        "email" => [
            "type"   => "anomaly.field_type.email",
            "config" => [
                "default_value" => null
            ]
        ],
        "url" => [
            "type"   => "anomaly.field_type.url",
            "config" => [
                "default_value" => null,
            ]
        ],
        "icon" => [
            "type"   => "anomaly.field_type.icon",
            "config" => [
                "icon_sets" => [
                    "fontawesome",
                ],
                "mode" => "search",
            ]
        ],
        /**
         * Relationships
         */
        'companies' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'title_name' => 'name',
                'related' => CompanyModel::class
            ]
        ],
        'social_media_links' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'title_name' => 'name',
                'related' => SocialmediaLinkModel::class
            ]
        ],
    ];
}
