<?php

use Anomaly\PostsModule\Category\CategoryModel;
use Anomaly\Streams\Platform\Database\Migration\Migration;
use Demo\Product;
use Template\ProductsModule\Brand\BrandModel;
use Template\ProductsModule\Characteristic\CharacteristicModel;
use Template\ProductsModule\Product\ProductModel;

class TemplateModuleProductsCreateProductsFields extends Migration
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
        'description' => [
            'type' => 'anomaly.field_type.textarea',
        ],
        'slug' => [
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name',
                'type' => '_'
            ],
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
        'value' => [
            'type' => 'anomaly.field_type.text',
        ],
        /**
         * Relationships
         */
        'products' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'title_name' => 'name',
                'related' => ProductModel::class,
            ]
        ],
        'categories' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'title_name' => 'name',
                'related' => CategoryModel::class,
                'mode' => 'lookup',
            ]
        ],
        'parent_categories' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'title_name' => 'name',
                'related' => CategoryModel::class,
            ]
        ],
        'brands' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'title_name' => 'name',     
                'related' => BrandModel::class,
            ]
        ],
        'characteristics' => [
            "type"   => "anomaly.field_type.relationship",
            'config' => [
                'title_name' => 'name',
                'related' => CharacteristicModel::class
            ]
        ],
    ];
}
