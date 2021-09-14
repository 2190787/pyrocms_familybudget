<?php namespace Template\CompaniesModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Illuminate\Routing\Router;

class CompaniesModuleServiceProvider extends AddonServiceProvider
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
        'admin/companies'           => 'Template\CompaniesModule\Http\Controller\Admin\CompaniesController@index',
        'admin/companies/create'    => 'Template\CompaniesModule\Http\Controller\Admin\CompaniesController@create',
        'admin/companies/edit/{id}' => 'Template\CompaniesModule\Http\Controller\Admin\CompaniesController@edit',
        'admin/companies/branchs'           => 'Template\CompaniesModule\Http\Controller\Admin\BranchsController@index',
        'admin/companies/branchs/create'    => 'Template\CompaniesModule\Http\Controller\Admin\BranchsController@create',
        'admin/companies/branchs/edit/{id}' => 'Template\CompaniesModule\Http\Controller\Admin\BranchsController@edit',
        'admin/companies/socialmedia_links'           => 'Template\CompaniesModule\Http\Controller\Admin\SocialmediaLinksController@index',
        'admin/companies/socialmedia_links/create'    => 'Template\CompaniesModule\Http\Controller\Admin\SocialmediaLinksController@create',
        'admin/companies/socialmedia_links/edit/{id}' => 'Template\CompaniesModule\Http\Controller\Admin\SocialmediaLinksController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Template\CompaniesModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Template\CompaniesModule\Http\Middleware\ExampleMiddleware::class,
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
        //Template\CompaniesModule\Event\ExampleEvent::class => [
        //    Template\CompaniesModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Template\CompaniesModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        CompaniesCompaniesEntryModel::class => CompanyModel::class,
        CompaniesBranchsEntryModel::class => BranchModel::class,
        CompaniesSocialmediaLinksEntryModel::class => SocialmediaLinkModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        CompanyRepositoryInterface::class => CompanyRepository::class,
        BranchRepositoryInterface::class => BranchRepository::class,
        SocialmediaLinkRepositoryInterface::class => SocialmediaLinkRepository::class,
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
