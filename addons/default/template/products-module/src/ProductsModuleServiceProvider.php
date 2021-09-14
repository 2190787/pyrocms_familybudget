<?php namespace Template\ProductsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Illuminate\Routing\Router;

class ProductsModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/products/productscharacteristics'           => 'Template\ProductsModule\Http\Controller\Admin\ProductscharacteristicsController@index',
        'admin/products/productscharacteristics/create'    => 'Template\ProductsModule\Http\Controller\Admin\ProductscharacteristicsController@create',
        'admin/products/productscharacteristics/edit/{id}' => 'Template\ProductsModule\Http\Controller\Admin\ProductscharacteristicsController@edit',
        'admin/products/characteristics'           => 'Template\ProductsModule\Http\Controller\Admin\CharacteristicsController@index',
        'admin/products/characteristics/create'    => 'Template\ProductsModule\Http\Controller\Admin\CharacteristicsController@create',
        'admin/products/characteristics/edit/{id}' => 'Template\ProductsModule\Http\Controller\Admin\CharacteristicsController@edit',
        'admin/products/brands'           => 'Template\ProductsModule\Http\Controller\Admin\BrandsController@index',
        'admin/products/brands/create'    => 'Template\ProductsModule\Http\Controller\Admin\BrandsController@create',
        'admin/products/brands/edit/{id}' => 'Template\ProductsModule\Http\Controller\Admin\BrandsController@edit',
        'admin/products/categories'           => 'Template\ProductsModule\Http\Controller\Admin\CategoriesController@index',
        'admin/products/categories/create'    => 'Template\ProductsModule\Http\Controller\Admin\CategoriesController@create',
        'admin/products/categories/edit/{id}' => 'Template\ProductsModule\Http\Controller\Admin\CategoriesController@edit',
        'admin/products'           => 'Template\ProductsModule\Http\Controller\Admin\ProductsController@index',
        'admin/products/create'    => 'Template\ProductsModule\Http\Controller\Admin\ProductsController@create',
        'admin/products/edit/{id}' => 'Template\ProductsModule\Http\Controller\Admin\ProductsController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Template\ProductsModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Template\ProductsModule\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Template\ProductsModule\Event\ExampleEvent::class => [
        //    Template\ProductsModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Template\ProductsModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        ProductsProductscharacteristicsEntryModel::class => ProductscharacteristicModel::class,
        ProductsCharacteristicsEntryModel::class => CharacteristicModel::class,
        ProductsBrandsEntryModel::class => BrandModel::class,
        ProductsCategoriesEntryModel::class => CategoryModel::class,
        ProductsProductsEntryModel::class => ProductModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        ProductscharacteristicRepositoryInterface::class => ProductscharacteristicRepository::class,
        CharacteristicRepositoryInterface::class => CharacteristicRepository::class,
        BrandRepositoryInterface::class => BrandRepository::class,
        CategoryRepositoryInterface::class => CategoryRepository::class,
        ProductRepositoryInterface::class => ProductRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
